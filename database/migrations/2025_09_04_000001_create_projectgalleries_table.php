<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectgalleriesTable extends Migration
{
    public function up()
    {
        Schema::create('projectgalleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('main_image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projectgalleries');
    }
}
