<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechConteudosSobrenos4 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_conteudos_sobrenos', function($table)
        {
            $table->dropColumn('logo');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_conteudos_sobrenos', function($table)
        {
            $table->string('logo', 255);
        });
    }
}
