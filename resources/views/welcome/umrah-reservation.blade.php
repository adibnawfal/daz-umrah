@extends('welcome')

@section('content')
  <livewire:umrahreservation :user="$user" :packageData="$packageData" :travelDate="$travelDate" :selectedPackage="$selectedPackage" :room="$room"
    :packageAmount="$packageAmount" />
@endsection
