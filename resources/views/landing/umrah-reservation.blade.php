@extends('welcome')

@section('content')
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
            Manage Travel Date
          </p>
        </li>
      </ol>
      <!-- End Breadcrumb -->

      <!-- Content -->
      <form method="POST" action="#" class="flex w-full mt-14 gap-x-6">
        @csrf

        <!-- Form -->
        <div class="flex flex-col dark:bg-slate-900 basis-3/5">
          <div class="mb-8">
            <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
              Profile Information
            </h2>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              Update your account's profile information and email address.
            </p>
          </div>

          <div>
            <div class="grid gap-y-4">
              <div class="grid grid-cols-2 gap-x-4">
                <!-- First Name -->
                <div>
                  <label for="first_name" class="block mb-2 text-sm dark:text-white">First Name</label>
                  <input type="text" id="first_name" name="first_name" placeholder="Enter your first name"
                    class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                    autocomplete="first-name" value="{{ old('first_name') }}" autofocus>
                  <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>
                <!-- End First Name -->

                <!-- Last Name -->
                <div>
                  <label for="last_name" class="block mb-2 text-sm dark:text-white">Last Name</label>
                  <input type="text" id="last_name" name="last_name" placeholder="Enter your last name"
                    class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                    autocomplete="last-name" value="{{ old('last_name') }}">
                  <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
                <!-- End Last Name -->
              </div>

              <!-- Email Address -->
              <div>
                <label for="email" class="block mb-2 text-sm dark:text-white">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address"
                  class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                  autocomplete="email" value="{{ old('email') }}">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <!-- End Email Address -->

              <!-- Password -->
              <div>
                <label for="password" class="block mb-2 text-sm dark:text-white">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password"
                  class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                  autocomplete="new-password">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <!-- End Password -->

              <!-- Confirm Password -->
              <div>
                <label for="password_confirmation" class="block mb-2 text-sm dark:text-white">Confirm
                  Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                  class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                  placeholder="Re-type your password" autocomplete="new-password">
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
              <!-- End Confirm Password -->
            </div>
          </div>
        </div>
        <!-- End Form -->

        <!-- Summary -->
        <div
          class="relative flex flex-col bg-white shadow-lg pointer-events-auto basis-2/5 rounded-xl dark:bg-neutral-800">
          <div class="relative overflow-hidden text-center bg-gray-900 min-h-32 rounded-t-xl dark:bg-neutral-950">
            <!-- SVG Background Element -->
            <figure class="absolute inset-x-0 bottom-0 -mb-px">
              <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                viewBox="0 0 1920 100.1">
                <path fill="currentColor" class="fill-white dark:fill-neutral-800"
                  d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
              </svg>
            </figure>
            <!-- End SVG Background Element -->
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
                Invoice from Preline
              </h3>
              <p class="text-sm text-gray-500 dark:text-neutral-500">
                Invoice #3682303
              </p>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-2 gap-5 mt-5 sm:mt-10 sm:grid-cols-3">
              <div>
                <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Amount paid:</span>
                <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">$316.8</span>
              </div>
              <!-- End Col -->

              <div>
                <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Date paid:</span>
                <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">April 22, 2020</span>
              </div>
              <!-- End Col -->

              <div>
                <span class="block text-xs text-gray-500 uppercase dark:text-neutral-500">Payment method:</span>
                <div class="flex items-center gap-x-2">
                  <svg class="size-5" width="400" height="248" viewBox="0 0 400 248" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                      <path d="M254 220.8H146V26.4H254V220.8Z" fill="#FF5F00" />
                      <path
                        d="M152.8 123.6C152.8 84.2 171.2 49 200 26.4C178.2 9.2 151.4 0 123.6 0C55.4 0 0 55.4 0 123.6C0 191.8 55.4 247.2 123.6 247.2C151.4 247.2 178.2 238 200 220.8C171.2 198.2 152.8 163 152.8 123.6Z"
                        fill="#EB001B" />
                      <path
                        d="M400 123.6C400 191.8 344.6 247.2 276.4 247.2C248.6 247.2 221.8 238 200 220.8C228.8 198.2 247.2 163 247.2 123.6C247.2 84.2 228.8 49 200 26.4C221.8 9.2 248.6 0 276.4 0C344.6 0 400 55.4 400 123.6Z"
                        fill="#F79E1B" />
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect width="400" height="247.2" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                  <span class="block text-sm font-medium text-gray-800 dark:text-neutral-200">•••• 4242</span>
                </div>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Grid -->

            <div class="mt-5 sm:mt-10">
              <h4 class="text-xs font-semibold text-gray-800 uppercase dark:text-neutral-200">Summary</h4>

              <ul class="flex flex-col mt-3">
                <li
                  class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                  <div class="flex items-center justify-between w-full">
                    <span>Payment to Front</span>
                    <span>$264.00</span>
                  </div>
                </li>
                <li
                  class="inline-flex items-center px-4 py-3 -mt-px text-sm text-gray-800 border gap-x-2 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                  <div class="flex items-center justify-between w-full">
                    <span>Tax fee</span>
                    <span>$52.8</span>
                  </div>
                </li>
                <li
                  class="inline-flex items-center px-4 py-3 -mt-px text-sm font-semibold text-gray-800 border gap-x-2 bg-gray-50 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                  <div class="flex items-center justify-between w-full">
                    <span>Amount paid</span>
                    <span>$316.8</span>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Button -->
            <div class="flex justify-end mt-5 gap-x-2">
              <a class="inline-flex items-center justify-center gap-2 px-3 py-2 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-800 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                href="#">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                  <polyline points="7 10 12 15 17 10" />
                  <line x1="12" x2="12" y1="15" y2="3" />
                </svg>
                Invoice PDF
              </a>
              <a class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                href="#">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <polyline points="6 9 6 2 18 2 18 9" />
                  <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                  <rect width="12" height="8" x="6" y="14" />
                </svg>
                Print
              </a>
            </div>
            <!-- End Buttons -->

            <div class="mt-5 sm:mt-10">
              <p class="text-sm text-gray-500 dark:text-neutral-500">If you have any questions, please contact us at
                <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
                  href="#">example@site.com</a> or call at <a
                  class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500"
                  href="tel:+1898345492">+1 898-34-5492</a>
              </p>
            </div>
          </div>
          <!-- End Body -->
        </div>
        <!-- End Summary -->
      </form>
      <!-- End Content -->
    </div>
  </main>
@endsection
