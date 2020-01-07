<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('virtualproduct_id');
            $table->integer('jacket_type');
            $table->integer('lapel');
            $table->integer('fittings');
            $table->integer('brestpocket');
            $table->integer('pocket');
            $table->integer('sleeve_button');
            $table->integer('vent');
            $table->integer('pant_fit');
            $table->integer('pleats');
            $table->integer('fastening');
            $table->integer('side_pockets');
            $table->integer('back_pockets');
            $table->integer('cuffs');
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
        Schema::dropIfExists('customizations');
    }
}
