<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class PackageDetails extends Component
{
  public $packageData;
  public $travelDate;
  public $selectedPackage;

  public function mount($packageData)
  {
    if ($packageData->package_12_10->room_4_5) {
      $this->selectedPackage = '12 Days 10 Nights';
    } elseif ($packageData->package_22_20->room_4_5) {
      $this->selectedPackage = '22 Days 20 Nights';
    }
  }

  public function render()
  {
    return view('livewire.package-details');
  }
}