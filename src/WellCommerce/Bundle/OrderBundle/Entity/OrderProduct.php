<?php

namespace WellCommerce\Bundle\OrderBundle\Entity;

use WellCommerce\Bundle\CoreBundle\Doctrine\ORM\Behaviours\Timestampable\TimestampableTrait;
use WellCommerce\Bundle\CoreBundle\Entity\Price;
use WellCommerce\Bundle\ProductBundle\Entity\ProductAttribute;
use WellCommerce\Bundle\ProductBundle\Entity\ProductAttributeAwareTrait;
use WellCommerce\Bundle\ProductBundle\Entity\ProductAwareTrait;

/**
 * Class OrderProduct
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class OrderProduct
{
    use TimestampableTrait;
    use ProductAwareTrait;
    use ProductAttributeAwareTrait;
    use OrderAwareTrait;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var float
     */
    protected $quantity;

    /**
     * @var Price
     */
    protected $netPrice;

    /**
     * @var Price
     */
    protected $grossPrice;

    /**
     * @var float
     */
    protected $taxValue;

    /**
     * @var float
     */
    protected $weight;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * {@inheritdoc}
     */
    public function setQuantity($quantity)
    {
        $this->quantity = (int)$quantity;
    }

    /**
     * {@inheritdoc}
     */
    public function getNetPrice()
    {
        return $this->netPrice;
    }

    /**
     * {@inheritdoc}
     */
    public function setNetPrice($netPrice)
    {
        $this->netPrice = $netPrice;
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxValue()
    {
        return $this->taxValue;
    }

    /**
     * @param float $taxValue
     */
    public function setTaxValue($taxValue)
    {
        $this->taxValue = $taxValue;
    }

    /**
     * {@inheritdoc}
     */
    public function getGrossPrice()
    {
        return $this->grossPrice;
    }

    /**
     * {@inheritdoc}
     */
    public function setGrossPrice($grossPrice)
    {
        $this->grossPrice = $grossPrice;
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * {@inheritdoc}
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
}