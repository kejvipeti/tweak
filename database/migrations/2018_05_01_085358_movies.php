<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('url');
            $table->text('description');
            $table->date('release');
            $table->integer('length');
            $table->integer('category_1')->unsigned();
            $table->integer('category_2')->unsigned();
            $table->integer('company_1')->unsigned();
            $table->integer('company_2')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('company_1')->references('id')->on('company');
            $table->foreign('company_2')->references('id')->on('company');
            $table->foreign('category_1')->references('id')->on('categories');
            $table->foreign('category_2')->references('id')->on('categories');
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
