<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_id')->nullable()->unsigned()->onDelete('cascade');
            $table->text('content')->nullable();
            $table->string('youtube')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('image')->nullable();
            $table->string('project_detail_type')->nullable();

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
        Schema::dropIfExists('work_details');
    }
}
