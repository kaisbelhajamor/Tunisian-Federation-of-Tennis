<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormationController extends Controller {

    public function listeAction() {
        $request = $this->get('Request');
        $em = $this->getDoctrine()->getManager();
        $formationarbitre = $em->getRepository('FttBackofficeBundle:Formation')->findBy(array('cible' => 'Arbitre'));
        $formationar = $this->get('knp_paginator')->paginate($formationarbitre, $request->query->getInt('page', 1), 6);
        $formationjoueur = $em->getRepository('FttBackofficeBundle:Formation')->findBy(array('cible' => 'Joueur'));
        $formationjr = $this->get('knp_paginator')->paginate($formationjoueur, $request->query->getInt('page', 1), 6);

        return $this->render('FttFrontOfficeBundle:Formation:liste.html.twig', array('entities' => $formationar,
                    'entities2' => $formationjr));
    }

    public function accepterAction() {

        $id = $this->get('request')->get('id');
        $em = $this->getDoctrine()->getManager();
        $req = $em->createQuery("UPDATE FttBackofficeBundle:InscrirFormation d SET d.etat = 'accepté' WHERE d.id like :id")
                ->setParameter('id', $id);
        $req->getResult();

        return $this->redirectToRoute('liste_formation');
    }

    public function refuserfsAction() {

        $id = $this->get('request')->get('id');

        $em = $this->getDoctrine()->getManager();

        $req = $em->createQuery("UPDATE FttBackofficeBundle:InscrirFormation d SET d.etat = 'refusé' WHERE d.id like :id")
                ->setParameter('id', $id);
        $req->getResult();

        return $this->redirectToRoute('liste_formation');
    }
  

}
