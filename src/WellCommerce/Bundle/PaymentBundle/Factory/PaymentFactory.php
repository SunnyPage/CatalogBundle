<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\Bundle\PaymentBundle\Factory;

use WellCommerce\Bundle\CoreBundle\Factory\AbstractFactory;
use WellCommerce\Bundle\CoreBundle\Factory\FactoryInterface;
use WellCommerce\Bundle\PaymentBundle\Entity\Payment;

/**
 * Class PaymentFactory
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class PaymentFactory extends AbstractFactory implements FactoryInterface
{
    /**
     * @return \WellCommerce\Bundle\PaymentBundle\Entity\PaymentInterface
     */
    public function create()
    {
        $payment = new Payment();

        return $payment;
    }
}
