<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('packages', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('hotel_makkah_id')->unsigned();
      $table->foreign('hotel_makkah_id')->references('id')->on('hotels');
      $table->bigInteger('hotel_madinah_id')->unsigned();
      $table->foreign('hotel_madinah_id')->references('id')->on('hotels');
      $table->string('cover_img');
      $table->string('name');
      $table->integer('year');
      $table->json('details');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('packages');
  }
};
