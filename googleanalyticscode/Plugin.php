<?php namespace RAFIE\GoogleAnalyticsCode;

use System\Classes\PluginBase;

/**
 * GoogleAnalyticsCode Plugin Information File
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
            'name'        => 'Google Analytics Code',
            'description' => 'Insert Google Analytics tracking code inside you pages',
            'author'      => 'RAFIE Younes',
            'icon'        => 'icon-bar-chart-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'RAFIE\GoogleAnalyticsCode\Components\GoogleAnalytics' => 'gaCode'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Google Analytics Code',
                'description' => 'Manage Google Analytics Settings.',
                'icon'        => 'icon-bar-chart-o',
                'class'       => 'RAFIE\GoogleAnalyticsCode\Models\GoogleAnalyticsSettings',
                'order'       => 1
            ]
        ];
    }
}
