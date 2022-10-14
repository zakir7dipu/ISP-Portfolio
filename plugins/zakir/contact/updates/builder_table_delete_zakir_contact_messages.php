<?php namespace Zakir\Contact\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableDeleteZakirContactMessages extends Migration
{
    public function up()
    {
        Schema::dropIfExists('zakir_contact_messages');
    }
    
    public function down()
    {
        Schema::create('zakir_contact_messages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191)->nullable();
            $table->string('email', 191)->nullable();
            $table->string('phone_number', 191)->nullable();
            $table->string('msg_subject', 191)->nullable();
            $table->text('content')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
