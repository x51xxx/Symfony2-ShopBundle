<?php

namespace n3b\Bundle\Shop\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Delivery
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column
     */
    protected $type;
    /**
     * @ORM\ManyToOne(targetEntity="DeliveryAdds", inversedBy="delivery", cascade={"persist"})
     */
    protected $adds;
    /**
     * @ORM\OneToOne(targetEntity="Checkout", inversedBy="delivery")
     */
    protected $checkout;
    /**
     * @ORM\Column(type="decimal", scale="2", nullable="true")
     */
    protected $price;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateFrom;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateTo;

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
     * Set type
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return string $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set price
     *
     * @param decimal $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Get price
     *
     * @return decimal $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set dateFrom
     *
     * @param datetime $dateFrom
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * Get dateFrom
     *
     * @return datetime $dateFrom
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param datetime $dateTo
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;
    }

    /**
     * Get dateTo
     *
     * @return datetime $dateTo
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set adds
     *
     * @param n3b\Bundle\Shop\Entity\DeliveryAdds $adds
     */
    public function setAdds(\n3b\Bundle\Shop\Entity\DeliveryAdds $adds)
    {
        $this->adds = $adds;
    }

    /**
     * Get adds
     *
     * @return n3b\Bundle\Shop\Entity\DeliveryAdds $adds
     */
    public function getAdds()
    {
        return $this->adds;
    }

    /**
     * Set checkout
     *
     * @param n3b\Bundle\Shop\Entity\Checkout $checkout
     */
    public function setCheckout(\n3b\Bundle\Shop\Entity\Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Get checkout
     *
     * @return n3b\Bundle\Shop\Entity\Checkout $checkout
     */
    public function getCheckout()
    {
        return $this->checkout;
    }
}