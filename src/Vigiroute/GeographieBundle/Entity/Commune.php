<?php

namespace Vigiroute\GeographieBundle\Entity;

use Vigiroute\GeographieBundle\Entity\InfoLocalite as UseRegion;

use Doctrine\ORM\Mapping as ORM;

/**
 * commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity(repositoryClass="Vigiroute\GeographieBundle\Repository\communeRepository")
 */
class Commune extends UseRegion
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
     * @ORM\Column(name="nomCommune", type="string", length=255)
     */
    private $nomCommune;
    
    /**
     *@ORM\ManyToOne(targetEntity="Vigiroute\GeographieBundle\Entity\Departement", cascade={"persist", "remove"})
     *@ORM\JoinColumn(nullable=false)
     */
    private $departement;


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
     * Set nomCommune
     *
     * @param string $nomCommune
     *
     * @return commune
     */
    public function setNomCommune($nomCommune)
    {
        $this->nomCommune = $nomCommune;

        return $this;
    }

    /**
     * Get nomCommune
     *
     * @return string
     */
    public function getNomCommune()
    {
        return $this->nomCommune;
    }

    /**
     * Set departement
     *
     * @param \Vigiroute\GeographieBundle\Entity\Departement $departement
     *
     * @return Commune
     */
    public function setDepartement(\Vigiroute\GeographieBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \Vigiroute\GeographieBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
