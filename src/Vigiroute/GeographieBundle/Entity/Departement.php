<?php

namespace Vigiroute\GeographieBundle\Entity;

use Vigiroute\GeographieBundle\Entity\Region;
use Vigiroute\GeographieBundle\Entity\InfoLocalite as UseRegion;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="Vigiroute\GeographieBundle\Repository\DepartementRepository")
 */
class Departement extends UseRegion
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
     * @ORM\Column(name="nomDepart", type="string", length=255)
     */
    private $nomDepart;
    
    /**
     *@ORM\ManyToOne(targetEntity="Vigiroute\GeographieBundle\Entity\Region", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $Region;

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
     * Set nomDepart
     *
     * @param string $nomDepart
     *
     * @return Departement
     */
    public function setNomDepart($nomDepart)
    {
        $this->nomDepart = $nomDepart;

        return $this;
    }

    /**
     * Get nomDepart
     *
     * @return string
     */
    public function getNomDepart()
    {
        return $this->nomDepart;
    }

    /**
     * Set region
     *
     * @param \Vigiroute\GeographieBundle\Entity\Region $region
     *
     * @return Departement
     */
    public function setRegion(\Vigiroute\GeographieBundle\Entity\Region $region)
    {
        $this->Region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Vigiroute\GeographieBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->Region;
    }
}
