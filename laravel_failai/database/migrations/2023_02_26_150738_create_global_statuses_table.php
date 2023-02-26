<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('global_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('global_statuses');
    }
};
