<?php namespace Crowtech\Informacoes\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateCrowtechInformacoes3 extends Migration
{
    public function up()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->text('insta');
            $table->text('face');
            $table->text('email');
            $table->text('linkinsta');
            $table->text('linkface');
            $table->text('linkemail');
        });
    }
    
    public function down()
    {
        Schema::table('crowtech_informacoes_', function($table)
        {
            $table->dropColumn('insta');
            $table->dropColumn('face');
            $table->dropColumn('email');
            $table->dropColumn('linkinsta');
            $table->dropColumn('linkface');
            $table->dropColumn('linkemail');
        });
    }
}
