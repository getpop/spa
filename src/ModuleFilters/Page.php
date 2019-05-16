<?php
namespace PoP\SPA\ModuleFilters;

use PoP\SPA\Modules\PageInterface;
use PoP\Engine\ModuleFilters\AbstractModuleFilter;
class Page extends AbstractModuleFilter
{
    const NAME = 'page';

    public function getName()
    {
        return self::NAME;
    }

    public function excludeModule($module, &$props)
    {

        // Exclude until reaching the pageSection
        $moduleprocessor_manager = \PoP\Engine\ModuleProcessorManagerFactory::getInstance();
        $processor = $moduleprocessor_manager->getProcessor($module);
        return !($processor instanceof PageInterface);
    }
}