<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectgalleryImagesTable extends Migration
{
    public function up()
    {
        Schema::create('projectgallery_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('projectgallery_id');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projectgallery_images');
    }
}
