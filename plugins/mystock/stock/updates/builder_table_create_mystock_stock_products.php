<?php namespace Mystock\Stock\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMystockStockProducts extends Migration
{
    public function up()
    {
        Schema::create('mystock_stock_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->bigInteger('origin_price');
            $table->bigInteger('sale_price');
            $table->text('content');
            $table->integer('status');
            $table->integer('category_id');
            $table->string('images')->nullable();
            $table->integer('view_count')->nullable()->default(0);
            $table->integer('quantity');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mystock_stock_products');
    }
}
