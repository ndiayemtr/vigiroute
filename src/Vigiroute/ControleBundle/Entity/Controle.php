<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Controle
 *
 * @ORM\Table(name="controle")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\ControleRepository")
 */
class Controle {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numControle", type="integer")
     */
    private $numControle;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255)
     */
    private $lieu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateControle", type="datetime")
     */
    private $dateControle;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Vigiroute\UserBundle\Entity\Agent", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $agent;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set numControle
     *
     * @param integer $numControle
     *
     * @return Controle
     */
    public function setNumControle($numControle) {
        $this->numControle = $numControle;

        return $this;
    }

    /**
     * Get numControle
     *
     * @return int
     */
    public function getNumControle() {
        return $this->numControle;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Controle
     */
    public function setLieu($lieu) {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu() {
        return $this->lieu;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Controle
     */
    public function setObservation($observation) {
        $this->observation = $observation;

        return $this;
    }

    /**
     * Get observation
     *
     * @return string
     */
    public function getObservation() {
        return $this->observation;
    }


    /**
     * Set dateControle
     *
     * @param \DateTime $dateControle
     *
     * @return Controle
     */
    public function setDateControle($dateControle)
    {
        $this->dateControle = $dateControle;

        return $this;
    }

    /**
     * Get dateControle
     *
     * @return \DateTime
     */
    public function getDateControle()
    {
        return $this->dateControle;
    }

    /**
     * Set agent
     *
     * @param \Vigiroute\UserBundle\Entity\Agent $agent
     *
     * @return Controle
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
