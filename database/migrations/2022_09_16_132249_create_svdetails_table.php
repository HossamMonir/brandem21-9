<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSvdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('svdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('service_id')->nullable()->unsigned();
            $table->string('section_title')->nullable();
            $table->string('section_title2')->nullable();
            $table->string('section_color')->nullable();
            $table->string('section_image')->nullable();
            $table->string('section_subtitle')->nullable();
            $table->text('section_text')->nullable();
            $table->boolean('featured')->nullable();

            $table->integer('display_order')->nullable();
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
        Schema::dropIfExists('svdetails');
    }
}
