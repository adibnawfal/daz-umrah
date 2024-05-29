<?php

namespace App\Exports;

use App\Models\Hotel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HotelMadinahExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return Hotel::where('category', 'Madinah')->get();
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
   * @param Hotel $hotelMadinah
   */
  public function map($hotelMadinah): array
  {
    return [
      $hotelMadinah->id,
      $hotelMadinah->category,
      $hotelMadinah->name,
      $hotelMadinah->rating,
      $hotelMadinah->location,
      $hotelMadinah->distance,
      $hotelMadinah->created_at,
    ];
  }
}