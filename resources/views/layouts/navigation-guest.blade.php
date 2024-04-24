<!-- Navigation Guest -->
<header class="z-50 flex flex-wrap w-full pb-2 text-sm sm:justify-start sm:flex-col sm:pb-0">

  <!-- Topbar -->
  <div class="w-full bg-[#9c182e] dark:bg-gray-900">
    <div class="max-w-[85rem] mx-auto w-full px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between w-full py-3">

        <!-- Top Left -->
        <div class="flex items-center gap-x-5">
          <!-- Follow Us -->
          <div class="inline-flex items-center justify-center gap-2 text-sm font-medium text-gray-300">
            Follow us on
            <a class="hover:text-gray-50" href="https://www.facebook.com/DhiyaAzZahraTravel" target="_blank">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-facebook">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
              </svg>
            </a>
            <a class="hover:text-gray-50" href="https://www.instagram.com/umrah.azzahra/" target="_blank">
              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round"
                stroke-linejoin="round" class="lucide lucide-instagram">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
              </svg>
            </a>
          </div>
          <!-- End Follow Us -->
        </div>
        <!-- End Top Left -->

        <!-- Top Right -->
        <div class="flex items-center gap-x-5">
          <!-- Language -->
          <a class="inline-flex items-center justify-center gap-2 text-sm font-medium text-gray-300 hover:text-gray-50"
            href="#">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
              <path d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17" />
              <path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
              <circle cx="12" cy="12" r="10" />
            </svg>
            English (US)
          </a>
          <!-- End Language -->

          @if (Route::has('login'))
            @auth
              <!-- Dashboard -->
              <a class="inline-flex items-center justify-center gap-2 text-sm font-medium text-gray-300 hover:text-gray-50"
                href="{{ route('dashboard') }}">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-layout-dashboard">
                  <rect width="7" height="9" x="3" y="3" rx="1" />
                  <rect width="7" height="5" x="14" y="3" rx="1" />
                  <rect width="7" height="9" x="14" y="12" rx="1" />
                  <rect width="7" height="5" x="3" y="16" rx="1" />
                </svg>
                Dashboard
              </a>
              <!-- End Dashboard -->
            @else
              <!-- Login -->
              <a class="inline-flex items-center justify-center gap-2 text-sm font-medium text-gray-300 hover:text-gray-50"
                href="{{ route('login') }}">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                  <circle cx="12" cy="7" r="4" />
                </svg>
                Login
              </a>
              <!-- End Login -->
            @endauth
          @endif

          <!-- Dark Mode -->
          <button type="button"
            class="items-center block font-medium text-gray-300 hs-dark-mode-active:hidden hs-dark-mode group hover:text-gray-50"
            data-hs-theme-click-value="dark">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
            </svg>
          </button>
          <button type="button"
            class="items-center hidden font-medium text-gray-300 hs-dark-mode-active:block hs-dark-mode group hover:text-gray-50"
            data-hs-theme-click-value="light">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <circle cx="12" cy="12" r="4" />
              <path d="M12 8a2 2 0 1 0 4 4" />
              <path d="M12 2v2" />
              <path d="M12 20v2" />
              <path d="m4.93 4.93 1.41 1.41" />
              <path d="m17.66 17.66 1.41 1.41" />
              <path d="M2 12h2" />
              <path d="M20 12h2" />
              <path d="m6.34 17.66-1.41 1.41" />
              <path d="m19.07 4.93-1.41 1.41" />
            </svg>
          </button>
          <!-- End Dark Mode -->
        </div>
        <!-- End Top Right -->

      </div>
    </div>
  </div>
  <!-- End Topbar -->

  <!-- Navbar -->
  <nav class="w-full bg-[#c31e39] dark:bg-gray-800" aria-label="Global">
    <div class="relative max-w-[85rem] w-full px-4 mx-auto sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">

      <!-- Bottom Left -->
      <div class="flex items-center justify-between w-full">
        <a class="inline-flex items-center justify-center gap-4 mr-4 text-xl font-bold text-gray-50"
          href="{{ route('welcome') }}" aria-label="Brand">
          <svg class="flex-shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-plane">
            <path
              d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z" />
          </svg>
          Dhiya Az Zahra
        </a>

        <div class="sm:hidden">
          <button type="button"
            class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-gray-200 rounded-lg hs-collapse-toggle size-9 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
            data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation"
            aria-label="Toggle navigation">
            <svg class="flex-shrink-0 hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="flex-shrink-0 hidden hs-collapse-open:block size-4" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>
      <!-- End Bottom Left -->

      <!-- Bottom Right -->
      <div id="navbar-collapse-with-animation"
        class="hidden overflow-hidden transition-all duration-300 hs-collapse basis-full grow sm:block">
        <div data-hs-scrollspy="#scrollspy-1" data-hs-scrollspy-scrollable-parent="#scrollspy-scrollable-parent-1"
          class="flex flex-col mt-5 gap-y-4 gap-x-0 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:ps-7 [--scrollspy-offset:220] md:[--scrollspy-offset:70]">
          <a class="font-bold text-gray-50 sm:py-6 hover:text-gray-300" href="{{ url('/#home') }}">Home</a>
          <a class="font-bold text-gray-50 sm:py-6 hover:text-gray-300"
            href="{{ route('welcome.package') }}">Package</a>
          <a class="font-bold text-gray-50 sm:py-6 hover:text-gray-300" href="{{ url('/#aboutus') }}">About Us</a>
        </div>
      </div>
      <!-- End Bottom Right -->

    </div>
  </nav>
  <!-- End Navbar -->

</header>
