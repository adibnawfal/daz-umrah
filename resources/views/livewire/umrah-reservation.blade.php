<main class="flex flex-col flex-grow dark:bg-gray-800">
  <div class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8 py-10">
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
        <a class="flex items-center text-sm text-gray-500" href="{{ route('welcome.all-package') }}">
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
            stroke-linejoin="round" class="lucide lucide-calendar-plus">
            <path d="M8 2v4" />
            <path d="M16 2v4" />
            <path d="M21 13V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
            <path d="M3 10h18" />
            <path d="M16 19h6" />
            <path d="M19 16v6" />
          </svg>
          Make Umrah Reservation
        </p>
      </li>
    </ol>
    <!-- End Breadcrumb -->

    <!-- Content -->
    <form method="post"
      action="{{ route('welcome.post-umrah-reservation', ['packageId' => $packageData->id, 'selectedPackage' => $selectedPackage, 'room' => $room]) }}"
      class="flex w-full mt-14 gap-x-6">
      @csrf

      <!-- Form -->
      <div class="flex flex-col basis-3/5">
        <div class="mb-8">
          <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
            Reservation Information
          </h2>
          <p class="text-sm text-gray-600 dark:text-gray-400">
            Provide Umrah reservation information.
          </p>
        </div>

        <div class="grid pb-6 gap-y-4">
          <!-- Travel Date -->
          <div>
            <label for="travel_date" class="block mb-2 text-sm dark:text-white">Travel Date</label>
            <select id="travel_date" name="travel_date" wire:model.live="selectedTravelDate"
              class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <option @selected(old('travel_date') == 0) disabled value=0>Select your travel date</option>
              @foreach ($travelDate as $travelDateData)
                <option @selected(old('travel_date') == $travelDateData->id) value={{ $travelDateData->id }}>
                  {{ Carbon\Carbon::parse($travelDateData->from)->format('d M Y') }} -
                  {{ Carbon\Carbon::parse($travelDateData->to)->format('d M Y') }}
                </option>
              @endforeach
            </select>
            <x-input-error :messages="$errors->get('travel_date')" class="mt-2" />
          </div>
          <!-- End Travel Date -->
        </div>

        <div class="pt-6 border-t border-gray-200 dark:border-neutral-700 ">
          <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
              Profile Information
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Provide profile information for Umrah reservation.
            </p>
          </div>

          <div class="grid pb-6 gap-y-4">
            <div class="grid grid-cols-2 gap-x-4">
              <!-- First Name -->
              <div>
                <label for="first_name" class="block mb-2 text-sm dark:text-white">First Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="Enter your first name"
                  class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                  autocomplete="first-name" value="{{ old('first_name', $user->first_name) }}">
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
              </div>
              <!-- End First Name -->

              <!-- Last Name -->
              <div>
                <label for="last_name" class="block mb-2 text-sm dark:text-white">Last Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Enter your last name"
                  class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                  autocomplete="last-name" value="{{ old('last_name', $user->last_name) }}">
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
              </div>
              <!-- End Last Name -->
            </div>

            <!-- Email Address -->
            <div>
              <label for="email" class="block mb-2 text-sm dark:text-white">Email Address</label>
              <input type="email" id="email" name="email" placeholder="Enter your email address"
                class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                autocomplete="email" value="{{ old('email', $user->email) }}" disabled>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- End Email Address -->

            <!-- Phone Number -->
            <div>
              <label for="phone_no" class="block mb-2 text-sm dark:text-white">Phone Number</label>
              <div class="flex">
                <span
                  class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">+60</span>
                <input type="text" id="phone_no" name="phone_no" placeholder="12-345 6789"
                  class="relative block w-full px-4 py-3 -mt-px text-sm border-gray-200 pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                  autocomplete="phone-no" value="{{ old('phone_no', $user->phone_no) }}">
              </div>
              <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
            </div>
            <!-- End Phone Number -->
          </div>
        </div>

        <div class="pt-6 border-t border-gray-200 dark:border-neutral-700 ">
          <div class="mb-5">
            <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
              Customer Declaration
            </h2>
            <div class="text-sm text-gray-600 dark:text-neutral-400">
              <p class="mt-3">
                I hereby certify that the information provided is accurate, correct, and complete, and that the
                documents submitted along with this application form are genuine.
              </p>
              <p class="mt-2">
                Furthermore, I acknowledge that I have read and understood the
                <span class="font-semibold text-gray-800">Terms of Use</span> and the
                <span class="font-semibold text-gray-800">Privacy Policy</span>, and I agree to them.
                I also understand that I am not eligible for a refund of any deposits if I breach or violate the
                <span class="font-semibold text-gray-800">Terms and Conditions</span> to which I have agreed.
              </p>
            </div>
          </div>

          <!-- Checkbox -->
          <div class="flex flex-col justify-center">
            <div class="flex items-center gap-x-3">
              <input type="checkbox" id="terms_and_conditions" name="terms_and_conditions"
                class="shrink-0 mt-0.5 border-gray-200 rounded text-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-[#c31e39] dark:checked:border-[#c31e39] dark:focus:ring-offset-gray-800"
                @checked(old('terms_and_conditions'))>
              <label for="terms_and_conditions" class="text-sm dark:text-white">I accept the
                <a
                  class="font-medium text-[#c31e39] decoration-2 hover:underline dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                  Terms and Conditions
                </a>
              </label>
            </div>
            <x-input-error :messages="$errors->get('terms_and_conditions')" class="mt-2" />
          </div>
          <!-- End Checkbox -->
        </div>
      </div>
      <!-- End Form -->

      <!-- Summary -->
      <div
        class="relative flex flex-col bg-white border border-gray-200 shadow-lg pointer-events-auto basis-2/5 rounded-xl dark:bg-neutral-800 h-max">
        <div
          class="relative overflow-hidden text-center bg-center bg-no-repeat bg-cover saturate-0 min-h-32 rounded-t-xl"
          style="background-image: url('{{ asset('images/package/' . $packageData->cover_img) }}')">
          <!-- SVG Background Element -->
          <figure class="absolute inset-x-0 bottom-0 -mb-px">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
              viewBox="0 0 1920 100.1">
              <path fill="currentColor" class="fill-white dark:fill-neutral-800"
                d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
            </svg>
          </figure>
          <!-- End SVG Background Element -->
          <div class="absolute top-0 bg-white size-full opacity-70 -z-[1]"></div>
        </div>

        <div class="relative z-10 -mt-12">
          <!-- Icon -->
          <span
            class="mx-auto flex justify-center items-center size-[62px] rounded-full border border-gray-200 bg-white text-gray-700 shadow-sm dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400">
            <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-plane">
              <path
                d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z" />
            </svg>
          </span>
          <!-- End Icon -->
        </div>

        <!-- Body -->
        <div class="p-4 overflow-y-auto sm:p-7">
          <div class="text-center">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
              Package {{ $packageData->name }} {{ $packageData->year }}
            </h3>
            <p class="text-sm text-gray-500 dark:text-neutral-500">
              {{ $selectedPackage }}
            </p>
          </div>

          @php
            if ($selectedTravelDate) {
                $travelDateData = App\Models\TravelDate::findOrFail($selectedTravelDate);
                $from_date = Carbon\Carbon::parse($travelDateData->from)->format('d M Y');
                $to_date = Carbon\Carbon::parse($travelDateData->to)->format('d M Y');
            } else {
                $from_date = '-';
                $to_date = '-';
            }
          @endphp

          <!-- Grid -->
          <div class="grid grid-cols-2 gap-5 mt-5 sm:mt-10 sm:grid-cols-3">
            <div>
              <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Room:</span>
              <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $room }}</span>
            </div>
            <div>
              <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">From Date:</span>
              <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $from_date }}</span>
            </div>
            <div>
              <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">To Date:</span>
              <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $to_date }}</span>
            </div>
          </div>
          <!-- End Grid -->

          <div class="mt-5 sm:mt-10">
            <h4 class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">Summary</h4>
            <ul class="flex flex-col mt-3">
              <li
                class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                <div class="flex items-center justify-between w-full">
                  <span>Hotel Makkah</span>
                  <span>{{ $packageData->hotel_makkah->name }}</span>
                </div>
              </li>
              <li
                class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                <div class="flex items-center justify-between w-full">
                  <span>Hotel Madinah</span>
                  <span>{{ $packageData->hotel_madinah->name }}</span>
                </div>
              </li>
              <li
                class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                <div class="flex items-center justify-between w-full">
                  <span>Package Amount</span>
                  <span>RM {{ number_format($packageAmount, 0, ',') }}</span>
                </div>
              </li>
            </ul>
          </div>

          <div
            class="p-4 mt-5 text-sm text-gray-600 border border-gray-200 rounded-lg bg-gray-50 dark:bg-white/10 dark:border-white/10 dark:text-neutral-400">
            <div class="flex">
              <div class="flex-shrink-0">
                <svg class="flex-shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                  height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="M12 16v-4"></path>
                  <path d="M12 8h.01"></path>
                </svg>
              </div>
              <p class="flex-1 text-sm ms-2">
                The package amount needs to be paid after our staff has accepted your reservation.
              </p>
            </div>
          </div>

          <!-- Button -->
          <div class="flex justify-end mt-5 gap-x-2">
            <a class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-800 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
              href="{{ route('welcome.package-details', $packageData->id) }}">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
              Cancel
            </a>
            <button type="submit"
              class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-gray-800 border border-transparent border-gray-200 rounded-lg gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-calendar-check-2">
                <path d="M8 2v4" />
                <path d="M16 2v4" />
                <path d="M21 14V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
                <path d="M3 10h18" />
                <path d="m16 20 2 2 4-4" />
              </svg>
              Confirm Reservation
            </button>
          </div>
          <!-- End Buttons -->
        </div>
        <!-- End Body -->
      </div>
      <!-- End Summary -->
    </form>
    <!-- End Content -->
  </div>
</main>
