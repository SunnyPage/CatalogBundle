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

namespace WellCommerce\Profiler\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package WellCommerce\Profiler\DependencyInjection
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('wellcommerce_profiler');

        $rootNode
            ->children()
            ->booleanNode('enabled')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
} 