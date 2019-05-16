<?php

use PoP\Root\Container\ContainerBuilderFactory;

$containerBuilder = ContainerBuilderFactory::getInstance();

// Add ModuleFilters to the ModuleFilterManager
$containerBuilder->get('module_filter_manager')->add([
    $containerBuilder->get('module_filters.page'),
]);