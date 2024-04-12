<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolio9 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->text('ano');
            $table->text('area');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->dropColumn('ano');
            $table->dropColumn('area');
        });
    }
}
