<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelDatesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $datetime = Carbon::now()->toDateTimeString();

    DB::table('travel_dates')->insert([

      // 12 Days 10 Nights - 1
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-07-24', '2024-08-04')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 2
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-08-21', '2024-09-01')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 3
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-09-04', '2024-09-15')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 4
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-09-10', '2024-09-21')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 5
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-10-02', '2024-10-13')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 6
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-10-16', '2024-10-27')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 7
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-11-06', '2024-11-17')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 8
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-11-20', '2024-12-01')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 9
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-12-04', '2024-12-15')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 12 Days 10 Nights - 10
      [
        'package' => '12 Days 10 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-12-20', '2024-12-31')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 22 Days 20 Nights - 1
      [
        'package' => '22 Days 20 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-07-17', '2024-08-07')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 22 Days 20 Nights - 2
      [
        'package' => '22 Days 20 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-08-07', '2024-08-28')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 22 Days 20 Nights - 3
      [
        'package' => '22 Days 20 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-09-01', '2024-09-22')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 22 Days 20 Nights - 4
      [
        'package' => '22 Days 20 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-10-02', '2024-10-23')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 22 Days 20 Nights - 5
      [
        'package' => '22 Days 20 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-11-06', '2024-11-28')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // 22 Days 20 Nights - 6
      [
        'package' => '22 Days 20 Nights',
        'date' => json_encode(CarbonPeriod::create('2024-12-04', '2024-12-25')),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],
    ]);
  }
}