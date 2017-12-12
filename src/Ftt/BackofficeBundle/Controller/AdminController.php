<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\False;

class AdminController extends Controller
{
    public function indexAction()
    {

        return $this->render('FttBackofficeBundle::accueil_admin.html.twig');
    }






}
