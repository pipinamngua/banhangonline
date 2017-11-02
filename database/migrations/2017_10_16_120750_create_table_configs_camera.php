<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfigsCamera extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs_cameras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('dimension');
            $table->string('weight');
            $table->string('camera');
            $table->string('connectivity');
            $table->string('battery');
            $table->string('microphones');
            $table->string('warranty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configs_cameras');
    }
}
