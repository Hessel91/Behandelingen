<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenCategory extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_category', function($table)
        {
            $table->string('group_title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_category', function($table)
        {
            $table->string('group_title', 191)->change();
        });
    }
}
