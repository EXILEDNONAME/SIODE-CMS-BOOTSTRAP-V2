<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionContactUsTable extends Migration {
  public function up() {
    Schema::create('section_contact_us', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_theme')->unsigned();
      $table->string('name');
      $table->string('address')->nullable();
      $table->string('maps')->nullable();
      $table->string('email')->nullable();
      $table->string('phone')->nullable();
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
    Schema::dropIfExists('section_contact_us');
  }
}
