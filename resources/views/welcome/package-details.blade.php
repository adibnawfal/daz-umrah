@extends('welcome')

@section('content')
  <!-- Package Details -->
  <livewire:packagedetails :packageData="$packageData" :travelDate="$travelDate" />
  <!-- End Package Details -->
@endsection
