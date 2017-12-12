<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Ftt\FrontOfficeBundle\Entity\ResultatMedical;
use Ftt\FrontOfficeBundle\Form\ResultatMedicalForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ResultatMedicalController extends Controller {

  public function AjouterResultatMedicalAction(Request $request)
{
    $ResultatMedical= new ResultatMedical();
    $user = $this->get('security.token_storage')->getToken()->getUser();
    $ResultatMedical->setMedecin($user->getId());
    $request =$this->get('request');
    $form = $this->createForm(new ResultatMedicalForm(),$ResultatMedical);
    $form->handleRequest($request);
    $em= $this->getDoctrine()->getManager();

    if($form->isValid()) {
        $em->persist($ResultatMedical);
        $em->flush();
        return $this->redirectToRoute('frontoffice_homepage');
    }

    return ($this->render('FttFrontOfficeBundle:ResultatMedical:ResultatMedical.html.twig',array('form' => $form->createView())));

}
    public function ResultatsMedicalsDeChaqueMedecinAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $entities = $em->getRepository('FttFrontOfficeBundle:ResultatMedical')->findBy(array('medecin' =>$user->getId() ), array('datePrelevement' => 'desc'));

        return $this->render('@FttFrontOffice/ResultatMedical/ListeResultatMedica.html.twig', array('entities' => $entities,));
    }

    public function ResultatsMedicals(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $entities = $em->getRepository('FttFrontOfficeBundle:ResultatMedical')->findBy(array('medecin' =>$user->getId() ), array('datePrelevement' => 'desc'));
        return $this->render('FttFrontOfficeBundle:ResultatMedical:ListeResultatMedica.html.twig', array('entities' => $entities,));
    }













}
