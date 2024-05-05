<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
  use HasFactory;

  public function package_12_10()
  {
    return $this->belongsTo('App\Models\Price', 'package_12_10_id');
  }

  public function package_22_20()
  {
    return $this->belongsTo('App\Models\Price', 'package_22_20_id');
  }

  public function hotel_makkah()
  {
    return $this->belongsTo('App\Models\Hotel', 'hotel_makkah_id');
  }

  public function hotel_madinah()
  {
    return $this->belongsTo('App\Models\Hotel', 'hotel_madinah_id');
  }
}