<?php

namespace App\Exports;

use App\Models\Package;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AllPackageExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return Package::all();
  }

  public function headings(): array
  {
    return [
      '#',
      'Name',
      'Year',
      '12 Days 10 Nights - Room for 4 or 5 People',
      '12 Days 10 Nights - Room for 3 People',
      '12 Days 10 Nights - Room for 2 People',
      '22 Days 20 Nights - Room for 4 or 5 People',
      '22 Days 20 Nights - Room for 3 People',
      '22 Days 20 Nights - Room for 2 People',
      'Hotel Makkah',
      'Hotel Madinah',
      'Created',
    ];
  }

  /**
   * @param Package $allPackage
   */
  public function map($allPackage): array
  {
    if ($allPackage->package_12_10 && $allPackage->package_22_20) {
      $data = [
        $allPackage->id,
        $allPackage->name,
        $allPackage->year,
        $allPackage->package_12_10->room_4_5,
        $allPackage->package_12_10->room_3,
        $allPackage->package_12_10->room_2,
        $allPackage->package_22_20->room_4_5,
        $allPackage->package_22_20->room_3,
        $allPackage->package_22_20->room_2,
        $allPackage->hotel_makkah->name,
        $allPackage->hotel_madinah->name,
        $allPackage->created_at,
      ];
    } else if ($allPackage->package_12_10) {
      $data = [
        $allPackage->id,
        $allPackage->name,
        $allPackage->year,
        $allPackage->package_12_10->room_4_5,
        $allPackage->package_12_10->room_3,
        $allPackage->package_12_10->room_2,
        null,
        null,
        null,
        $allPackage->hotel_makkah->name,
        $allPackage->hotel_madinah->name,
        $allPackage->created_at,
      ];
    } else if ($allPackage->package_22_20) {
      $data = [
        $allPackage->id,
        $allPackage->name,
        $allPackage->year,
        null,
        null,
        null,
        $allPackage->package_22_20->room_4_5,
        $allPackage->package_22_20->room_3,
        $allPackage->package_22_20->room_2,
        $allPackage->hotel_makkah->name,
        $allPackage->hotel_madinah->name,
        $allPackage->created_at,
      ];
    }

    return $data;
  }
}