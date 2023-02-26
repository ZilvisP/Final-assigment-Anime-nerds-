<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimeTable extends Migration
{
    public function up()
    {
        Schema::create('anime', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->float('rating', 3, 1)->nullable();
            $table->date('release_date')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->foreignId('status_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anime');
    }
};
