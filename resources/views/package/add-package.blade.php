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
      <a class="flex items-center text-sm text-gray-500" href="{{ route('package.manage-package') }}">
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
          stroke-linejoin="round" class="lucide lucide-clipboard-plus">
          <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
          <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
          <path d="M9 14h6" />
          <path d="M12 17v-6" />
        </svg>
        Add Package
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <!-- Add Package -->
  <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
    <div class="mb-8">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Add Package
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Add new Umrah package.
      </p>
    </div>

    <form method="post" action="{{ route('package.post-add-package') }}" enctype="multipart/form-data">
      @csrf

      <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
        <!-- Cover Image -->
        <div class="sm:col-span-3">
          <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Cover Image
          </label>
        </div>
        <div class="sm:col-span-9">
          <input type="file" id="cover_img" name="cover_img"
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
          <input type="text" id="name" name="name" placeholder="Enter package name"
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
              <input type="number" id="year" name="year" placeholder="{{ \Carbon\Carbon::now()->year }}"
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
          <select id="hotel_makkah" name="hotel_makkah"
            class="block w-full px-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
            <option @selected(old('hotel_makkah') == 0) disabled value=0>Select hotel Makkah</option>
            @foreach ($hotel as $hotelData)
              @if ($hotelData->category == 'Makkah')
                <option @selected(old('hotel_makkah') == $hotelData->id) value={{ $hotelData->id }}>
                  {{ $hotelData->name }}, {{ $hotelData->distance }} Meter
                </option>
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
          <select id="hotel_madinah" name="hotel_madinah"
            class="block w-full px-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
            <option @selected(old('hotel_madinah') == 0) disabled value=0>Select hotel Madinah</option>
            @foreach ($hotel as $hotelData)
              @if ($hotelData->category == 'Madinah')
                <option @selected(old('hotel_madinah') == $hotelData->id) value={{ $hotelData->id }}>
                  {{ $hotelData->name }}, {{ $hotelData->distance }} Meter
                </option>
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
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="price_12_10" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
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
                <input type="number" id="price_12_10_room_4_5" name="price_12_10_room_4_5"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('price_12_10_room_4_5') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('price_12_10_room_4_5')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 4 or 5 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 3</span>
              </div>
              <div class="relative w-full">
                <input type="number" id="price_12_10_room_3" name="price_12_10_room_3"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('price_12_10_room_3') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('price_12_10_room_3')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 3 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 2</span>
              </div>
              <div class="relative w-full">
                <input type="number" id="price_12_10_room_2" name="price_12_10_room_2"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('price_12_10_room_2') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('price_12_10_room_2')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 2 people is required.</span>
            @enderror
          </div>
        </div>
        <!-- End 12 Days 10 Nights -->

        <!-- 22 Days 20 Nights -->
        <hr class="sm:col-span-12">
        <div class="sm:col-span-12">
          <h2 class="font-semibold text-gray-800 dark:text-gray-200">
            22 Days 20 Nights
          </h2>
        </div>
        <div class="sm:col-span-3">
          <div class="inline-block">
            <label for="price_22_20" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
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
                <input type="number" id="price_22_20_room_4_5" name="price_22_20_room_4_5"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('price_22_20_room_4_5') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('price_22_20_room_4_5')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 4 or 5 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 3</span>
              </div>
              <div class="relative w-full">
                <input type="number" id="price_22_20_room_3" name="price_22_20_room_3"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('price_22_20_room_3') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('price_22_20_room_3')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 3 people is required.</span>
            @enderror
            <div class="sm:flex">
              <div
                class="inline-flex items-center px-4 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                <span class="text-sm text-gray-500 dark:text-gray-400">Room for 2</span>
              </div>
              <div class="relative w-full">
                <input type="number" id="price_22_20_room_2" name="price_22_20_room_2"
                  class="block w-full px-4 text-sm border-gray-200 shadow-sm rounded-e-lg ps-12 focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none"
                  value="{{ old('price_22_20_room_2') }}">
                <div class="absolute inset-y-0 z-20 flex items-center pointer-events-none start-0 ps-4">
                  <span class="text-sm text-gray-500">RM</span>
                </div>
              </div>
            </div>
            @error('price_22_20_room_2')
              <span class="mt-2 space-y-1 text-sm text-red-600">The price room for 2 people is required.</span>
            @enderror
          </div>
        </div>
        <!-- End 22 Days 20 Nights -->
      </div>

      <div class="flex justify-end mt-5 gap-x-2">
        <a href="{{ route('package.manage-package') }}"
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
            stroke-linejoin="round" class="lucide lucide-clipboard-plus">
            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
            <path d="M9 14h6" />
            <path d="M12 17v-6" />
          </svg>
          Add Package
        </button>
      </div>
    </form>
  </div>
  <!-- End Add Package -->
</x-app-layout>
