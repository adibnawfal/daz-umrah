<x-app-layout>
  <x-slot:title>
    Manage Package
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
            stroke-linejoin="round" class="lucide lucide-clipboard-list">
            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
            <path d="M12 11h4" />
            <path d="M12 16h4" />
            <path d="M8 11h.01" />
            <path d="M8 16h.01" />
          </svg>
          Manage Package
        </p>
      </li>
    </ol>
    <!-- End Breadcrumb -->

    <!-- Button -->
    <div class="inline-flex gap-x-2">
      <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        href="#">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-text">
          <path d="M17 6.1H3" />
          <path d="M21 12.1H3" />
          <path d="M15.1 18H3" />
        </svg>
        View all
      </a>
      <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        href="{{ route('package.get-add-package') }}">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-clipboard-pen-line">
          <rect width="8" height="4" x="8" y="2" rx="1" />
          <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.5" />
          <path d="M16 4h2a2 2 0 0 1 1.73 1" />
          <path d="M8 18h1" />
          <path d="M18.4 9.6a2 2 0 0 1 3 3L17 17l-4 1 1-4Z" />
        </svg>
        Add Package
      </a>
    </div>
    <!-- End Button -->
  </div>

  <!-- Grid -->
  <div class="grid gap-6 min-[1870px]:grid-cols-5 min-[1590px]:grid-cols-4 xl:grid-cols-3 sm:grid-cols-2">
    <!-- Card -->
    @foreach ($package as $packageData)
      <a class="group flex p-5 flex-col h-max bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        href="{{ route('package.package-details', $packageData->id) }}">
        <!-- Image -->
        <div class="relative">
          @if ($packageData->cover_img)
            <img class="object-cover w-full rounded-xl h-[170px] border border-gray-200"
              src="{{ asset('images/packages/' . $packageData->cover_img) }}" alt="Cover Image">
          @else
            <div class="flex justify-center items-center w-full rounded-xl h-[170px] bg-gray-50 border border-gray-200">
              <p class="text-xs font-semibold text-gray-500 uppercase ">Cover Image</p>
            </div>
          @endif
        </div>
        <!-- End Image -->

        <!-- Details -->
        <div class="flex flex-col justify-between pt-4">

          <!-- Badge -->
          <div class="flex gap-x-2">
            @if ($packageData->package_12_10->room_4_5)
              <p
                class="text-[0.6rem] gap-1.5 py-1.5 mb-2 px-3 rounded-lg uppercase font-semibold bg-gray-800/[0.1] text-gray-800">
                {{ $packageData->package_12_10->package }}
              </p>
            @endif
            @if ($packageData->package_22_20->room_4_5)
              <p
                class="text-[0.6rem] gap-1.5 py-1.5 mb-2 px-3 rounded-lg uppercase font-semibold bg-gray-800/[0.1] text-gray-800">
                {{ $packageData->package_22_20->package }}
              </p>
            @endif
          </div>
          <!-- End Badge -->

          <!-- Title -->
          <h3 class="mb-4 text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
            Package {{ $packageData->name }} {{ $packageData->year }}
          </h3>
          <!-- End Title -->

          <!-- List -->
          <ul class="mb-4 space-y-1 text-sm">
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Hotel {{ $packageData->hotel_makkah->category }} {{ $packageData->hotel_makkah->name }}
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Hotel {{ $packageData->hotel_madinah->category }} {{ $packageData->hotel_madinah->name }}
              </span>
            </li>
          </ul>
          <!-- End List -->

          <!-- Price -->
          <div class="flex items-end justify-between">
            <div class="flex flex-col">
              <p class="text-xs text-gray-800 dark:text-gray-200">Price from</p>
              <p class="text-xl font-semibold text-gray-800 dark:text-gray-400">
                RM
                @if ($packageData->package_12_10->room_4_5)
                  {{ number_format($packageData->package_12_10->room_4_5, 0, ',') }}
                @else
                  {{ number_format($packageData->package_22_20->room_4_5, 0, ',') }}
                @endif
              </p>
            </div>
            <p class="text-sm decoration-2 group-hover:text-[#c31e39] group-hover:underline">See more</p>
          </div>
          <!-- End Price -->
        </div>
        <!-- End Details -->
      </a>
    @endforeach
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</x-app-layout>
