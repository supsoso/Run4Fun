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
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('r4fRunnerBundle:User:index.html.twig');
    }
   
    /**
     * @Route("/users")
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
        $user = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fRunnerBundle:User')
            ->find($id)
        ;
        
        return $this->render('r4fRunnerBundle:User:select.html.twig', array(
            'id' => $id,
            'user' => $user
        ));
    }
}
