<x-app-layout>
  <x-slot:title>
    Manage Travel Date
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
          stroke-linejoin="round" class="lucide lucide-clipboard-list">
          <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
          <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
          <path d="M12 11h4" />
          <path d="M12 16h4" />
          <path d="M8 11h.01" />
          <path d="M8 16h.01" />
        </svg>
        Manage Travel Date
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <div class="flex flex-col w-full gap-6">
    <!-- 12 Days 10 Nights -->
    <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
      <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
          12 Days 10 Nights
        </h2>
        <p class="text-sm text-gray-600 dark:text-gray-400">
          Add new Umrah package.
        </p>
      </div>

      <!-- Travel Date -->
      <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="travel_date_12" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Travel Date
            </label>
          </div>
        </div>

        <div class="sm:col-span-9">
          <div class="space-y-3">
            <div class="rounded-lg sm:flex">
              <div
                class="w-full px-4 my-auto text-sm border border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                <p class="my-2">Test</p>
              </div>
              <span
                class="inline-flex items-center w-full px-4 -mt-px text-sm text-gray-500 border border-gray-200 min-w-fit bg-gray-50 -ms-px first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                <svg class="hidden text-gray-400 sm:block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-minus">
                  <path d="M5 12h14" />
                </svg>
              </span>
              <div
                class="w-full px-4 text-sm border border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400">
                <p class="my-2">Test</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Travel Date -->
      </div>
      <!-- End 12 Days 10 Nights -->
    </div>

</x-app-layout>
