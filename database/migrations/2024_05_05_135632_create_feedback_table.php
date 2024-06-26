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
    Schema::create('feedback', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('user_id')->unsigned();
      $table->foreign('user_id')->references('id')->on('users');
      $table->integer('rating');
      $table->string('title');
      $table->string('details');
      $table->string('reply')->nullable();
      $table->boolean('favourite');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('feedback');
  }
};