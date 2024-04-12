<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolioCategorias5 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_categorias', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
