<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechConteudosProjetos2 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->integer('categoria_id');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->dropColumn('categoria_id');
        });
    }
}
