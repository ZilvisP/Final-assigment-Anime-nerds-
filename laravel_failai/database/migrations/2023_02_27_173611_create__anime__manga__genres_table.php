<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimeMangaGenresTable extends Migration
{
    public function up()
    {
        Schema::create('anime_manga_genres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('anime_id')->nullable();
            $table->unsignedBigInteger('manga_id')->nullable();
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();

            $table->foreign('anime_id')->references('id')->on('anime')->onDelete('cascade');
            $table->foreign('manga_id')->references('id')->on('manga')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('anime_manga_genre');
    }
}
