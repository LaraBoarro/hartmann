<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechPortfolioCategorias extends Migration
{
    public function up()
    {
        Schema::rename('crowtech_portfolio_categoriass', 'crowtech_portfolio_categorias');
    }
    
    public function down()
    {
        Schema::rename('crowtech_portfolio_categorias', 'crowtech_portfolio_categoriass');
    }
}
