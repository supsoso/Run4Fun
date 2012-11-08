<?php
namespace r4f\RunnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use r4f\RunnerBundle\Entity\User;
use r4f\RunnerBundle\Form\UserType;

class UserController extends Controller
{
    /**
     * @Route("/user/list")
     * @Template()
     */
    public function listAction()
    {
        $repository  = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fRunnerBundle:User')
        ;
        $users = $repository->findAll();
        
        return $this->render('r4fRunnerBundle:User:list.html.twig', array(
            'users' => $users
        ));
    }

    /**
     * @Route("/user/{id}")
     * @Template()
     */
    public function selectAction($id)
    {
        if( ! $this->get('security.context')->isGranted('ROLE_USER') )
        {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $user = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fRunnerBundle:User')
            ->find($id)
        ;

        $me = $this->container->get('security.context')->getToken()->getUser();
        $me->getId();

        if($me == $user)
        {
           $myspace = 1;
        }
        else{
          $myspace = 0;
        }

        $mycourses = $this->getDoctrine()
            ->getRepository('r4fSiteBundle:Course')
            ->MyCourses($id)
        ;

        return $this->render('r4fRunnerBundle:User:select.html.twig', array(
            'id' => $id,
            'user' => $user,
            'myspace' => $myspace,
            'me' => $me,
            'mycourses' => $mycourses
        ));
    }
}
