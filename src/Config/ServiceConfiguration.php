<?php

declare(strict_types=1);

namespace PoP\SPA\Config;

use PoP\ComponentModel\Container\ContainerBuilderUtils;
use PoP\Root\Component\PHPServiceConfigurationTrait;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure(): void
    {
        // Add ModuleFilter to the ModuleFilterManager
        ContainerBuilderUtils::injectServicesIntoService(
            'module_filter_manager',
            'PoP\\SPA\\ModuleFilters',
            'add'
        );
    }
}
