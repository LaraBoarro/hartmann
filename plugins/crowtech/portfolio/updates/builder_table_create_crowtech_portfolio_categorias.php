<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechPortfolioCategorias extends Migration
{
    public function up()
    {
        Schema::create('crowtech_portfolio_categorias', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('name');
            $table->text('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_portfolio_categorias');
    }
}
