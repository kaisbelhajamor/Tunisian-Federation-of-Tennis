<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ftt\BackofficeBundle\Entity\Terrain;
use Ftt\BackofficeBundle\Form\TerrainType;

/**
 * Terrain controller.
 *
 */
class TerrainController extends Controller
{

    /**
     * Lists all Terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FttBackofficeBundle:Terrain')->findAll();

        return $this->render('FttBackofficeBundle:Terrain:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    
     public function delete2Action()
    {
        
        $id = $this->get('request')->get('id');
        $em = $this->getDoctrine()->getManager();
        $c = $em->getRepository('FttBackofficeBundle:Terrain')->find($id);
        $em->remove($c);
        $em->flush();

        return ($this->redirectToRoute('terrain'));
    }
    
    /**
     * Creates a new Terrain entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Terrain();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('terrain'));
        }

        return $this->render('FttBackofficeBundle:Terrain:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Terrain entity.
     *
     * @param Terrain $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Terrain $entity)
    {
        $form = $this->createForm(new TerrainType(), $entity, array(
            'action' => $this->generateUrl('terrain_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Terrain entity.
     *
     */
    public function newAction()
    {
        $entity = new Terrain();
        $form   = $this->createCreateForm($entity);

        return $this->render('FttBackofficeBundle:Terrain:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Terrain entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Terrain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terrain entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttBackofficeBundle:Terrain:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Terrain entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Terrain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terrain entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttBackofficeBundle:Terrain:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Terrain entity.
    *
    * @param Terrain $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Terrain $entity)
    {
        $form = $this->createForm(new TerrainType(), $entity, array(
            'action' => $this->generateUrl('terrain_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Terrain entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Terrain')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Terrain entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('terrain_edit', array('id' => $id)));
        }

        return $this->render('FttBackofficeBundle:Terrain:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Terrain entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FttBackofficeBundle:Terrain')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Terrain entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('terrain'));
    }

    /**
     * Creates a form to delete a Terrain entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('terrain_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Effacer'))
            ->getForm()
        ;
    }
}
