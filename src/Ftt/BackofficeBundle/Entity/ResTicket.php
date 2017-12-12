<?php
namespace Ftt\BackofficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @ORM\Entity
 */
class ResTicket {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20)
     */
    private $login;

      /**
     * @ORM\ManyToOne(targetEntity="Matchs")
     */
    private $ticket;
    
       /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20)
     */
    private $date;
    
    /**
     * @var string
     *
     * @ORM\Column(name="matchs", type="string", length=20)
     */
    private $matchs;
    
    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

   

    function getDate() {
        return $this->date;
    }

    function getMatchs() {
        return $this->matchs;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function getTicket() {
        return $this->ticket;
    }

    function setTicket($ticket) {
        $this->ticket = $ticket;
    }

    
    function setDate($date) {
        $this->date = $date;
    }

    function setMatchs($matchs) {
        $this->matchs = $matchs;
    }


    
}
