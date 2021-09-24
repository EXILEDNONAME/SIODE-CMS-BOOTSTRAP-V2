<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemes2FeaturesTable extends Migration {
  public function up() {
    Schema::create('themes_2_features', function (Blueprint $table) {
      $table->increments('id');
      $table->string('content_1_title');
      $table->string('content_2_title');
      $table->string('content_3_title');
      $table->string('content_4_title');
      $table->string('content_1_description');
      $table->string('content_2_description');
      $table->string('content_3_description');
      $table->string('content_4_description');
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('themes_2_features');
  }
}
