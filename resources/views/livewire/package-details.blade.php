<div class="relative border border-gray-200 h-max rounded-xl dark:border-gray-700">
  <div class="overflow-hidden">
    <!-- Background -->
    <div class="absolute top-0 bottom-0 left-0 right-0 overflow-hidden bg-white rounded-xl -z-[1]"></div>
    @if ($packageData->cover_img)
      <div
        class="absolute rounded-t-xl top-0 left-0 right-0 w-full h-[550px] overflow-hidden saturate-0 bg-center bg-cover -z-[1]"
        style="background-image: url('{{ asset('images/package/' . $packageData->cover_img) }}')">
        <div class="absolute top-0 bg-white size-full opacity-80 -z-[1]"></div>
      </div>
    @endif
    <!-- End Background -->

    <div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 md:pt-14 lg:pt-20 mx-auto">
      <!-- Title -->
      <div class="flex flex-col items-center mb-10">
        <h2
          class="text-3xl font-bold leading-tight text-[#c31e39] md:text-4xl md:leading-tight lg:text-5xl lg:leading-tight bg-clip-text">
          Package {{ $packageData->name }} {{ $packageData->year }}</h2>
        <p class="mt-2 text-center text-gray-800 dark:text-gray-200">Discover our exclusive Umrah package, designed for a
          memorable Umrah experience.</p>
      </div>
      <!-- End Title -->

      <!-- Package Toggle -->
      <div class="flex items-center justify-center">
        <div id="toggle-count" class="p-0.5 inline-block bg-white border border-gray-200 rounded-lg dark:bg-gray-700">
          @if ($packageData->package_12_10->room_4_5)
            <label for="package-1" class="relative inline-block px-3 py-2">
              <input type="radio" id="package-1" name="package" value="12 Days 10 Nights"
                class="absolute top-0 text-transparent bg-transparent border-transparent rounded-lg cursor-pointer peer end-0 size-full bg-none before:absolute before:inset-0 before:size-full before:rounded-lg focus:ring-offset-0 checked:before:bg-[#c31e39] checked:before:shadow-sm checked:bg-none focus:ring-transparent dark:checked:before:bg-gray-800 dark:focus:ring-offset-transparent"
                wire:model.live="selectedPackage">
              <span
                class="relative z-10 inline-block text-sm font-medium text-gray-800 cursor-pointer peer-checked:text-white dark:text-gray-200">
                12 Days 10 Nights
              </span>
            </label>
          @endif
          @if ($packageData->package_22_20->room_4_5)
            <label for="package-2" class="relative inline-block px-3 py-2">
              <input type="radio" id="package-2" name="package" value="22 Days 20 Nights"
                class="absolute top-0 text-transparent bg-transparent border-transparent rounded-lg cursor-pointer peer end-0 size-full bg-none before:absolute before:inset-0 before:size-full before:rounded-lg focus:ring-offset-0 checked:before:bg-[#c31e39] checked:before:shadow-sm checked:bg-none focus:ring-transparent dark:checked:before:bg-gray-800 dark:focus:ring-offset-transparent"
                wire:model.live="selectedPackage">
              <span
                class="relative z-10 inline-block text-sm font-medium text-gray-800 cursor-pointer peer-checked:text-white dark:text-gray-200">
                22 Days 20 Nights
              </span>
            </label>
          @endif
        </div>
      </div>
      <!-- End Package Toggle -->

      <!-- Price -->
      <div class="grid gap-3 mt-6 md:mt-12 sm:grid-cols-2 lg:grid-cols-3 md:gap-6 lg:gap-3 xl:gap-6 lg:items-center">
        <!-- Room for 3 -->
        <div
          class="flex flex-col p-4 text-center bg-white border border-gray-200 rounded-2xl md:p-8 dark:bg-slate-900 dark:border-gray-700">
          <h4 class="text-lg font-medium text-gray-800 dark:text-gray-200">Room for 3</h4>
          <p class="mt-2 text-3xl font-bold text-gray-800 md:text-4xl xl:text-5xl dark:text-gray-200">RM
            <span
              data-hs-toggle-count='{"target": "#toggle-count", "min": {{ $packageData->package_12_10->room_3 }}, "max": {{ $packageData->package_22_20->room_3 }}}'>
              @if ($selectedPackage === '12 Days 10 Nights')
                {{ number_format($packageData->package_12_10->room_3, 0, '', '') }}
              @else
                {{ number_format($packageData->package_22_20->room_3, 0, '', '') }}
              @endif
            </span>
          </p>
          <p class="mt-2 text-sm text-gray-500">Comfortable accommodation</p>
          <ul class="mt-7 space-y-2.5 text-sm">
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                3 people
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Fullboard
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Insurance
              </span>
            </li>
          </ul>
          <a class="inline-flex items-center justify-center w-full px-4 py-3 mt-5 text-sm font-semibold border rounded-lg gap-x-2 border-[#c31e39] text-[#c31e39] hover:bg-[#c31e39] hover:text-white disabled:opacity-50 disabled:pointer-events-none"
            href="{{ route('welcome.get-umrah-reservation', ['packageId' => $packageData->id, 'selectedPackage' => $selectedPackage, 'room' => '3 People']) }}">
            Reserve Now
          </a>
        </div>
        <!-- End Room for 3 -->

        <!-- Room for 4 or 5 -->
        <div
          class="flex flex-col p-4 text-center bg-white border-2 shadow-xl border-[#c31e39] rounded-2xl md:p-8 dark:bg-slate-900 dark:border-[#c31e39]">
          <p class="mb-3">
            <span
              class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg text-xs uppercase font-semibold bg-[#c31e39]/[0.1] text-[#c31e39] dark:bg-[#c31e39] dark:text-white">Most
              popular</span>
          </p>
          <h4 class="text-lg font-medium text-gray-800 dark:text-gray-200">Room for 4 or 5</h4>
          <p class="mt-2 text-3xl font-bold text-gray-800 md:text-4xl xl:text-5xl dark:text-gray-200">RM
            <span
              data-hs-toggle-count='{"target": "#toggle-count", "min": {{ $packageData->package_12_10->room_4_5 }}, "max": {{ $packageData->package_22_20->room_4_5 }}}'>
              @if ($selectedPackage === '12 Days 10 Nights')
                {{ number_format($packageData->package_12_10->room_4_5, 0, '', '') }}
              @else
                {{ number_format($packageData->package_22_20->room_4_5, 0, '', '') }}
              @endif
            </span>
          </p>
          <p class="mt-2 text-sm text-gray-500">Comfortable accommodation</p>
          <ul class="mt-7 space-y-2.5 text-sm">
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                4 or 5 people
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Fullboard
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Insurance
              </span>
            </li>
          </ul>
          <a class="inline-flex items-center justify-center w-full px-4 py-3 mt-5 text-sm font-semibold text-white border border-transparent rounded-lg gap-x-2 bg-[#c31e39] hover:bg-[#9c182e] disabled:opacity-50 disabled:pointer-events-none"
            href="{{ route('welcome.get-umrah-reservation', ['packageId' => $packageData->id, 'selectedPackage' => $selectedPackage, 'room' => '4 or 5 People']) }}">
            Reserve Now
          </a>
        </div>
        <!-- End Room for 4 or 5 -->

        <!-- Room for 2 -->
        <div
          class="flex flex-col p-4 text-center bg-white border border-gray-200 rounded-2xl md:p-8 dark:bg-slate-900 dark:border-gray-700">
          <h4 class="text-lg font-medium text-gray-800 dark:text-gray-200">Room for 2</h4>
          <p class="mt-2 text-3xl font-bold text-gray-800 md:text-4xl xl:text-5xl dark:text-gray-200">RM
            <span
              data-hs-toggle-count='{"target": "#toggle-count", "min": {{ $packageData->package_12_10->room_2 }}, "max": {{ $packageData->package_22_20->room_2 }}}'>
              @if ($selectedPackage === '12 Days 10 Nights')
                {{ number_format($packageData->package_12_10->room_2, 0, '', '') }}
              @else
                {{ number_format($packageData->package_22_20->room_2, 0, '', '') }}
              @endif
            </span>
          </p>
          <p class="mt-2 text-sm text-gray-500">Comfortable accommodation</p>
          <ul class="mt-7 space-y-2.5 text-sm">
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                2 people
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Fullboard
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Insurance
              </span>
            </li>
          </ul>
          <a class="inline-flex items-center justify-center w-full px-4 py-3 mt-5 text-sm font-semibold border rounded-lg gap-x-2 border-[#c31e39] text-[#c31e39] hover:bg-[#c31e39] hover:text-white disabled:opacity-50 disabled:pointer-events-none"
            href="{{ route('welcome.get-umrah-reservation', ['packageId' => $packageData->id, 'selectedPackage' => $selectedPackage, 'room' => '2 People']) }}">
            Reserve Now
          </a>
        </div>
        <!-- End Room for 2 -->
      </div>
      <!-- End Price -->

      <!-- Flight -->
      <div class="mb-10 md:mb-14 lg:mb-20">
        <div class="w-2/3 mx-auto mt-10 mb-6 text-center sm:w-1/2 lg:w-1/3 md:mt-14 lg:mt-24">
          <h2 class="text-gray-600 dark:text-gray-400">Travel with our trusted airline partners for a comfortable and
            seamless journey.</h2>
        </div>
        <div class="flex items-center justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
          <img
            src="https://cdn.freelogovectors.net/wp-content/uploads/2023/05/saudi_airlines_logo-freelogovectors.net_-640x400.png"
            class="object-cover h-24" alt="Saudi Arabian Airlines Logo">
          <img src="https://cdn.freelogovectors.net/wp-content/uploads/2018/04/malaysia_airlines_logo-500x126.png"
            class="object-cover h-14" alt="Malaysia Airlines Logo">
          <img
            src="https://cdn.freelogovectors.net/wp-content/uploads/2023/09/emirates-logo-freelogovectors.net_-640x474.png"
            class="object-cover h-20" alt="Emirates Logo">
        </div>
      </div>
      <!-- End Flight -->

      <!-- Hotel -->
      <div class="mb-10 md:mb-14 lg:mb-20">
        <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
          <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Hotel Makkah and Madinah</h2>
          <p class="mt-1 text-gray-600 dark:text-gray-400">Stay at top-rated hotels in Makkah and Madinah.</p>
        </div>
        <div class="grid gap-6 lg:grid-cols-2">
          <!-- Hotel Makkah -->
          <a class="relative block group rounded-xl dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
            href="#">
            <!-- Slider -->
            <div
              class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:size-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
              <div data-hs-carousel='{"loadingClasses": "opacity-0", "isAutoPlay": true}'
                class="absolute top-0 size-full start-0">
                <div class="hs-carousel relative overflow-hidden w-full min-h-[350px] bg-white rounded-lg">
                  <div
                    class="absolute top-0 bottom-0 flex transition-transform duration-700 opacity-0 hs-carousel-body start-0 flex-nowrap">
                    <div class="hs-carousel-slide">
                      <div class="flex justify-center h-full bg-gray-100">
                        <span class="transition duration-700 size-full">
                          <img class="object-cover size-full"
                            src="https://images.unsplash.com/photo-1669828230990-9b8583a877ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1062&q=80"
                            alt="Image Description">
                        </span>
                      </div>
                    </div>
                    <div class="hs-carousel-slide">
                      <div class="flex justify-center h-full bg-gray-100">
                        <span class="transition duration-700 size-full">
                          <img class="object-cover size-full"
                            src="https://images.unsplash.com/photo-1669828230990-9b8583a877ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1062&q=80"
                            alt="Image Description">
                        </span>
                      </div>
                    </div>
                    <div class="hs-carousel-slide">
                      <div class="flex justify-center h-full bg-gray-100">
                        <span class="transition duration-700 size-full">
                          <img class="object-cover size-full"
                            src="https://images.unsplash.com/photo-1669828230990-9b8583a877ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1062&q=80"
                            alt="Image Description">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Slider -->
            <div class="absolute top-0 left-0 z-10">
              <div class="flex p-4 sm:p-6">
                <p>
                  <span
                    class="text-sm inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg uppercase font-semibold bg-white/[0.1] text-white">
                    Hotel Makkah
                  </span>
                </p>
              </div>
            </div>
            <div class="absolute top-0 right-0 z-10">
              <div class="flex items-center p-4 sm:p-6">
                <p class="font-semibold text-white me-2">{{ $packageData->hotel_makkah->rating }}</p>
                <div class="flex mb-1 gap-x-1">
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="absolute bottom-0 left-0 z-10">
              <div class="flex flex-col h-full p-4 sm:p-6">
                <h3 class="text-3xl font-semibold text-white">
                  {{ $packageData->hotel_makkah->name }}
                </h3>
                <div class="flex items-center text-white/[.8] mt-2">
                  <svg class="flex-shrink-0 size-5 me-2" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                    <circle cx="12" cy="10" r="3" />
                  </svg>
                  <p class="truncate w-[18rem]">
                    {{ $packageData->hotel_makkah->location }}
                  </p>
                </div>
              </div>
            </div>
            <div class="absolute bottom-0 right-0 z-10 p-4 sm:p-6">
              <div
                class="flex flex-col text-sm items-center py-1.5 px-3 rounded-lg uppercase  bg-white/[0.1] text-white">
                <p class="text-2xl font-semibold">{{ $packageData->hotel_makkah->distance }}</p>
                <p>meter</p>
              </div>
            </div>
          </a>
          <!-- End Hotel Makkah -->

          <!-- Hotel Madinah -->
          <a class="relative block group rounded-xl dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
            href="#">
            <!-- Slider -->
            <div
              class="flex-shrink-0 relative rounded-xl overflow-hidden w-full h-[350px] before:absolute before:inset-x-0 before:size-full before:bg-gradient-to-t before:from-gray-900/[.7] before:z-[1]">
              <div data-hs-carousel='{"loadingClasses": "opacity-0", "isAutoPlay": true}'
                class="absolute top-0 size-full start-0">
                <div class="hs-carousel relative overflow-hidden w-full min-h-[350px] bg-white rounded-lg">
                  <div
                    class="absolute top-0 bottom-0 flex transition-transform duration-700 opacity-0 hs-carousel-body start-0 flex-nowrap">
                    <div class="hs-carousel-slide">
                      <div class="flex justify-center h-full bg-gray-100">
                        <span class="transition duration-700 size-full">
                          <img class="object-cover size-full"
                            src="https://images.unsplash.com/photo-1611625618313-68b87aaa0626?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80"
                            alt="Image Description">
                        </span>
                      </div>
                    </div>
                    <div class="hs-carousel-slide">
                      <div class="flex justify-center h-full bg-gray-100">
                        <span class="transition duration-700 size-full">
                          <img class="object-cover size-full"
                            src="https://images.unsplash.com/photo-1611625618313-68b87aaa0626?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80"
                            alt="Image Description">
                        </span>
                      </div>
                    </div>
                    <div class="hs-carousel-slide">
                      <div class="flex justify-center h-full bg-gray-100">
                        <span class="transition duration-700 size-full">
                          <img class="object-cover size-full"
                            src="https://images.unsplash.com/photo-1611625618313-68b87aaa0626?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1064&q=80"
                            alt="Image Description">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Slider -->
            <div class="absolute top-0 left-0 z-10">
              <div class="flex p-4 sm:p-6">
                <p>
                  <span
                    class="text-sm inline-flex items-center gap-1.5 py-1.5 px-3 rounded-lg uppercase font-semibold bg-white/[0.1] text-white">
                    Hotel Madinah
                  </span>
                </p>
              </div>
            </div>
            <div class="absolute top-0 right-0 z-10">
              <div class="flex items-center p-4 sm:p-6">
                <p class="font-semibold text-white me-2">{{ $packageData->hotel_madinah->rating }}</p>
                <div class="flex mb-1 gap-x-1">
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                  <svg class="flex-shrink-0 text-white size-4 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg"
                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                      d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                  </svg>
                </div>
              </div>
            </div>
            <div class="absolute bottom-0 left-0 z-10">
              <div class="flex flex-col h-full p-4 sm:p-6">
                <h3 class="text-3xl font-semibold text-white">
                  {{ $packageData->hotel_madinah->name }}
                </h3>
                <div class="flex items-center text-white/[.8] mt-2">
                  <svg class="flex-shrink-0 size-5 me-2" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                    <circle cx="12" cy="10" r="3" />
                  </svg>
                  <p class="truncate w-[18rem]">
                    {{ $packageData->hotel_madinah->location }}
                  </p>
                </div>
              </div>
            </div>
            <div class="absolute bottom-0 right-0 z-10 p-4 sm:p-6">
              <div
                class="flex flex-col text-sm items-center py-1.5 px-3 rounded-lg uppercase  bg-white/[0.1] text-white">
                <p class="text-2xl font-semibold">{{ $packageData->hotel_madinah->distance }}</p>
                <p>meter</p>
              </div>
            </div>
          </a>
          <!-- End Hotel Madinah -->
        </div>
      </div>
      <!-- End Hotel -->

      <!-- Travel Date -->
      <div class="mb-10 md:mb-14 lg:mb-20"">
        <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
          <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Travel Date</h2>
          <p class="mt-1 text-gray-600 dark:text-gray-400"><span x-text="selectedDate"></span>{{ $selectedPackage }}
            travel dates.</p>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-3">
          @foreach ($travelDate as $travelDateData)
            @if ($selectedPackage === '12 Days 10 Nights')
              @if ($travelDateData->package == '12 Days 10 Nights')
                <div
                  class="flex flex-col w-[17rem] transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                  <div class="p-4 md:p-5">
                    <div class="flex">
                      <svg
                        class="flex-shrink-0 mt-1 size-5 text-gray-800 group-hover:text-[#c31e39] dark:text-gray-200 dark:group-hover:text-[#c31e39]"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
                      <div class="grow ms-5">
                        <h3
                          class="font-semibold text-gray-800 group-hover:text-[#c31e39] dark:text-gray-200 dark:group-hover:text-[#c31e39]">
                          {{ Carbon\Carbon::parse($travelDateData->from)->format('F') }}
                        </h3>
                        <p class="text-sm text-gray-500">
                          {{ Carbon\Carbon::parse($travelDateData->from)->format('d M Y') }} -
                          {{ Carbon\Carbon::parse($travelDateData->to)->format('d M Y') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @elseif ($selectedPackage === '22 Days 20 Nights')
              @if ($travelDateData->package == '22 Days 20 Nights')
                <div
                  class="flex flex-col w-[17rem] transition bg-white border shadow-sm group rounded-xl hover:shadow-md dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                  <div class="p-4 md:p-5">
                    <div class="flex">
                      <svg
                        class="flex-shrink-0 mt-1 size-5 text-gray-800 group-hover:text-[#c31e39] dark:text-gray-200 dark:group-hover:text-[#c31e39]"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
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
                      <div class="grow ms-5">
                        <h3
                          class="font-semibold text-gray-800 group-hover:text-[#c31e39] dark:text-gray-200 dark:group-hover:text-[#c31e39]">
                          {{ Carbon\Carbon::parse($travelDateData->from)->format('F') }}
                        </h3>
                        <p class="text-sm text-gray-500">
                          {{ Carbon\Carbon::parse($travelDateData->from)->format('d M Y') }} -
                          {{ Carbon\Carbon::parse($travelDateData->to)->format('d M Y') }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endif
          @endforeach
        </div>
      </div>
      <!-- End Travel Date -->

      <!-- Package Included -->
      <div class="mb-10 md:mb-14 lg:mb-20"">
        <div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
          <h2 class="text-xl font-bold md:text-3xl md:leading-tight dark:text-white">Package Included</h2>
          <p class="mt-1 text-gray-600 dark:text-gray-400">List of items included in the package.</p>
        </div>
        <div class="max-w-4xl mx-auto">
          <div class="grid gap-3 md:grid-cols-2">
            <div class="space-y-6">
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-user">
                  <rect width="18" height="18" x="3" y="3" rx="2" />
                  <circle cx="12" cy="10" r="3" />
                  <path d="M7 21v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  Visa and Travel Insurance
                </h3>
              </div>
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cooking-pot">
                  <path d="M2 12h20" />
                  <path d="M20 12v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-8" />
                  <path d="m4 8 16-4" />
                  <path d="m8.86 6.78-.45-1.81a2 2 0 0 1 1.45-2.43l1.94-.48a2 2 0 0 1 2.43 1.46l.45 1.8" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  Arabic Rice Lunch in Taif
                </h3>
              </div>
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin">
                  <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  Perform Umrah 3 times at different Miqats
                </h3>
              </div>
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bus">
                  <path d="M8 6v6" />
                  <path d="M15 6v6" />
                  <path d="M2 12h19.6" />
                  <path
                    d="M18 18h3s.5-1.7.8-2.8c.1-.4.2-.8.2-1.2 0-.4-.1-.8-.2-1.2l-1.4-5C20.1 6.8 19.1 6 18 6H4a2 2 0 0 0-2 2v10h3" />
                  <circle cx="7" cy="18" r="2" />
                  <path d="M9 18h5" />
                  <circle cx="16" cy="18" r="2" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  Visit Makkah, Madinah, and Taif
                </h3>
              </div>
            </div>
            <div class="space-y-6">
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-luggage">
                  <path d="M6 20h0a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h0" />
                  <path d="M8 18V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v14" />
                  <path d="M10 20h4" />
                  <circle cx="16" cy="20" r="2" />
                  <circle cx="8" cy="20" r="2" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  Luggage Bag, Sling Bag, and Shoe Bag
                </h3>
              </div>
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-droplets">
                  <path
                    d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z" />
                  <path
                    d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  5 Liters of ZamZam Water
                </h3>
              </div>
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-library-big">
                  <rect width="8" height="18" x="3" y="3" rx="1" />
                  <path d="M7 3v18" />
                  <path
                    d="M20.4 18.9c.2.5-.1 1.1-.6 1.3l-1.9.7c-.5.2-1.1-.1-1.3-.6L11.1 5.1c-.2-.5.1-1.1.6-1.3l1.9-.7c.5-.2 1.1.1 1.3.6Z" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  Umrah Course and Book
                </h3>
              </div>
              <div class="flex items-center">
                <svg class="flex-shrink-0 text-gray-800 size-8 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                <h3 class="text-gray-800 dark:text-gray-200 ms-5 sm:ms-8">
                  Mutawwif and Mutawifiah Guides
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Package Included -->
    </div>
  </div>
</div>
