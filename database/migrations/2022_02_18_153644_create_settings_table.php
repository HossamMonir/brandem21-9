<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_tel')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('contact_latitude')->nullable();
            $table->string('contact_longitude')->nullable();

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('twitter')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('flickr')->nullable();
            $table->string('tumblr')->nullable();
            $table->string('github')->nullable();
            $table->string('googleplus')->nullable();

            $table->text('google_analytics_code')->nullable();
            $table->text('facebook_pixel_code')->nullable();

            $table->longText('description')->nullable();

            $table->integer('updated_by');
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
        Schema::dropIfExists('settings');
    }
}
