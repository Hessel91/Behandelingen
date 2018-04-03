<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHesselBehandelingenItems extends Migration
{
    public function up()
    {
        Schema::create('hessel_behandelingen_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('item_title')->nullable();
            $table->text('item_description')->nullable();
            $table->smallInteger('item_price')->nullable();
            $table->smallInteger('item_time')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hessel_behandelingen_items');
    }
}
