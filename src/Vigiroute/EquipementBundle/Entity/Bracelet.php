<?php

namespace Vigiroute\EquipementBundle\Entity;

use Vigiroute\EquipementBundle\Entity\Outil as UseOutil;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bracelet
 *
 * @ORM\Table(name="bracelet")
 * @ORM\Entity(repositoryClass="Vigiroute\EquipementBundle\Repository\BraceletRepository")
 */
class Bracelet extends UseOutil
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
