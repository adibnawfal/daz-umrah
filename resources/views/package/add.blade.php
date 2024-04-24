<x-app-layout>
  <x-slot:title>
    Add Package
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
      <a class="flex items-center text-sm text-gray-500" href="{{ route('package.view') }}">
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
        Package
      </a>
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
          stroke-linejoin="round" class="lucide lucide-plus">
          <path d="M5 12h14" />
          <path d="M12 5v14" />
        </svg>
        Add Package
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <!-- Card -->
  <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
    <div class="mb-8">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Add Package
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Add new Umrah package.
      </p>
    </div>

    <form method="post" action="{{ route('package.add-submit') }}" enctype="multipart/form-data">
      @csrf

      <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
        <!-- Cover Image -->
        <div class="sm:col-span-3">
          <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Cover Image
          </label>
        </div>

        <div class="sm:col-span-9">
          <input type="file" name="cover_img" id="cover_img"
            class="block w-full text-sm border border-gray-200 rounded-lg shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600 file:bg-gray-50 file:border-0 file:me-4 file:py-2 file:px-4 dark:file:bg-gray-700 dark:file:text-gray-400">
          <x-input-error class="mt-2" :messages="$errors->get('cover_img')" />
        </div>
        <!-- End Cover Image -->

        <!-- Package Name -->
        <div class="sm:col-span-3">
          <label for="name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Name
          </label>
        </div>

        <div class="sm:col-span-9">
          <input type="text" name="name" id="name" placeholder="Rayhan"
            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            value="{{ old('name') }}">
          <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <!-- End Package Name -->

        <!-- Year -->
        <div class="sm:col-span-3">
          <label for="year" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Year
          </label>
        </div>

        <div class="sm:col-span-9">
          <div
            class="block w-full bg-white border border-gray-200 rounded-lg pe-3 dark:bg-slate-900 dark:border-gray-700"
            data-hs-input-number>
            <div class="flex items-center justify-between w-full">
              <input type="number" name="year" id="year" placeholder="{{ \Carbon\Carbon::now()->year }}"
                class="block w-full text-sm text-gray-800 bg-transparent border-0 focus:ring-0 dark:text-white [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                value="{{ old('year', \Carbon\Carbon::now()->year) }}" data-hs-input-number-input>
              <div class="flex justify-end items-center gap-x-1.5">
                <button type="button"
                  class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-full shadow-sm size-6 gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                  data-hs-input-number-decrement>
                  <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                  </svg>
                </button>
                <button type="button"
                  class="inline-flex items-center justify-center text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-full shadow-sm size-6 gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                  data-hs-input-number-increment>
                  <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <x-input-error class="mt-2" :messages="$errors->get('year')" />
        </div>
        <!-- End Year -->

        <!-- Hotel Makkah -->
        <div class="sm:col-span-3">
          <label for="hotel_makkah" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Hotel Makkah
          </label>
        </div>

        <div class="sm:col-span-9">
          <select name="hotel_makkah" id="hotel_makkah"
            class="block w-full px-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
            <option @selected(old('hotel_makkah') == 0) disabled value=0>Select hotel Makkah</option>
            @foreach ($hotels as $hotelData)
              @if ($hotelData->category == 'Makkah')
                <option @selected(old('hotel_makkah') == $hotelData->id) value={{ $hotelData->id }}>{{ $hotelData->name }}</option>
              @endif
            @endforeach
          </select>
          <x-input-error class="mt-2" :messages="$errors->get('hotel_makkah')" />
        </div>
        <!-- End Hotel Makkah -->

        <!-- Hotel Madinah -->
        <div class="sm:col-span-3">
          <label for="hotel_madinah" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Hotel Madinah
          </label>
        </div>

        <div class="sm:col-span-9">
          <select name="hotel_madinah" id="hotel_madinah"
            class="block w-full px-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
            <option @selected(old('hotel_madinah') == 0) disabled value=0>Select hotel Madinah</option>
            @foreach ($hotels as $hotelData)
              @if ($hotelData->category == 'Madinah')
                <option @selected(old('hotel_madinah') == $hotelData->id) value={{ $hotelData->id }}>{{ $hotelData->name }}</option>
              @endif
            @endforeach
          </select>
          <x-input-error class="mt-2" :messages="$errors->get('hotel_madinah')" />
        </div>
        <!-- End Hotel Madinah -->

        <!-- 12 Days 10 Nights -->
        <hr class="sm:col-span-12">

        <div class="sm:col-span-12">
          <h2 class="font-semibold text-gray-800 dark:text-gray-200">
            12 Days 10 Nights
          </h2>
        </div>
        <!-- End 12 Days 10 Nights -->

        <!-- Price -->
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="room_12" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Price
            </label>
          </div>
        </div>

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 4 or 5</span>
              </div>
              <div class="relative w-full">
                <input type="number" name="room_12_4_5" id="room_12_4_5"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('room_12_4_5') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('room_12_4_5')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 4 or 5 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 3</span>
              </div>
              <div class="relative w-full">
                <input type="number" name="room_12_3" id="room_12_3"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('room_12_3') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('room_12_3')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 3 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 2</span>
              </div>
              <div class="relative w-full">
                <input type="number" name="room_12_2" id="room_12_2"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('room_12_2') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('room_12_2')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 2 people is required.</span>
            @enderror
          </div>
        </div>
        <!-- End Price -->

        <!-- Travel Date -->
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="travel_date_12" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Travel Date
            </label>
          </div>
        </div>

        <div class="sm:col-span-9">
          <div>
            <div id="hs-wrapper-for-copy" class="space-y-3">
              <div id="hs-content-for-copy" class="rounded-lg sm:flex">
                <input type="date" name="travel_date_12_from" id="travel_date_12_from"
                  class="relative block w-full px-4 -mt-px text-sm border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                <span
                  class="inline-flex items-center w-full px-4 -mt-px text-sm text-gray-500 border border-gray-200 min-w-fit bg-gray-50 -ms-px first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                  <svg class="hidden text-gray-400 sm:block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-minus">
                    <path d="M5 12h14" />
                  </svg>
                </span>
                <input type="date" name="travel_date_12_to" id="travel_date_12_to"
                  class="relative block w-full px-4 -mt-px text-sm border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
              </div>
            </div>

            <p class="mt-3">
              <button type="button"
                data-hs-copy-markup='{
                  "targetSelector": "#hs-content-for-copy",
                  "wrapperSelector": "#hs-wrapper-for-copy",
                  "limit": 30
                }'
                id="hs-copy-content"
                class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-gray-200 bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M5 12h14" />
                  <path d="M12 5v14" />
                </svg>
                Add Date
              </button>
            </p>
          </div>
          <x-input-error class="mt-2" :messages="$errors->get('travel_date_12_from')" />
          <x-input-error class="mt-2" :messages="$errors->get('travel_date_12_to')" />
        </div>
        <!-- End Travel Date -->

        <!-- 22 Days 20 Nights -->
        <hr class="sm:col-span-12">

        <div class="sm:col-span-12">
          <h2 class="font-semibold text-gray-800 dark:text-gray-200">
            22 Days 20 Nights
          </h2>
        </div>
        <!-- End 22 Days 20 Nights -->

        <!-- Price -->
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="room_22" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Price
            </label>
          </div>
        </div>

        <div class="sm:col-span-9">
          <div class="space-y-2">
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 4 or 5</span>
              </div>
              <div class="relative w-full">
                <input type="number" name="room_22_4_5" id="room_22_4_5"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('room_22_4_5') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('room_22_4_5')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 4 or 5 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 3</span>
              </div>
              <div class="relative w-full">
                <input type="number" name="room_22_3" id="room_22_3"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('room_22_3') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('room_22_3')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 3 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 2</span>
              </div>
              <div class="relative w-full">
                <input type="number" name="room_22_2" id="room_22_2"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('room_22_2') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('room_22_2')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 2 people is required.</span>
            @enderror
          </div>
        </div>
        <!-- End Price -->

        <!-- Travel Date -->
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="travel_date_22" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
              Travel Date
            </label>
          </div>
        </div>

        <div class="sm:col-span-9">
          <div>
            <div id="hs-wrapper-for-copy" class="space-y-3">
              <div id="hs-content-for-copy" class="rounded-lg sm:flex">
                <input type="date" name="travel_date_22_from" id="travel_date_22_from"
                  class="relative block w-full px-4 -mt-px text-sm border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
                <span
                  class="inline-flex items-center w-full px-4 -mt-px text-sm text-gray-500 border border-gray-200 min-w-fit bg-gray-50 -ms-px first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">
                  <svg class="hidden text-gray-400 sm:block size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-minus">
                    <path d="M5 12h14" />
                  </svg>
                </span>
                <input type="date" name="travel_date_22_to" id="travel_date_22_to"
                  class="relative block w-full px-4 -mt-px text-sm border-gray-200 shadow-sm -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
              </div>
            </div>

            <p class="mt-3">
              <button type="button"
                data-hs-copy-markup='{
                  "targetSelector": "#hs-content-for-copy",
                  "wrapperSelector": "#hs-wrapper-for-copy",
                  "limit": 30
                }'
                id="hs-copy-content"
                class="py-1.5 px-2 inline-flex items-center gap-x-1 text-xs font-medium rounded-full border border-dashed border-gray-200 bg-white text-gray-800 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M5 12h14" />
                  <path d="M12 5v14" />
                </svg>
                Add Date
              </button>
            </p>
          </div>
          <x-input-error class="mt-2" :messages="$errors->get('travel_date_22_from')" />
          <x-input-error class="mt-2" :messages="$errors->get('travel_date_22_to')" />
        </div>
        <!-- End Travel Date -->
      </div>

      <div class="flex justify-end mt-5 gap-x-2">
        <a href="{{ route('package.view') }}"
          class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-x">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
          Cancel
        </a>
        <button type="submit"
          class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-plus">
            <path d="M5 12h14" />
            <path d="M12 5v14" />
          </svg>
          Add Package
        </button>
      </div>
    </form>
  </div>
  <!-- End Card -->
</x-app-layout>
