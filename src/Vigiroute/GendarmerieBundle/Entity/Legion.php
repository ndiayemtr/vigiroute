<?php

namespace Vigiroute\GendarmerieBundle\Entity;

use Vigiroute\GeographieBundle\Entity\Departement;

use Vigiroute\GendarmerieBundle\Entity\InfoCommunGend as UseInfo;

use Doctrine\ORM\Mapping as ORM;

/**
 * Legion
 *
 * @ORM\Table(name="legion")
 * @ORM\Entity(repositoryClass="Vigiroute\GendarmerieBundle\Repository\LegionRepository")
 */
class Legion extends UseInfo
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
     *@ORM\ManyToOne(targetEntity="Vigiroute\GeographieBundle\Entity\Region", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $region;


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
     * Set region
     *
     * @param \Vigiroute\GeographieBundle\Entity\Region $region
     *
     * @return Legion
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
