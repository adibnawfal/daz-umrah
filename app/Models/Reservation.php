<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'user_id',
    'package_id',
    'room',
    'from_date',
    'to_date',
    'status',
    'remarks',
    'identity_card',
    'passport',
    'payment_id',
  ];

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