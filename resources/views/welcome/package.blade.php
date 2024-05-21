@extends('welcome')

@section('content')
  <main id="scrollspy-1" class="flex flex-col flex-grow dark:bg-gray-800">
    <div id="package" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      @include('welcome.partials.package-all')
    </div>
  </main>
@endsection
