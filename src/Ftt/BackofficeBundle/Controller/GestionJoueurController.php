<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ftt\BackofficeBundle\Entity\Joueur;
use Ftt\BackofficeBundle\Form\JoueurForm;

class GestionJoueurController extends Controller {

    
    public function ajouterJoueurAction() {
        
        $joueur = new Joueur();
        $form = $this->createForm(new JoueurForm(), $joueur);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($joueur);
            $em->flush();
        }
        return $this->render('FttBackofficeBundle:Joueur:ajouter.html.twig', array("form" => $form->createView()));
    }

    public function modifierJoueurAction() {
        
        $id = $this->get('request')->get('id');
        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository('FttBackofficeBundle:Joueur')
                ->find($id);

        $form = $this->createForm(new JoueurForm(), $joueur);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($joueur);
            $em->flush();

            return ($this->redirectToRoute('afficher_joueur'));
        }
        return $this->render('FttBackofficeBundle:Joueur:modifier.html.twig', array('form' => $form->createView()));
    }

    public function afficherJoueurAction() {

        $em = $this->getDoctrine()->getManager();
        $listejoueur = $em
                ->getRepository('FttBackofficeBundle:Joueur')
                ->findBy(array(), array('points' => 'DESC'));

        $request = $this->get('Request');
        $joueur = $this->get('knp_paginator')->paginate($listejoueur, $request->query->getInt('page', 1), 10);



        return $this->render('FttBackofficeBundle:Joueur:afficher.html.twig', array('joueur' => $joueur));
    }

    public function listeAction() {

        $em = $this->getDoctrine()->getManager();
        $joueur1 = $em->getRepository('FttBackofficeBundle:Joueur')->findAll();
        $request = $this->get('Request');
        $joueur = $this->get('knp_paginator')->paginate($joueur1, $request->query->getInt('page', 1), 10);

        return $this->render('FttBackofficeBundle:Joueur:liste.html.twig', array('joueur' => $joueur));
    }

    public function supprimerJoueurAction() {
        $id = $this->get('request')->get('id');
        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository('FttBackofficeBundle:Joueur')->find($id);
        $em->remove($joueur);
        $em->flush();

        return ($this->redirectToRoute('afficher_joueur'));
    }

}
