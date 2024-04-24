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
        'hotel_makkah_id' => 1,
        'hotel_madinah_id' => 4,
        'cover_img' => 'package_1_0000.jpg',
        'name' => 'Rayhan',
        'year' => 2024,
        'details' => json_encode([
          '12_days_10_nights' => [
            'price' => [
              'room_4_5' => 9990,
              'room_3' => 10990,
              'room_2' => 11990,
            ],
            'travel_date' => [
              CarbonPeriod::create('2024-07-24', '2024-08-04'),
              CarbonPeriod::create('2024-08-21', '2024-09-01'),
              CarbonPeriod::create('2024-09-04', '2024-09-15'),
              CarbonPeriod::create('2024-09-10', '2024-09-21'),
              CarbonPeriod::create('2024-10-02', '2024-10-13'),
              CarbonPeriod::create('2024-10-16', '2024-10-27'),
              CarbonPeriod::create('2024-11-06', '2024-11-17'),
              CarbonPeriod::create('2024-11-20', '2024-12-01'),
              CarbonPeriod::create('2024-12-04', '2024-12-15'),
              CarbonPeriod::create('2024-12-20', '2024-12-31'),
            ]
          ],
          '22_days_20_nights' => [
            'price' => [
              'room_4_5' => 13990,
              'room_3' => 14990,
              'room_2' => 15990,
            ],
            'travel_date' => [
              CarbonPeriod::create('2024-07-17', '2024-08-07'),
              CarbonPeriod::create('2024-08-07', '2024-08-28'),
              CarbonPeriod::create('2024-09-01', '2024-09-22'),
              CarbonPeriod::create('2024-10-02', '2024-10-23'),
              CarbonPeriod::create('2024-11-06', '2024-11-28'),
              CarbonPeriod::create('2024-12-04', '2024-12-25'),
            ]
          ],
        ]),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Package 2
      [
        'hotel_makkah_id' => 2,
        'hotel_madinah_id' => 4,
        'cover_img' => 'package_2_0000.jpg',
        'name' => 'Rafa',
        'year' => 2024,
        'details' => json_encode([
          '22_days_20_nights' => [
            'price' => [
              'room_4_5' => 12990,
              'room_3' => 13990,
              'room_2' => 14990,
            ],
            'travel_date' => [
              CarbonPeriod::create('2024-07-17', '2024-08-07'),
              CarbonPeriod::create('2024-08-07', '2024-08-28'),
              CarbonPeriod::create('2024-09-01', '2024-09-22'),
              CarbonPeriod::create('2024-10-02', '2024-10-23'),
              CarbonPeriod::create('2024-11-06', '2024-11-28'),
              CarbonPeriod::create('2024-12-04', '2024-12-25'),
            ]
          ],
        ]),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Package 3
      [
        'hotel_makkah_id' => 3,
        'hotel_madinah_id' => 5,
        'cover_img' => 'package_3_0000.jpg',
        'name' => 'Raisha',
        'year' => 2024,
        'details' => json_encode([
          '22_days_20_nights' => [
            'price' => [
              'room_4_5' => 11990,
              'room_3' => 12990,
              'room_2' => 13990,
            ],
            'travel_date' => [
              CarbonPeriod::create('2024-07-17', '2024-08-07'),
              CarbonPeriod::create('2024-08-07', '2024-08-28'),
              CarbonPeriod::create('2024-09-01', '2024-09-22'),
              CarbonPeriod::create('2024-10-02', '2024-10-23'),
              CarbonPeriod::create('2024-11-06', '2024-11-28'),
              CarbonPeriod::create('2024-12-04', '2024-12-25'),
            ]
          ],
        ]),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Package 4
      [
        'hotel_makkah_id' => 3,
        'hotel_madinah_id' => 4,
        'cover_img' => 'package_4_0000.jpg',
        'name' => 'Safwa',
        'year' => 2024,
        'details' => json_encode([
          '12_days_10_nights' => [
            'price' => [
              'room_4_5' => 8990,
              'room_3' => 9990,
              'room_2' => 10990,
            ],
            'travel_date' => [
              CarbonPeriod::create('2024-07-24', '2024-08-04'),
              CarbonPeriod::create('2024-08-21', '2024-09-01'),
              CarbonPeriod::create('2024-09-04', '2024-09-15'),
              CarbonPeriod::create('2024-09-10', '2024-09-21'),
              CarbonPeriod::create('2024-10-02', '2024-10-13'),
              CarbonPeriod::create('2024-10-16', '2024-10-27'),
              CarbonPeriod::create('2024-11-06', '2024-11-17'),
              CarbonPeriod::create('2024-11-20', '2024-12-01'),
              CarbonPeriod::create('2024-12-04', '2024-12-15'),
              CarbonPeriod::create('2024-12-20', '2024-12-31'),
            ]
          ],
          '22_days_20_nights' => [
            'price' => [
              'room_4_5' => 10990,
              'room_3' => 11990,
              'room_2' => 12990,
            ],
            'travel_date' => [
              CarbonPeriod::create('2024-07-17', '2024-08-07'),
              CarbonPeriod::create('2024-08-07', '2024-08-28'),
              CarbonPeriod::create('2024-09-01', '2024-09-22'),
              CarbonPeriod::create('2024-10-02', '2024-10-23'),
              CarbonPeriod::create('2024-11-06', '2024-11-28'),
              CarbonPeriod::create('2024-12-04', '2024-12-25'),
            ]
          ],
        ]),
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

    ]);
  }
}