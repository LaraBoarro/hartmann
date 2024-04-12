<?php namespace Crowtech\Equipe\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechEquipe5 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_equipe_', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_equipe_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
