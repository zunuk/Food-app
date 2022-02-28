<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuMuttonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_mutton', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('mutton_lose')->default(0);
            $table->unsignedInteger('mutton_boston_butt')->default(0);
            $table->unsignedInteger('mutton_shoulder')->default(0);
            $table->unsignedInteger('mutton_thigh')->default(0);
            $table->unsignedInteger('mutton_ribs')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_mutton');
    }
}
