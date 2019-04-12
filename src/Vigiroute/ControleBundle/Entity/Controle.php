<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Controle
 *
 * @ORM\Table(name="controle")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\ControleRepository")
 */
class Controle
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
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;


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
     * Set numControle
     *
     * @param integer $numControle
     *
     * @return Controle
     */
    public function setNumControle($numControle)
    {
        $this->numControle = $numControle;

        return $this;
    }

    /**
     * Get numControle
     *
     * @return int
     */
    public function getNumControle()
    {
        return $this->numControle;
    }

    /**
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Controle
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Controle
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
}

