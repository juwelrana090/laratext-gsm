<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_managers', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->text('file_name')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_format')->nullable();
            $table->string('file_thumbnail')->nullable();
            $table->text('file_path')->nullable();
            $table->integer('post_id')->nullable();
            $table->integer('business_id')->nullable();
            $table->integer('experts_id')->nullable();
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
        Schema::dropIfExists('file_managers');
    }
}
