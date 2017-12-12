<?php
/**
 * Created by PhpStorm.
 * User: devcore
 * Date: 22/03/16
 * Time: 19:55
 */

namespace Ftt\NewsletterBundle\Controller;
use Ftt\NewsletterBundle\Entity\Newsletter;
use Ftt\NewsletterBundle\Entity\NewsletterMail;
use Ftt\NewsletterBundle\Form\NewsletterForm;
use Ftt\NewsletterBundle\Form\NewsletterSendForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsletterController extends Controller
{
    /***Add Database Newsletter mail + Send Newsletter To mail****************************/
    public function addNewsletterMailAction(Request $request){

        $newsletter_mail= new NewsletterMail();
        $request =$this->get('request');
        $form = $this->createForm(new NewsletterSendForm(),$newsletter_mail);
        $form->handleRequest($request);
        $em= $this->getDoctrine()->getManager();
        if($form->isValid()) {

            $newsletter_mail->setDate(new \DateTime());
            $em->persist($newsletter_mail);
            $em->flush();

            $em= $this->getDoctrine()->getManager();
            $news_user_registred = $em->getRepository('FttNewsletterBundle:Newsletter')->findAll();
            foreach ($news_user_registred as $key => $value) {

               $this::sendMail($value->getNom(),$value->getMail(),$newsletter_mail->getDescription(),$newsletter_mail->getId());

            }
            $session = $request->getSession();
            $session->start();
            $session->getFlashBag()->add('SuccessNewsletterSendMail', 'Newsletter envoyé avec succes!');

        }

        return ($this->render('FttNewsletterBundle::FormNewsletterToMail.html.twig',array('form' => $form->createView())));

    }


    public function sendMail($name, $mail,$body,$id)
    {
        $current_date = new \DateTime();

        $message = \Swift_Message::newInstance();
       //
         $message->setEncoder(\Swift_Encoding::get8BitEncoding());
        $logoPath = $this->container->getParameter('kernel.root_dir') . '/../web/img/FTT.jpg';
        $logoPath = preg_replace("/app..../i", "", $logoPath);
        $logoPath = preg_replace("/\\\\/", "/", $logoPath);
        $logo = $message->embed(\Swift_Image::fromPath($logoPath));
        $message->setSubject('FTTennis-Newsletter -' . $current_date->format('Y-m-d'));
        $message->setFrom('fttpidev@gmail.com');
        $message->setTo($mail);
        // $message->attach(\Swift_Attachment::fromPath('/var/www/federation-tunisienne-tunnis/web/img/FTT.jpg')
        //       ->setDisposition('inline'));
        $message->setBody(
        $this->renderView(
        // app/Resources/views/Emails/registration.html.twig
            'FttNewsletterBundle::NewsletterSendMail.html.twig',
            array('current_date' => $current_date,'logo'=>$logo ,'name'=>$name, 'body'=>$body,'mail'=>$mail,'id'=>$id)
        ),
        'text/html'
    );

$this->get('mailer')->send($message);

}













    /***LIST**********NEWSLETTER USERS******************/
    public function listAction()
    {
        $em= $this->getDoctrine()->getManager();
        $modele = $em->getRepository('FttNewsletterBundle:Newsletter')->findAll();
        $number_news = count($modele);
        return $this->render('FttNewsletterBundle::listNewsletter.html.twig', array('modeles' => $modele,'numNews' => $number_news));
    }


    /*********************************DELETE*******NEWSLETTER USERS***********************/
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $newsletter = $em->getRepository('FttNewsletterBundle:Newsletter')->find($id);
      //  var_dump($newsletter);
        $em->remove($newsletter);
        $em->flush();
        return $this->redirectToRoute('ftt_backoffice_newsletter_list_mail');

    }




    /***LIST****************************/
    public function listContentNewsletterAction()
    {
        $em= $this->getDoctrine()->getManager();
        $modele = $em->getRepository('FttNewsletterBundle:NewsletterMail')->findAll();
        return $this->render('FttNewsletterBundle::listnewsletterContent.html.twig', array('modeles' => $modele));
    }


    /*********************************DELETE******************************/
    public function deleteContentNewsletterAction($id){
        $em = $this->getDoctrine()->getManager();
        $newsletter = $em->getRepository('FttNewsletterBundle:NewsletterMail')->find($id);
        //  var_dump($newsletter);
        $em->remove($newsletter);
        $em->flush();
        return $this->redirectToRoute('ftt_backoffice_newsletter_list_newsletter_content');

    }

/*************************************************************************** */
//showContentNewsletter
    public function showContentNewsletterAction($id){
        $em = $this->getDoctrine()->getManager();
        $newsletter = $em->getRepository('FttNewsletterBundle:NewsletterMail')->find($id);
        //  var_dump($newsletter);
        return $this->render('FttNewsletterBundle::NewsletterContentShow.html.twig', array('data' => $newsletter));



    }



}