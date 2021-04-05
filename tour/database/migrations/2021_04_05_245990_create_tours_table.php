<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('client_name_id');
            $table->foreign('client_name_id')->references('id')->on('clients');

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');

            $table->integer('length');

            $table->unsignedBigInteger('price_id');
            $table->foreign('price_id')->references('id')->on('prices');

            $table->unsignedBigInteger('guide_id');
            $table->foreign('guide_id')->references('id')->on('guides');

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
        Schema::dropIfExists('tours');
    }
}