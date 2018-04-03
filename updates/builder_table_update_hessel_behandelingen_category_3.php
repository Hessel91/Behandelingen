<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenCategory3 extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_category', function($table)
        {
            $table->string('mediafinder1')->nullable()->unsigned(false)->default(null)->change();
            $table->string('mediafinder2')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_category', function($table)
        {
            $table->integer('mediafinder1')->nullable()->unsigned(false)->default(null)->change();
            $table->integer('mediafinder2')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
