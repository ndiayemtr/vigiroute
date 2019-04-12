<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrevention
 *
 * @ORM\Table(name="contrevention")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\ContreventionRepository")
 */
class Contrevention
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

