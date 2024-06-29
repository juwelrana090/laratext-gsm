<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('uniqid');
            $table->string('contact_person_name');
            $table->string('contact_email');
            $table->string('contact_mobile');
            $table->string('contact_whatsapp');
            $table->string('contact_google_map')->nullable();
            $table->string('contact_address');
            $table->string('contact_website')->nullable();
            $table->string('contact_image')->nullable();
            $table->string('contact_image_id')->nullable();
            $table->string('company_name');
            $table->string('company_slug');
            $table->string('company_mobile');
            $table->longText('company_description')->nullable();
            $table->string('company_email');
            $table->string('business_price');
            $table->string('business_type');
            $table->json('business_hours');
            $table->json('business_images');
            $table->integer('business_category_id')->nullable()->unsigned()->index();
            $table->foreign('business_category_id')->references('id')->on('business_categories');
            $table->string('business_category_title');
            $table->string('whatsapp_number')->nullable();
            $table->json('social_media')->nullable();
            $table->string('website')->nullable();
            $table->string('city');
            $table->integer('locations_id')->nullable();
            $table->string('country');
            $table->enum('status', ['pending', 'active', 'inactive', 'rejected'])->default('pending');
            $table->text('seo_title')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->text('seo_description')->nullable();
            $table->boolean('is_featured')->default(false);
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
        Schema::dropIfExists('businesses');
    }
}
