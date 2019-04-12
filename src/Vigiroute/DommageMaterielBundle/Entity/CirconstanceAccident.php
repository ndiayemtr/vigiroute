<?php

namespace Vigiroute\DommageMaterielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CirconstanceAccident
 *
 * @ORM\Table(name="circonstance_accident")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageMaterielBundle\Repository\CirconstanceAccidentRepository")
 */
class CirconstanceAccident
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
     * @ORM\Column(name="moment", type="string", length=255)
     */
    private $moment;

    /**
     * @var string
     *
     * @ORM\Column(name="temps", type="string", length=255)
     */
    private $temps;

    /**
     * @var string
     *
     * @ORM\Column(name="eclairagePublic", type="string", length=255)
     */
    private $eclairagePublic;

    /**
     * @var string
     *
     * @ORM\Column(name="topographie", type="string", length=255)
     */
    private $topographie;


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
     * Set moment
     *
     * @param string $moment
     *
     * @return CirconstanceAccident
     */
    public function setMoment($moment)
    {
        $this->moment = $moment;

        return $this;
    }

    /**
     * Get moment
     *
     * @return string
     */
    public function getMoment()
    {
        return $this->moment;
    }

    /**
     * Set temps
     *
     * @param string $temps
     *
     * @return CirconstanceAccident
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps
     *
     * @return string
     */
    public function getTemps()
    {
        return $this->temps;
    }

    /**
     * Set eclairagePublic
     *
     * @param string $eclairagePublic
     *
     * @return CirconstanceAccident
     */
    public function setEclairagePublic($eclairagePublic)
    {
        $this->eclairagePublic = $eclairagePublic;

        return $this;
    }

    /**
     * Get eclairagePublic
     *
     * @return string
     */
    public function getEclairagePublic()
    {
        return $this->eclairagePublic;
    }

    /**
     * Set topographie
     *
     * @param string $topographie
     *
     * @return CirconstanceAccident
     */
    public function setTopographie($topographie)
    {
        $this->topographie = $topographie;

        return $this;
    }

    /**
     * Get topographie
     *
     * @return string
     */
    public function getTopographie()
    {
        return $this->topographie;
    }
}

