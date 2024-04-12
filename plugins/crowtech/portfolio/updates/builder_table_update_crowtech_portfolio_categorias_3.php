<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolioCategorias3 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->dropPrimary(['id']);
        });
    }
}
