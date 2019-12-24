<?php namespace Mystock\Stock\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMystockStockComment extends Migration
{
    public function up()
    {
        Schema::table('mystock_stock_comment', function($table)
        {
            $table->dropColumn('id_product');
            $table->dropColumn('id_user');
            $table->dropColumn('user_name');
        });
    }
    
    public function down()
    {
        Schema::table('mystock_stock_comment', function($table)
        {
            $table->integer('id_product');
            $table->integer('id_user');
            $table->string('user_name', 255);
        });
    }
}
