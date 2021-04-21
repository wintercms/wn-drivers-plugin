<?php namespace Winter\Drivers;

use System\Classes\PluginBase;

/**
 * Drivers Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Drivers',
            'description' => 'Provider of third party drivers',
            'author'      => 'Winter CMS',
            'icon'        => 'icon-leaf',
            'homepage'    => 'https://github.com/wintercms/wn-drivers-plugin',
            'replaces'    => ['October.Drivers' => '<= 1.1.3'],
        ];
    }
}
