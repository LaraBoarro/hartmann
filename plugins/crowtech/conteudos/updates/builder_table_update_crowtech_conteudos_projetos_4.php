<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechConteudosProjetos4 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->text('conteudo');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->dropColumn('conteudo');
        });
    }
}
