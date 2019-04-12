<?php

namespace Vigiroute\GeographieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="Vigiroute\GeographieBundle\Repository\DepartementRepository")
 */
class Departement
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
}

