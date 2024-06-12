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
      $table->string('cover_img');
      $table->string('name');
      $table->year('year');
      $table->bigInteger('package_12_10_id')->unsigned();
      $table->foreign('package_12_10_id')->references('id')->on('prices')->onDelete('cascade');
      $table->bigInteger('package_22_20_id')->unsigned();
      $table->foreign('package_22_20_id')->references('id')->on('prices')->onDelete('cascade');
      $table->bigInteger('hotel_makkah_id')->unsigned();
      $table->foreign('hotel_makkah_id')->references('id')->on('hotels');
      $table->bigInteger('hotel_madinah_id')->unsigned();
      $table->foreign('hotel_madinah_id')->references('id')->on('hotels');
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