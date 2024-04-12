<?php namespace Crowtech\Informacoes\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechInformacoes7 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->smallInteger('mapinha');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->dropColumn('mapinha');
        });
    }
}
