<?php
namespace PoP\SPA\Config;

use PoP\Root\Container\ContainerBuilderFactory;
use PoP\Root\Component\PHPServiceConfigurationTrait;
use Symfony\Component\DependencyInjection\Reference;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;
    
    protected static function configure()
    {
        $containerBuilder = ContainerBuilderFactory::getInstance();
        
        // Add ModuleFilters to the ModuleFilterManager
        $definition = $containerBuilder->getDefinition('module_filter_manager');
        $definition->addMethodCall('add', [new Reference('module_filters.page')]);
    }
}