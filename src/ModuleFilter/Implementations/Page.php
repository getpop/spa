<?php
namespace PoP\SPA\ModuleFilter\Implementations;

use PoP\SPA\Modules\PageInterface;
use PoP\Engine\ModuleFilter\AbstractModuleFilter;
class Page extends AbstractModuleFilter
{
    const NAME = 'page';

    public function getName()
    {
        return self::NAME;
    }

    public function excludeModule(array $module, array &$props)
    {

        // Exclude until reaching the pageSection
        $moduleprocessor_manager = \PoP\Engine\ModuleProcessorManagerFactory::getInstance();
        $processor = $moduleprocessor_manager->getProcessor($module);
        return !($processor instanceof PageInterface);
    }
}