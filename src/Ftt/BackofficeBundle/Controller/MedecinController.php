<?php


namespace Ftt\BackofficeBundle\Controller;

use Ftt\BackofficeBundle\Entity\Medecin;
use Ftt\BackofficeBundle\Form\MedecinForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MedecinController extends Controller
{
    /**
     * Liste des Medecins
     */

    public function listMedecinAction()
    {
        $em= $this->getDoctrine()->getManager();
        $medecins = $em->getRepository('Ftt\BackofficeBundle\Entity\Medecin')->findAll();
        $medecinsNumber = count($medecins);
        return $this->render('@FttBackoffice/Medecin/listMedecin.html.twig', array('medecins' => $medecins,'medecinsNumber' => $medecinsNumber));
    }

    /**
     * Supprimer Medecin
     */
    public function deleteMedecinAction($id){
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('Ftt\BackofficeBundle\Entity\Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('Unable to find Medecin entity.');
        }
        $em->remove($medecin);
        $em->flush();
        return $this->redirectToRoute('ftt_backoffice_medecin_list');

    }

    /**
     * Ajouter Medecin
     */
    public function addMedecinAction(Request $request){
        $em= $this->getDoctrine()->getManager();
        $medecin= new Medecin();
        $request =$this->get('request');
        $form = $this->createForm(new MedecinForm(),$medecin);
        $form->handleRequest($request);
        if($form->isValid()) {
            $em->persist($medecin);
            $em->flush();
            return $this->redirectToRoute('ftt_backoffice_medecin_list');
        }

        return ($this->render('@FttBackoffice/Medecin/addMedecin.html.twig',array('form' => $form->createView())));

    }

    /**
     * Modifier Medecin
     */
    public function updateMedecinAction(Request $request,$id){
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('Ftt\BackofficeBundle\Entity\Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('Unable to find Medecin entity.');
        }
        $request =$this->get('request');
        $form = $this->createForm(new MedecinForm(),$medecin);
        $form->handleRequest($request);
        if($form->isValid()) {
            $em->persist($medecin);
            $em->flush();
            return $this->redirectToRoute('ftt_backoffice_medecin_list');
        }
        return ($this->render('@FttBackoffice/Medecin/updateMedecin.html.twig',array('form' => $form->createView())));

    }
    public function showMedecinAction($id){
        $em = $this->getDoctrine()->getManager();
        $medecin = $em->getRepository('Ftt\BackofficeBundle\Entity\Medecin')->find($id);
        if (!$medecin) {
            throw $this->createNotFoundException('Unable to find Medecin entity.');
        }
        return $this->render('@FttBackoffice/Medecin/showMedecin.html.twig', array('Medecin' => $medecin));
    }

}
