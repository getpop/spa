<?php
namespace PoP\SPA;

use PoP\Root\Component\YAMLServicesTrait;
use PoP\Root\Component\PHPConfigurableServicesTrait;

/**
 * Class required to check if this component exists and is active
 */
class Component
{
    use YAMLServicesTrait;
    use PHPConfigurableServicesTrait;

    /**
     * Initialize services
     */
    public static function init()
    {
        self::initYAMLServices(dirname(__DIR__));
        self::initPHPServiceConfiguration(dirname(__DIR__));
    }
}
