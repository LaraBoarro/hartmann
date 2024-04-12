<?php namespace Crowtech\Informacoes\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechInformacoes extends Migration
{
    public function up()
    {
        Schema::create('crowtech_informacoes_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_informacoes_');
    }
}
