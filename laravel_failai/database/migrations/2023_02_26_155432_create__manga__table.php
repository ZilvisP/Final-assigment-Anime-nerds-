<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMangaTable extends Migration
{
    public function up()
    {
        Schema::create('manga', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('rating', 3, 2)->default(0.0);
            $table->date('release_date')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('manga');
    }
};
