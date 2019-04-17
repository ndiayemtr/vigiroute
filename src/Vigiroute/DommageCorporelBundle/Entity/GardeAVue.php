<?php

namespace Vigiroute\DommageCorporelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GardeAVue
 *
 * @ORM\Table(name="garde_a_vue")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageCorporelBundle\Repository\GardeAVueRepository")
 */
class GardeAVue
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;
    
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Vigiroute\DommageCorporelBundle\Entity\DommageCorporel", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dommageCorporel;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return GardeAVue
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return GardeAVue
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dommageCorporel
     *
     * @param \Vigiroute\DommageCorporelBundle\Entity\DommageCorporel $dommageCorporel
     *
     * @return GardeAVue
     */
    public function setDommageCorporel(\Vigiroute\DommageCorporelBundle\Entity\DommageCorporel $dommageCorporel)
    {
        $this->dommageCorporel = $dommageCorporel;

        return $this;
    }

    /**
     * Get dommageCorporel
     *
     * @return \Vigiroute\DommageCorporelBundle\Entity\DommageCorporel
     */
    public function getDommageCorporel()
    {
        return $this->dommageCorporel;
    }
}
