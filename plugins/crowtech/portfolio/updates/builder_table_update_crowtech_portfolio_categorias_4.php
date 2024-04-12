<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolioCategorias4 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
