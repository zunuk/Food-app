<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateShellfishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_shellfish', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('oyster')->default(0);
            $table->unsignedInteger('shijimi')->default(0);
            $table->unsignedInteger('hamaguri')->default(0);
            $table->unsignedInteger('asari')->default(0);
            $table->unsignedInteger('scallop')->default(0);
            $table->unsignedInteger('hard_clam')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_shellfish');
    }
}
