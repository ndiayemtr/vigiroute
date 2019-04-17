<?php

namespace Vigiroute\GeographieBundle\Entity;

use Vigiroute\GeographieBundle\Entity\Commune;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="secteur")
 * @ORM\Entity(repositoryClass="Vigiroute\GeographieBundle\Repository\SecteurRepository")
 */
class Secteur
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="coordonnee", type="string", length=255)
     */
    private $coordonnee;

    /**
     * @var string
     *
     * @ORM\Column(name="carte", type="string", length=255)
     */
    private $carte;
    
    /**
     *@ORM\ManyToOne(targetEntity="Vigiroute\GeographieBundle\Entity\Commune", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $commune;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Secteur
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Secteur
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set coordonnee
     *
     * @param string $coordonnee
     *
     * @return Secteur
     */
    public function setCoordonnee($coordonnee)
    {
        $this->coordonnee = $coordonnee;

        return $this;
    }

    /**
     * Get coordonnee
     *
     * @return string
     */
    public function getCoordonnee()
    {
        return $this->coordonnee;
    }

    /**
     * Set carte
     *
     * @param string $carte
     *
     * @return Secteur
     */
    public function setCarte($carte)
    {
        $this->carte = $carte;

        return $this;
    }

    /**
     * Get carte
     *
     * @return string
     */
    public function getCarte()
    {
        return $this->carte;
    }

    /**
     * Set commune
     *
     * @param \Vigiroute\GeographieBundle\Entity\Commune $commune
     *
     * @return Secteur
     */
    public function setCommune(\Vigiroute\GeographieBundle\Entity\Commune $commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return \Vigiroute\GeographieBundle\Entity\Commune
     */
    public function getCommune()
    {
        return $this->commune;
    }
}
