<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AllUserExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return User::all();
  }

  public function headings(): array
  {
    return [
      '#',
      'First Name',
      'Last Name',
      'Email',
      'Role',
      'Phone No.',
      'Address Line 1',
      'Address Line 2',
      'Postal Code',
      'City',
      'State',
      'Created',
    ];
  }

  /**
   * @param User $allUser
   */
  public function map($allUser): array
  {
    return [
      $allUser->id,
      $allUser->first_name,
      $allUser->last_name,
      $allUser->email,
      $allUser->role,
      $allUser->phone_no,
      $allUser->address1,
      $allUser->address2,
      $allUser->postal_code,
      $allUser->city,
      $allUser->state,
      $allUser->created_at,
    ];
  }
}