<?php

namespace r4f\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use r4f\SiteBundle\Entity\Address;

/**
 * Address controller.
 *
 */
class AddressController extends Controller
{
    /**
     * Lists all Address entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('r4fSiteBundle:Address')->findAll();

        return $this->render('r4fSiteBundle:Address:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Address entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('r4fSiteBundle:Address')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Address entity.');
        }

        return $this->render('r4fSiteBundle:Address:show.html.twig', array(
            'entity'      => $entity,
        ));
    }

}
