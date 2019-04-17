<?php

namespace Vigiroute\GeographieBundle\Entity;

use Vigiroute\GeographieBundle\Entity\InfoLocalite as UseRegion;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="Vigiroute\GeographieBundle\Repository\RegionRepository")
 */
class Region extends UseRegion
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
     * @ORM\Column(name="nomRegion", type="string", length=255)
     */
    private $nomRegion;


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
     * Set nomRegion
     *
     * @param string $nomRegion
     *
     * @return Region
     */
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;

        return $this;
    }

    /**
     * Get nomRegion
     *
     * @return string
     */
    public function getNomRegion()
    {
        return $this->nomRegion;
    }
}
