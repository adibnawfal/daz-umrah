<?php

namespace App\Http\Controllers;

use App\Models\GPS;
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
    // Fetch GPS data from the database
    $gpsData = GPS::latest()->first();

    return view('dashboard.view', [
      'user' => $request->user(),
      'chart' => $chart->build(),
      'gpsData' => $gpsData,
    ]);
  }

  /**
   * Store gps location.
   */
  public function storeGPS(Request $request)
  {
    $request->validate([
      'latitude' => ['required', 'numeric'],
      'longitude' => ['required', 'numeric'],
    ]);

    $gpsData = new GPS();
    $gpsData->latitude = $request->latitude;
    $gpsData->longitude = $request->longitude;
    $gpsData->save();

    // return response()->json(['message' => 'GPS data saved successfully'], 200);
  }

  /**
   * Get latest gps location.
   */
  public function getLatestGPS()
  {
    // Fetch the latest GPS data from the database
    $latestGPS = GPS::latest()->first();

    // Return the latest GPS data as JSON response
    return response()->json($latestGPS);
  }
}