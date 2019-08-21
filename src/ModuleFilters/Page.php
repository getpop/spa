<?php
namespace PoP\SPA\ModuleFilters;

use PoP\SPA\Modules\PageInterface;
use PoP\ComponentModel\ModuleFilters\AbstractModuleFilter;
class Page extends AbstractModuleFilter
{
    public const NAME = 'page';

    public function getName()
    {
        return self::NAME;
    }

    public function excludeModule(array $module, array &$props)
    {

        // Exclude until reaching the pageSection
        $moduleprocessor_manager = \PoP\ComponentModel\ModuleProcessorManagerFactory::getInstance();
        $processor = $moduleprocessor_manager->getProcessor($module);
        return !($processor instanceof PageInterface);
    }
}