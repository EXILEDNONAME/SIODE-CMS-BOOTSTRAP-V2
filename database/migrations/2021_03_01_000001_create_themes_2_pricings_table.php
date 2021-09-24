<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemes2PricingsTable extends Migration {
  public function up() {
    Schema::create('themes_2_pricings', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('default')->default(2);
      $table->integer('premium')->default(2);
      $table->string('name');
      $table->string('price');
      $table->string('unit');
      $table->text('description')->nullable();
      $table->integer('active')->default(1);
      $table->integer('sort')->default(1);
      $table->integer('status')->default(1);
      $table->integer('created_by')->nullable()->default('0');
      $table->integer('updated_by')->nullable()->default('0');
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('themes_2_pricings');
  }
}
