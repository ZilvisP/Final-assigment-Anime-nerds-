<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMangaTable extends Migration
{
    public function up()
    {
        Schema::create('user_manga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('manga_id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedDecimal('rating', 2, 1)->nullable();
            $table->date('date_rated')->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'manga_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_manga');
    }
}
