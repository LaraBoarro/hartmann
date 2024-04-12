<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechConteudosProjetos extends Migration
{
    public function up()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_conteudos_projetos', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
