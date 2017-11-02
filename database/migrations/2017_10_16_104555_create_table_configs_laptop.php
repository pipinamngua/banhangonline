<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfigsLaptop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs_laptops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('processor');
            $table->string('operating_system');
            $table->string('memory');
            $table->string('hard_drive');
            $table->string('video_card');
            $table->string('display');
            $table->string('primary_battery');
            $table->string('warranty');
            $table->string('ports');
            $table->string('slots');
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
        Schema::dropIfExists('configs_laptops');
    }
}
