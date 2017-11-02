<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfigsTivi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs_tivis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('screen_size');
            $table->string('resolution');
            $table->string('processor');
            $table->string('wifi_built-in');
            $table->string('web_browser');
            $table->string('speaker_system');
            $table->string('hdmi');
            $table->string('usb');
            $table->string('weight');
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
        Schema::dropIfExists('configs_tivis');
    }
}
