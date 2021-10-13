<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionCountsTable extends Migration {
  public function up() {
    Schema::create('section_counts', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('count_1')->nullable();
      $table->integer('count_2')->nullable();
      $table->integer('count_3')->nullable();
      $table->integer('count_4')->nullable();
      $table->string('count_1_name')->nullable();
      $table->string('count_2_name')->nullable();
      $table->string('count_3_name')->nullable();
      $table->string('count_4_name')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('section_counts');
  }
}
