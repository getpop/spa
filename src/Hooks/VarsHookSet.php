<?php
namespace PoP\SPA\Hooks;
use PoP\Engine\Hooks\AbstractHookSet;

class VarsHookSet extends AbstractHookSet
{
    protected function init()
    {
        $this->hooksAPI->addAction(
            '\PoP\ComponentModel\Engine_Vars:addVars',
            array($this, 'addVars'),
            10,
            1
        );
    }

    public function addVars($vars_in_array)
    {
        $vars = &$vars_in_array[0];
        $vars['fetching-site'] = is_null($vars['modulefilter']);
        $vars['loading-site'] = $vars['fetching-site'] && $vars['output'] == GD_URLPARAM_OUTPUT_HTML;

        // Settings format: the format set by the application when first visiting it, configurable by the user
        if ($vars['loading-site']) {
            $vars['settingsformat'] = strtolower($_REQUEST[GD_URLPARAM_FORMAT]);
        } else {
            $vars['settingsformat'] = strtolower($_REQUEST[GD_URLPARAM_SETTINGSFORMAT]);
        }

        // Format: if not set, then use the 'settingsFormat' value if it has been set.
        if (!isset($_REQUEST[GD_URLPARAM_FORMAT]) && isset($_REQUEST[GD_URLPARAM_SETTINGSFORMAT])) {
            $vars['format'] = $vars['settingsformat'];
        }
    }
}
