<?php

namespace Vigiroute\DommageCorporelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConstantVehicule
 *
 * @ORM\Table(name="constant_vehicule")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageCorporelBundle\Repository\ConstantVehiculeRepository")
 */
class ConstantVehicule
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
     * @ORM\Column(name="dimLong", type="decimal", precision=10, scale=2)
     */
    private $dimLong;

    /**
     * @var string
     *
     * @ORM\Column(name="dimLarg", type="decimal", precision=10, scale=2)
     */
    private $dimLarg;

    /**
     * @var string
     *
     * @ORM\Column(name="dimHaut", type="decimal", precision=10, scale=2)
     */
    private $dimHaut;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreRoues", type="integer")
     */
    private $nbreRoues;

    /**
     * @var string
     *
     * @ORM\Column(name="typePneux", type="string", length=255)
     */
    private $typePneux;

    /**
     * @var int
     *
     * @ORM\Column(name="indicateurVitesse", type="integer")
     */
    private $indicateurVitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="levierVitesse", type="string", length=255)
     */
    private $levierVitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="frein", type="string", length=255)
     */
    private $frein;

    /**
     * @var string
     *
     * @ORM\Column(name="avertissement", type="string", length=255)
     */
    private $avertissement;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrePlace", type="integer")
     */
    private $nbrePlace;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreOccupant", type="integer")
     */
    private $nbreOccupant;

    /**
     * @var string
     *
     * @ORM\Column(name="chargement", type="string", length=255)
     */
    private $chargement;

    /**
     * @var string
     *
     * @ORM\Column(name="accessoire", type="string", length=255)
     */
    private $accessoire;

    /**
     * @var string
     *
     * @ORM\Column(name="kmCompteur", type="string", length=255)
     */
    private $kmCompteur;

    /**
     * @var string
     *
     * @ORM\Column(name="traces", type="string", length=255)
     */
    private $traces;

    /**
     * @var string
     *
     * @ORM\Column(name="debris", type="string", length=255)
     */
    private $debris;

    /**
     * @var string
     *
     * @ORM\Column(name="pointDChoc", type="string", length=255)
     */
    private $pointDChoc;

    /**
     * @var string
     *
     * @ORM\Column(name="degatApparent", type="string", length=255)
     */
    private $degatApparent;


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
     * Set dimLong
     *
     * @param string $dimLong
     *
     * @return ConstantVehicule
     */
    public function setDimLong($dimLong)
    {
        $this->dimLong = $dimLong;

        return $this;
    }

    /**
     * Get dimLong
     *
     * @return string
     */
    public function getDimLong()
    {
        return $this->dimLong;
    }

    /**
     * Set dimLarg
     *
     * @param string $dimLarg
     *
     * @return ConstantVehicule
     */
    public function setDimLarg($dimLarg)
    {
        $this->dimLarg = $dimLarg;

        return $this;
    }

    /**
     * Get dimLarg
     *
     * @return string
     */
    public function getDimLarg()
    {
        return $this->dimLarg;
    }

    /**
     * Set dimHaut
     *
     * @param string $dimHaut
     *
     * @return ConstantVehicule
     */
    public function setDimHaut($dimHaut)
    {
        $this->dimHaut = $dimHaut;

        return $this;
    }

    /**
     * Get dimHaut
     *
     * @return string
     */
    public function getDimHaut()
    {
        return $this->dimHaut;
    }

    /**
     * Set nbreRoues
     *
     * @param integer $nbreRoues
     *
     * @return ConstantVehicule
     */
    public function setNbreRoues($nbreRoues)
    {
        $this->nbreRoues = $nbreRoues;

        return $this;
    }

    /**
     * Get nbreRoues
     *
     * @return int
     */
    public function getNbreRoues()
    {
        return $this->nbreRoues;
    }

    /**
     * Set typePneux
     *
     * @param string $typePneux
     *
     * @return ConstantVehicule
     */
    public function setTypePneux($typePneux)
    {
        $this->typePneux = $typePneux;

        return $this;
    }

    /**
     * Get typePneux
     *
     * @return string
     */
    public function getTypePneux()
    {
        return $this->typePneux;
    }

    /**
     * Set indicateurVitesse
     *
     * @param integer $indicateurVitesse
     *
     * @return ConstantVehicule
     */
    public function setIndicateurVitesse($indicateurVitesse)
    {
        $this->indicateurVitesse = $indicateurVitesse;

        return $this;
    }

    /**
     * Get indicateurVitesse
     *
     * @return int
     */
    public function getIndicateurVitesse()
    {
        return $this->indicateurVitesse;
    }

    /**
     * Set levierVitesse
     *
     * @param string $levierVitesse
     *
     * @return ConstantVehicule
     */
    public function setLevierVitesse($levierVitesse)
    {
        $this->levierVitesse = $levierVitesse;

        return $this;
    }

    /**
     * Get levierVitesse
     *
     * @return string
     */
    public function getLevierVitesse()
    {
        return $this->levierVitesse;
    }

    /**
     * Set frein
     *
     * @param string $frein
     *
     * @return ConstantVehicule
     */
    public function setFrein($frein)
    {
        $this->frein = $frein;

        return $this;
    }

    /**
     * Get frein
     *
     * @return string
     */
    public function getFrein()
    {
        return $this->frein;
    }

    /**
     * Set avertissement
     *
     * @param string $avertissement
     *
     * @return ConstantVehicule
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
     * Set nbrePlace
     *
     * @param integer $nbrePlace
     *
     * @return ConstantVehicule
     */
    public function setNbrePlace($nbrePlace)
    {
        $this->nbrePlace = $nbrePlace;

        return $this;
    }

    /**
     * Get nbrePlace
     *
     * @return int
     */
    public function getNbrePlace()
    {
        return $this->nbrePlace;
    }

    /**
     * Set nbreOccupant
     *
     * @param integer $nbreOccupant
     *
     * @return ConstantVehicule
     */
    public function setNbreOccupant($nbreOccupant)
    {
        $this->nbreOccupant = $nbreOccupant;

        return $this;
    }

    /**
     * Get nbreOccupant
     *
     * @return int
     */
    public function getNbreOccupant()
    {
        return $this->nbreOccupant;
    }

    /**
     * Set chargement
     *
     * @param string $chargement
     *
     * @return ConstantVehicule
     */
    public function setChargement($chargement)
    {
        $this->chargement = $chargement;

        return $this;
    }

    /**
     * Get chargement
     *
     * @return string
     */
    public function getChargement()
    {
        return $this->chargement;
    }

    /**
     * Set accessoire
     *
     * @param string $accessoire
     *
     * @return ConstantVehicule
     */
    public function setAccessoire($accessoire)
    {
        $this->accessoire = $accessoire;

        return $this;
    }

    /**
     * Get accessoire
     *
     * @return string
     */
    public function getAccessoire()
    {
        return $this->accessoire;
    }

    /**
     * Set kmCompteur
     *
     * @param string $kmCompteur
     *
     * @return ConstantVehicule
     */
    public function setKmCompteur($kmCompteur)
    {
        $this->kmCompteur = $kmCompteur;

        return $this;
    }

    /**
     * Get kmCompteur
     *
     * @return string
     */
    public function getKmCompteur()
    {
        return $this->kmCompteur;
    }

    /**
     * Set traces
     *
     * @param string $traces
     *
     * @return ConstantVehicule
     */
    public function setTraces($traces)
    {
        $this->traces = $traces;

        return $this;
    }

    /**
     * Get traces
     *
     * @return string
     */
    public function getTraces()
    {
        return $this->traces;
    }

    /**
     * Set debris
     *
     * @param string $debris
     *
     * @return ConstantVehicule
     */
    public function setDebris($debris)
    {
        $this->debris = $debris;

        return $this;
    }

    /**
     * Get debris
     *
     * @return string
     */
    public function getDebris()
    {
        return $this->debris;
    }

    /**
     * Set pointDChoc
     *
     * @param string $pointDChoc
     *
     * @return ConstantVehicule
     */
    public function setPointDChoc($pointDChoc)
    {
        $this->pointDChoc = $pointDChoc;

        return $this;
    }

    /**
     * Get pointDChoc
     *
     * @return string
     */
    public function getPointDChoc()
    {
        return $this->pointDChoc;
    }

    /**
     * Set degatApparent
     *
     * @param string $degatApparent
     *
     * @return ConstantVehicule
     */
    public function setDegatApparent($degatApparent)
    {
        $this->degatApparent = $degatApparent;

        return $this;
    }

    /**
     * Get degatApparent
     *
     * @return string
     */
    public function getDegatApparent()
    {
        return $this->degatApparent;
    }
}

