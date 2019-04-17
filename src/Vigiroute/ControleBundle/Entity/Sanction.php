<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sanction
 *
 * @ORM\Table(name="sanction")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\SanctionRepository")
 */
class Sanction {

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
     * @ORM\Column(name="typeInfraction", type="string", length=255)
     */
    private $typeInfraction;

    /**
     * @var string
     *
     * @ORM\Column(name="categorieInfraction", type="string", length=255)
     */
    private $categorieInfraction;

    /**
     * @var int
     *
     * @ORM\Column(name="amende", type="integer")
     */
    private $amende;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Vigiroute\UserBundle\Entity\Personne", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $personne;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set typeInfraction
     *
     * @param string $typeInfraction
     *
     * @return Sanction
     */
    public function setTypeInfraction($typeInfraction) {
        $this->typeInfraction = $typeInfraction;

        return $this;
    }

    /**
     * Get typeInfraction
     *
     * @return string
     */
    public function getTypeInfraction() {
        return $this->typeInfraction;
    }

    /**
     * Set categorieInfraction
     *
     * @param string $categorieInfraction
     *
     * @return Sanction
     */
    public function setCategorieInfraction($categorieInfraction) {
        $this->categorieInfraction = $categorieInfraction;

        return $this;
    }

    /**
     * Get categorieInfraction
     *
     * @return string
     */
    public function getCategorieInfraction() {
        return $this->categorieInfraction;
    }

    /**
     * Set amende
     *
     * @param integer $amende
     *
     * @return Sanction
     */
    public function setAmende($amende) {
        $this->amende = $amende;

        return $this;
    }

    /**
     * Get amende
     *
     * @return int
     */
    public function getAmende() {
        return $this->amende;
    }


    /**
     * Set personne
     *
     * @param \Vigiroute\UserBundle\Entity\Personne $personne
     *
     * @return Sanction
     */
    public function setPersonne(\Vigiroute\UserBundle\Entity\Personne $personne)
    {
        $this->personne = $personne;

        return $this;
    }

    /**
     * Get personne
     *
     * @return \Vigiroute\UserBundle\Entity\Personne
     */
    public function getPersonne()
    {
        return $this->personne;
    }
}
