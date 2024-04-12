<?php namespace Crowtech\Conteudos\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechConteudosSobrenos3 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_conteudos_sobrenos', function($table)
        {
            $table->text('descricao')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_conteudos_sobrenos', function($table)
        {
            $table->string('descricao', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
