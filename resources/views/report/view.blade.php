<x-app-layout>
  <x-slot:title>
    Report
  </x-slot>

  <!-- Breadcrumb -->
  <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
    <li class="inline-flex items-center">
      <p class="flex items-center text-sm text-gray-500">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-home">
          <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
          <polyline points="9 22 9 12 15 12 15 22" />
        </svg>
        Home
      </p>
      <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600"
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6" />
      </svg>
    </li>
    <li class="inline-flex items-center">
      <p class="flex items-center text-sm font-semibold text-gray-800 dark:text-white">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-file-text">
          <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
          <path d="M14 2v4a2 2 0 0 0 2 2h4" />
          <path d="M10 9H8" />
          <path d="M16 13H8" />
          <path d="M16 17H8" />
        </svg>
        Report
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <!-- User -->
  <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
    <div class="mb-4 sm:mb-7">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Users
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Explore detailed reports and insights about all users in the system.
      </p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <!-- All User -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.all-user') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            All User
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information on all registered users.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End All User -->

      <!-- Staff -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.staff') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            Staff
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information on registered staff.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End Staff -->

      <!-- Customer -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.customer') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            Customer
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information on registered customer.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End Customer -->
    </div>
  </div>
  <!-- End User -->

  <!-- Package -->
  <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
    <div class="mb-4 sm:mb-7">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Umrah Packages
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Discover various Umrah packages with detailed itineraries and services.
      </p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <!-- All Package -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.all-package') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            All Package
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information on all available Umrah packages.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End All Package -->

      <!-- 12 Days 10 Nights -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.12-days-10-nights') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            12 Days 10 Nights
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information on 12 days 10 nights Umrah packages.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End 12 Days 10 Nights -->

      <!-- 22 Days 20 Nights -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.22-days-20-nights') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            22 Days 20 Nights
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information on 22 days 20 nights Umrah packages.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End 22 Days 20 Nights -->
    </div>
  </div>
  <!-- End Package -->

  <!-- Hotels -->
  <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
    <div class="mb-4 sm:mb-7">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Hotels
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Find information on hotels available within our travel packages.
      </p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <!-- All Hotel -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.all-hotel') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            All Hotel
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information on all available hotels.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End All Hotel -->

      <!-- Hotel Makkah -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.hotel-makkah') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            Hotel Makkah
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information for Hotel Makkah.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End Hotel Makkah -->

      <!-- Hotel Madinah -->
      <a class="flex flex-col h-full p-5 transition-all duration-300 bg-white border border-gray-200 group hover:border-transparent hover:shadow-lg rounded-xl dark:border-neutral-700 dark:hover:border-transparent dark:hover:shadow-black/40"
        href="{{ route('report.hotel-madinah') }}">
        <div class="mb-5">
          <h3 class="font-semibold text-gray-800 dark:text-neutral-300 dark:group-hover:text-white">
            Hotel Madinah
          </h3>
          <p class="text-sm text-gray-600 dark:text-neutral-400">
            Detailed information for Hotel Madinah.
          </p>
        </div>
        <div class="flex items-center justify-between">
          <h5 class="text-sm text-gray-800 dark:text-neutral-200">Updated 1 hour ago</h5>
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-move-right">
            <path d="M18 8L22 12L18 16" />
            <path d="M2 12H22" />
          </svg>
        </div>
      </a>
      <!-- End Hotel Madinah -->
    </div>
  </div>
  <!-- End Hotels -->

</x-app-layout>
