<?php namespace Zakir\Contact\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZakirContactMessages extends Migration
{
    public function up()
    {
        Schema::rename('zakir_contact_messagess', 'zakir_contact_messages');
    }
    
    public function down()
    {
        Schema::rename('zakir_contact_messages', 'zakir_contact_messagess');
    }
}
