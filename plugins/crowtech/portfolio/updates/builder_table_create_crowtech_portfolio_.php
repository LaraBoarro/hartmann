<?php namespace Crowtech\Portfolio\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateCrowtechPortfolio extends Migration
{
    public function up()
    {
        Schema::create('crowtech_portfolio_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('titulo');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('crowtech_portfolio_');
    }
}
