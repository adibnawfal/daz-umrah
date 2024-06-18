<x-app-layout>
  <x-slot:title>
    Account
  </x-slot>

  <!-- Breadcrumb -->
  <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
    <li class="inline-flex items-center">
      <p class="flex items-center text-sm text-gray-500" href="#">
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
      <p class="flex items-center text-sm font-semibold text-gray-800 dark:text-white" href="#">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-user">
          <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
          <circle cx="12" cy="7" r="4" />
        </svg>
        Account
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <div class="flex gap-x-6">
    <div class="flex flex-col gap-y-6 basis-1/3 max-[1750px]:basis-2/5">
      <!-- Profile Picture -->
      <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
        @include('profile.partials.profile-picture')
      </div>
      <!-- End Profile Picture -->

      <!-- Change Password -->
      <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
        @include('profile.partials.change-password')
      </div>
      <!-- End Change Password -->

      <!-- Delete Profile -->
      <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
        @include('profile.partials.delete-profile')
      </div>
      <!-- End Delete Profile -->
    </div>

    <div class="flex flex-col gap-y-6 basis-2/3 max-[1750px]:basis-3/5">
      <!-- Profile Information -->
      <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
        @include('profile.partials.profile-information')
      </div>
      <!-- End Profile Information -->

      <!-- Address Information -->
      <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">
        @include('profile.partials.address-information')
      </div>
      <!-- End Address Information -->
    </div>
  </div>

  @if (session('status') === 'picture-updated')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Profile Picture Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The profile picture has been successfully updated to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'picture-deleted')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Profile Picture Deleted.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The profile picture has been successfully deleted from the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'profile-updated')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Profile Information Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The profile information has been successfully updated to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'address-updated')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Address Information Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The address information has been successfully updated to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'password-updated')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Password Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The password has been successfully updated to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
</x-app-layout>

{{-- <x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Profile') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
      <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.update-profile-information-form')
        </div>
      </div>

      <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.update-password-form')
        </div>
      </div>

      <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
        <div class="max-w-xl">
          @include('profile.partials.delete-user-form')
        </div>
      </div>
    </div>
  </div>
</x-app-layout> --}}
