<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $datetime = Carbon::now()->toDateTimeString();

    DB::table('hotels')->insert([

      // Hotel 1
      [
        'category' => 'Makkah',
        'name' => 'Dorrar Al Eiman',
        'rating' => 4.1,
        'location' => 'Ajyad St، Abraj Al Safwah Near King Abdul Aziz Gate, Al, Makkah Saudi Arabia',
        'distance' => 50,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Hotel 2
      [
        'category' => 'Makkah',
        'name' => 'Elaf Al Bait',
        'rating' => 4.0,
        'location' => '6984 طريق الملك عبد العزيز, حي اجياد, MAAA4491، 4491, Makkah 24231, Saudi Arabia',
        'distance' => 70,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Hotel 3
      [
        'category' => 'Makkah',
        'name' => 'Sawaed Al Khair',
        'rating' => 3.2,
        'location' => 'حي اجياد،، 4759 طريق الملك عبد العزيز، MAAB4759، 7045،, Makkah 24231, Saudi Arabia',
        'distance' => 250,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Hotel 4
      [
        'category' => 'Madinah',
        'name' => 'Badr Al Maqam',
        'rating' => 3.4,
        'location' => 'Abu Ayyub Al-Ansari, Bada\'ah, Madinah 42311, Saudi Arabia',
        'distance' => 50,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Hotel 5
      [
        'category' => 'Madinah',
        'name' => 'Dar Naem',
        'rating' => 3.5,
        'location' => 'شارع الستين امام الدفاع المدني طريق الملك فيصل المدينه المنوره - المركزيه الشماليه 42311, Saudi Arabia',
        'distance' => 150,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

    ]);
  }
}
