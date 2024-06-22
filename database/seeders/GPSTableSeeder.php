<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GPSTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $datetime = Carbon::now()->toDateTimeString();

    DB::table('g_p_s')->insert([
      // GPS 1
      [
        'latitude' => 1.862886,
        'longitude' => 103.103923,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // GPS 2
      [
        'latitude' => 1.862857,
        'longitude' => 103.103978,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // GPS 3
      [
        'latitude' => 1.862876,
        'longitude' => 103.103975,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // GPS 4
      [
        'latitude' => 1.862924,
        'longitude' => 103.103812,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // GPS 5
      [
        'latitude' => 1.862842,
        'longitude' => 103.103932,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

    ]);
  }
}