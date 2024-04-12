<?php namespace Crowtech\Equipe\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechEquipe4 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_equipe_', function($table)
        {
            $table->text('cargo');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_equipe_', function($table)
        {
            $table->dropColumn('cargo');
        });
    }
}
