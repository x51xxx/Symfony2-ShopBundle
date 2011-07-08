<?php

namespace n3b\Bundle\Shop\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class ProductAdditional
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="text", length="4000")
     */
    protected $description;
    /**
     * @ORM\Column(type="string")
     */
    protected $art;
    /**
     * @ORM\ManyToMany(targetEntity="File")
     */
    protected $images;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullDescription
     *
     * @param text $fullDescription
     */
    public function setFullDescription($fullDescription)
    {
        $this->fullDescription = $fullDescription;
    }

    /**
     * Get fullDescription
     *
     * @return text $fullDescription
     */
    public function getFullDescription()
    {
        return $this->fullDescription;
    }

    /**
     * Set articul
     *
     * @param string $articul
     */
    public function setArticul($articul)
    {
        $this->articul = $articul;
    }

    /**
     * Get articul
     *
     * @return string $articul
     */
    public function getArticul()
    {
        return $this->articul;
    }

    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set art
     *
     * @param string $art
     */
    public function setArt($art)
    {
        $this->art = $art;
    }

    /**
     * Get art
     *
     * @return string $art
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Add images
     *
     * @param n3b\Bundle\Shop\Entity\File $images
     */
    public function addImages(\n3b\Bundle\Shop\Entity\File $images)
    {
        $this->images[] = $images;
    }

    /**
     * Get images
     *
     * @return Doctrine\Common\Collections\Collection $images
     */
    public function getImages()
    {
        return $this->images;
    }
}