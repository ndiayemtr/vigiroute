<?php

namespace Vigiroute\GendarmerieBundle\Entity;

use Vigiroute\GendarmerieBundle\Entity\InfoCommunGend as UseInfo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Compagnie
 *
 * @ORM\Table(name="compagnie")
 * @ORM\Entity(repositoryClass="Vigiroute\GendarmerieBundle\Repository\CompagnieRepository")
 */
class Compagnie extends UseInfo {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Vigiroute\GendarmerieBundle\Entity\Legion", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $legion;

    /**
     * @ORM\OneToOne(targetEntity="Vigiroute\GeographieBundle\Entity\Region", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $region;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set legion
     *
     * @param \Vigiroute\GendarmerieBundle\Entity\Legion $legion
     *
     * @return Compagnie
     */
    public function setLegion(\Vigiroute\GendarmerieBundle\Entity\Legion $legion)
    {
        $this->legion = $legion;

        return $this;
    }

    /**
     * Get legion
     *
     * @return \Vigiroute\GendarmerieBundle\Entity\Legion
     */
    public function getLegion()
    {
        return $this->legion;
    }

    /**
     * Set region
     *
     * @param \Vigiroute\GeographieBundle\Entity\Region $region
     *
     * @return Compagnie
     */
    public function setRegion(\Vigiroute\GeographieBundle\Entity\Region $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Vigiroute\GeographieBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }
}
