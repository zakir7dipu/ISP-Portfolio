<?php namespace Zakir\Service\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZakirServiceItem extends Migration
{
    public function up()
    {
        Schema::table('zakir_service_item', function($table)
        {
            $table->longText('details')->after('about')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('zakir_service_item', function($table)
        {
            $table->dropColumn('details');
        });
    }
}
