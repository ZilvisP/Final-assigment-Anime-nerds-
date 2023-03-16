<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeRatingToIntegerInUserMangaTable extends Migration
{
    public function up()
    {
        Schema::table('user_manga', function (Blueprint $table) {
            $table->integer('rating')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('user_manga', function (Blueprint $table) {
            $table->unsignedDecimal('rating', 2, 1)->nullable()->change();
        });
    }
};
