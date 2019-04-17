<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Piece
 *
 * @ORM\Table(name="piece")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\PieceRepository")
 */
class Piece
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
     * @ORM\Column(name="mumeroPiece", type="string", length=255)
     */
    private $mumeroPiece;

    /**
     * @var string
     *
     * @ORM\Column(name="paysDelivrance", type="string", length=255)
     */
    private $paysDelivrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDelivrance", type="datetime")
     */
    private $dateDelivrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinValide", type="datetime")
     */
    private $dateFinValide;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\ControleBundle\Entity\Vehicule", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicule;


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
     * Set mumeroPiece
     *
     * @param string $mumeroPiece
     *
     * @return Piece
     */
    public function setMumeroPiece($mumeroPiece)
    {
        $this->mumeroPiece = $mumeroPiece;

        return $this;
    }

    /**
     * Get mumeroPiece
     *
     * @return string
     */
    public function getMumeroPiece()
    {
        return $this->mumeroPiece;
    }

    /**
     * Set paysDelivrance
     *
     * @param string $paysDelivrance
     *
     * @return Piece
     */
    public function setPaysDelivrance($paysDelivrance)
    {
        $this->paysDelivrance = $paysDelivrance;

        return $this;
    }

    /**
     * Get paysDelivrance
     *
     * @return string
     */
    public function getPaysDelivrance()
    {
        return $this->paysDelivrance;
    }

    /**
     * Set dateDelivrance
     *
     * @param \DateTime $dateDelivrance
     *
     * @return Piece
     */
    public function setDateDelivrance($dateDelivrance)
    {
        $this->dateDelivrance = $dateDelivrance;

        return $this;
    }

    /**
     * Get dateDelivrance
     *
     * @return \DateTime
     */
    public function getDateDelivrance()
    {
        return $this->dateDelivrance;
    }

    /**
     * Set dateFinValide
     *
     * @param \DateTime $dateFinValide
     *
     * @return Piece
     */
    public function setDateFinValide($dateFinValide)
    {
        $this->dateFinValide = $dateFinValide;

        return $this;
    }

    /**
     * Get dateFinValide
     *
     * @return \DateTime
     */
    public function getDateFinValide()
    {
        return $this->dateFinValide;
    }

    /**
     * Set vehicule
     *
     * @param \Vigiroute\ControleBundle\Entity\Vehicule $vehicule
     *
     * @return Piece
     */
    public function setVehicule(\Vigiroute\ControleBundle\Entity\Vehicule $vehicule)
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    /**
     * Get vehicule
     *
     * @return \Vigiroute\ControleBundle\Entity\Vehicule
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }
}
