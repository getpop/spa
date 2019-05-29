<?php
namespace PoP\SPA\Config;

use PoP\Root\Container\ContainerBuilderFactory;
use Symfony\Component\DependencyInjection\Reference;

class ServiceConfiguration
{
    public static function init()
    {
        $containerBuilder = ContainerBuilderFactory::getInstance();
        
        // Add ModuleFilters to the ModuleFilterManager
        $definition = $containerBuilder->getDefinition('module_filter_manager');
        $definition->addMethodCall('add', [new Reference('module_filters.page')]);
    }
}