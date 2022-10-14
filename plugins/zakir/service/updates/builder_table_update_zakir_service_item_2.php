<?php namespace Zakir\Service\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZakirServiceItem2 extends Migration
{
    public function up()
    {
        Schema::table('zakir_service_item', function($table)
        {
            $table->string('slug')->after('details')->unique();
        });
    }
    
    public function down()
    {
        Schema::table('zakir_service_item', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
