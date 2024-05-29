<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StaffExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return User::where('role', 'staff')->get();
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
   * @param User $staff
   */
  public function map($staff): array
  {
    return [
      $staff->id,
      $staff->first_name,
      $staff->last_name,
      $staff->email,
      $staff->role,
      $staff->phone_no,
      $staff->address1,
      $staff->address2,
      $staff->postal_code,
      $staff->city,
      $staff->state,
      $staff->created_at,
    ];
  }
}