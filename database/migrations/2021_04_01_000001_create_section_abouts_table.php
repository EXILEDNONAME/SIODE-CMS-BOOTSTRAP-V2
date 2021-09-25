<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionAboutsTable extends Migration {
  public function up() {
    Schema::create('section_abouts', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_theme')->unsigned();
      $table->string('title');
      $table->string('sub_title');
      $table->string('content_title');
      $table->text('content_description_1');
      $table->string('content_1_title');
      $table->string('content_1_description');
      $table->string('content_2_title');
      $table->string('content_2_description');
      $table->text('content_description_2');
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->foreign('id_theme')->references('id')->on('themes')->onDelete('restrict')->onUpdate('restrict');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('section_abouts');
  }
}
