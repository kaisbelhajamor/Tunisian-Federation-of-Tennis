<?php

namespace Ftt\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class InscritFormationListController extends Controller {

    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        $entities1 = $em->getRepository('FttFrontOfficeBundle:InscrirFormation')->findAll();
        $request = $this->get('Request');
        $entities = $this->get('knp_paginator')->paginate($entities1, $request->query->getInt('page', 1), 15);
        return $this->render('FttBackofficeBundle:InscritList:InscritFormationList.html.twig', array(
                    'entities' => $entities,
        ));
    }

    public function confirmerAction(Request $request) {

        $idformation = $this->get('request')->get('id');
        //var_dump($idformation);
        $em = $this->getDoctrine()->getManager();
        $entities1 = $em->getRepository('FttFrontOfficeBundle:InscrirFormation')->find($idformation);

        $entities1->setEtat('confirmer');
        $mail = $entities1->getMail();
        $em->flush();
        $entities2 = $em->getRepository('FttBackofficeBundle:Formation')->find($entities1->getIdformation());
        $nom = $entities2->getNom();
        $description = $entities2->getDescription();
        $dateov = $entities2->getDateOuverture();
        $dateclot = $entities2->getDateCloture();
        $lieux = $entities2->getLieux();
        $this::sendMail($nom, $description, $dateov, $dateclot, $lieux, $mail);
     
        $session = $request->getSession();
            $session->start();
            $session->getFlashBag()->add('confimerFormation', 'Demande acceptee' );
            $session->getFlashBag()->add('confimerFormation', 'Message envoye ');
       

      return $this->redirectToRoute('inscription_liste');
      
      
    }

    public function sendMail($nom, $description, $dateov, $dateclot, $lieux, $mail) {
        $current_date = new \DateTime();

        $message = \Swift_Message::newInstance();
        $message->setEncoder(\Swift_Encoding::get8BitEncoding());
        $directoryPath = $this->container->getParameter('kernel.root_dir') . '/../web/img/FTT.jpg';
        $directoryPath = preg_replace("/app..../i", "", $directoryPath);
        $directoryPath = preg_replace("/\\\/", "/", $directoryPath);
        $logo = $message->embed(\Swift_Image::fromPath($directoryPath));
        $message->setSubject('FTTennis- Confirmation de participation au formation- ' . $current_date->format('Y-m-d'));
        $message->setFrom('fttpidev@gmail.com');
        $message->setTo($mail);
        // $message->attach(\Swift_Attachment::fromPath('/var/www/federation-tunisienne-tunnis/web/img/FTT.jpg')
        //       ->setDisposition('inline'));
        $message->setBody(
        $this->renderView(
        // app/Resources/views/Emails/registration.html.twig
        'FttBackofficeBundle:InscritList:envoiMail.html.twig', array('current_date' => $current_date, 'logo' => $logo, 'nom' => $nom, 'description' => $description, 'dateov' => $dateov,
        'dateclot' => $dateclot, 'lieux' => $lieux)), 'text/html');


        $this->get('mailer')->send($message);
    }

}
