<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ftt\BackofficeBundle\Entity\Paris;
use Ftt\BackofficeBundle\Form\ParisType;

/**
 * Paris controller.
 *
 */
class ParisController extends Controller
{

    /**
     * Lists all Paris entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('FttBackofficeBundle:Paris')->findAll();


        return $this->render("FttBackofficeBundle:Paris:index.html.twig",array('entities' => $entities));
    }
    

        
    
    /**
     * Creates a new Paris entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Paris();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();



            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paris_show', array('id' => $entity->getId())));
        }

        return $this->render('FttBackofficeBundle:Paris:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Paris entity.
     *
     * @param Paris $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Paris $entity)
    {
        $form = $this->createForm(new ParisType(), $entity, array(
            'action' => $this->generateUrl('paris_create'),
            'method' => 'POST',
        ));


        return $form;
    }

    /**
     * Displays a form to create a new Paris entity.
     *
     */
    public function newAction()
    {
        $entity = new Paris();
        $form   = $this->createCreateForm($entity);

        return $this->render('FttBackofficeBundle:Paris:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Paris entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Paris')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paris entity.');
        }


        $em = $this->getDoctrine()->getManager();

        $test = $em->getRepository('FttBackofficeBundle:Paris')->findJoueur1();
        var_dump($test);

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttBackofficeBundle:Paris:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
public function deletePAction($id) {

        $em = $this->getDoctrine()->getManager();
        $voiture = $em->getRepository('FttBackofficeBundle:Paris')->find($id);
        $em->remove($voiture);
        $em->flush();
       return $this->redirectToRoute('paris_affich');
    }
    /**
     * Displays a form to edit an existing Paris entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Paris')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paris entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('FttBackofficeBundle:Paris:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Paris entity.
    *
    * @param Paris $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Paris $entity)
    {
        $form = $this->createForm(new ParisType(), $entity, array(
            'action' => $this->generateUrl('paris_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Paris entity.
     *
     */




    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('FttBackofficeBundle:Paris')->find($id);






        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paris entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('paris_edit', array('id' => $id)));
        }

        return $this->render('FttBackofficeBundle:Paris:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Paris entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('FttBackofficeBundle:Paris')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Paris entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('paris'));
    }

    /**
     * Creates a form to delete a Paris entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paris_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }


}
