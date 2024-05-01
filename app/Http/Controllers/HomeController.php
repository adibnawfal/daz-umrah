<?php

namespace App\Http\Controllers;

use App\Charts\TotalUsersChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class HomeController extends Controller
{
  /**
   * Display the dashboard page.
   */
  public function index(Request $request, TotalUsersChart $chart): View
  {
    $url = '';
    $role = Auth::User()->role;

    if ($role === 'admin') {
      $url = 'admin.dashboard';
    } elseif ($role === 'staff') {
      $url = 'staff.dashboard';
    } elseif ($role === 'customer') {
      $url = 'customer.dashboard';
    } else {
      $url = 'welcome';
    }

    // return view($url);

    // return view('dashboard.view');

    return view('dashboard.view', [
      'user' => $request->user(),
      'chart' => $chart->build(),
    ]);
  }
}