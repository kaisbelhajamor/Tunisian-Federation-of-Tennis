<?php

namespace Ftt\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultatMedical
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ftt\FrontOfficeBundle\Entity\ResultatMedicalRepository")
 */
class ResultatMedical
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
     * @var integer
     *
     * @ORM\Column(name="numeroEchantillon", type="integer")
     */
    private $numeroEchantillon;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePrelevement", type="datetime")
     */
    private $datePrelevement;

    /**
     * @var integer
     *
     * @ORM\Column(name="medecin_id", type="integer")
     */
    private $medecin;

    /**
     * @ORM\ManyToOne(targetEntity="Ftt\BackofficeBundle\Entity\Joueur")
     */
    private $joueur;

    /**
     * @var string
     *
     * @ORM\Column(name="resultatTest", type="string", length=2000)
     */
    private $resultatTest;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroEchantillon
     *
     * @param integer $numeroEchantillon
     * @return ResultatMedical
     */
    public function setNumeroEchantillon($numeroEchantillon)
    {
        $this->numeroEchantillon = $numeroEchantillon;

        return $this;
    }

    /**
     * Get numeroEchantillon
     *
     * @return integer 
     */
    public function getNumeroEchantillon()
    {
        return $this->numeroEchantillon;
    }

    /**
     * Set datePrelevement
     *
     * @param \DateTime $datePrelevement
     * @return ResultatMedical
     */
    public function setDatePrelevement($datePrelevement)
    {
        $this->datePrelevement = $datePrelevement;

        return $this;
    }

    /**
     * Get datePrelevement
     *
     * @return \DateTime 
     */
    public function getDatePrelevement()
    {
        return $this->datePrelevement;
    }

    /**
     * Set medecin
     *
     * @param \stdClass $medecin
     * @return ResultatMedical
     */
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return \stdClass 
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set joueur
     *
     * @param \stdClass $joueur
     * @return ResultatMedical
     */
    public function setJoueur($joueur)
    {
        $this->joueur = $joueur;

        return $this;
    }

    /**
     * Get joueur
     *
     * @return \stdClass 
     */
    public function getJoueur()
    {
        return $this->joueur;
    }

    /**
     * Set resultatTest
     *
     * @param string $resultatTest
     * @return ResultatMedical
     */
    public function setResultatTest($resultatTest)
    {
        $this->resultatTest = $resultatTest;

        return $this;
    }

    /**
     * Get resultatTest
     *
     * @return string 
     */
    public function getResultatTest()
    {
        return $this->resultatTest;
    }
}
