<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration {
  public function up() {
    Schema::create('generals', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('slogan')->nullable();
      $table->string('address')->nullable();
      $table->string('email')->nullable();
      $table->string('phone')->nullable();
      $table->text('maps')->nullable();
      $table->string('social_twitter')->nullable();
      $table->string('social_facebook')->nullable();
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
    Schema::dropIfExists('generals');
  }
}
