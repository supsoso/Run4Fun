<?php
namespace r4f\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use r4f\SiteBundle\Form\CourseType;
use r4f\SiteBundle\Form\CourseHandler;
use r4f\SiteBundle\Entity\Course;
use r4f\SiteBundle\Entity\Address;
use r4f\SiteBundle\Entity\Map;
use r4f\SiteBundle\Entity\Subscription;
use r4f\SiteBundle\Event\SubscriptionEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class AddressController extends Controller
{
    public function getStartPoint($course_id)
    {
        $address_start = $this->getDoctrine()
            ->getRepository('r4fSiteBundle:Address')
            ->getStartPoint($course_id)
        ;

        return $this->render('r4fSiteBundle:Course:list.html.twig', array(
            'address_start' => $address_start,
        ));
    }
}
