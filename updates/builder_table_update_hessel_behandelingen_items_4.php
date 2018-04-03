<?php namespace Hessel\Behandelingen\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateHesselBehandelingenItems4 extends Migration
{
    public function up()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->decimal('item_price', 10, 2)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('hessel_behandelingen_items', function($table)
        {
            $table->smallInteger('item_price')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
