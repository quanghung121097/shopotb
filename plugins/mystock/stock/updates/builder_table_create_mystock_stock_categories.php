<?php namespace Mystock\Stock\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMystockStockCategories extends Migration
{
    public function up()
    {
        Schema::create('mystock_stock_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('parent_id')->nullable();
            $table->string('description');
            $table->string('thumbnail');
            $table->integer('nest_left')->nullable();
            $table->integer('nest_right')->nullable();
            $table->integer('nest_depth')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mystock_stock_categories');
    }
}
