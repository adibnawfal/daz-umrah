<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  use HasFactory;

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function package()
  {
    return $this->belongsTo('App\Models\Package');
  }

  public function payment()
  {
    return $this->belongsTo('App\Models\Payment');
  }
}