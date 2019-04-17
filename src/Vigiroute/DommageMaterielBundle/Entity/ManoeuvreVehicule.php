<?php

namespace Vigiroute\DommageMaterielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ManoeuvreVehicule
 *
 * @ORM\Table(name="manoeuvre_vehicule")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageMaterielBundle\Repository\ManoeuvreVehiculeRepository")
 */
class ManoeuvreVehicule
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
     * @ORM\Column(name="circuler", type="string", length=255)
     */
    private $circuler;

    /**
     * @var string
     *
     * @ORM\Column(name="deposer", type="string", length=255)
     */
    private $deposer;

    /**
     * @var string
     *
     * @ORM\Column(name="seRabattre", type="string", length=255)
     */
    private $seRabattre;

    /**
     * @var string
     *
     * @ORM\Column(name="roullerDeFont", type="string", length=255)
     */
    private $roullerDeFont;

    /**
     * @var string
     *
     * @ORM\Column(name="reculer", type="string", length=255)
     */
    private $reculer;

    /**
     * @var string
     *
     * @ORM\Column(name="effectuerDemiTour", type="string", length=255)
     */
    private $effectuerDemiTour;

    /**
     * @var string
     *
     * @ORM\Column(name="tourner", type="string", length=255)
     */
    private $tourner;

    /**
     * @var string
     *
     * @ORM\Column(name="freinerBrusque", type="string", length=255)
     */
    private $freinerBrusque;

    /**
     * @var string
     *
     * @ORM\Column(name="deraper", type="string", length=255)
     */
    private $deraper;

    /**
     * @var string
     *
     * @ORM\Column(name="stationnement", type="string", length=255)
     */
    private $stationnement;

    /**
     * @var string
     *
     * @ORM\Column(name="circulation", type="string", length=255)
     */
    private $circulation;

    /**
     * @var string
     *
     * @ORM\Column(name="ecartCote", type="string", length=255)
     */
    private $ecartCote;

    /**
     * @var string
     *
     * @ORM\Column(name="arretChausse", type="string", length=255)
     */
    private $arretChausse;

    /**
     * @var string
     *
     * @ORM\Column(name="signaler", type="string", length=255)
     */
    private $signaler;

    /**
     * @var string
     *
     * @ORM\Column(name="avertissement", type="string", length=255)
     */
    private $avertissement;

    /**
     * @var string
     *
     * @ORM\Column(name="obstacleHeurter", type="string", length=255)
     */
    private $obstacleHeurter;

    /**
     * @var string
     *
     * @ORM\Column(name="obstacleSignaler", type="string", length=255)
     */
    private $obstacleSignaler;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\DommageMaterielBundle\Entity\DommageMateriels", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dommageMateriel;


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
     * Set circuler
     *
     * @param string $circuler
     *
     * @return ManoeuvreVehicule
     */
    public function setCirculer($circuler)
    {
        $this->circuler = $circuler;

        return $this;
    }

    /**
     * Get circuler
     *
     * @return string
     */
    public function getCirculer()
    {
        return $this->circuler;
    }

    /**
     * Set deposer
     *
     * @param string $deposer
     *
     * @return ManoeuvreVehicule
     */
    public function setDeposer($deposer)
    {
        $this->deposer = $deposer;

        return $this;
    }

    /**
     * Get deposer
     *
     * @return string
     */
    public function getDeposer()
    {
        return $this->deposer;
    }

    /**
     * Set seRabattre
     *
     * @param string $seRabattre
     *
     * @return ManoeuvreVehicule
     */
    public function setSeRabattre($seRabattre)
    {
        $this->seRabattre = $seRabattre;

        return $this;
    }

    /**
     * Get seRabattre
     *
     * @return string
     */
    public function getSeRabattre()
    {
        return $this->seRabattre;
    }

    /**
     * Set roullerDeFont
     *
     * @param string $roullerDeFont
     *
     * @return ManoeuvreVehicule
     */
    public function setRoullerDeFont($roullerDeFont)
    {
        $this->roullerDeFont = $roullerDeFont;

        return $this;
    }

    /**
     * Get roullerDeFont
     *
     * @return string
     */
    public function getRoullerDeFont()
    {
        return $this->roullerDeFont;
    }

    /**
     * Set reculer
     *
     * @param string $reculer
     *
     * @return ManoeuvreVehicule
     */
    public function setReculer($reculer)
    {
        $this->reculer = $reculer;

        return $this;
    }

    /**
     * Get reculer
     *
     * @return string
     */
    public function getReculer()
    {
        return $this->reculer;
    }

    /**
     * Set effectuerDemiTour
     *
     * @param string $effectuerDemiTour
     *
     * @return ManoeuvreVehicule
     */
    public function setEffectuerDemiTour($effectuerDemiTour)
    {
        $this->effectuerDemiTour = $effectuerDemiTour;

        return $this;
    }

    /**
     * Get effectuerDemiTour
     *
     * @return string
     */
    public function getEffectuerDemiTour()
    {
        return $this->effectuerDemiTour;
    }

    /**
     * Set tourner
     *
     * @param string $tourner
     *
     * @return ManoeuvreVehicule
     */
    public function setTourner($tourner)
    {
        $this->tourner = $tourner;

        return $this;
    }

    /**
     * Get tourner
     *
     * @return string
     */
    public function getTourner()
    {
        return $this->tourner;
    }

    /**
     * Set freinerBrusque
     *
     * @param string $freinerBrusque
     *
     * @return ManoeuvreVehicule
     */
    public function setFreinerBrusque($freinerBrusque)
    {
        $this->freinerBrusque = $freinerBrusque;

        return $this;
    }

    /**
     * Get freinerBrusque
     *
     * @return string
     */
    public function getFreinerBrusque()
    {
        return $this->freinerBrusque;
    }

    /**
     * Set deraper
     *
     * @param string $deraper
     *
     * @return ManoeuvreVehicule
     */
    public function setDeraper($deraper)
    {
        $this->deraper = $deraper;

        return $this;
    }

    /**
     * Get deraper
     *
     * @return string
     */
    public function getDeraper()
    {
        return $this->deraper;
    }

    /**
     * Set stationnement
     *
     * @param string $stationnement
     *
     * @return ManoeuvreVehicule
     */
    public function setStationnement($stationnement)
    {
        $this->stationnement = $stationnement;

        return $this;
    }

    /**
     * Get stationnement
     *
     * @return string
     */
    public function getStationnement()
    {
        return $this->stationnement;
    }

    /**
     * Set circulation
     *
     * @param string $circulation
     *
     * @return ManoeuvreVehicule
     */
    public function setCirculation($circulation)
    {
        $this->circulation = $circulation;

        return $this;
    }

    /**
     * Get circulation
     *
     * @return string
     */
    public function getCirculation()
    {
        return $this->circulation;
    }

    /**
     * Set ecartCote
     *
     * @param string $ecartCote
     *
     * @return ManoeuvreVehicule
     */
    public function setEcartCote($ecartCote)
    {
        $this->ecartCote = $ecartCote;

        return $this;
    }

    /**
     * Get ecartCote
     *
     * @return string
     */
    public function getEcartCote()
    {
        return $this->ecartCote;
    }

    /**
     * Set arretChausse
     *
     * @param string $arretChausse
     *
     * @return ManoeuvreVehicule
     */
    public function setArretChausse($arretChausse)
    {
        $this->arretChausse = $arretChausse;

        return $this;
    }

    /**
     * Get arretChausse
     *
     * @return string
     */
    public function getArretChausse()
    {
        return $this->arretChausse;
    }

    /**
     * Set signaler
     *
     * @param string $signaler
     *
     * @return ManoeuvreVehicule
     */
    public function setSignaler($signaler)
    {
        $this->signaler = $signaler;

        return $this;
    }

    /**
     * Get signaler
     *
     * @return string
     */
    public function getSignaler()
    {
        return $this->signaler;
    }

    /**
     * Set avertissement
     *
     * @param string $avertissement
     *
     * @return ManoeuvreVehicule
     */
    public function setAvertissement($avertissement)
    {
        $this->avertissement = $avertissement;

        return $this;
    }

    /**
     * Get avertissement
     *
     * @return string
     */
    public function getAvertissement()
    {
        return $this->avertissement;
    }

    /**
     * Set obstacleHeurter
     *
     * @param string $obstacleHeurter
     *
     * @return ManoeuvreVehicule
     */
    public function setObstacleHeurter($obstacleHeurter)
    {
        $this->obstacleHeurter = $obstacleHeurter;

        return $this;
    }

    /**
     * Get obstacleHeurter
     *
     * @return string
     */
    public function getObstacleHeurter()
    {
        return $this->obstacleHeurter;
    }

    /**
     * Set obstacleSignaler
     *
     * @param string $obstacleSignaler
     *
     * @return ManoeuvreVehicule
     */
    public function setObstacleSignaler($obstacleSignaler)
    {
        $this->obstacleSignaler = $obstacleSignaler;

        return $this;
    }

    /**
     * Get obstacleSignaler
     *
     * @return string
     */
    public function getObstacleSignaler()
    {
        return $this->obstacleSignaler;
    }

    /**
     * Set dommageMateriel
     *
     * @param \Vigiroute\DommageMaterielBundle\Entity\DommageMateriels $dommageMateriel
     *
     * @return ManoeuvreVehicule
     */
    public function setDommageMateriel(\Vigiroute\DommageMaterielBundle\Entity\DommageMateriels $dommageMateriel)
    {
        $this->dommageMateriel = $dommageMateriel;

        return $this;
    }

    /**
     * Get dommageMateriel
     *
     * @return \Vigiroute\DommageMaterielBundle\Entity\DommageMateriels
     */
    public function getDommageMateriel()
    {
        return $this->dommageMateriel;
    }
}
