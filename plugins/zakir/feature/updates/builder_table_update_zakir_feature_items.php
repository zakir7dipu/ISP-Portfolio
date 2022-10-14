<?php namespace Zakir\Feature\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZakirFeatureItems extends Migration
{
    public function up()
    {
        Schema::table('zakir_feature_items', function($table)
        {
            $table->text('details')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('zakir_feature_items', function($table)
        {
            $table->text('details')->nullable(false)->change();
        });
    }
}
