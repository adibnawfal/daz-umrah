<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReportController extends Controller
{
  /**
   * Display report page.
   */
  public function getReport(Request $request): View
  {
    $allUsers = User::all();


    return view('report.view', [
      'user' => $request->user(),
      'allUsers' => $allUsers,
    ]);
  }
}