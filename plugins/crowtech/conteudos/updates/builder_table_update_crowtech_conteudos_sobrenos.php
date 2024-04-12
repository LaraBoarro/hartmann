<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechConteudosSobrenos extends Migration
{
    public function up()
    {
        Schema::table('crowtech_conteudos_sobrenos', function($table)
        {
            $table->dropColumn('titulos1');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_conteudos_sobrenos', function($table)
        {
            $table->text('titulos1');
        });
    }
}
