<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateCarbohydratesNoodlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_carbohydrates_noodles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('udon')->default(0);
            $table->unsignedInteger('somen')->default(0);
            $table->unsignedInteger('soba')->default(0);
            $table->unsignedInteger('pasta')->default(0);
            $table->unsignedInteger('ramen')->default(0);
            $table->unsignedInteger('fried_noodle')->default(0);
            $table->unsignedInteger('tsukemen')->default(0);
            $table->unsignedInteger('hiyamugi')->default(0);
            $table->unsignedInteger('cold_noodle')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_carbohydrates_noodles');
    }
}
