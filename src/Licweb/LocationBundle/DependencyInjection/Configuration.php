<?php

namespace Licweb\LocationBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode    = $treeBuilder->root('licweb_location');

        $rootNode
            ->children()
                ->scalarNode('data_file')->defaultValue("%kernel.cache_dir%/locations.yml")->end()
            ->end();

        return $treeBuilder;
    }
}

