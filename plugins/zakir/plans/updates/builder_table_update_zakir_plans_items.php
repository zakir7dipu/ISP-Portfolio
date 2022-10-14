<?php namespace Zakir\Plans\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZakirPlansItems extends Migration
{
    public function up()
    {
        Schema::table('zakir_plans_items', function($table)
        {
            $table->boolean('is_offer')->after('price')->default(false);
            $table->integer('offer_price')->after('is_offer')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zakir_plans_items', function($table)
        {
            $table->dropColumn('is_offer');
            $table->dropColumn('offer_price');
        });
    }
}
