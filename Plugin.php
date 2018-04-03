<?php namespace Hessel\Behandelingen;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
 public function registerComponents()
    {
         return [
            'Hessel\Behandelingen\Components\Behandeling' => 'Behandeling',
        ];
    }

    public function registerSettings()
    {
    }
}
