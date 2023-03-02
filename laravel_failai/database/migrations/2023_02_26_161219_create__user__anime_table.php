<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAnimeTable extends Migration
{
    public function up()
    {
        Schema::create('user_anime', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('anime_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedDecimal('rating', 2, 1)->nullable();
            $table->date('date_rated')->nullable();
            $table->timestamps();
            $table->unique(['user_id', 'anime_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_anime');
    }
}
