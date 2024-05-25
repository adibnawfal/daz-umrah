@extends('welcome')

@section('content')
  <main id="scrollspy-1" class="flex flex-col flex-grow dark:bg-gray-800">
    <!-- Home -->
    <div
      class="overflow-hidden bg-cover bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1633174754673-95dd2842f8fc?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')]">
      <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-20">
        @include('welcome.partials.home')
      </div>
    </div>
    <!-- End Home -->

    <!-- Package -->
    <div id="package" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      @include('welcome.partials.package')
    </div>
    <!-- End Package -->

    <!-- About Us -->
    <div id="aboutus" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      <div class="max-w-4xl mx-auto">
        @include('welcome.partials.about-us')
      </div>
    </div>
    <!-- End About Us -->

    <!-- Photo -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      @include('welcome.partials.photo')
    </div>
    <!-- End Photo -->

    <!-- Stats -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      @include('welcome.partials.stats')
    </div>
    <!-- End Stats -->

    <!-- Testimonials -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      @include('welcome.partials.testimonials')
    </div>
    <!-- End Testimonials -->

    <!-- FAQ -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
      @include('welcome.partials.faq')
    </div>
    <!-- End FAQ -->
  </main>
@endsection
