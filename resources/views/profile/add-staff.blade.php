<x-app-layout>
  <x-slot:title>
    Add Staff
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
      <a class="flex items-center text-sm text-gray-500" href="{{ route('profile.staff') }}">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-users">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
          <circle cx="9" cy="7" r="4" />
          <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
        </svg>
        Manage Staff
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
          stroke-linejoin="round" class="lucide lucide-user-plus">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
          <circle cx="9" cy="7" r="4" />
          <line x1="19" x2="19" y1="8" y2="14" />
          <line x1="22" x2="16" y1="11" y2="11" />
        </svg>
        Add Staff
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <!-- Content -->
  <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">

    <!-- Title -->
    <div class="mb-8">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Add Staff
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Add new staff.
      </p>
    </div>
    <!-- End Title -->

    <!-- Form -->
    <form method="post" action="{{ route('profile.post-add-staff') }}">
      @csrf

      <!-- Grid -->
      <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">

        <!-- Full Name -->
        <div class="sm:col-span-3">
          <label class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Full Name
          </label>
        </div>
        <div class="sm:col-span-9">
          <div class="sm:flex">
            <input type="text" name="first_name" id="first_name" placeholder="Enter staff first name"
              class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
              value="{{ old('first_name') }}">
            <input type="text" name="last_name" id="last_name" placeholder="Enter staff last name"
              class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
              value="{{ old('last_name') }}">
          </div>
          <div class="sm:flex">
            <x-input-error class="relative block w-full mt-2" :messages="$errors->get('first_name')" />
            <x-input-error class="relative block w-full mt-2" :messages="$errors->get('last_name')" />
          </div>
        </div>
        <!-- End Full Name -->

        <!-- Email Address -->
        <div class="sm:col-span-3">
          <label for="email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Email Address
          </label>
        </div>
        <div class="sm:col-span-9">
          <input type="email" name="email" id="email" placeholder="example@dazumrah.com"
            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            value="{{ old('email') }}">
          <x-input-error class="relative block w-full mt-2" :messages="$errors->get('email')" />
        </div>
        <!-- End Email Address -->

        <!-- Password -->
        <div class="sm:col-span-3">
          <label for="password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Password
          </label>
        </div>
        <div class="sm:col-span-9">
          <input type="password" name="password" id="password" placeholder="Enter staff password"
            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            value="{{ old('password') }}">
          <x-input-error class="mt-2" :messages="$errors->get('password')" />
        </div>
        <!-- End Password -->

        <!-- Confirm Password -->
        <div class="sm:col-span-3">
          <label for="password_confirmation" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Confirm Password
          </label>
        </div>
        <div class="sm:col-span-9">
          <input type="password" name="password_confirmation" id="password_confirmation"
            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            placeholder="Re-type staff password" value="{{ old('password_confirmation') }}">
          <x-input-error class="mt-2" :messages="$errors->get('password_confirmation')" />
        </div>
        <!-- End Confirm Password -->

      </div>
      <!-- End Grid -->

      <!-- Button-->
      <div class="flex justify-end mt-5 gap-x-2">
        <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
          href="{{ route('profile.staff') }}">
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
            stroke-linejoin="round" class="lucide lucide-user-plus">
            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <line x1="19" x2="19" y1="8" y2="14" />
            <line x1="22" x2="16" y1="11" y2="11" />
          </svg>
          Add Staff
        </button>
      </div>
      <!-- End Button-->

    </form>
    <!-- End Form -->
  </div>
  <!-- End Content -->
</x-app-layout>
