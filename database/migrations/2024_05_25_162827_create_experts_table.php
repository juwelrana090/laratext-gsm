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
            $table->integer('experts_categories_id')->nullable();
            $table->string('experts_categories_name')->nullable();
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
            $table->json('working_hours');
            $table->longText('description')->nullable();
            $table->longText('services');
            $table->string('starting_prices');
            $table->string('social_profile')->nullable();
            $table->string('google_map')->nullable();
            $table->integer('ratings')->nullable();
            $table->string('reviews')->nullable();
            $table->string('website')->nullable();
            $table->string('city');
            $table->integer('locations_id')->nullable();
            $table->string('country');
            $table->enum('status', ['pending', 'active', 'inactive', 'rejected'])->default('pending');
            $table->text('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('expert_image');
            $table->text('cover_photo')->nullable();
            $table->integer('cover_photo_id')->nullable();
            $table->integer('image_id')->nullable();
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
