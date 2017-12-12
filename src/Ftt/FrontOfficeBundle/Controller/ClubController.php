<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClubController extends Controller {

    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities1 = $em->getRepository('FttBackofficeBundle:Club')->findAll();
        $request = $this->get('Request');
        $entities = $this->get('knp_paginator')->paginate($entities1,  $request->query->getInt('page', 1), 5);
        return $this->render('FttFrontOfficeBundle:Club:liste.html.twig', array(
            'entities' => $entities,
        ));
    }
}
