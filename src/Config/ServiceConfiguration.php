<?php
namespace PoP\SPA\Config;

use PoP\Root\Container\ContainerBuilderUtils;
use PoP\Root\Component\PHPServiceConfigurationTrait;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;
    
    protected static function configure()
    {
        // Add ModuleFilter to the ModuleFilterManager
        ContainerBuilderUtils::injectServicesIntoService(
            'module_filter_manager',
            'PoP\\SPA\\ModuleFilters',
            'add'
        );
    }
}