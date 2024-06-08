<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('views', function (Blueprint $table) {
            $table->increments('id')->autoIncrement();
            $table->text('post_id');
            $table->text('user_ip');
            $table->text('method');
            $table->text('host');
            $table->text('url');
            $table->text('referer')->nullable();
            $table->text('country')->nullable();
            $table->text('device');
            $table->text('operating');
            $table->text('browser');
            $table->text('browser_version');
            $table->text('time_zone');
            $table->text('asn');
            $table->text('asn_org');
            $table->text('date_at');
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
        Schema::dropIfExists('views');
    }
}
