<?php

namespace Vigiroute\GendarmerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Legion
 *
 * @ORM\Table(name="legion")
 * @ORM\Entity(repositoryClass="Vigiroute\GendarmerieBundle\Repository\LegionRepository")
 */
class Legion
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

