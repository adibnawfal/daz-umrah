<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $datetime = Carbon::now()->toDateTimeString();

    DB::table('feedback')->insert([

      // Feedback 1
      [
        'user_id' => 4,
        'rating' => 5,
        'title' => 'I just love it!',
        'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non faucibus sem. Suspendisse scelerisque tempus erat. Suspendisse sodales ullamcorper est, nec condimentum tortor condimentum non.',
        'reply' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'favourite' => true,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Feedback 2
      [
        'user_id' => 5,
        'rating' => 5,
        'title' => 'Really nice',
        'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'reply' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'favourite' => true,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Feedback 3
      [
        'user_id' => 6,
        'rating' => 4,
        'title' => 'Best travel',
        'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non faucibus sem. Suspendisse scelerisque tempus erat.',
        'reply' => null,
        'favourite' => true,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Feedback 4
      [
        'user_id' => 4,
        'rating' => 5,
        'title' => 'You will not regret it!',
        'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non faucibus sem. Suspendisse scelerisque.',
        'reply' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'favourite' => false,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Feedback 5
      [
        'user_id' => 6,
        'rating' => 4,
        'title' => 'Amazing!',
        'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non faucibus sem.',
        'reply' => null,
        'favourite' => false,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ]

    ]);
  }
}