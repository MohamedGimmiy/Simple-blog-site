<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('content');
            $table->bigInteger('com_cat')->unsigned();
            $table->bigInteger('com_user')->unsigned();
            $table->bigInteger('com_post')->unsigned();
            $table->foreign('com_cat')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('com_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('com_post')->references('id')->on('posts')->onDelete('cascade');

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
        Schema::dropIfExists('comments');
    }
}
