@extends('welcome')

@section('content')
  <!-- Package Details -->
  <livewire:PackageDetails :packageData="$packageData" :travelDate="$travelDate" />
  <!-- End Package Details -->
@endsection
