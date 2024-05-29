<?php

namespace App\Exports;

use App\Models\Hotel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class AllHotelExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return Hotel::all();
  }

  public function headings(): array
  {
    return [
      '#',
      'Category',
      'Name',
      'Rating',
      'Location',
      'Distance',
      'Created',
    ];
  }

  /**
   * @param Hotel $allHotel
   */
  public function map($allHotel): array
  {
    return [
      $allHotel->id,
      $allHotel->category,
      $allHotel->name,
      $allHotel->rating,
      $allHotel->location,
      $allHotel->distance,
      $allHotel->created_at,
    ];
  }
}