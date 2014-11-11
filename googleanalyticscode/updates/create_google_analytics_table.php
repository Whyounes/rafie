<?php namespace RAFIE\GoogleAnalyticsCode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateGoogleAnalyticsTable extends Migration
{

    public function up()
    {
        Schema::create('rafie_googleanalyticscode_google_analytics', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rafie_googleanalyticscode_google_analytics');
    }

}
