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
     * 
     * @ORM\ManyToOne(targetEntity="Vigiroute\ControleBundle\Entity\InfoAcident", cascade={"persist", "remove"})
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
     * @return DommageMateriels
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
