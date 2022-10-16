<?php namespace Zakir\Request;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Zakir\Request\Components\RequestForm' => 'requestform',
        ];
    }

    public function registerSettings()
    {
    }
}
