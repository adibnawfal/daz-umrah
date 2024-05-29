<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomerExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return User::where('role', 'customer')->get();
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
   * @param User $customer
   */
  public function map($customer): array
  {
    return [
      $customer->id,
      $customer->first_name,
      $customer->last_name,
      $customer->email,
      $customer->role,
      $customer->phone_no,
      $customer->address1,
      $customer->address2,
      $customer->postal_code,
      $customer->city,
      $customer->state,
      $customer->created_at,
    ];
  }
}