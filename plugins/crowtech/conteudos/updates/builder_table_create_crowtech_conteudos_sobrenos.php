<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechConteudosSobrenos extends Migration
{
    public function up()
    {
        Schema::create('crowtech_conteudos_sobrenos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('logo');
            $table->text('titulos1');
            $table->string('descricao');
            $table->text('icones');
            $table->string('imagemlateral1');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_conteudos_sobrenos');
    }
}
