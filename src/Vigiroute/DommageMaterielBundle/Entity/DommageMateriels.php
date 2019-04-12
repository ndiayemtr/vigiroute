<?php

namespace Vigiroute\DommageMaterielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DommageMateriels
 *
 * @ORM\Table(name="dommage_materiels")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageMaterielBundle\Repository\DommageMaterielsRepository")
 */
class DommageMateriels
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

