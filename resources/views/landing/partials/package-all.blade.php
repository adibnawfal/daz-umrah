<!-- Title -->
<div class="max-w-2xl mx-auto mb-10 text-center lg:mb-14">
  <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Latest Umrah Package</h2>
  <p class="mt-1 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Vestibulum vitae enim a eros elementum rhoncus lacinia eu justo.</p>
</div>
<!-- End Title -->

<!-- Grid -->
<div class="grid gap-6 sm:grid-cols-3 lg:grid-cols-4">
  @foreach ($package as $packageData)
    <a class="group flex p-5 flex-col h-max bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="{{ route('welcome.package-details', $packageData->id) }}">
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
          @if (isset($packageData->package_12_10_id))
            <p
              class="text-[0.6rem] gap-1.5 py-1.5 mb-2 px-3 rounded-lg uppercase font-semibold bg-gray-800/[0.1] text-gray-800">
              {{ $packageData->package_12_10->package }}
            </p>
          @endif
          @if (isset($packageData->package_22_20_id))
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
            <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
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
              @if (isset($packageData->package_12_10_id))
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
</div>
<!-- End Grid -->
