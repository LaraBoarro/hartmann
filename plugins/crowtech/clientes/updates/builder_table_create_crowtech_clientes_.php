<?php namespace Crowtech\Clientes\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechClientes extends Migration
{
    public function up()
    {
        Schema::create('crowtech_clientes_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('titulo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_clientes_');
    }
}
