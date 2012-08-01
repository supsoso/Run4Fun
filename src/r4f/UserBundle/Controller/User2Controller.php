<?php

namespace r4f\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller
{
    
    public function indexAction()
    {
		//$doctrine = $this->getDoctrine();
        return $this->render('r4fUserBundle:User:index.html.twig');
	}
}
