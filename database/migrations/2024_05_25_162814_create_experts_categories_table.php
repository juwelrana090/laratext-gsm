<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts_categories', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('category_name');
            $table->string('category_slug');
            $table->string('category_image');
            $table->string('category_description');
            $table->text('meta_title')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_canonical_url')->nullable();
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
        Schema::dropIfExists('experts_categories');
    }
}
