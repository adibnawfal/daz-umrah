<?php

namespace App\Exports;

use App\Models\Package;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Package22Days20NightsExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return Package::whereNotNull('package_22_20_id')->get();
  }

  public function headings(): array
  {
    return [
      '#',
      'Name',
      'Year',
      'Room for 4 or 5 People',
      'Room for 3 People',
      'Room for 2 People',
      'Hotel Makkah',
      'Hotel Madinah',
      'Created',
    ];
  }

  /**
   * @param Package $package22Days20Nights
   */
  public function map($package22Days20Nights): array
  {
    return [
      $package22Days20Nights->id,
      $package22Days20Nights->name,
      $package22Days20Nights->year,
      $package22Days20Nights->package_22_20->room_4_5,
      $package22Days20Nights->package_22_20->room_3,
      $package22Days20Nights->package_22_20->room_2,
      $package22Days20Nights->hotel_makkah->name,
      $package22Days20Nights->hotel_madinah->name,
      $package22Days20Nights->created_at,
    ];
  }
}