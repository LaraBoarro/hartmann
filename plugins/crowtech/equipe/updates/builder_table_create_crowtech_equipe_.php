<?php namespace Crowtech\Equipe\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechEquipe extends Migration
{
    public function up()
    {
        Schema::create('crowtech_equipe_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('titulo');
            $table->text('conteudo');
            $table->text('instagram');
            $table->text('facebook');
            $table->text('email');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_equipe_');
    }
}
