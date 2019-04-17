<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affaire
 *
 * @ORM\Table(name="affaire")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\AffaireRepository")
 */
class Affaire {

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
     * @ORM\Column(name="categorie", type="string", columnDefinition="enum('Incident sans Dommages', 'Accident Dommages Matériels Uniquement', 'Accident Dommages Corporels et Matériels')")
     */
    private $categorie;

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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Affaire
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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Affaire
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
     * @return Affaire
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
     * @return Affaire
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
