<?php

namespace Vigiroute\GendarmerieBundle\Entity;

use Vigiroute\GeographieBundle\Entity\Secteur;
use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity(repositoryClass="Vigiroute\GendarmerieBundle\Repository\MissionRepository")
 */
class Mission {

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
     * @ORM\Column(name="codeMission", type="integer")
     */
    private $codeMission;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=255)
     */
    private $objet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity="Vigiroute\GeographieBundle\Entity\Secteur", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $secteur;

    /**
     * @ORM\ManyToOne(targetEntity="Vigiroute\GendarmerieBundle\Entity\Equipe", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $equipe;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codeMission
     *
     * @param integer $codeMission
     *
     * @return Mission
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;

        return $this;
    }

    /**
     * Get codeMission
     *
     * @return int
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Mission
     */
    public function setObjet($objet) {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet() {
        return $this->objet;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Mission
     */
    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut() {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Mission
     */
    public function setDateFin($dateFin) {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin() {
        return $this->dateFin;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Mission
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
     * Set secteur
     *
     * @param \use Vigiroute\GeographieBundle\Entity\Secteur $secteur
     *
     * @return Mission
     */
    public function setSecteur(Vigiroute\GeographieBundle\Entity\Secteur $secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return \use Vigiroute\GeographieBundle\Entity\Secteur
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set equipe
     *
     * @param \Vigiroute\GendarmerieBundle\Entity\Equipe $equipe
     *
     * @return Mission
     */
    public function setEquipe(\Vigiroute\GendarmerieBundle\Entity\Equipe $equipe)
    {
        $this->equipe = $equipe;

        return $this;
    }

    /**
     * Get equipe
     *
     * @return \Vigiroute\GendarmerieBundle\Entity\Equipe
     */
    public function getEquipe()
    {
        return $this->equipe;
    }
}
