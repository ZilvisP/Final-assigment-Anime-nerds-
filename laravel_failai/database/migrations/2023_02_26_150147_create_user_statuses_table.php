<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('user_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->timestamp('modified_at')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_statuses');
    }
}
