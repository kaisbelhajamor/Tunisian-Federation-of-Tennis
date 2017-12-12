<?php

namespace Ftt\BackofficeBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Matchs")
     */
    private $idMatch;

    /**
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;
    
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    
     /**
     * @ORM\Column(name="nbtickets", type="integer")
     */
    private $nbtickets;
    
    
    /**
     * @var string
     *
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $matchs;
    
    /**
     * @ORM\Column(name="nbplacdisp", type="integer")
     */
    private $nbplacdisp;
    
    function getDate() {
        return $this->date;
    }

    function setDate($date) {
        $this->date = $date;
    }
    function getMatchs() {
        return $this->matchs;
    }

    function setMatchs($matchs) {
        $this->matchs = $matchs;
    }

        function getNbtickets() {
        return $this->nbtickets;
    }

    function getNbplacdisp() {
        return $this->nbplacdisp;
    }

    function setNbtickets($nbtickets) {
        $this->nbtickets = $nbtickets;
    }

    function setNbplacdisp($nbplacdisp) {
        $this->nbplacdisp = $nbplacdisp;
    }

            function getId() {
        return $this->id;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function getPrix() {
        return $this->prix;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdMatch($idMatch) {
        $this->idMatch = $idMatch;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }



    
    
}
