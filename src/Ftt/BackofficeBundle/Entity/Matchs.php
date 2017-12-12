<?php

namespace Ftt\BackofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Matchs")
 */
class Matchs {
     /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
     private $id;
     
    
    /**
     * 
     * @ORM\Column(name="typeMatch", type="string")
     */
    private $typeMatch;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tournoi;
    
    /**
     * @ORM\Column(type="date")
     */
    private $date;
    
    /**
     * @ORM\Column(type="time")
     */
    private $heure;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat;
    
    /**
     * @ORM\ManyToOne(targetEntity="Terrain")
     */
    private $terrain;
    
     /**
     * @ORM\ManyToOne(targetEntity="Joueur")
     */
    private $joueur1;
    
     /**
     * @ORM\ManyToOne(targetEntity="Joueur")
     */
    private $joueur2;
    
   
    function getId() {
        return $this->id;
    }

    function getTypeMatch() {
        return $this->typeMatch;
    }

    function getTournoi() {
        return $this->tournoi;
    }

    function getDate() {
        return $this->date;
    }

    function getHeure() {
        return $this->heure;
    }

    function getResultat() {
        return $this->resultat;
    }

    function getTerrain() {
        return $this->terrain;
    }

    function getJoueur1() {
        return $this->joueur1;
    }

    function getJoueur2() {
        return $this->joueur2;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTypeMatch($typeMatch) {
        $this->typeMatch = $typeMatch;
    }

    function setTournoi($tournoi) {
        $this->tournoi = $tournoi;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setHeure($heure) {
        $this->heure = $heure;
    }

    function setResultat($resultat) {
        $this->resultat = $resultat;
    }

    function setTerrain($terrain) {
        $this->terrain = $terrain;
    }

    function setJoueur1($joueur1) {
        $this->joueur1 = $joueur1;
    }

    function setJoueur2($joueur2) {
        $this->joueur2 = $joueur2;
    }


    
}
