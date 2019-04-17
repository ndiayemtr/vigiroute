<?php

namespace Vigiroute\GendarmerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity(repositoryClass="Vigiroute\GendarmerieBundle\Repository\EquipeRepository")
 */
class Equipe
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
     * @ORM\Column(name="code", type="integer")
     */
    private $code;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDissolution", type="datetime")
     */
    private $dateDissolution;
    
    /**
     *@ORM\ManyToOne(targetEntity="Vigiroute\UserBundle\Entity\Agent", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false)
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
     * Set code
     *
     * @param integer $code
     *
     * @return Equipe
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Equipe
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
     * @return Equipe
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Equipe
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateDissolution
     *
     * @param \DateTime $dateDissolution
     *
     * @return Equipe
     */
    public function setDateDissolution($dateDissolution)
    {
        $this->dateDissolution = $dateDissolution;

        return $this;
    }

    /**
     * Get dateDissolution
     *
     * @return \DateTime
     */
    public function getDateDissolution()
    {
        return $this->dateDissolution;
    }

    /**
     * Set agent
     *
     * @param \Vigiroute\UserBundle\Entity\Agent $agent
     *
     * @return Equipe
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
