<?php

namespace r4f\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use r4f\CourseBundle\Entity\Course;

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
            'entity'      => $entity,
        ));
    }
	
    public function listAction()
    {
        return $this->render('r4fCourseBundle:Course:list.html.twig');
    }
	
    public function selectcourseAction($id)
    {
        return $this->render('r4fCourseBundle:Course:selectcourse.html.twig', array('id' => $id));
    }
	
    public function joincourseAction($id)
    {
        return $this->render('r4fCourseBundle:Course:joincourse.html.twig', array('id' => $id));
    }

	public function createcourseAction()
    {
        return $this->render('r4fCourseBundle:Course:createcourse.html.twig');
    }

}
