<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenItems3 extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
