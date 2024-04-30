<x-app-layout>
  <x-slot:title>
    Manage Travel Date
  </x-slot>

  <div class="inline-flex items-start justify-between">
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
            stroke-linejoin="round" class="lucide lucide-calendar-days">
            <path d="M8 2v4" />
            <path d="M16 2v4" />
            <rect width="18" height="18" x="3" y="4" rx="2" />
            <path d="M3 10h18" />
            <path d="M8 14h.01" />
            <path d="M12 14h.01" />
            <path d="M16 14h.01" />
            <path d="M8 18h.01" />
            <path d="M12 18h.01" />
            <path d="M16 18h.01" />
          </svg>
          Manage Travel Date
        </p>
      </li>
    </ol>
    <!-- End Breadcrumb -->

    <!-- Button -->
    <button data-hs-overlay="#hs-travel-date-modal"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round">
        <path d="M5 12h14" />
        <path d="M12 5v14" />
      </svg>
      Add Travel Date
    </button>
    @include('package.partials.modal.hs-travel-date-modal')
    <!-- End Button -->
  </div>

  <div class="flex w-full gap-x-6">
    <!-- 12 Days 10 Nights -->
    <div
      class="p-4 bg-white border border-gray-200 w-[50%] h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
      <!-- Title -->
      <div>
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
          12 Days 10 Nights
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-400">
          Musim biasa.
        </p>
      </div>
      <!-- End Title -->

      <!-- Info -->
      <div class="my-5">
        <span class="text-5xl font-bold text-gray-800 dark:text-neutral-200">13</span>
        <span class="text-lg font-bold text-gray-800 dark:text-neutral-200">dates.</span>
      </div>
      <!-- End Info -->

      <!-- List -->
      <ul class="space-y-1 text-sm">
        {{-- @if ($travelDateData->package == '12 Days 10 Nights')
          @foreach ($travelDateData->date as $date)
            @if ($loop->first)
              {{ Carbon\Carbon::parse($date)->format('d M Y') }}
            @elseif ($loop->last)
              - {{ Carbon\Carbon::parse($date)->format('d M Y') }}
            @endif
          @endforeach
        @endif --}}
        <li class="flex space-x-2">
          <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            24 Jul 2024 - 04 Aug 2024
          </span>
        </li>
        <li class="flex space-x-2">
          <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            21 Aug 2024 - 01 Sep 2024
          </span>
        </li>
      </ul>
      <!-- End List -->
    </div>
    <!-- End 12 Days 10 Nights -->

    <!-- 22 Days 20 Nights -->
    <div
      class="p-4 bg-white border border-gray-200 w-[50%] h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
      <!-- Title -->
      <div>
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
          22 Days 20 Nights
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-400">
          Musim cuti sekolah.
        </p>
      </div>
      <!-- End Title -->

      <!-- Info -->
      <div class="my-5">
        <span class="text-5xl font-bold text-gray-800 dark:text-neutral-200">13</span>
        <span class="text-lg font-bold text-gray-800 dark:text-neutral-200">dates.</span>
      </div>
      <!-- End Info -->

      <!-- List -->
      <ul class="space-y-1 text-sm">
        <li class="flex space-x-2">
          <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            24 Jul 2024 - 04 Aug 2024
          </span>
        </li>
        <li class="flex space-x-2">
          <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
          </svg>
          <span class="text-gray-800 dark:text-gray-400">
            21 Aug 2024 - 01 Sep 2024
          </span>
        </li>
      </ul>
      <!-- End List -->
    </div>
    <!-- End 22 Days 20 Nights -->
  </div>

</x-app-layout>
