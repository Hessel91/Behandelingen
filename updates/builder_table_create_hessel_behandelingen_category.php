<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateHesselBehandelingenCategory extends Migration
{
    public function up()
    {
        Schema::create('hessel_behandelingen_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('group_title')->nullable();
            $table->text('group_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hessel_behandelingen_category');
    }
}
