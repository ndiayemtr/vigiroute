<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrevention
 *
 * @ORM\Table(name="contrevention")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\ContreventionRepository")
 */
class Contrevention {

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
     * @ORM\Column(name="resume", type="string", length=255)
     */
    private $resume;

    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\ControleBundle\Entity\Controle", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $controle;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Contrevention
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
     * Set resume
     *
     * @param string $resume
     *
     * @return Contrevention
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set controle
     *
     * @param \Vigiroute\ControleBundle\Entity\Controle $controle
     *
     * @return Contrevention
     */
    public function setControle(\Vigiroute\ControleBundle\Entity\Controle $controle)
    {
        $this->controle = $controle;

        return $this;
    }

    /**
     * Get controle
     *
     * @return \Vigiroute\ControleBundle\Entity\Controle
     */
    public function getControle()
    {
        return $this->controle;
    }
}
