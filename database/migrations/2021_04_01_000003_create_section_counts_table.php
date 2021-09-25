<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionCountsTable extends Migration {
  public function up() {
    Schema::create('section_counts', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_theme')->unsigned();
      $table->string('context_1_title')->nullable();
      $table->string('context_2_title')->nullable();
      $table->string('context_3_title')->nullable();
      $table->string('context_4_title')->nullable();
      $table->integer('context_1')->nullable();
      $table->integer('context_2')->nullable();
      $table->integer('context_3')->nullable();
      $table->integer('context_4')->nullable();
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
    Schema::dropIfExists('section_counts');
  }
}
