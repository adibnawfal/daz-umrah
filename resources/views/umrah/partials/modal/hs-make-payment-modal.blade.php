<div id="hs-make-payment-{{ $reservationData->id }}-modal"
  class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
  <div
    class="m-3 mt-0 transition-all ease-out opacity-0 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:max-w-lg sm:w-full sm:mx-auto">
    <div class="relative flex flex-col bg-white shadow-lg pointer-events-auto rounded-xl dark:bg-neutral-800">
      <form method="post" action="{{ route('umrah.patch-make-payment', $reservationData->id) }}">
        @csrf
        @method('patch')

        <div
          class="relative overflow-hidden text-center bg-center bg-no-repeat bg-cover saturate-0 min-h-32 rounded-t-xl"
          style="background-image: url('{{ asset('images/package/' . $reservationData->package->cover_img) }}')">
          <!-- Close Button -->
          <div class="absolute top-2 end-2">
            <button type="button"
              class="inline-flex items-center justify-center flex-shrink-0 text-sm text-gray-500 transition-all rounded-lg size-8 hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-gray-900 dark:text-neutral-500 dark:focus:ring-neutral-700 dark:focus:ring-offset-gray-800"
              data-hs-overlay="#hs-make-payment-{{ $reservationData->id }}-modal">
              <span class="sr-only">Close</span>
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
            </button>
          </div>
          <!-- End Close Button -->

          <!-- SVG Background Element -->
          <figure class="absolute inset-x-0 bottom-0 -mb-px">
            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
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
            <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
              <path
                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
            </svg>
          </span>
          <!-- End Icon -->
        </div>

        <!-- Body -->
        <div class="p-4 overflow-y-auto sm:p-7">
          <div class="text-center">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
              Package {{ $reservationData->package->name }} {{ $reservationData->package->year }}
            </h3>
            <p class="text-sm text-gray-500 dark:text-neutral-500">
              {{ $reservationData->payment->package }}
            </p>
          </div>

          <!-- Grid -->
          <div class="grid grid-cols-2 gap-5 mt-5 sm:mt-10 sm:grid-cols-3">
            <div>
              <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Room:</span>
              <span
                class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $reservationData->room }}</span>
            </div>
            <div>
              <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">From Date:</span>
              <span
                class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ Carbon\Carbon::parse($reservationData->from_date)->format('d M Y') }}</span>
            </div>
            <div>
              <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">To Date:</span>
              <span
                class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ Carbon\Carbon::parse($reservationData->to_date)->format('d M Y') }}</span>
            </div>
          </div>
          <!-- End Grid -->

          <div class="mt-5 sm:mt-10">
            <h4 class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">Payment Method</h4>
            <div class="grid gap-2 mt-3 sm:grid-cols-2">
              <label for="cash"
                class="has-[:checked]:bg-blue-100 has-[:checked]:border-blue-500 flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                <svg class="size-5 me-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-banknote">
                  <rect width="20" height="12" x="2" y="6" rx="2" />
                  <circle cx="12" cy="12" r="2" />
                  <path d="M6 12h.01M18 12h.01" />
                </svg>
                <span class="text-sm text-gray-800 dark:text-neutral-400">Cash</span>
                <input type="radio" name="payment_method" id="cash" value="Cash"
                  class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  @checked(old('payment_method') == 'Cash')>
              </label>
              <label for="stripe"
                class="has-[:checked]:bg-blue-100 has-[:checked]:border-blue-500 flex w-full p-3 text-sm bg-white border border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                <svg class="size-5 me-3" width="32px" height="32px" viewBox="0 0 32 32"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M8.25 10.435l-2.165 0.46-0.010 7.12c0 1.315 0.99 2.165 2.305 2.165 0.73 0 1.265-0.135 1.56-0.295v-1.69c-0.285 0.115-1.685 0.525-1.685-0.785v-3.16h1.685v-1.89h-1.685zM12.705 13.015l-0.135-0.655h-1.92v7.66h2.215v-5.155c0.525-0.69 1.41-0.555 1.695-0.465v-2.040c-0.3-0.105-1.335-0.3-1.855 0.655zM17.32 9.4l-2.23 0.475v1.81l2.23-0.475zM2.245 14.615c0-0.345 0.29-0.48 0.755-0.485 0.675 0 1.535 0.205 2.21 0.57v-2.090c-0.735-0.29-1.47-0.405-2.205-0.405-1.8 0-3 0.94-3 2.51 0 2.46 3.375 2.060 3.375 3.12 0 0.41-0.355 0.545-0.85 0.545-0.735 0-1.685-0.305-2.43-0.71v2c0.825 0.355 1.66 0.505 2.425 0.505 1.845 0 3.115-0.79 3.115-2.39 0-2.645-3.395-2.17-3.395-3.17zM32 16.28c0-2.275-1.1-4.070-3.21-4.070s-3.395 1.795-3.395 4.055c0 2.675 1.515 3.91 3.675 3.91 1.060 0 1.855-0.24 2.46-0.575v-1.67c-0.605 0.305-1.3 0.49-2.18 0.49-0.865 0-1.625-0.305-1.725-1.345h4.345c0.010-0.115 0.030-0.58 0.030-0.795zM27.605 15.44c0-1 0.615-1.42 1.17-1.42 0.545 0 1.125 0.42 1.125 1.42zM21.96 12.21c-0.87 0-1.43 0.41-1.74 0.695l-0.115-0.55h-1.955v10.24l2.22-0.47 0.005-2.51c0.32 0.235 0.795 0.56 1.57 0.56 1.59 0 3.040-1.16 3.040-3.98 0.005-2.58-1.465-3.985-3.025-3.985zM21.43 18.335c-0.52 0-0.83-0.19-1.045-0.42l-0.015-3.3c0.23-0.255 0.55-0.44 1.060-0.44 0.81 0 1.37 0.91 1.37 2.070 0.005 1.195-0.545 2.090-1.37 2.090zM15.095 20.020h2.23v-7.66h-2.23z" />
                </svg>
                <span class="text-sm text-gray-800 dark:text-neutral-400">Stripe</span>
                <input type="radio" name="payment_method" id="stripe" value="Stripe"
                  class="shrink-0 ms-auto mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                  @checked(old('payment_method') == 'Stripe')>
              </label>
            </div>
            <x-input-error :messages="$errors->get('payment_method')" class="mt-2" />
          </div>

          <div class="mt-5">
            <h4 class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">Summary</h4>
            <ul class="flex flex-col mt-3">
              <li
                class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                <div class="flex items-center justify-between w-full">
                  <span>Hotel Makkah</span>
                  <span>{{ $reservationData->package->hotel_makkah->name }}</span>
                </div>
              </li>
              <li
                class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                <div class="flex items-center justify-between w-full">
                  <span>Hotel Madinah</span>
                  <span>{{ $reservationData->package->hotel_madinah->name }}</span>
                </div>
              </li>
              <li
                class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                <div class="flex items-center justify-between w-full">
                  <span>Package Amount</span>
                  <span>RM {{ number_format($reservationData->payment->total_amount, 0, ',') }}</span>
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
                Select your payment method before continuing the payment process.
              </p>
            </div>
          </div>

          <!-- Button -->
          <div class="flex justify-end mt-5 gap-x-2">
            <button type="button"
              class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-800 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
              data-hs-overlay="#hs-make-payment-{{ $reservationData->id }}-modal">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
              Cancel
            </button>
            <button type="submit"
              class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-gray-800 border border-transparent border-gray-200 rounded-lg gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-circle-dollar-sign">
                <circle cx="12" cy="12" r="10" />
                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                <path d="M12 18V6" />
              </svg>
              Confirm Payment
            </button>
          </div>
          <!-- End Buttons -->
        </div>
        <!-- End Body -->
      </form>
    </div>
  </div>
</div>
