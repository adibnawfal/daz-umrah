<?php

namespace App\Exports;

use App\Models\Package;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class Package12Days10NightsExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return Package::whereNotNull('package_12_10_id')->get();
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
   * @param Package $package12Days10Nights
   */
  public function map($package12Days10Nights): array
  {
    return [
      $package12Days10Nights->id,
      $package12Days10Nights->name,
      $package12Days10Nights->year,
      $package12Days10Nights->package_12_10->room_4_5,
      $package12Days10Nights->package_12_10->room_3,
      $package12Days10Nights->package_12_10->room_2,
      $package12Days10Nights->hotel_makkah->name,
      $package12Days10Nights->hotel_madinah->name,
      $package12Days10Nights->created_at,
    ];
  }
}