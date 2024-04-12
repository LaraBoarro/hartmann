<?php namespace Crowtech\Comentarios\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechComentarios extends Migration
{
    public function up()
    {
        Schema::create('crowtech_comentarios_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('titulo');
            $table->text('subtitulo');
            $table->text('descricao');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_comentarios_');
    }
}
