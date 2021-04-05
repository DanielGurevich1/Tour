<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('price_offer_title');

            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('cars');

            $table->unsignedBigInteger('guide_id');
            $table->foreign('guide_id')->references('id')->on('guides');

            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');

            $table->unsignedBigInteger('manager_id');
            $table->foreign('manager_id')->references('id')->on('managers');

            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')->references('id')->on('programs');

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
        Schema::dropIfExists('prices');
    }
}
