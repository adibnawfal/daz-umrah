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
        'details' => 'The experience was absolutely amazing. Everything was well organized and the team was extremely professional. Highly recommend!',
        'reply' => 'Thank you so much, Nur Fatehah! We are thrilled to hear that you had such a wonderful experience. Your kind words mean a lot to us, and we hope to welcome you back soon for another fantastic trip!',
        'favourite' => true,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Feedback 2
      [
        'user_id' => 5,
        'rating' => 5,
        'title' => 'Really nice',
        'details' => 'I had a great time. The service was exceptional and the attention to detail was impressive. Will definitely use this service again.',
        'reply' => 'Dear Mohd Johan, thank you for your positive feedback! We are glad to know that you enjoyed your time with us. Your satisfaction is our top priority, and we look forward to serving you again in the future.',
        'favourite' => true,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Feedback 3
      [
        'user_id' => 6,
        'rating' => 4,
        'title' => 'Best travel',
        'details' => 'This was the best travel experience I\'ve ever had. The itinerary was perfect, and the staff were friendly and helpful throughout the journey.',
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
        'details' => 'Choosing this service was the best decision. Everything exceeded my expectations, and I enjoyed every moment. Absolutely worth it!',
        'reply' => 'Thank you, Nur Fatehah! We are delighted to hear that you had such a positive experience. Your feedback encourages us to keep providing the best service possible. We can\'t wait to assist you with your next adventure!',
        'favourite' => false,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Feedback 5
      [
        'user_id' => 6,
        'rating' => 4,
        'title' => 'Amazing!',
        'details' => 'The entire experience was phenomenal. From start to finish, everything was flawless. I couldn\'t have asked for a better service.',
        'reply' => null,
        'favourite' => false,
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ]

    ]);
  }
}