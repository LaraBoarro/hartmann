<?php namespace Crowtech\SobreNos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechSobrenos extends Migration
{
    public function up()
    {
        Schema::create('crowtech_sobrenos_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('titulo');
            $table->text('textoum');
            $table->text('titutlodois');
            $table->text('textojose');
            $table->text('detalhejose');
            $table->text('tituloiconeum');
            $table->text('tituloiconedois');
            $table->text('tituloiconetres');
            $table->text('textoiconeum');
            $table->text('textoiconedois');
            $table->text('textoiconetres');
            $table->text('titulooquefazemos');
            $table->text('textooquefazemos');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_sobrenos_');
    }
}
