<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolio extends Migration
{
    public function up()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->text('valor');
            $table->text('data');
            $table->text('cliente');
            $table->text('categoria');
            $table->text('descricao');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_portfolio_', function($table)
        {
            $table->dropColumn('valor');
            $table->dropColumn('data');
            $table->dropColumn('cliente');
            $table->dropColumn('categoria');
            $table->dropColumn('descricao');
        });
    }
}
