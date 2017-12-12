<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ftt\BackofficeBundle\Entity\Club;
use Ftt\BackofficeBundle\Form\ClubType;

/**
 * Club controller.
 *
 */
class ClubController extends Controller
{

    /**
     * Lists all Club entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities1 = $em->getRepository('FttBackofficeBundle:Club')->findAll();
        $request = $this->get('Request');
        $entities = $this->get('knp_paginator')->paginate($entities1,  $request->query->getInt('page', 1), 5);
        return $this->render('FttBackofficeBundle:Club:index.html.twig', array(
            'entities' => $entities,
        ));
    }
       public function delete2Action()
    {
        
        $id = $this->get('request')->get('id');
        $em = $this->getDoctrine()->getManager();
        $c = $em->getRepository('FttBackofficeBundle:Club')->find($id);
        $em->remove($c);
        $em->flush();

        return ($this->redirectToRoute('club'));
    }
    /**
     * Creates a new Club entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Club();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

              return ($this->redirectToRoute('club'));
        }

        return $this->render('FttBackofficeBundle:Club:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Club entity.
     *
     * @param Club $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Club $entity)
    {
        $form = $this->createForm(new ClubType(), $entity, array(
            'action' => $this->generateUrl('club_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Club entity.
     *
     */
    public function newAction()
    {
        $entity = new Club();
        $form   = $this->createCreateForm($entity);

        return $this->render('FttBackofficeBundle:Club:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Club entity.
     *
     */
  
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Club')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Club entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttBackofficeBundle:Club:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Club entity.
    *
    * @param Club $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Club $entity)
    {
        $form = $this->createForm(new ClubType(), $entity, array(
            'action' => $this->generateUrl('club_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier Club'));

        return $form;
    }
    /**
     * Edits an existing Club entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Club')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Club entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('club_edit', array('id' => $id)));
        }

        return $this->render('FttBackofficeBundle:Club:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Club entity.
     *
     */
 

        public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FttBackofficeBundle:Club')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Club entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('club'));
    }

    /**
     * Creates a form to delete a Club entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('club_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }   
    
     public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities1 = $em->getRepository('FttBackofficeBundle:Club')->findAll();
        $request = $this->get('Request');
         $entities = $this->get('knp_paginator')->paginate($entities1,  $request->query->getInt('page', 1), 5);
        return $this->render('FttBackofficeBundle:Club:liste.html.twig', array(
            'entities' => $entities,
        ));
    }
}
