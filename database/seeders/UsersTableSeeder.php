<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $datetime = Carbon::now()->toDateTimeString();

    DB::table('users')->insert([

      // Administrator
      [
        'first_name' => 'Admin',
        'last_name' => null,
        'email' => 'admin@dazumrah.com',
        'password' => Hash::make('admin12345'),
        'role' => 'admin',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Staff 1
      [
        'first_name' => 'Staff',
        'last_name' => 'Adib',
        'email' => 'xchaoz1999@gmail.com',
        'password' => Hash::make('chaoz12345'),
        'role' => 'staff',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Customer
      [
        'first_name' => 'Customer',
        'last_name' => null,
        'email' => 'customer@dazumrah.com',
        'password' => Hash::make('customer12345'),
        'role' => 'customer',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Customer 1
      [
        'first_name' => 'Nur',
        'last_name' => 'Fatehah',
        'email' => 'nurfatehah@gmail.com',
        'password' => Hash::make('nur12345'),
        'role' => 'customer',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Customer 2
      [
        'first_name' => 'Mohd',
        'last_name' => 'Johan',
        'email' => 'mohdjohan@gmail.com',
        'password' => Hash::make('mohd12345'),
        'role' => 'customer',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Customer 3
      [
        'first_name' => 'Ahmad',
        'last_name' => 'Ali',
        'email' => 'ahmadali@gmail.com',
        'password' => Hash::make('ahmad12345'),
        'role' => 'customer',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Staff 2
      [
        'first_name' => 'Staff',
        'last_name' => 'Rahim',
        'email' => 'chaozcompany15@gmail.com',
        'password' => Hash::make('chaoz12345'),
        'role' => 'staff',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],

      // Staff 3
      [
        'first_name' => 'Staff',
        'last_name' => 'Zainul',
        'email' => 'budgetcalculatorapp@gmail.com',
        'password' => Hash::make('budget12345'),
        'role' => 'staff',
        'created_at' => $datetime,
        'updated_at' => $datetime,
      ],
    ]);
  }
}