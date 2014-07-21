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
namespace WellCommerce\Contact\Model;

use WellCommerce\Core\Model\AbstractModel;
use WellCommerce\Core\Model\TranslatableModelInterface;

/**
 * Class ContactTranslation
 *
 * @package WellCommerce\Contact\Model
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ContactTranslation extends AbstractModel
{

    protected $table = 'contact_translation';

    public $timestamps = true;

    protected $softDelete = false;

    protected $fillable = ['contact_id', 'language_id'];

    /**
     * {@inheritdoc}
     */
    public function getValidationXmlMapping()
    {
        return __DIR__ . '/../Resources/config/validation.xml';
    }
}