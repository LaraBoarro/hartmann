<?php namespace Crowtech\Informacoes\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechInformacoes4 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->text('linknumeroum');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->dropColumn('linknumeroum');
        });
    }
}
