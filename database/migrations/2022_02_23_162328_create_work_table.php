<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('client_id')->nullable()->unsigned()->onDelete('cascade');  
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('image2')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('content');
            $table->string('sector')->nullable();
            $table->string('region')->nullable();
            $table->text('capabilities')->nullable();

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('og_image')->nullable();
            $table->string('link_url')->nullable();

            $table->boolean('featured')->nullable();
            $table->integer('display_order')->nullable();
            $table->boolean('is_hidden')->default('0');
            $table->integer('created_by');
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
        Schema::dropIfExists('work');
    }
}