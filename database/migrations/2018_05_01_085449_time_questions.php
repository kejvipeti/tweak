<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TimeQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('time_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('alternative_1')->nullable();
            $table->integer('time_1')->unsigned()->nullable();
            $table->string('alternative_2')->nullable();
            $table->integer('time_2')->unsigned()->nullable();
            $table->string('alternative_3')->nullable();
            $table->integer('time_3')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('time_1')->references('id')->on('time');
            $table->foreign('time_2')->references('id')->on('time');
            $table->foreign('time_3')->references('id')->on('time');
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
