<?php

namespace Ftt\FrontOfficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class InscrirFormation{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nom;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $prenom;
    
    /**
     * @ORM\Column(type="integer",length=255)
     */
    private $cin;
    
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $mail;
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $grade;
    
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $etat= "en cours";
    
    /**
     * @ORM\Column(type="integer")
     */
    private $idformation;
    
    function getIdformation() {
        return $this->idformation;
    }

    function setIdformation($idformation) {
        $this->idformation = $idformation;
    }

        
    function getMail() {
        return $this->mail;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

        
    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

        
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getCin() {
        return $this->cin;
    }

    function getGrade() {
        return $this->grade;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setCin($cin) {
        $this->cin = $cin;
    }

    function setGrade($grade) {
        $this->grade = $grade;
    }



    
   
}
