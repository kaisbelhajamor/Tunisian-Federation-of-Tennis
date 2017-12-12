<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ftt\BackofficeBundle\Entity\Formation;
use Ftt\BackofficeBundle\Form\FormationType;

/**
 * Formation controller.
 *
 */
class FormationController extends Controller
{

     public function delete2Action()
    {
        
        $id = $this->get('request')->get('id');
        $em = $this->getDoctrine()->getManager();
        $c = $em->getRepository('FttBackofficeBundle:Formation')->find($id);
        $em->remove($c);
        $em->flush();

        return ($this->redirectToRoute('formation'));
    }
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities1 = $em->getRepository('FttBackofficeBundle:Formation')->findAll();
        $request = $this->get('Request');
        $entities = $this->get('knp_paginator')->paginate($entities1,  $request->query->getInt('page', 1), 10);
        return $this->render('FttBackofficeBundle:Formation:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    public function createAction(Request $request)
    {
        $entity = new Formation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectToRoute('formation');
        }

        return $this->render('FttBackofficeBundle:Formation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

  
    private function createCreateForm(Formation $entity)
    {
        $form = $this->createForm(new FormationType(), $entity, array(
            'action' => $this->generateUrl('formation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    
    public function newAction()
    {
        $entity = new Formation();
        $form   = $this->createCreateForm($entity);

        return $this->render('FttBackofficeBundle:Formation:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

 
    
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttBackofficeBundle:Formation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

  
    private function createEditForm(Formation $entity)
    {
        $form = $this->createForm(new FormationType(), $entity, array(
            'action' => $this->generateUrl('formation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
   
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Formation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('formation_edit', array('id' => $id)));
        }

        return $this->render('FttBackofficeBundle:Formation:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FttBackofficeBundle:Formation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Formation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('formation'));
    }

   
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('formation_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
     public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities1 = $em->getRepository('FttBackofficeBundle:Formation')->findAll();
        $request = $this->get('Request');
         $entities = $this->get('knp_paginator')->paginate($entities1,  $request->query->getInt('page', 1), 5);
        return $this->render('FttBackofficeBundle:Formation:liste.html.twig', array(
            'entities' => $entities
        ));
    }
}
