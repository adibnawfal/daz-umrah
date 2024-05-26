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
    Schema::create('reservations', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
      $table->bigInteger('package_id')->unsigned();
      $table->foreign('package_id')->references('id')->on('packages');
      $table->string('room');
      $table->date('from_date');
      $table->date('to_date');
      $table->string('status');
      $table->string('remarks');
      $table->string('identity_card')->nullable();
      $table->string('passport')->nullable();
      $table->bigInteger('payment_id')->unsigned();
      $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('reservations');
  }
};