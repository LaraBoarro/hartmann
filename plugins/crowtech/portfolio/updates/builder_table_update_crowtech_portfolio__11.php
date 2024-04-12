<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolio11 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->renameColumn('modulo_id', 'categoria_id');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->renameColumn('categoria_id', 'modulo_id');
        });
    }
}
