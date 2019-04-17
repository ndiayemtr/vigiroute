<?php

namespace Vigiroute\EquipementBundle\Entity;

use Vigiroute\EquipementBundle\Entity\Outil as UseOutil;

use Doctrine\ORM\Mapping as ORM;

/**
 * Webcam
 *
 * @ORM\Table(name="webcam")
 * @ORM\Entity(repositoryClass="Vigiroute\EquipementBundle\Repository\WebcamRepository")
 */
class Webcam extends UseOutil
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
