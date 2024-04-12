<?php namespace Crowtech\Informacoes\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechInformacoes extends Migration
{
    public function up()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->text('numeroum');
            $table->text('emailum');
            $table->text('enderecoum');
            $table->text('numerodois');
            $table->text('emaildois');
            $table->text('enderecodois');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->dropColumn('numeroum');
            $table->dropColumn('emailum');
            $table->dropColumn('enderecoum');
            $table->dropColumn('numerodois');
            $table->dropColumn('emaildois');
            $table->dropColumn('enderecodois');
        });
    }
}
