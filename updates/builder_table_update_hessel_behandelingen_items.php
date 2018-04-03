<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenItems extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('is_aproved')->nullable();
            $table->string('item_title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('is_aproved');
            $table->string('item_title', 191)->change();
        });
    }
}
