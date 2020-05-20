<?php

declare(strict_types=1);

namespace PoP\SPA;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;
use PoP\SPA\Config\ServiceConfiguration;
use PoP\ComponentModel\Container\ContainerBuilderUtils;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\Application\Component::class,
        ];
    }

    /**
     * Initialize services
     */
    protected static function doInitialize()
    {
        parent::doInitialize();
        self::initYAMLServices(dirname(__DIR__));
        ServiceConfiguration::initialize();
    }

    /**
     * Boot component
     *
     * @return void
     */
    public static function beforeBoot()
    {
        parent::beforeBoot();
        ContainerBuilderUtils::instantiateNamespaceServices(__NAMESPACE__ . '\\Hooks');
    }
}
