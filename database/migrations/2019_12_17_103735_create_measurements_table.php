<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('measurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('chest');
            $table->integer('hips');
            $table->integer('stomach');
            $table->integer('waist');
            $table->integer('jacket_length');
            $table->integer('soulder_size');
            $table->integer('sleeve_length');
            $table->integer('bicest');
            $table->integer('pant_length');
            $table->integer('rise');
            $table->integer('thigh');
            $table->integer('knees');
            $table->integer('neck');
            $table->integer('wrists');
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
        Schema::dropIfExists('measurements');
    }
}
