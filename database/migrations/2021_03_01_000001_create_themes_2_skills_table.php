<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemes2SkillsTable extends Migration {
  public function up() {
    Schema::create('themes_2_skills', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('photo')->nullable();
      $table->string('position')->nullable();
      $table->string('social_facebook')->nullable();
      $table->string('social_twitter')->nullable();
      $table->string('social_instagram')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('themes_2_skills');
  }
}
