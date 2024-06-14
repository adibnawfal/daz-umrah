<x-app-layout>
  <x-slot:title>
    Dashboard
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
          stroke-linejoin="round" class="lucide lucide-layout-dashboard">
          <rect width="7" height="9" x="3" y="3" rx="1" />
          <rect width="7" height="5" x="14" y="3" rx="1" />
          <rect width="7" height="9" x="14" y="12" rx="1" />
          <rect width="7" height="5" x="3" y="16" rx="1" />
        </svg>
        Dashboard
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <!-- Stats -->
  {{-- <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4 sm:gap-6">
    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
      <div class="flex p-4 md:p-5 gap-x-4">
        <div class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
          <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          </svg>
        </div>

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs tracking-wide text-gray-500 uppercase">
              Total users
            </p>
            <div class="hs-tooltip">
              <div class="hs-tooltip-toggle">
                <svg class="flex-shrink-0 text-gray-500 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                  <path d="M12 17h.01" />
                </svg>
                <span
                  class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible dark:bg-slate-700"
                  role="tooltip">
                  The number of users over all time
                </span>
              </div>
            </div>
          </div>
          <div class="flex items-center mt-1 gap-x-2">
            <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-gray-200">
              72,540
            </h3>
            <span
              class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100">
              <svg class="self-center inline-block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                <polyline points="16 7 22 7 22 13" />
              </svg>
              <span class="inline-block text-xs font-medium">
                12.5%
              </span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
      <div class="flex p-4 md:p-5 gap-x-4">
        <div
          class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
          <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 22h14" />
            <path d="M5 2h14" />
            <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
            <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
          </svg>
        </div>

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs tracking-wide text-gray-500 uppercase">
              Sessions
            </p>
          </div>
          <div class="flex items-center mt-1 gap-x-2">
            <h3 class="text-xl font-medium text-gray-800 dark:text-gray-200">
              29.4%
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
      <div class="flex p-4 md:p-5 gap-x-4">
        <div
          class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
          <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 11V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h6" />
            <path d="m12 12 4 10 1.7-4.3L22 16Z" />
          </svg>
        </div>

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs tracking-wide text-gray-500 uppercase">
              Avg. Click Rate
            </p>
          </div>
          <div class="flex items-center mt-1 gap-x-2">
            <h3 class="text-xl font-medium text-gray-800 sm:text-2xl dark:text-gray-200">
              56.8%
            </h3>
            <span
              class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-red-100 text-red-900 dark:bg-red-800 dark:text-red-100">
              <svg class="self-center inline-block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                <polyline points="16 17 22 17 22 11" />
              </svg>
              <span class="inline-block text-xs font-medium">
                1.7%
              </span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Card -->
    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-800">
      <div class="flex p-4 md:p-5 gap-x-4">
        <div
          class="flex-shrink-0 flex justify-center items-center size-[46px] bg-gray-100 rounded-lg dark:bg-gray-800">
          <svg class="flex-shrink-0 text-gray-600 size-5 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
            <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
            <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
          </svg>
        </div>

        <div class="grow">
          <div class="flex items-center gap-x-2">
            <p class="text-xs tracking-wide text-gray-500 uppercase">
              Pageviews
            </p>
            <div class="hs-tooltip">
              <div class="hs-tooltip-toggle">
                <svg class="flex-shrink-0 text-gray-500 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                  <path d="M12 17h.01" />
                </svg>
                <span
                  class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible dark:bg-slate-700"
                  role="tooltip">
                  The average pageviews
                </span>
              </div>
            </div>
          </div>
          <div class="flex items-center mt-1 gap-x-2">
            <h3 class="text-xl font-medium text-gray-800 dark:text-gray-200">
              92,913
            </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div> --}}
  <!-- End Stats -->

  <div class="flex w-full gap-6">
    <div
      class="w-full p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
      <div class="flex flex-col w-full mb-8">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">Live Location</h2>
        <p class="text-sm text-gray-600 dark:text-gray-400">View the current location of customers during Umrah.
        </p>
      </div>
      <div class="relative w-full shadow h-[30rem] sm:rounded">
        <div class="absolute inset-0">
          <iframe id="map" width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0"
            marginwidth="0">
          </iframe>
        </div>
      </div>
    </div>

    {{-- <div class="flex flex-col gap-6 basis-2/5">
      <!-- Location -->
      <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
        <div class="mb-8">
          <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
            Location
          </h2>
          <p class="text-sm text-gray-600 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>

        <div class="flex flex-col gap-y-2">
          <!-- Johor -->
          <div class="flex items-center justify-between gap-x-4">
            <span class="text-sm text-gray-800 dark:text-gray-200">Johor</span>
            <div class="flex justify-end w-full h-1.5 rounded-full overflow-hidden" role="progressbar"
              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
              <div
                class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-blue-600 rounded-full whitespace-nowrap dark:bg-blue-500"
                style="width: 25%">
              </div>
            </div>
            <span class="text-sm text-gray-600 dark:text-neutral-400">39.8%</span>
          </div>
          <!-- End Johor -->

          <!-- Johor -->
          <div class="flex items-center justify-between gap-x-4">
            <span class="text-sm text-gray-800 dark:text-gray-200">Johor</span>
            <div class="flex justify-end w-full h-1.5 rounded-full overflow-hidden" role="progressbar"
              aria-valuenow="36" aria-valuemin="0" aria-valuemax="100">
              <div
                class="flex flex-col justify-center overflow-hidden text-xs text-center text-white transition duration-500 bg-blue-600 rounded-full whitespace-nowrap dark:bg-blue-500"
                style="width: 36%">
              </div>
            </div>
            <span class="text-sm text-gray-600 dark:text-neutral-400">39.8%</span>
          </div>
          <!-- End Johor -->
        </div>
      </div>
      <!-- End Location -->

      <!-- Charts -->
      <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
        <div class="mb-8">
          <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
            Total Users
          </h2>
          <p class="text-sm text-gray-600 dark:text-gray-400">
            Total users by year and month.
          </p>
        </div>

        {!! $chart->container() !!}
      </div>
      <!-- End Charts -->
    </div> --}}
  </div>


  <script>
    // Fetch GPS data from the server and update the map
    setInterval(function() {
      fetch('/dashboard/latest/gps') // Define a route to fetch the latest GPS data
        .then(response => response.json())
        .then(data => {
          const {
            latitude,
            longitude
          } = data;
          document.getElementById('map').src =
            `https://maps.google.com/maps?q=${latitude},${longitude}&z=15&output=embed`;
        });
    }, 10000); // Update map every 10 seconds
  </script>

  <script src="{{ $chart->cdn() }}"></script>

  {{ $chart->script() }}
</x-app-layout>
