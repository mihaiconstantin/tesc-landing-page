<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle');
            $table->text('content');
            $table->enum('fade_direction', ['left', 'right', 'top', 'bottom'])->nullable();
            $table->string('image')->nullable();
            $table->boolean('image_display')->default(0);
            $table->string('image_alt')->nullable();
            $table->enum('image_position', ['left', 'right'])->nullable();
            $table->boolean('display')->default(1);
            $table->tinyInteger('order');
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
        Schema::dropIfExists('about_sections');
    }
}
