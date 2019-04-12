<?php

namespace Vigiroute\GeographieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoLocalite
 *
 * @ORM\Table(name="info_localite")
 * @ORM\Entity(repositoryClass="Vigiroute\GeographieBundle\Repository\InfoLocaliteRepository")
 */
class InfoLocalite
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
     * @var int
     *
     * @ORM\Column(name="telPolice", type="integer")
     */
    private $telPolice;

    /**
     * @var int
     *
     * @ORM\Column(name="telGouverneur", type="integer")
     */
    private $telGouverneur;

    /**
     * @var int
     *
     * @ORM\Column(name="telPompier", type="integer")
     */
    private $telPompier;

    /**
     * @var int
     *
     * @ORM\Column(name="telProcureur", type="integer")
     */
    private $telProcureur;
    /**
     * @var int
     *
     * @ORM\Column(name="telProcureur", type="integer")
     */
    private $telHopRegion;


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
     * @return InfoLocalite
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
     * @return InfoLocalite
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
     * Set telPolice
     *
     * @param integer $telPolice
     *
     * @return InfoLocalite
     */
    public function setTelPolice($telPolice)
    {
        $this->telPolice = $telPolice;

        return $this;
    }

    /**
     * Get telPolice
     *
     * @return int
     */
    public function getTelPolice()
    {
        return $this->telPolice;
    }

    /**
     * Set telGouverneur
     *
     * @param integer $telGouverneur
     *
     * @return InfoLocalite
     */
    public function setTelGouverneur($telGouverneur)
    {
        $this->telGouverneur = $telGouverneur;

        return $this;
    }

    /**
     * Get telGouverneur
     *
     * @return int
     */
    public function getTelGouverneur()
    {
        return $this->telGouverneur;
    }

    /**
     * Set telPompier
     *
     * @param integer $telPompier
     *
     * @return InfoLocalite
     */
    public function setTelPompier($telPompier)
    {
        $this->telPompier = $telPompier;

        return $this;
    }

    /**
     * Get telPompier
     *
     * @return int
     */
    public function getTelPompier()
    {
        return $this->telPompier;
    }

    /**
     * Set telProcureur
     *
     * @param integer $telProcureur
     *
     * @return InfoLocalite
     */
    public function setTelProcureur($telProcureur)
    {
        $this->telProcureur = $telProcureur;

        return $this;
    }

    /**
     * Get telProcureur
     *
     * @return int
     */
    public function getTelProcureur()
    {
        return $this->telProcureur;
    }
}

