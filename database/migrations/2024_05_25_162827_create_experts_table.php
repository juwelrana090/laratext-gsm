<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('experts_categories_id')->nullable()->unsigned()->index();
            $table->foreign('experts_categories_id')->references('id')->on('experts_categories');
            $table->string('contact_person_name');
            $table->string('email');
            $table->string('address');
            $table->string('mobile');
            $table->string('telephone');
            $table->string('whatsapp_number');
            $table->string('price');
            $table->string('title');
            $table->string('slug');
            $table->string('about');
            $table->string('working_hours');
            $table->string('description')->nullable();
            $table->string('services');
            $table->string('starting_prices');
            $table->json('social_profile');
            $table->string('google_map')->nullable();
            $table->integer('ratings')->nullable();
            $table->string('reviews')->nullable();
            $table->string('website')->nullable();
            $table->string('city');
            $table->string('country');
            $table->text('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
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
        Schema::dropIfExists('experts');
    }
}
