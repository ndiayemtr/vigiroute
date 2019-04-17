<?php

namespace Vigiroute\DommageMaterielBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * pieton
 *
 * @ORM\Table(name="pieton")
 * @ORM\Entity(repositoryClass="Vigiroute\DommageMaterielBundle\Repository\pietonRepository")
 */
class pieton
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
     * @var string
     *
     * @ORM\Column(name="traverseChausser", type="string", length=255)
     */
    private $traverseChausser;

    /**
     * @var string
     *
     * @ORM\Column(name="passageProteger", type="string", length=255)
     */
    private $passageProteger;

    /**
     * @var string
     *
     * @ORM\Column(name="horsPassageProteger", type="string", length=255)
     */
    private $horsPassageProteger;
    
    /**
     * 
     * @ORM\OneToOne(targetEntity="Vigiroute\DommageMaterielBundle\Entity\DommageMateriels", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $dommageMateriel;


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
     * Set traverseChausser
     *
     * @param string $traverseChausser
     *
     * @return pieton
     */
    public function setTraverseChausser($traverseChausser)
    {
        $this->traverseChausser = $traverseChausser;

        return $this;
    }

    /**
     * Get traverseChausser
     *
     * @return string
     */
    public function getTraverseChausser()
    {
        return $this->traverseChausser;
    }

    /**
     * Set passageProteger
     *
     * @param string $passageProteger
     *
     * @return pieton
     */
    public function setPassageProteger($passageProteger)
    {
        $this->passageProteger = $passageProteger;

        return $this;
    }

    /**
     * Get passageProteger
     *
     * @return string
     */
    public function getPassageProteger()
    {
        return $this->passageProteger;
    }

    /**
     * Set horsPassageProteger
     *
     * @param string $horsPassageProteger
     *
     * @return pieton
     */
    public function setHorsPassageProteger($horsPassageProteger)
    {
        $this->horsPassageProteger = $horsPassageProteger;

        return $this;
    }

    /**
     * Get horsPassageProteger
     *
     * @return string
     */
    public function getHorsPassageProteger()
    {
        return $this->horsPassageProteger;
    }

    /**
     * Set dommageMateriel
     *
     * @param \Vigiroute\DommageMaterielBundle\Entity\DommageMateriels $dommageMateriel
     *
     * @return pieton
     */
    public function setDommageMateriel(\Vigiroute\DommageMaterielBundle\Entity\DommageMateriels $dommageMateriel)
    {
        $this->dommageMateriel = $dommageMateriel;

        return $this;
    }

    /**
     * Get dommageMateriel
     *
     * @return \Vigiroute\DommageMaterielBundle\Entity\DommageMateriels
     */
    public function getDommageMateriel()
    {
        return $this->dommageMateriel;
    }
}
