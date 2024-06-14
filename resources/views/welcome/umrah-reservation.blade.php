@extends('welcome')

@section('content')
  <livewire:UmrahReservation :user="$user" :packageData="$packageData" :travelDate="$travelDate" :selectedPackage="$selectedPackage" :room="$room"
    :packageAmount="$packageAmount" />
@endsection
