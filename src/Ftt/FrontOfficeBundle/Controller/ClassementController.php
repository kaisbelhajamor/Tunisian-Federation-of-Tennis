<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClassementController extends Controller
{

    public function classementAction()
    {
        $em = $this->getDoctrine()->getManager();

        //  $entities1 = $em->getRepository('FttBackofficeBundle:Joueur')->findAll();
        // $request = $this->get('Request');
        $query = $em->createQuery("SELECT j FROM FttBackofficeBundle:Joueur j where j.sexe='F' ORDER BY j.points DESC");
        $query2 = $em->createQuery("SELECT j FROM FttBackofficeBundle:Joueur j where j.sexe='H' ORDER BY j.points DESC");
        $entitiesW = $query->getResult();
        $entitiesH = $query2->getResult();


        // $entities = $this->get('knp_paginator')->paginate($entities1,  $request->query->getInt('page', 1), 5);
        return $this->render('FttFrontOfficeBundle:Classement:classement.html.twig', array(
            'women' => $entitiesW, 'men' => $entitiesH
        ));
    }

    public function bestplayerAction()
    {
        return $this->render('FttFrontOfficeBundle:Classement:bestplayer.html.twig', array());

    }
}
