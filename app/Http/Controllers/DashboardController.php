<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Charts\TotalUsersChart;

class DashboardController extends Controller
{
  /**
   * Display dashboard page.
   */
  public function getDashboard(Request $request, TotalUsersChart $chart): View
  {
    return view('dashboard.view', [
      'user' => $request->user(),
      'chart' => $chart->build(),
    ]);
  }
}