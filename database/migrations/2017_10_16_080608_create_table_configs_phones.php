<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfigsPhones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs_phones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('sku');
            $table->string('condition');
            $table->string('warranty_period');
            $table->string('network_connections');
            $table->string('tablet_connection');
            $table->string('color');
            $table->string('screen_size');
            $table->string('model');
            $table->string('operating_system_version');
            $table->string('sim_slots');
            $table->string('ram_memory');
            $table->string('product_size');
            $table->string('expandable_memory');
            $table->string('phone_features');
            $table->string('storage_capacity');
            $table->string('screen_resolution');
            $table->string('screen_type');
            $table->string('core');
            $table->string('weight');
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
        Schema::dropIfExists('configs_phones');
    }
}
