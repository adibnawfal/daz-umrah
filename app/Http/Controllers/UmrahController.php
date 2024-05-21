<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UmrahController extends Controller
{
  /**
   * Display the package page.
   */
  public function getReservationList(Request $request): View
  {
    if ($request->User()->role == 'admin' || $request->User()->role == 'staff') {
      $reservation = Reservation::all();
    } else {
      $reservation = Reservation::where('user_id', $request->User()->id)->get();
    }

    return view('umrah.reservation-list', [
      'user' => $request->user(),
      'reservation' => $reservation,
    ]);
  }
}