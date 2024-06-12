<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PricesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $datetime = Carbon::now()->toDateTimeString();

    DB::table('prices')->insert([

      // Price 1 - Package 1
      [
        'package' => '12 Days 10 Nights',
        'room_4_5' => 9990,
        'room_3' => 10990,
        'room_2' => 11990,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Price 2 - Package 1
      [
        'package' => '22 Days 20 Nights',
        'room_4_5' => 13990,
        'room_3' => 14990,
        'room_2' => 15990,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Price 3 - Package 2
      [
        'package' => '12 Days 10 Nights',
        'room_4_5' => null,
        'room_3' => null,
        'room_2' => null,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Price 4 - Package 2
      [
        'package' => '22 Days 20 Nights',
        'room_4_5' => 12990,
        'room_3' => 13990,
        'room_2' => 14990,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Price 5 - Package 3
      [
        'package' => '12 Days 10 Nights',
        'room_4_5' => null,
        'room_3' => null,
        'room_2' => null,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Price 6 - Package 3
      [
        'package' => '22 Days 20 Nights',
        'room_4_5' => 11990,
        'room_3' => 12990,
        'room_2' => 13990,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Price 7 - Package 4
      [
        'package' => '12 Days 10 Nights',
        'room_4_5' => 8990,
        'room_3' => 9990,
        'room_2' => 10990,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Price 8 - Package 4
      [
        'package' => '22 Days 20 Nights',
        'room_4_5' => 10990,
        'room_3' => 11990,
        'room_2' => 12990,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

    ]);
  }
}