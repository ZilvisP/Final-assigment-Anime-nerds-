<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysForTable extends Migration
{
    public function up()
    {
        Schema::table('anime', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('global_statuses');
        });

        Schema::table('manga', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('global_statuses');
        });

        Schema::table('user_anime', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('anime_id')->references('id')->on('anime')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('user_statuses');
        });

        Schema::table('user_manga', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('manga_id')->references('id')->on('manga')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('user_statuses');
        });
    }

    public function down()
    {
        Schema::table('anime', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });

        Schema::table('manga', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });

        Schema::table('user_anime', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['anime_id']);
            $table->dropForeign(['status_id']);
        });

        Schema::table('user_manga', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['manga_id']);
            $table->dropForeign(['status_id']);
        });
    }
}
