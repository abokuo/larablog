<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('cover_image');
            $table->string('introtext');
            $table->text('content');
            $table->foreignId('user_id')->constrained();
            $table->integer('sort')->default(0);
            $table->enum('status',['pending', 'published', 'unpublished']);
            $table->enum('featured',['yes','no']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table){
            $table->dropForeign(['user_id']);
            $table->dropForeign(['category_id']);
            });
        Schema::dropIfExists('posts');
    }
}
