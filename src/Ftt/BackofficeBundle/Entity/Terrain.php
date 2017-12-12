<?php

namespace Ftt\BackofficeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Terrain{
   
     /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $nomTerrain;
    
    /**
     * @ORM\Column(type="string",length=255)
     */
    private $adresseTerrain;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $capacite;
    
    
    function getId() {
        return $this->id;
    }

    function getNomTerrain() {
        return $this->nomTerrain;
    }

    function getAdresseTerrain() {
        return $this->adresseTerrain;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNomTerrain($nomTerrain) {
        $this->nomTerrain = $nomTerrain;
    }

    function setAdresseTerrain($adresseTerrain) {
        $this->adresseTerrain = $adresseTerrain;
    }

    function getCapacite() {
        return $this->capacite;
    }

    function setCapacite($capacite) {
        $this->capacite = $capacite;
    }




}