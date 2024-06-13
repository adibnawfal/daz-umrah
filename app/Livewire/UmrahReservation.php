<?php

namespace App\Livewire;

use Livewire\Component;

class UmrahReservation extends Component
{
  public $user;
  public $packageData;
  public $travelDate;
  public $selectedPackage;
  public $room;
  public $packageAmount;
  public $selectedTravelDate = 0;

  public function render()
  {
    return view('livewire.umrah-reservation');
  }
}