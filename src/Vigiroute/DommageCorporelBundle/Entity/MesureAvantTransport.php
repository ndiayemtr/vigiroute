<?php

namespace Vigiroute\DommageCorporelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MesureAvantTransport
 *
 * @ORM\Table(name="mesure_avant_transport")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageCorporelBundle\Repository\MesureAvantTransportRepository")
 */
class MesureAvantTransport {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cr", type="string", length=255)
     */
    private $cr;

    /**
     * @var string
     *
     * @ORM\Column(name="infirmerie", type="string", length=255)
     */
    private $infirmerie;

    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\DommageCorporelBundle\Entity\OperationCorporel", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $operationCorporel;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cr
     *
     * @param string $cr
     *
     * @return MesureAvantTransport
     */
    public function setCr($cr) {
        $this->cr = $cr;

        return $this;
    }

    /**
     * Get cr
     *
     * @return string
     */
    public function getCr() {
        return $this->cr;
    }

    /**
     * Set infirmerie
     *
     * @param string $infirmerie
     *
     * @return MesureAvantTransport
     */
    public function setInfirmerie($infirmerie) {
        $this->infirmerie = $infirmerie;

        return $this;
    }

    /**
     * Get infirmerie
     *
     * @return string
     */
    public function getInfirmerie() {
        return $this->infirmerie;
    }


    /**
     * Set operationCorporel
     *
     * @param \Vigiroute\DommageCorporelBundle\Entity\OperationCorporel $operationCorporel
     *
     * @return MesureAvantTransport
     */
    public function setOperationCorporel(\Vigiroute\DommageCorporelBundle\Entity\OperationCorporel $operationCorporel)
    {
        $this->operationCorporel = $operationCorporel;

        return $this;
    }

    /**
     * Get operationCorporel
     *
     * @return \Vigiroute\DommageCorporelBundle\Entity\OperationCorporel
     */
    public function getOperationCorporel()
    {
        return $this->operationCorporel;
    }
}
