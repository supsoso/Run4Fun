<?php

namespace r4f\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use r4f\CourseBundle\Form\CourseType;
use r4f\CourseBundle\Entity\Course;
use r4f\CourseBundle\Entity\Address;
use r4f\CourseBundle\Entity\Subscription;
use r4f\CourseBundle\Event\SubscriptionEvent;

/**
 * Course controller.
 *
 */
class CourseController extends Controller
{
    /**
     * Lists all Course entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entities = $em->getRepository('r4fCourseBundle:Course')->findAll();

        return $this->render('r4fCourseBundle:Course:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Course entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entity = $em->getRepository('r4fCourseBundle:Course')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Course entity.');
        }

        return $this->render('r4fCourseBundle:Course:show.html.twig', array(
            'entity' => $entity,
        ));
    }
    
    public function listAction()
    {    
        $courses = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fCourseBundle:Course')
            ->CoursesAll()
        ;
            
        return $this->render('r4fCourseBundle:Course:list.html.twig', array(
            'courses' => $courses,
        ));
    }
    
    public function selectCourseAction($id)
    {
        $course = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fCourseBundle:Course')
            ->find($id)
        ;
        
        return $this->render('r4fCourseBundle:Course:selectCourse.html.twig', array(
            'course' => $course,
        ));
    }
    
    public function joinCourseAction($id)
    {
        $course = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fCourseBundle:Course')
            ->find($id)
        ;
        
        $user = $this->container->get('security.context')->getToken()->getUser();

        /* SERVICE */
        if($this->container->get('r4fmanager')->isCourseSubscriber($user, $course)) {
            throw $this->createNotFoundException('You are already registred at this course !');
        }
      
        $subscription = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fCourseBundle:Subscription')
            ->subscribe($user, $course)
        ;
        
        /* EVENT DISPATCHER DESACTIVATE */
        $dispatcher = $this->container->get('event_dispatcher');
        $dispatcher->dispatch('coursebundle.subscription_added', new SubscriptionEvent($subscription));

        $this->get('session')->setFlash('notice', 'Subscription OK !');
        
        return $this->render('r4fCourseBundle:Course:joinCourse.html.twig', array('course' => $course));
    }
    
    public function leaveCourseAction($id)
    {
        $course = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fCourseBundle:Course')
            ->find($id)
        ;        
        
        $user = $this->container->get('security.context')->getToken()->getUser();

        $isUnsubscribed = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fCourseBundle:Subscription')
            ->unSubscribe($user, $course)
        ;
        
        if($isUnsubscribed) {
            $this->get('session')->setFlash('notice', 'Unsubscribe done');
        } else {
             $this->get('session')->setFlash('error', 'Error occur !');
        }

        return $this->render('r4fCourseBundle:Course:leaveCourse.html.twig', array('course' => $course));
    }

    public function createCourseAction()
    {
        $course = new Course();
        $form = $this->createForm(new CourseType, $course);
        $validator = $this->get('validator');
        $liste_erreurs = $validator->validate($course);
        $request = $this->get('request');

        if( $request->getMethod() == 'POST' ) {
            $form->bindRequest($request);         

            if( $form->isValid() ) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($course);    
                $subscription = new Subscription();
                $user = $this->container->get('security.context')->getToken()->getUser();
                $subscription->setUser($user);
                $subscription->setCourse($course);
                $em->persist($subscription);    
                $em->flush();

                $this->get('session')->setFlash('notice', 'Your Course is created! & Subscription OK !');
                    
                return $this->redirect( $this->generateUrl('courses_list') );
            }
            $this->get('session')->setFlash('error', 'Error');
        }        
   
        return $this->render(
            'r4fCourseBundle:Course:createCourse.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/{id}/users")
     * @Template()
     */
    public function listUsersAction($id)
    {
        $users = $this->getDoctrine()
            ->getRepository('r4fCourseBundle:Course')
            ->getUsers($id)
        ;
        
        return array('users' => $users);
    }
    
    /**
     * @Route("/course/{id}/action")
     */
    public function userSubscriptionAction($id)
    {
        $course = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fCourseBundle:Course')
            ->find($id)
        ;

        $user = $this->container->get('security.context')->getToken()->getUser();

        /* SERVICE */
        if($this->container->get('r4fmanager')->isCourseSubscriber($user, $course)) {
            return $this->render(
                'r4fCourseBundle:Course:userCourseUnsubscribe.html.twig',
                array('course' => $course)
            );
        }
        
        return $this->render(
            'r4fCourseBundle:Course:userCourseSubscribe.html.twig',
            array('course' => $course)
        );
    }
}
