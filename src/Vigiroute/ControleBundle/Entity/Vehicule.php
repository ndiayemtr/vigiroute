<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\VehiculeRepository")
 */
class Vehicule
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
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=255)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="immatriculation", type="string", length=255)
     */
    private $immatriculation;

    /**
     * @var string
     *
     * @ORM\Column(name="paysImmatriculer", type="string", length=255)
     */
    private $paysImmatriculer;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;
    
    /**
      * 
     *@ORM\OneToOne(targetEntity="Vigiroute\ControleBundle\Entity\Contrevention", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $contrevention;


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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Vehicule
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set marque
     *
     * @param string $marque
     *
     * @return Vehicule
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Vehicule
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set immatriculation
     *
     * @param string $immatriculation
     *
     * @return Vehicule
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set paysImmatriculer
     *
     * @param string $paysImmatriculer
     *
     * @return Vehicule
     */
    public function setPaysImmatriculer($paysImmatriculer)
    {
        $this->paysImmatriculer = $paysImmatriculer;

        return $this;
    }

    /**
     * Get paysImmatriculer
     *
     * @return string
     */
    public function getPaysImmatriculer()
    {
        return $this->paysImmatriculer;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Vehicule
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
     * Set contrevention
     *
     * @param \Vigiroute\ControleBundle\Entity\Contrevention $contrevention
     *
     * @return Vehicule
     */
    public function setContrevention(\Vigiroute\ControleBundle\Entity\Contrevention $contrevention)
    {
        $this->contrevention = $contrevention;

        return $this;
    }

    /**
     * Get contrevention
     *
     * @return \Vigiroute\ControleBundle\Entity\Contrevention
     */
    public function getContrevention()
    {
        return $this->contrevention;
    }
}
