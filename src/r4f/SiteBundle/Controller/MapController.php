<?php

namespace r4f\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use r4f\SiteBundle\Entity\Map;

/**
 * Map controller.
 *
 */
class MapController extends Controller
{
    /**
     * Lists all Map entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('r4fSiteBundle:Map')->findAll();

        return $this->render('r4fSiteBundle:Map:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Map entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('r4fSiteBundle:Map')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Map entity.');
        }

        return $this->render('r4fSiteBundle:Map:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

}
