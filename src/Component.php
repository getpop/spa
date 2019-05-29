<?php
namespace PoP\SPA;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;
use PoP\SPA\Configuration\ServiceConfiguration;

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
    }

    /**
     * Initialize Service Configuration
     *
     * @return void
     */
    public static function boot()
    {
        ServiceConfiguration::configure();
    }
}
