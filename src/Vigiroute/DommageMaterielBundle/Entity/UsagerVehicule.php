<?php

namespace Vigiroute\DommageMaterielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsagerVehicule
 *
 * @ORM\Table(name="usager_vehicule")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageMaterielBundle\Repository\UsagerVehiculeRepository")
 */
class UsagerVehicule
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
     * @ORM\Column(name="defaillanceMec", type="string", length=255)
     */
    private $defaillanceMec;

    /**
     * @var string
     *
     * @ORM\Column(name="inattation", type="string", length=255)
     */
    private $inattation;

    /**
     * @var string
     *
     * @ORM\Column(name="distraction", type="string", length=255)
     */
    private $distraction;

    /**
     * @var string
     *
     * @ORM\Column(name="malaise", type="string", length=255)
     */
    private $malaise;

    /**
     * @var string
     *
     * @ORM\Column(name="fatique", type="string", length=255)
     */
    private $fatique;

    /**
     * @var string
     *
     * @ORM\Column(name="sommeil", type="string", length=255)
     */
    private $sommeil;

    /**
     * @var string
     *
     * @ORM\Column(name="boisson", type="string", length=255)
     */
    private $boisson;

    /**
     * @var string
     *
     * @ORM\Column(name="soleil", type="string", length=255)
     */
    private $soleil;

    /**
     * @var string
     *
     * @ORM\Column(name="ebloui", type="string", length=255)
     */
    private $ebloui;

    /**
     * @var string
     *
     * @ORM\Column(name="infimite", type="string", length=255)
     */
    private $infimite;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\DommageMaterielBundle\Entity\DommageMateriels", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dommageMateriel;


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
     * Set defaillanceMec
     *
     * @param string $defaillanceMec
     *
     * @return UsagerVehicule
     */
    public function setDefaillanceMec($defaillanceMec)
    {
        $this->defaillanceMec = $defaillanceMec;

        return $this;
    }

    /**
     * Get defaillanceMec
     *
     * @return string
     */
    public function getDefaillanceMec()
    {
        return $this->defaillanceMec;
    }

    /**
     * Set inattation
     *
     * @param string $inattation
     *
     * @return UsagerVehicule
     */
    public function setInattation($inattation)
    {
        $this->inattation = $inattation;

        return $this;
    }

    /**
     * Get inattation
     *
     * @return string
     */
    public function getInattation()
    {
        return $this->inattation;
    }

    /**
     * Set distraction
     *
     * @param string $distraction
     *
     * @return UsagerVehicule
     */
    public function setDistraction($distraction)
    {
        $this->distraction = $distraction;

        return $this;
    }

    /**
     * Get distraction
     *
     * @return string
     */
    public function getDistraction()
    {
        return $this->distraction;
    }

    /**
     * Set malaise
     *
     * @param string $malaise
     *
     * @return UsagerVehicule
     */
    public function setMalaise($malaise)
    {
        $this->malaise = $malaise;

        return $this;
    }

    /**
     * Get malaise
     *
     * @return string
     */
    public function getMalaise()
    {
        return $this->malaise;
    }

    /**
     * Set fatique
     *
     * @param string $fatique
     *
     * @return UsagerVehicule
     */
    public function setFatique($fatique)
    {
        $this->fatique = $fatique;

        return $this;
    }

    /**
     * Get fatique
     *
     * @return string
     */
    public function getFatique()
    {
        return $this->fatique;
    }

    /**
     * Set sommeil
     *
     * @param string $sommeil
     *
     * @return UsagerVehicule
     */
    public function setSommeil($sommeil)
    {
        $this->sommeil = $sommeil;

        return $this;
    }

    /**
     * Get sommeil
     *
     * @return string
     */
    public function getSommeil()
    {
        return $this->sommeil;
    }

    /**
     * Set boisson
     *
     * @param string $boisson
     *
     * @return UsagerVehicule
     */
    public function setBoisson($boisson)
    {
        $this->boisson = $boisson;

        return $this;
    }

    /**
     * Get boisson
     *
     * @return string
     */
    public function getBoisson()
    {
        return $this->boisson;
    }

    /**
     * Set soleil
     *
     * @param string $soleil
     *
     * @return UsagerVehicule
     */
    public function setSoleil($soleil)
    {
        $this->soleil = $soleil;

        return $this;
    }

    /**
     * Get soleil
     *
     * @return string
     */
    public function getSoleil()
    {
        return $this->soleil;
    }

    /**
     * Set ebloui
     *
     * @param string $ebloui
     *
     * @return UsagerVehicule
     */
    public function setEbloui($ebloui)
    {
        $this->ebloui = $ebloui;

        return $this;
    }

    /**
     * Get ebloui
     *
     * @return string
     */
    public function getEbloui()
    {
        return $this->ebloui;
    }

    /**
     * Set infimite
     *
     * @param string $infimite
     *
     * @return UsagerVehicule
     */
    public function setInfimite($infimite)
    {
        $this->infimite = $infimite;

        return $this;
    }

    /**
     * Get infimite
     *
     * @return string
     */
    public function getInfimite()
    {
        return $this->infimite;
    }

    /**
     * Set dommageMateriel
     *
     * @param \Vigiroute\DommageMaterielBundle\Entity\DommageMateriels $dommageMateriel
     *
     * @return UsagerVehicule
     */
    public function setDommageMateriel(\Vigiroute\DommageMaterielBundle\Entity\DommageMateriels $dommageMateriel)
    {
        $this->dommageMateriel = $dommageMateriel;

        return $this;
    }

    /**
     * Get dommageMateriel
     *
     * @return \Vigiroute\DommageMaterielBundle\Entity\DommageMateriels
     */
    public function getDommageMateriel()
    {
        return $this->dommageMateriel;
    }
}
