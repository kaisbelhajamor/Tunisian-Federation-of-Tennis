<?php

namespace Ftt\BackofficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * 
 */
class Formation{
     /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
     private $id; 
     
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieux;
    
     /**
     * @ORM\Column(type="datetime")
     */
    private $dateOuverture;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCloture;
    
    /**
     * 
     * @ORM\Column(name="cible", type="string")
     */
    private $cible;
    
    function getNom() {
        return $this->nom;
    }

    function getDescription() {
        return $this->description;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    
    function getId() {
        return $this->id;
    }

    function getLieux() {
        return $this->lieux;
    }

    function getDateOuverture() {
        return $this->dateOuverture;
    }

    function getDateCloture() {
        return $this->dateCloture;
    }

    function getCible() {
        return $this->cible;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLieux($lieux) {
        $this->lieux = $lieux;
    }

    function setDateOuverture($dateOuverture) {
        $this->dateOuverture = $dateOuverture;
    }

    function setDateCloture($dateCloture) {
        $this->dateCloture = $dateCloture;
    }

    function setCible($cible) {
        $this->cible = $cible;
    }


   
}
