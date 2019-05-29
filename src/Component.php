<?php
namespace PoP\SPA;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;
use PoP\SPA\Config\ServiceConfiguration;

/**
 * Class required to check if this component exists and is active
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;

    /**
     * Initialize services
     */
    public static function init()
    {
        parent::init();
        self::initYAMLServices(dirname(__DIR__));
        ServiceConfiguration::init();
    }
}
