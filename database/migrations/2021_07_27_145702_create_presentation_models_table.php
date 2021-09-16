<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentation_models', function (Blueprint $table) {
            $table->id();
            $table->string('presentation_image');
            $table->string('presentation_title');
            $table->string('presentation_subtitle');
            $table->string('presentation_file');
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
        Schema::dropIfExists('presentation_models');
    }
}
