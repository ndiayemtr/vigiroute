<?php

namespace Vigiroute\DommageCorporelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DommageCorporel
 *
 * @ORM\Table(name="dommage_corporel")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageCorporelBundle\Repository\DommageCorporelRepository")
 */
class DommageCorporel
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
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\ControleBundle\Entity\InfoAcident", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $infoAcident;


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
     * Set infoAcident
     *
     * @param \Vigiroute\ControleBundle\Entity\InfoAcident $infoAcident
     *
     * @return DommageCorporel
     */
    public function setInfoAcident(\Vigiroute\ControleBundle\Entity\InfoAcident $infoAcident)
    {
        $this->infoAcident = $infoAcident;

        return $this;
    }

    /**
     * Get infoAcident
     *
     * @return \Vigiroute\ControleBundle\Entity\InfoAcident
     */
    public function getInfoAcident()
    {
        return $this->infoAcident;
    }
}
