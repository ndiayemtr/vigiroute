<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfoAcident
 *
 * @ORM\Table(name="info_acident")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\InfoAcidentRepository")
 */
class InfoAcident
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
     * @ORM\Column(name="localisation", type="string", length=255)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="zone", type="string", length=255)
     */
    private $zone;

    /**
     * @var string
     *
     * @ORM\Column(name="consequence", type="string", length=255)
     */
    private $consequence;


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
     * Set localisation
     *
     * @param string $localisation
     *
     * @return InfoAcident
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set zone
     *
     * @param string $zone
     *
     * @return InfoAcident
     */
    public function setZone($zone)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set consequence
     *
     * @param string $consequence
     *
     * @return InfoAcident
     */
    public function setConsequence($consequence)
    {
        $this->consequence = $consequence;

        return $this;
    }

    /**
     * Get consequence
     *
     * @return string
     */
    public function getConsequence()
    {
        return $this->consequence;
    }
}

