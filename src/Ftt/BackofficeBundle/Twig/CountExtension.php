<?php

namespace Ftt\BackofficeBundle\Twig;

use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CountExtension extends \Twig_Extension
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em  = $em;
    }

    public function getFilters()
    {
        return array(
        );
    }

    public function getFunctions()
    {
        return array(
            'getNewsCount' => new \Twig_Function_Method($this,'getNewsCount'),
            'countNotReadedMsg' => new \Twig_Function_Method($this,'countNotReadedMsg'),
            'countMsg' => new \Twig_Function_Method($this,'countMsg'),
            'entityUser' => new \Twig_Function_Method($this,'entityUser'),
            'countUser' => new \Twig_Function_Method($this,'countUser'),
            'entityAllUser' => new \Twig_Function_Method($this,'entityAllUser'),
            'entityMsgNotReaded' => new \Twig_Function_Method($this,'entityMsgNotReaded'),
            'getActuCount' => new \Twig_Function_Method($this,'getActuCount'),
            'getActus' => new \Twig_Function_Method($this,'getActus'),
            'getJoueur' => new \Twig_Function_Method($this,'getJoueur'),
        );
    }

    public function getNewsCount()
    {
        return count($this->em->getRepository('FttNewsletterBundle:Newsletter')
            ->findAll());
    }
    public function countNotReadedMsg()
    {
        return count($this->em->getRepository('FttFrontOfficeBundle:Contact')->findBy(array('readed'=> 0)));
    }
    public function countMsg()
    {
        return count($this->em->getRepository('FttFrontOfficeBundle:Contact')->findAll());
    }
    public function countUser()
    {
        return count($this->em->getRepository('FttUserBundle:User')->findAll());
    }
    public function entityMsgNotReaded()
    {
        return $this->em->getRepository('FttFrontOfficeBundle:Contact')->findBy(array('readed'=> 0));
   }
    public function entityUser($id)
    {
        $user = $this->em->getRepository('FttUserBundle:User')->find($id);
        return $user;
   }
    public function getJoueur($id)
    {
        $joueur = $this->em->getRepository('FttBackofficeBundle:Joueur')->findOneBy(array('id' =>$id));
        return $joueur;
   }
    public function entityAllUser()
    {
        $user = $this->em->getRepository('FttUserBundle:User')->findBy(array(),array(),8);
        return $user;
    }

    public function getActuCount()
    {
        return count($this->em->getRepository('FttGestionActualiteBundle:Actualite')
            ->findAll());
    }
    public function getActus()
    {
        return $this->em->getRepository('FttGestionActualiteBundle:Actualite')->findBy(array(),array(),3);
    }

    public function getName()
    {
        return 'count_extension';
    }
}



















/*



class CountDatabase extends \Twig_Extension
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em  = $em;

    }


    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('countUserNewsletter', array($this, 'countUserNewsletter'), array(
                'needs_environment' => true
            )),
        );
    }


    public function getName()
    {
        return 'countDatabase';
    }






    public function countUserNewsletter()
    {

        $news = $this->em->getRepository('FttNewsletterBundle:Newsletter')->findAll();
        return count($news);

    }


    public function countNotReadedMsg()
    {

        $contactNotReaded = $this->em->getRepository('FttFrontOfficeBundle:Contact')->findBy(array('readed'=> 0));

        return count($contactNotReaded);
    }
    public function countMsg()
    {

        $contact = $this->em->getRepository('FttFrontOfficeBundle:Contact')->findAll();

        return count($contact);


    }




}
*/