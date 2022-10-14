<?php namespace Zakir\Plans\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZakirPlansItems extends Migration
{
    public function up()
    {
        Schema::create('zakir_plans_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('type');
            $table->string('behavior');
            $table->string('feature1')->nullable();
            $table->string('feature2')->nullable();
            $table->string('feature3')->nullable();
            $table->string('feature4')->nullable();
            $table->string('feature5')->nullable();
            $table->string('feature6')->nullable();
            $table->string('feature7')->nullable();
            $table->string('feature8')->nullable();
            $table->string('feature9')->nullable();
            $table->string('feature10')->nullable();
            $table->integer('price');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zakir_plans_items');
    }
}
