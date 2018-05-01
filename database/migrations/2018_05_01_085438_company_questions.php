<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->string('alternative_1')->nullable();
            $table->integer('company_1')->unsigned()->nullable();
            $table->string('alternative_2')->nullable();
            $table->integer('company_2')->unsigned()->nullable();
            $table->string('alternative_3')->nullable();
            $table->integer('company_3')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('company_1')->references('id')->on('company');
            $table->foreign('company_2')->references('id')->on('company');
            $table->foreign('company_3')->references('id')->on('company');
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
