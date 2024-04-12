<?php namespace Crowtech\Informacoes\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechInformacoes8 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->text('mapinha')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->smallInteger('mapinha')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
