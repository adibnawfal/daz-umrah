<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ReportController extends Controller
{
  /**
   * Display report page.
   */
  public function getReport(Request $request): View
  {
    return view('report.view', [
      'user' => $request->user(),
    ]);
  }
}