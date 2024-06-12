<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $datetime = Carbon::now()->toDateTimeString();

    DB::table('packages')->insert([

      // Package 1
      [
        'cover_img' => 'package_1_0000.jpg',
        'name' => 'Rayhan',
        'year' => 2024,
        'package_12_10_id' => 1,
        'package_22_20_id' => 2,
        'hotel_makkah_id' => 1,
        'hotel_madinah_id' => 4,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Package 2
      [
        'cover_img' => 'package_2_0000.jpg',
        'name' => 'Rafa',
        'year' => 2024,
        'package_12_10_id' => 3,
        'package_22_20_id' => 4,
        'hotel_makkah_id' => 2,
        'hotel_madinah_id' => 4,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Package 3
      [
        'cover_img' => 'package_3_0000.jpg',
        'name' => 'Raisha',
        'year' => 2024,
        'package_12_10_id' => 5,
        'package_22_20_id' => 6,
        'hotel_makkah_id' => 3,
        'hotel_madinah_id' => 5,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Package 4
      [
        'cover_img' => 'package_4_0000.jpg',
        'name' => 'Safwa',
        'year' => 2024,
        'package_12_10_id' => 7,
        'package_22_20_id' => 8,
        'hotel_makkah_id' => 3,
        'hotel_madinah_id' => 4,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

    ]);
  }
}