<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UmrahController extends Controller
{
  /**
   * Display the package page.
   */
  public function getReservationList(Request $request): View
  {
    return view('umrah.reservation-list', [
      'user' => $request->user(),
    ]);
  }
}