<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArtikelGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_genres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('artikel_id')->unsigned();
            $table->bigInteger('genre_id')->unsigned();
            $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('CASCADE');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('CASCADE');
            $table->string('slug');
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
        //
    }
}
