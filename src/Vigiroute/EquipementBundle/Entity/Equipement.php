<?php

namespace Vigiroute\EquipementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipement
 *
 * @ORM\Table(name="equipement")
 * @ORM\Entity(repositoryClass="Vigiroute\EquipementBundle\Repository\EquipementRepository")
 */
class Equipement
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateAllocation", type="datetime")
     */
    private $dateAllocation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRestitution", type="datetime")
     */
    private $dateRestitution;

    /**
     * @var string
     *
     * @ORM\Column(name="observation", type="string", length=255)
     */
    private $observation;


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
     * Set dateAllocation
     *
     * @param \DateTime $dateAllocation
     *
     * @return Equipement
     */
    public function setDateAllocation($dateAllocation)
    {
        $this->dateAllocation = $dateAllocation;

        return $this;
    }

    /**
     * Get dateAllocation
     *
     * @return \DateTime
     */
    public function getDateAllocation()
    {
        return $this->dateAllocation;
    }

    /**
     * Set dateRestitution
     *
     * @param \DateTime $dateRestitution
     *
     * @return Equipement
     */
    public function setDateRestitution($dateRestitution)
    {
        $this->dateRestitution = $dateRestitution;

        return $this;
    }

    /**
     * Get dateRestitution
     *
     * @return \DateTime
     */
    public function getDateRestitution()
    {
        return $this->dateRestitution;
    }

    /**
     * Set observation
     *
     * @param string $observation
     *
     * @return Equipement
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
}

