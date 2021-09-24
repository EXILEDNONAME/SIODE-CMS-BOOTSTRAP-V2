<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationSectionAboutsTable extends Migration {
  public function up() {
    Schema::create('configuration_section_abouts', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->string('sub-title')->nullable();
      $table->string('content-title')->nullable();
      $table->string('content-description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('configuration_section_abouts');
  }
}
