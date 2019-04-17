<?php

namespace Vigiroute\EquipementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="Vigiroute\EquipementBundle\Repository\EquipementRepository")
 */
class Equipement
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
     * @ORM\Column(name="dateAllocation", type="datetime")
     */
    private $dateAllocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRestitution", type="datetime")
     */
    private $dateRestitution;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\EquipementBundle\Entity\Webcam", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $webcam;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\EquipementBundle\Entity\Terminal", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $terminal;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\EquipementBundle\Entity\Bracelet", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $bracelet;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\UserBundle\Entity\Agent", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $agent;


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
     * Set dateAllocation
     *
     * @param \DateTime $dateAllocation
     *
     * @return Equipement
     */
    public function setDateAllocation($dateAllocation)
    {
        $this->dateAllocation = $dateAllocation;

        return $this;
    }

    /**
     * Get dateAllocation
     *
     * @return \DateTime
     */
    public function getDateAllocation()
    {
        return $this->dateAllocation;
    }

    /**
     * Set dateRestitution
     *
     * @param \DateTime $dateRestitution
     *
     * @return Equipement
     */
    public function setDateRestitution($dateRestitution)
    {
        $this->dateRestitution = $dateRestitution;

        return $this;
    }

    /**
     * Get dateRestitution
     *
     * @return \DateTime
     */
    public function getDateRestitution()
    {
        return $this->dateRestitution;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Equipement
     */
    public function setObservation($observation)
    {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * Set webcam
     *
     * @param \Vigiroute\EquipementBundle\Entity\Webcam $webcam
     *
     * @return Equipement
     */
    public function setWebcam(\Vigiroute\EquipementBundle\Entity\Webcam $webcam)
    {
        $this->webcam = $webcam;

        return $this;
    }

    /**
     * Get webcam
     *
     * @return \Vigiroute\EquipementBundle\Entity\Webcam
     */
    public function getWebcam()
    {
        return $this->webcam;
    }

    /**
     * Set terminal
     *
     * @param \Vigiroute\EquipementBundle\Entity\Terminal $terminal
     *
     * @return Equipement
     */
    public function setTerminal(\Vigiroute\EquipementBundle\Entity\Terminal $terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Get terminal
     *
     * @return \Vigiroute\EquipementBundle\Entity\Terminal
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Set bracelet
     *
     * @param \Vigiroute\EquipementBundle\Entity\Bracelet $bracelet
     *
     * @return Equipement
     */
    public function setBracelet(\Vigiroute\EquipementBundle\Entity\Bracelet $bracelet)
    {
        $this->bracelet = $bracelet;

        return $this;
    }

    /**
     * Get bracelet
     *
     * @return \Vigiroute\EquipementBundle\Entity\Bracelet
     */
    public function getBracelet()
    {
        return $this->bracelet;
    }

    /**
     * Set agent
     *
     * @param \Vigiroute\UserBundle\Entity\Agent $agent
     *
     * @return Equipement
     */
    public function setAgent(\Vigiroute\UserBundle\Entity\Agent $agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return \Vigiroute\UserBundle\Entity\Agent
     */
    public function getAgent()
    {
        return $this->agent;
    }
}
