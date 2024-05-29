<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('new_price')->nullable();
            $table->string('title');
            $table->string('original_price')->nullable();
            $table->string('slug')->nullable();
            $table->bigInteger('brand_id')->nullable();
            $table->bigInteger('car_type_id')->nullable();
            $table->bigInteger('fuel_type_id')->nullable();
            $table->bigInteger('cylinder')->nullable();
            $table->string('part_no')->nullable();
            $table->string('vehicle')->nullable();
            $table->string('grooves')->nullable();
            $table->string('voltage')->nullable();
            $table->string('sensor')->nullable();
            $table->string('pully_diameter')->nullable();
            $table->string('origin')->nullable();
            $table->string('manufaturer')->nullable();
            $table->string('year')->nullable();
            $table->text('general_dsc')->nullable();

            $table->text('security_env')->nullable();

            $table->string('pub_place')->default('new_arrivals');
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
        Schema::dropIfExists('cars');
    }
}
