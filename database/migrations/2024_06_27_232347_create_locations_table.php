<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->string('description');
            $table->text('meta_title')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_canonical_url')->nullable();
            $table->integer('image_id')->nullable()->unsigned()->index();
            $table->foreign('image_id')->references('id')->on('file_managers');
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
        Schema::dropIfExists('locations');
    }
}
