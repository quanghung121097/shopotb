<?php namespace Review\Comment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateReviewComment extends Migration
{
    public function up()
    {
        Schema::create('review_comment_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_product');
            $table->integer('id_user');
            $table->string('user_name');
            $table->text('content');
            $table->timestamp('created_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('review_comment_');
    }
}
