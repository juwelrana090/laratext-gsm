<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('user_id')->nullable();
            $table->integer('business_id')->nullable();
            $table->integer('expert_id')->nullable();
            $table->string('name');
            $table->string('email');
            $table->longText('description')->nullable();
            $table->integer('rating')->nullable();
            $table->enum('type', ['Business', 'Expert'])->default('Business');
            $table->enum('status', ['pending', 'approval', 'rejected'])->default('pending');
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
        Schema::dropIfExists('reviews');
    }
}
