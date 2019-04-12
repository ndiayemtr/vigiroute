<?php

namespace Vigiroute\GeographieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity(repositoryClass="Vigiroute\GeographieBundle\Repository\communeRepository")
 */
class Commune
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
}

