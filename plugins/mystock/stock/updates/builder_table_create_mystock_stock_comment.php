<?php namespace Mystock\Stock\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMystockStockComment extends Migration
{
    public function up()
    {
        Schema::create('mystock_stock_comment', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_product');
            $table->integer('id_user');
            $table->string('user_name', 255);
            $table->text('content');
            $table->timestamp('created_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mystock_stock_comment');
    }
}
