<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->nullable()->unsigned()->index(); //親分類
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('description');
            $table->string('slug')->unique();
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
        Schema::table('categories', function (Blueprint $table){
            $table->dropForeign(['parent_id']);
            });

        Schema::dropIfExists('categories');
    }
}
