<?php

namespace App\Exports;

use App\Models\Hotel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class HotelMakkahExport implements FromCollection, WithHeadings, WithMapping
{
  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return Hotel::where('category', 'Makkah')->get();
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
   * @param Hotel $hotelMakkah
   */
  public function map($hotelMakkah): array
  {
    return [
      $hotelMakkah->id,
      $hotelMakkah->category,
      $hotelMakkah->name,
      $hotelMakkah->rating,
      $hotelMakkah->location,
      $hotelMakkah->distance,
      $hotelMakkah->created_at,
    ];
  }
}