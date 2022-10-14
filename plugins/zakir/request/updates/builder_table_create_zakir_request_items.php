<?php namespace Zakir\Request\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZakirRequestItems extends Migration
{
    public function up()
    {
        Schema::create('zakir_request_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('package');
            $table->string('cus_name');
            $table->string('cus_phone');
            $table->string('address');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zakir_request_items');
    }
}
