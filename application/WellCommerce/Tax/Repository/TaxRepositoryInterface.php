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

namespace WellCommerce\Tax\Repository;

/**
 * Interface TaxRepositoryInterface
 *
 * @package WellCommerce\Tax\Repository
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface TaxRepositoryInterface
{
    const POST_DELETE_EVENT = 'tax.repository.post_delete';
    const PRE_SAVE_EVENT    = 'tax.repository.pre_save';
    const POST_SAVE_EVENT   = 'tax.repository.post_save';

    /**
     * Returns all taxes as a collection
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Returns a tax model
     *
     * @param $id
     *
     * @return \WellCommerce\Tax\Model\Tax
     */
    public function find($id);

    /**
     * Adds or updates a tax
     *
     * @param array $data
     * @param null  $id
     *
     * @return mixed
     */
    public function save(array $data, $id = null);

    /**
     * Deletes a tax
     *
     * @param $id
     *
     * @return mixed
     */
    public function delete($id);

    /**
     * Returns Collection as ke-value pairs ready to use in selects
     *
     * @return mixed
     */
    public function getAllTaxToSelect();
}