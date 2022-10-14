<?php namespace Zakir\Feature\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZakirFeatureItems extends Migration
{
    public function up()
    {
        Schema::create('zakir_feature_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('about');
            $table->longText('details');
            $table->string('slug')->unique();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zakir_feature_items');
    }
}
