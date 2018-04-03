<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenCategory2 extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_category', function($table)
        {
            $table->integer('mediafinder1')->nullable();
            $table->integer('mediafinder2')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_category', function($table)
        {
            $table->dropColumn('mediafinder1');
            $table->dropColumn('mediafinder2');
        });
    }
}
