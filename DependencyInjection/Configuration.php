<?php

namespace Rockbee\RssBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('rb_rss');

        $rootNode
            ->children()
                ->scalarNode('file')->defaultValue('%kernel.root_dir%/../vendor/rockbee/rss-bundle/Rockbee/RssBundle/rssphp/rss_php.php')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
