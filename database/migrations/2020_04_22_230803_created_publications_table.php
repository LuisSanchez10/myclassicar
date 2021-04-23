<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedPublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('vehicle_id');
            $table->unsignedInteger('vehicle_style_id');
            $table->unsignedInteger('kilometres');
            $table->unsignedInteger('transmission_id');
            $table->unsignedInteger('fuel_id');
            $table->unsignedInteger('car_interior_id');
            $table->unsignedInteger('color_id');
            $table->text('description');
            $table->decimal('price', 20, 2);
            $table->unsignedInteger('currency_id');
            $table->unsignedInteger('ubication_id');
            $table->unsignedInteger('city_id');
            $table->string('vin')->nullable();
            $table->unsignedInteger('status_publication_id');
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
        Schema::dropIfExists('publications');
    }
}
