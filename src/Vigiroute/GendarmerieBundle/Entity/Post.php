<?php

namespace Vigiroute\GendarmerieBundle\Entity;

use Vigiroute\GendarmerieBundle\Entity\InfoCommunGend as UseInfo;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="Vigiroute\GendarmerieBundle\Repository\PostRepository")
 */
class Post extends UseInfo {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Vigiroute\GendarmerieBundle\Entity\Compagnie", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $compagnie;

    /**
     * @ORM\ManyToOne(targetEntity="Vigiroute\GeographieBundle\Entity\Departement", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set compagnie
     *
     * @param \Vigiroute\GendarmerieBundle\Entity\Compagnie $compagnie
     *
     * @return Post
     */
    public function setCompagnie(\Vigiroute\GendarmerieBundle\Entity\Compagnie $compagnie)
    {
        $this->compagnie = $compagnie;

        return $this;
    }

    /**
     * Get compagnie
     *
     * @return \Vigiroute\GendarmerieBundle\Entity\Compagnie
     */
    public function getCompagnie()
    {
        return $this->compagnie;
    }

    /**
     * Set departement
     *
     * @param \Vigiroute\GeographieBundle\Entity\Departement $departement
     *
     * @return Post
     */
    public function setDepartement(\Vigiroute\GeographieBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \Vigiroute\GeographieBundle\Entity\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
