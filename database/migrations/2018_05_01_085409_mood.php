<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mood extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mood_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('alternative_1')->nullable();
            $table->integer('category_1')->unsigned()->nullable();
            $table->string('alternative_2')->nullable();
            $table->integer('category_2')->unsigned()->nullable();
            $table->string('alternative_3')->nullable();
            $table->integer('category_3')->unsigned()->nullable();
            $table->string('alternative_4')->nullable();
            $table->integer('category_4')->unsigned()->nullable();
            $table->string('alternative_5')->nullable();
            $table->integer('category_5')->unsigned()->nullable();
            $table->string('alternative_6')->nullable();
            $table->integer('category_6')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('category_1')->references('id')->on('categories');
            $table->foreign('category_2')->references('id')->on('categories');
            $table->foreign('category_3')->references('id')->on('categories');
            $table->foreign('category_4')->references('id')->on('categories');
            $table->foreign('category_5')->references('id')->on('categories');
            $table->foreign('category_6')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
