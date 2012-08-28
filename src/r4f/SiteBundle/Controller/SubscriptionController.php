<?php

namespace r4f\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use r4f\SiteBundle\Entity\Subscription;

/**
 * Subscription controller.
 *
 */
class SubscriptionController extends Controller
{
    /**
     * Lists all Subscription entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('r4fSiteBundle:Subscription')->findAll();

        return $this->render('r4fSiteBundle:Subscription:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Subscription entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('r4fSiteBundle:Subscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscription entity.');
        }

        return $this->render('r4fSiteBundle:Subscription:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

}
