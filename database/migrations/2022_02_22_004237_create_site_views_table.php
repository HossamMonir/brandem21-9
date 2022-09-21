<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_views', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('browser')->nullable();
            $table->timestamp('login_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('site_views');
    }
}
