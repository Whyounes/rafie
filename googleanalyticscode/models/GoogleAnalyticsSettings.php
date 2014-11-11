<?php namespace RAFIE\GoogleAnalyticsCode\Models;

use Model;

class GoogleAnalyticsSettings extends Model{

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'rafie_google_analytics_code';

    public $settingsFields = 'fields.yaml';
}
