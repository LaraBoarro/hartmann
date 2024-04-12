<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolio3 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->text('detalhe');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->dropColumn('detalhe');
        });
    }
}
