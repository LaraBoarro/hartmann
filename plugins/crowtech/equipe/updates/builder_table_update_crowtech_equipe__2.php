<?php namespace Crowtech\Equipe\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechEquipe2 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_equipe_', function($table)
        {
            $table->dropColumn('titulo');
            $table->dropColumn('conteudo');
            $table->dropColumn('instagram');
            $table->dropColumn('facebook');
            $table->dropColumn('email');
            $table->dropColumn('cargo');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_equipe_', function($table)
        {
            $table->text('titulo');
            $table->text('conteudo');
            $table->text('instagram');
            $table->text('facebook');
            $table->text('email');
            $table->text('cargo');
        });
    }
}
