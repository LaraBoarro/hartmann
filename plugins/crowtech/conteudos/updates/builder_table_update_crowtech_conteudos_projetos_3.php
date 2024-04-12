<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechConteudosProjetos3 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->string('cliente');
            $table->string('data');
            $table->string('localizacao');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->dropColumn('cliente');
            $table->dropColumn('data');
            $table->dropColumn('localizacao');
        });
    }
}
