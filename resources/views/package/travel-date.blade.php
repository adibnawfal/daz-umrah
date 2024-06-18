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
          Travel Date
        </p>
      </li>
    </ol>
    <!-- End Breadcrumb -->

    <!-- Button -->
    <button data-hs-overlay="#hs-add-travel-date-modal"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" class="lucide lucide-calendar-plus">
        <path d="M8 2v4" />
        <path d="M16 2v4" />
        <path d="M21 13V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
        <path d="M3 10h18" />
        <path d="M16 19h6" />
        <path d="M19 16v6" />
      </svg>
      Add Travel Date
    </button>
    @include('package.partials.modal.hs-add-travel-date-modal')
    <!-- End Button -->
  </div>

  <div class="flex w-full gap-x-6">
    <!-- 12 Days 10 Nights -->
    <div
      class="w-1/2 p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
      <h3 class="text-xl font-bold text-gray-800 dark:text-neutral-200">12 Days 10 Nights</h3>
      <div class="text-sm text-gray-500 dark:text-neutral-500">Manage travel dates for the 12 Days 10 Nights Umrah
        package.
      </div>

      <div class="my-6">
        <span
          class="text-6xl font-bold text-gray-800 dark:text-neutral-200">{{ $travelDate->where('package', '12 Days 10 Nights')->count() }}</span>
        <span class="text-lg font-bold text-gray-800 dark:text-neutral-200">dates.</span>
      </div>

      <!-- List -->
      <ul class="grid grid-cols-2 text-sm gap-y-2 sm:text-base">
        @foreach ($travelDate as $travelDateData)
          @if ($travelDateData->package === '12 Days 10 Nights')
            <button data-hs-overlay="#hs-update-travel-date-{{ $travelDateData->id }}-modal">
              <li class="flex space-x-3 tracking-tight group/item">
                <span
                  class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-[#c31e39]/10 text-[#c31e39]">
                  <svg class="flex-shrink-0 size-3.5 group-hover/item:hidden" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12" />
                  </svg>
                  <svg class="flex-shrink-0 hidden size-3 group-hover/item:block" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                    <path
                      d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                    <path d="m15 5 4 4" />
                  </svg>
                </span>
                <span class="text-gray-800 dark:text-neutral-200">
                  {{ Carbon\Carbon::parse($travelDateData->from)->format('d M Y') }} -
                  {{ Carbon\Carbon::parse($travelDateData->to)->format('d M Y') }}
                </span>
              </li>
            </button>
            @include('package.partials.modal.hs-update-travel-date-modal')
          @endif
        @endforeach
      </ul>
      <!-- End List -->

      <!-- Information -->
      <p class="mt-8 text-sm text-gray-500 dark:text-neutral-500">Select any date to update.</p>
      <!-- End Information -->
    </div>
    <!-- End 12 Days 10 Nights -->

    <!-- 22 Days 20 Nights -->
    <div
      class="w-1/2 p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
      <h3 class="text-xl font-bold text-gray-800 dark:text-neutral-200">22 Days 20 Nights</h3>
      <div class="text-sm text-gray-500 dark:text-neutral-500">Manage travel dates for the 22 Days 20 Nights Umrah
        package.
      </div>

      <div class="my-6">
        <span
          class="text-6xl font-bold text-gray-800 dark:text-neutral-200">{{ $travelDate->where('package', '22 Days 20 Nights')->count() }}</span>
        <span class="text-lg font-bold text-gray-800 dark:text-neutral-200">dates.</span>
      </div>

      <!-- List -->
      <ul class="grid grid-cols-2 text-sm gap-y-2 sm:text-base">
        @foreach ($travelDate as $travelDateData)
          @if ($travelDateData->package === '22 Days 20 Nights')
            <button data-hs-overlay="#hs-update-travel-date-{{ $travelDateData->id }}-modal">
              <li class="flex space-x-3 tracking-tight group/item">
                <span
                  class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-[#c31e39]/10 text-[#c31e39]">
                  <svg class="flex-shrink-0 size-3.5 group-hover/item:hidden" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12" />
                  </svg>
                  <svg class="flex-shrink-0 hidden size-3 group-hover/item:block" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil">
                    <path
                      d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z" />
                    <path d="m15 5 4 4" />
                  </svg>
                </span>
                <span class="text-gray-800 dark:text-neutral-200">
                  {{ Carbon\Carbon::parse($travelDateData->from)->format('d M Y') }} -
                  {{ Carbon\Carbon::parse($travelDateData->to)->format('d M Y') }}
                </span>
              </li>
            </button>
            @include('package.partials.modal.hs-update-travel-date-modal')
          @endif
        @endforeach
      </ul>
      <!-- End List -->

      <!-- Information -->
      <p class="mt-8 text-sm text-gray-500 dark:text-neutral-500">Select any date to update.</p>
      <!-- End Information -->

    </div>
    <!-- End 22 Days 20 Nights -->
  </div>

  @if (session('status') === 'exceed-12-days')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-red-500 rounded-xl bg-red-50 border-s-4 dark:bg-red-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-red-800 bg-red-200 border-4 border-red-100 rounded-full size-8 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Invalid Date!
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                Please select 12 days input range.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'exceed-22-days')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-red-500 rounded-xl bg-red-50 border-s-4 dark:bg-red-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-red-800 bg-red-200 border-4 border-red-100 rounded-full size-8 dark:border-red-900 dark:bg-red-800 dark:text-red-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Invalid Date!
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                Please select 22 days input range.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'travel-date-submitted')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Travel Date Added.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The travel date has been successfully added to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'travel-date-updated')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Travel Date Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The travel date has been successfully updated to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'travel-date-deleted')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Travel Date Deleted.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The travel date has been successfully deleted from the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif

</x-app-layout>
