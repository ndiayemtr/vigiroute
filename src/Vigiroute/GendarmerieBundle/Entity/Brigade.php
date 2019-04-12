<?php

namespace Vigiroute\GendarmerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brigade
 *
 * @ORM\Table(name="brigade")
 * @ORM\Entity(repositoryClass="Vigiroute\GendarmerieBundle\Repository\BrigadeRepository")
 */
class Brigade
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

