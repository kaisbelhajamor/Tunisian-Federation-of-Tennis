<?php

namespace Ftt\BackofficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Joueur{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nomJoueur;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $prenomJoueur;
    
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $carriere;
    
    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;  
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Club")
     */
    private $club;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $points;
    
    /**
     * @ORM\Column(type="string")
     */
    private $sexe;
    
    function getSexe() {
        return $this->sexe;
    }

    function setSexe($sexe) {
        $this->sexe = $sexe;
    }

        function getId() {
        return $this->id;
    }

    function getAge() {
        return $this->age;
    }

    function getCarriere() {
        return $this->carriere;
    }

    function getDate_naissance() {
        return $this->date_naissance;
    }

    function getClub() {
        return $this->club;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setCarriere($carriere) {
        $this->carriere = $carriere;
    }

    function setDate_naissance($date_naissance) {
        $this->date_naissance = $date_naissance;
    }

    function setClub($club) {
        $this->club = $club;
    }

    function getPoints() {
        return $this->points;
    }

    function setPoints($points) {
        $this->points = $points;
    }

        
    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }


    function getNomJoueur() {
        return $this->nomJoueur;
    }

    function setNomJoueur($nomJoueur) {
        $this->nomJoueur = $nomJoueur;
    }
    function getPrenomJoueur() {
        return $this->prenomJoueur;
    }

    function setPrenomJoueur($prenomJoueur) {
        $this->prenomJoueur = $prenomJoueur;
    }

}
