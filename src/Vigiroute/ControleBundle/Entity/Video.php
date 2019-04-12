<?php

namespace Vigiroute\ControleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity(repositoryClass="Vigiroute\ControleBundle\Repository\VideoRepository")
 */
class Video
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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateVideo", type="datetime")
     */
    private $dateVideo;

    /**
     * @var string
     *
     * @ORM\Column(name="lienFichier", type="string", length=255)
     */
    private $lienFichier;


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
     * Set reference
     *
     * @param string $reference
     *
     * @return Video
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set dateVideo
     *
     * @param \DateTime $dateVideo
     *
     * @return Video
     */
    public function setDateVideo($dateVideo)
    {
        $this->dateVideo = $dateVideo;

        return $this;
    }

    /**
     * Get dateVideo
     *
     * @return \DateTime
     */
    public function getDateVideo()
    {
        return $this->dateVideo;
    }

    /**
     * Set lienFichier
     *
     * @param string $lienFichier
     *
     * @return Video
     */
    public function setLienFichier($lienFichier)
    {
        $this->lienFichier = $lienFichier;

        return $this;
    }

    /**
     * Get lienFichier
     *
     * @return string
     */
    public function getLienFichier()
    {
        return $this->lienFichier;
    }
}

