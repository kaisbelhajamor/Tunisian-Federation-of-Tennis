<?php

namespace Ftt\BackofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paris
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ftt\BackofficeBundle\Entity\parisRepository")
 */
class Paris
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
     * @var string
     *
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $matchs;

       /**
     * @ORM\Column(type="float")
     */
    private $cote1;
    
    /**
     * @ORM\Column(type="float")
     */
    private $cote2;
    
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    private $rating;
    
    /**
     * @ORM\Column(type="date")
     */
    private $date;

    
    /**
     * @ORM\ManyToOne(targetEntity="Matchs")
     */    
    private $idMatch;
    
    function getId() {
        return $this->id;
    }

    function getMatchs() {
        return $this->matchs;
    }

    function getCote1() {
        return $this->cote1;
    }

    function getCote2() {
        return $this->cote2;
    }

    function getRating() {
        return $this->rating;
    }

    function getDate() {
        return $this->date;
    }

    function getIdMatch() {
        return $this->idMatch;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMatchs($matchs) {
        $this->matchs = $matchs;
    }

    function setCote1($cote1) {
        $this->cote1 = $cote1;
    }

    function setCote2($cote2) {
        $this->cote2 = $cote2;
    }

    function setRating($rating) {
        $this->rating = $rating;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setIdMatch($idMatch) {
        $this->idMatch = $idMatch;
    }

  
   

}