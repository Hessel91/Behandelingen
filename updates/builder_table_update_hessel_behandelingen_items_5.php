<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenItems5 extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->string('copy_cat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->dropColumn('copy_cat');
        });
    }
}
