<?php
namespace PoP\SPA;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;
use PoP\Root\Component\PHPConfigurableServicesTrait;

/**
 * Class required to check if this component exists and is active
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;
    use PHPConfigurableServicesTrait;

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
        self::initPHPServiceConfiguration(dirname(__DIR__));
    }
}
