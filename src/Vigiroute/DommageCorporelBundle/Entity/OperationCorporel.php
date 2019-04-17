<?php

namespace Vigiroute\DommageCorporelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperationCorporel
 *
 * @ORM\Table(name="operation_corporel")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageCorporelBundle\Repository\OperationCorporelRepository")
 */
class OperationCorporel {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAlerte", type="datetime")
     */
    private $dateAlerte;

    /**
     * @var string
     *
     * @ORM\Column(name="origineAlerte", type="string", length=255)
     */
    private $origineAlerte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateArriver", type="datetime")
     */
    private $dateArriver;

    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\DommageCorporelBundle\Entity\DommageCorporel", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dommageCorporel;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateAlerte
     *
     * @param \DateTime $dateAlerte
     *
     * @return OperationCorporel
     */
    public function setDateAlerte($dateAlerte) {
        $this->dateAlerte = $dateAlerte;

        return $this;
    }

    /**
     * Get dateAlerte
     *
     * @return \DateTime
     */
    public function getDateAlerte() {
        return $this->dateAlerte;
    }

    /**
     * Set origineAlerte
     *
     * @param string $origineAlerte
     *
     * @return OperationCorporel
     */
    public function setOrigineAlerte($origineAlerte) {
        $this->origineAlerte = $origineAlerte;

        return $this;
    }

    /**
     * Get origineAlerte
     *
     * @return string
     */
    public function getOrigineAlerte() {
        return $this->origineAlerte;
    }

    /**
     * Set dateArriver
     *
     * @param \DateTime $dateArriver
     *
     * @return OperationCorporel
     */
    public function setDateArriver($dateArriver) {
        $this->dateArriver = $dateArriver;

        return $this;
    }

    /**
     * Get dateArriver
     *
     * @return \DateTime
     */
    public function getDateArriver() {
        return $this->dateArriver;
    }


    /**
     * Set dommageCorporel
     *
     * @param \Vigiroute\DommageCorporelBundle\Entity\DommageCorporel $dommageCorporel
     *
     * @return OperationCorporel
     */
    public function setDommageCorporel(\Vigiroute\DommageCorporelBundle\Entity\DommageCorporel $dommageCorporel)
    {
        $this->dommageCorporel = $dommageCorporel;

        return $this;
    }

    /**
     * Get dommageCorporel
     *
     * @return \Vigiroute\DommageCorporelBundle\Entity\DommageCorporel
     */
    public function getDommageCorporel()
    {
        return $this->dommageCorporel;
    }
}
