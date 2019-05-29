<?php
namespace PoP\SPA\Configuration;

use PoP\Root\Container\ContainerBuilderFactory;

class ServiceConfiguration
{
    public static function configure()
    {
        $containerBuilder = ContainerBuilderFactory::getInstance();
        
        // Add ModuleFilters to the ModuleFilterManager
        $containerBuilder->get('module_filter_manager')->add([
            $containerBuilder->get('module_filters.page'),
        ]);
    }
}