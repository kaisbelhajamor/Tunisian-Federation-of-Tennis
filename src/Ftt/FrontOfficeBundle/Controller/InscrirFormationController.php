<?php

namespace Ftt\FrontOfficeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ftt\FrontOfficeBundle\Entity\InscrirFormation;
use Ftt\FrontOfficeBundle\Form\InscrirFormationType;

/**
 * InscrirFormation controller.
 *
 */
class InscrirFormationController extends Controller {

    public function inscrirAction() {
        $inscription = new InscrirFormation();
          $idformation = $this->get('request')->get('id');
             
                
        $form = $this->createForm(new InscrirFormationType(), $inscription);

        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
              $inscription->setIdformation($idformation);
            $em = $this->getDoctrine()->getManager();
            $em->persist($inscription);
            $em->flush();
        }
        return $this->render('FttFrontOfficeBundle:InscrirFormation:add.html.twig', array("form" => $form->createView()));
    }

}
