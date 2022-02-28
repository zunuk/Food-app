<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateSpicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_spices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('cinnamon')->default(0);
            $table->unsignedInteger('cumin')->default(0);
            $table->unsignedInteger('garlic_spice')->default(0);
            $table->unsignedInteger('turmeric')->default(0);
            $table->unsignedInteger('chili')->default(0);
            $table->unsignedInteger('pepper')->default(0);
            $table->unsignedInteger('shichimi')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_spices');
    }
}
