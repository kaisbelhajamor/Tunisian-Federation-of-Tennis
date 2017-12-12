<?php

namespace Ftt\GestionActualiteBundle\Controller;

use Ftt\GestionActualiteBundle\Entity\Actualite;
use Ftt\GestionActualiteBundle\Form\ActualiteForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ActualiteController extends Controller
{


    /***LIST***********************/
    public function listActualiteAction()
    {
        $em= $this->getDoctrine()->getManager();
        $actualites = $em->getRepository('FttGestionActualiteBundle:Actualite')->findAll();
        $actualitesNumber = count($actualites);
        return $this->render('@FttGestionActualite/BackOffice/list.html.twig', array('actualites' => $actualites,'actualitesNumber' => $actualitesNumber));
    }

    public function listFrontActualiteInternatAction()
    {
        $em= $this->getDoctrine()->getManager();
        $actualites = $em->getRepository('FttGestionActualiteBundle:Actualite')->findBy(array('categorie'=>'ACTUALITE_INTERNATIONALE'));
        $actualitesNumber = count($actualites);
        return $this->render('FttGestionActualiteBundle:FrontOffice:listactualitesInternationales.html.twig', array('actualites' => $actualites,'actualitesNumber' => $actualitesNumber));
    }



    public function listFrontActualiteNatAction()
    {
        $em= $this->getDoctrine()->getManager();
        $actualites = $em->getRepository('FttGestionActualiteBundle:Actualite')->findBy(array('categorie'=>'ACTUALITE_NATIONALE'));
        $actualitesNumber = count($actualites);
        return $this->render('FttGestionActualiteBundle:FrontOffice:listactualitesNationales.html.twig', array('actualites' => $actualites,'actualitesNumber' => $actualitesNumber));
    }
    /***LIST***********************/
    public function deleteActualiteAction($id){
        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('FttGestionActualiteBundle:Actualite')->find($id);

        $em->remove($actualite);
        $em->flush();
        return $this->redirectToRoute('ftt_gestion_actualite_admin_list');

    }
    /***Ajouter  actualite***************************/
    public function addActualiteAction(Request $request){

        $actualite= new Actualite();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $actualite->setAuteur($user->getId());
        $request =$this->get('request');
        $form = $this->createForm(new ActualiteForm(),$actualite);
        $form->handleRequest($request);
        $em= $this->getDoctrine()->getManager();
        if($form->isValid()) {
            $actualite->upload();
            $actualite->setDate(new \DateTime());
            $em->persist($actualite);
            $em->flush();
            $session = $request->getSession();
            $session->start();
            $session->getFlashBag()->add('SuccessAddActualite', 'Actualite ajouté avec succes!');
            return $this->redirectToRoute('ftt_gestion_actualite_admin_list');
        }

        return ($this->render('@FttGestionActualite/BackOffice/addActualite.html.twig',array('form' => $form->createView())));

    }



    /***Ajouter  actualite***************************/
    public function updateActualiteAction(Request $request,$id){

        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('FttGestionActualiteBundle:Actualite')->find($id);
        if (!$actualite) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $actualite->setAuteur($user->getId());
        $request =$this->get('request');
        $form = $this->createForm(new ActualiteForm(),$actualite);
        $form->handleRequest($request);
        $em= $this->getDoctrine()->getManager();

        if($form->isValid()) {
            $actualite->upload();
            $actualite->setDate(new \DateTime());
            $em->persist($actualite);
            $em->flush();
            $session = $request->getSession();
            $session->start();
            $session->getFlashBag()->add('SuccessUpdateActualite', 'Actualite modifié avec succes!');

        }

        return ($this->render('@FttGestionActualite/BackOffice/updateActualite.html.twig',array('form' => $form->createView())));

    }


    public function showAdminActualiteAction($id){
        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('FttGestionActualiteBundle:Actualite')->find($id);
        if (!$actualite) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }
        $tags = $this->splitTags($actualite->getTags());
        return $this->render('@FttGestionActualite/BackOffice/showActualite.html.twig', array('actualite' => $actualite,'tags'=>$tags));



    }
    public function showFrontActualiteAction($id){
        $em = $this->getDoctrine()->getManager();
        $actualite = $em->getRepository('FttGestionActualiteBundle:Actualite')->find($id);
        if (!$actualite) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }
        return $this->render('@FttGestionActualite/FrontOffice/showActualite.html.twig', array('actualite' => $actualite));


    }

    public function splitTags($tags){
       return  explode(" ", $tags);

    }


}
