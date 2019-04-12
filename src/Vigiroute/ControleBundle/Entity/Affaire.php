<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affaire
 *
 * @ORM\Table(name="affaire")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\AffaireRepository")
 */
class Affaire
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

