<?php

namespace r4f\RunnerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use r4f\RunnerBundle\Entity\Level;
use r4f\RunnerBundle\Form\LevelType;

/**
 * Level controller.
 *
 */
class LevelController extends Controller
{
    /**
     * Lists all Level entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('r4fRunnerBundle:Level')->findAll();

        return $this->render('r4fRunnerBundle:Level:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Level entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('r4fRunnerBundle:Level')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Level entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('r4fRunnerBundle:Level:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Level entity.
     *
     */
    public function newAction()
    {
        $entity = new Level();
        $form   = $this->createForm(new LevelType(), $entity);

        return $this->render('r4fRunnerBundle:Level:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Level entity.
     *
     */
    public function createAction()
    {
        $entity  = new Level();
        $request = $this->getRequest();
        $form    = $this->createForm(new LevelType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('level_show', array('id' => $entity->getId())));
            
        }

        return $this->render('r4fRunnerBundle:Level:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Level entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('r4fRunnerBundle:Level')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Level entity.');
        }

        $editForm = $this->createForm(new LevelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('r4fRunnerBundle:Level:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Level entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('r4fRunnerBundle:Level')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Level entity.');
        }

        $editForm   = $this->createForm(new LevelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('level_edit', array('id' => $id)));
        }

        return $this->render('r4fRunnerBundle:Level:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Level entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('r4fRunnerBundle:Level')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Level entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('level'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
