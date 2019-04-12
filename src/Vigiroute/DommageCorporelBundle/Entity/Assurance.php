<?php

namespace Vigiroute\DommageCorporelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assurance
 *
 * @ORM\Table(name="assurance")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageCorporelBundle\Repository\AssuranceRepository")
 */
class Assurance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numPolice", type="string", length=255)
     */
    private $numPolice;

    /**
     * @var string
     *
     * @ORM\Column(name="compagnie", type="string", length=255)
     */
    private $compagnie;

    /**
     * @var string
     *
     * @ORM\Column(name="agence", type="string", length=255)
     */
    private $agence;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;
    /**
     * @var string
     *
     * @ORM\Column(name="risqueConvert", type="string", length=255)
     */
    private $risqueConvert;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSouscription", type="datetime")
     */
    
    private $dateSouscription;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLimVal", type="datetime")
     */
    private $dateLimVal;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numPolice
     *
     * @param string $numPolice
     *
     * @return Assurance
     */
    public function setNumPolice($numPolice)
    {
        $this->numPolice = $numPolice;

        return $this;
    }

    /**
     * Get numPolice
     *
     * @return string
     */
    public function getNumPolice()
    {
        return $this->numPolice;
    }

    /**
     * Set compagnie
     *
     * @param string $compagnie
     *
     * @return Assurance
     */
    public function setCompagnie($compagnie)
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    /**
     * Get compagnie
     *
     * @return string
     */
    public function getCompagnie()
    {
        return $this->compagnie;
    }

    /**
     * Set agence
     *
     * @param string $agence
     *
     * @return Assurance
     */
    public function setAgence($agence)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return string
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Assurance
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Assurance
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }
}

