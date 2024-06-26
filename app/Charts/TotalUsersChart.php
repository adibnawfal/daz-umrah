<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalUsersChart
{
  protected $chart;

  public function __construct(LarapexChart $chart)
  {
    $this->chart = $chart;
  }

  public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
  {
    return $this->chart->areaChart()
      ->addData('2022', [40, 93, 35, 42, 18, 82])
      ->addData('2023', [70, 29, 77, 28, 55, 45])
      ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
  }
}
