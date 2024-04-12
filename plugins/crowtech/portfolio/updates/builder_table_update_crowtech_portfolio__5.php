<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolio5 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->dropColumn('category_id');
        });
    }
}
