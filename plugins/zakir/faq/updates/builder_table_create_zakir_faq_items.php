<?php namespace Zakir\Faq\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZakirFaqItems extends Migration
{
    public function up()
    {
        Schema::create('zakir_faq_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('question');
            $table->longText('answer');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zakir_faq_items');
    }
}
