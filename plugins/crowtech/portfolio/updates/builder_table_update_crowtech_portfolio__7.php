<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolio7 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->integer('categoria_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->integer('categoria_id')->unsigned(false)->change();
        });
    }
}
