<!-- Footer -->
<footer class="w-full bg-[#c31e39] dark:bg-gray-900">
  <div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 lg:pt-20 mx-auto">

    <!-- Grid -->
    <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-5">
      <div class="col-span-full lg:col-span-1">
        <a class="flex items-center gap-3 text-xl font-semibold text-gray-50 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
          href="{{ route('welcome') }}" aria-label="Brand">
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-plane">
            <path
              d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z" />
          </svg>
          Dhiya Az Zahra</a>
      </div>
      <!-- End Col -->

      <div class="col-span-1">
        <h4 class="font-semibold text-gray-50">Welcome</h4>

        <div class="grid mt-3 space-y-3">
          <p>
            <a class="inline-flex text-sm text-gray-300 gap-x-2 hover:text-gray-50 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
              href="{{ url('/#home') }}">Home
            </a>
          </p>
          <p>
            <a class="inline-flex text-sm text-gray-300 gap-x-2 hover:text-gray-50 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
              href="{{ route('welcome.all-package') }}">Package
            </a>
          </p>
          <p>
            <a class="inline-flex text-sm text-gray-300 gap-x-2 hover:text-gray-50 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
              href="{{ url('/#aboutus') }}">About Us
            </a>
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="col-span-1">
        <h4 class="font-semibold text-gray-50">Package</h4>

        <div class="grid mt-3 space-y-3">
          @php
            $packages = App\Models\Package::all();
          @endphp
          @foreach ($packages->take(4) as $packageData)
            <p>
              <a class="inline-flex text-sm text-gray-300 gap-x-2 hover:text-gray-50 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="{{ route('welcome.package-details', $packageData->id) }}">
                {{ $packageData->name }}
              </a>
            </p>
          @endforeach
        </div>
      </div>
      <!-- End Col -->

      <div class="col-span-2">
        <h4 class="font-semibold text-gray-50">Register now</h4>

        <form method="get" action="{{ route('welcome.register-footer') }}">
          <div
            class="flex flex-col items-center gap-2 p-2 mt-4 bg-white rounded-lg sm:flex-row sm:gap-3 dark:bg-gray-800">
            <div class="w-full">
              <label for="email" class="sr-only">Email</label>
              <input type="email" id="email" name="email"
                class="block w-full px-4 py-3 text-sm border-transparent rounded-lg focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-900 dark:border-transparent dark:text-gray-400 dark:focus:ring-gray-600"
                placeholder="Enter your email">
            </div>
            <button type="submit"
              class="inline-flex items-center justify-center w-full p-3 text-sm font-semibold text-white bg-[#c31e39] hover:bg-[#9c182e] dark:bg-gray-900 border border-transparent rounded-lg sm:w-auto whitespace-nowrap gap-x-2 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
              Get's started
            </button>
          </div>
          {{-- <p class="mt-3 text-sm text-gray-300">
            New UI kits or big discounts. Never spam.
          </p> --}}
        </form>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->

    <div class="grid mt-5 sm:mt-12 gap-y-2 sm:gap-y-0 sm:flex sm:justify-between sm:items-center">
      <div class="flex items-center justify-between">
        <p class="text-sm text-gray-50">© 2024 Dhiya Az Zahra. All rights reserved.</p>
      </div>
      <!-- End Col -->

      <!-- Social Brands -->
      <div>
        <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
          href="https://www.facebook.com/DhiyaAzZahraTravel" target="_blank">
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-facebook">
            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
          </svg>
        </a>
        <a class="inline-flex items-center justify-center text-sm font-semibold text-white border border-transparent rounded-lg size-10 gap-x-2 hover:bg-white/10 disabled:opacity-50 disabled:pointer-events-none focus:outline-none"
          href="https://www.instagram.com/umrah.azzahra/" target="_blank">
          <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-instagram">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
          </svg>
        </a>
      </div>
      <!-- End Social Brands -->
    </div>

  </div>
</footer>
