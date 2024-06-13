<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'user_id',
    'rating',
    'title',
    'details',
    'reply',
    'favourite',
  ];

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
}