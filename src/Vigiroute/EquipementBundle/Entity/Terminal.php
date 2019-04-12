<?php

namespace Vigiroute\EquipementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terminal
 *
 * @ORM\Table(name="terminal")
 * @ORM\Entity(repositoryClass="Vigiroute\EquipementBundle\Repository\TerminalRepository")
 */
class Terminal
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

