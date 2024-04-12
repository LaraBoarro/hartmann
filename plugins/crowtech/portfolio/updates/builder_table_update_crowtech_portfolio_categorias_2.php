<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolioCategorias2 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->integer('id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->integer('id')->unsigned(false)->change();
        });
    }
}
