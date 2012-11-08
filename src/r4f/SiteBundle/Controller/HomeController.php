<?php
namespace r4f\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $countUsers = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fRunnerBundle:User')
            ->countUsers()
        ;

        $countCourses = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('r4fSiteBundle:Course')
            ->countCourses()
        ;

        $this->get('session')->setFlash('notice', sprintf(
            'Il y\'a actuellement <span class="badge badge-info">%d</span> runners inscrits, pour <span class="badge badge-info">%d</span> parcours !',
            $countUsers,
            $countCourses
        ));

        return array();
    }
}
