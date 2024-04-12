<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechConteudosProjetos extends Migration
{
    public function up()
    {
        Schema::create('crowtech_conteudos_projetos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nome');
            $table->string('imagemprincipal');
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_conteudos_projetos');
    }
}
