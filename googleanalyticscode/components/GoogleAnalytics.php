<?php namespace RAFIE\GoogleAnalyticsCode\Components;

use Cms\Classes\ComponentBase;
use RAFIE\GoogleAnalyticsCode\Models\GoogleAnalyticsSettings;

class GoogleAnalytics extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Google Analytics Tracking Code',
            'description' => 'Insert your Google Analytics tracking code inside any page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'code' => [
                'title'             => 'Google Analytics tracking code',
                'description'       => 'Your Google Analytics tracking code, can be found in your Google Analytics dashboard',
                'default'           => '',
                'type'              => 'string',
                'validationPattern' => '^UA-\d{4,9}-\d{1,4}$',
                'validationMessage' => 'Not a tracking code',
                'placeholder'       => 'UA-XXXXXXX'
            ]
        ];
    }

    public function onRender()
    {
        // Using properties
        //$this->page['code'] = $this->property('code');

        // Using settings
        $settings = GoogleAnalyticsSettings::instance();
        $this->page['code'] = $settings->code;
    }

}