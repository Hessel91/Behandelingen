<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenItems2 extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->integer('category_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
