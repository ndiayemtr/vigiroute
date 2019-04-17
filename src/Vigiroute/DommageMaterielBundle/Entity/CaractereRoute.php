<?php

namespace Vigiroute\DommageMaterielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaractereRoute
 *
 * @ORM\Table(name="caractere_route")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageMaterielBundle\Repository\CaractereRouteRepository")
 */
class CaractereRoute
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
     * @ORM\Column(name="profile", type="string", length=255)
     */
    private $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="tracer", type="string", length=255)
     */
    private $tracer;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=255)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="surface", type="string", length=255)
     */
    private $surface;
    
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
     * Set profile
     *
     * @param string $profile
     *
     * @return CaractereRoute
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set tracer
     *
     * @param string $tracer
     *
     * @return CaractereRoute
     */
    public function setTracer($tracer)
    {
        $this->tracer = $tracer;

        return $this;
    }

    /**
     * Get tracer
     *
     * @return string
     */
    public function getTracer()
    {
        return $this->tracer;
    }

    /**
     * Set nature
     *
     * @param string $nature
     *
     * @return CaractereRoute
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return CaractereRoute
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set surface
     *
     * @param string $surface
     *
     * @return CaractereRoute
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * Get surface
     *
     * @return string
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set dommageMateriel
     *
     * @param \Vigiroute\DommageMaterielBundle\Entity\DommageMateriels $dommageMateriel
     *
     * @return CaractereRoute
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
