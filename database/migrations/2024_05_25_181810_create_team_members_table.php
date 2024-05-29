<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_members', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->integer('businesses_id')->nullable()->unsigned()->index();
            $table->foreign('businesses_id')->references('id')->on('businesses');
            $table->string('name');
            $table->string('designation');
            $table->string('years_of_experience');
            $table->string('language');
            $table->string('profile_image');
            $table->integer('image_id');
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
        Schema::dropIfExists('team_members');
    }
}
