<?php

namespace Ftt\GestionActualiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FttGestionActualiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
