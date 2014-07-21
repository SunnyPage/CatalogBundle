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
namespace WellCommerce\Currency\Repository;

use WellCommerce\Core\Repository\AbstractRepository;
use WellCommerce\Currency\Model\Currency;
use Symfony\Component\Intl\Intl;

/**
 * Class CurrencyAbstractRepository
 *
 * @package WellCommerce\Currency\AbstractRepository
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class CurrencyRepository extends AbstractRepository implements CurrencyRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return Currency::all();
    }

    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return Currency::findOrFail($id);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {
        $currency = $this->find($id);
        $currency->delete();
        $this->dispatchEvent(CurrencyRepositoryInterface::POST_DELETE_EVENT, $currency);
    }

    /**
     * {@inheritdoc}
     */
    public function save(array $data, $id = null)
    {
        $this->transaction(function () use ($data, $id) {

            $currency = Currency::firstOrCreate([
                'id' => $id
            ]);

            $data = $this->dispatchEvent(CurrencyRepositoryInterface::PRE_SAVE_EVENT, $currency, $data);

            $currency->update($data);

            $this->dispatchEvent(CurrencyRepositoryInterface::POST_SAVE_EVENT, $currency, $data);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrencySymbols()
    {
        $currencies = Intl::getCurrencyBundle()->getCurrencyNames();

        ksort($currencies);

        $Data = [];

        foreach ($currencies as $currencySymbol => $currencyName) {
            $Data[$currencySymbol] = sprintf('%s (%s)', $currencySymbol, $currencyName);
        }

        return $Data;
    }

    /**
     * {@inheritdoc}
     */
    public function getAllCurrencyToSelect()
    {
        return $this->all()->toSelect('id', 'symbol');
    }
}