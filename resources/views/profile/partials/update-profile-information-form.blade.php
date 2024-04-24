{{-- <section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Profile Information') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600">
      {{ __("Update your account's profile information and email address.") }}
    </p>
  </header>

  <form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
  </form>

  <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" name="name" type="text" class="block w-full mt-1" :value="old('name', $user->name)" required
        autofocus autocomplete="name" />
      <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" name="email" type="email" class="block w-full mt-1" :value="old('email', $user->email)" required
        autocomplete="username" />
      <x-input-error class="mt-2" :messages="$errors->get('email')" />

      @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
        <div>
          <p class="mt-2 text-sm text-gray-800">
            {{ __('Your email address is unverified.') }}

            <button form="send-verification"
              class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              {{ __('Click here to re-send the verification email.') }}
            </button>
          </p>

          @if (session('status') === 'verification-link-sent')
            <p class="mt-2 text-sm font-medium text-green-600">
              {{ __('A new verification link has been sent to your email address.') }}
            </p>
          @endif
        </div>
      @endif
    </div>

    <div class="flex items-center gap-4">
      <x-primary-button>{{ __('Save') }}</x-primary-button>

      @if (session('status') === 'profile-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
          {{ __('Saved.') }}</p>
      @endif
    </div>
  </form>
</section> --}}

<div class="mb-8">
  <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
    Profile Information
  </h2>
  <p class="text-sm text-gray-600 dark:text-gray-400">
    Update your account's profile information and email address.
  </p>
</div>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
  @csrf
</form>

<form method="post" action="{{ route('profile.update-profile') }}">
  @csrf
  @method('patch')

  <!-- Grid -->
  <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
    <div class="sm:col-span-3">
      <label for="full_name" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
        Full Name
      </label>
      <div class="inline-block hs-tooltip">
        <button type="button" class="hs-tooltip-toggle ms-1">
          <svg class="inline-block text-gray-400 size-3 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg"
            width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path
              d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
          </svg>
        </button>
        <span
          class="absolute z-10 invisible inline-block w-40 px-2 py-1 text-xs font-medium text-center text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible dark:bg-slate-700"
          role="tooltip">
          Displayed on public feedback
        </span>
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <div class="sm:flex">
        <input type="text" id="first_name" name="first_name" placeholder="First Name"
          class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="first_name" value="{{ old('first_name', $user->first_name) }}">
        <input type="text" id="last_name" name="last_name" placeholder="Last Name"
          class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="last_name" value="{{ old('last_name', $user->last_name) }}">
      </div>
      <div class="sm:flex">
        <x-input-error class="relative block w-full mt-2" :messages="$errors->get('first_name')" />
        <x-input-error class="relative block w-full mt-2" :messages="$errors->get('last_name')" />
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-3">
      <label for="email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
        Email Address
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <input type="email" id="email" name="email" placeholder="example@dazumrah.com"
        class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        autocomplete="username" value="{{ old('email', $user->email) }}">
      <x-input-error class="mt-2" :messages="$errors->get('email')" />

      @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
        <div>
          <p class="mt-2 text-sm text-gray-800">
            {{ __('Your email address is unverified.') }}

            <button form="send-verification"
              class="text-sm text-gray-600 underline rounded-md hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              {{ __('Click here to re-send the verification email.') }}
            </button>
          </p>

          @if (session('status') === 'verification-link-sent')
            <p class="mt-2 text-sm font-medium text-green-600">
              {{ __('A new verification link has been sent to your email address.') }}
            </p>
          @endif
        </div>
      @endif
    </div>
    <!-- End Col -->

    <div class="sm:col-span-3">
      <div class="inline-block">
        <label for="phone_no" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
          Phone
        </label>
        <span class="text-sm text-gray-400 dark:text-gray-600">
          (Optional)
        </span>
      </div>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <div class="sm:flex">
        {{-- <select
          class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-9 sm:w-auto -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
          <option selected>Mobile</option>
          <option>Home</option>
          <option>Work</option>
          <option>Fax</option>
        </select> --}}
        <span
          class="inline-flex items-center px-4 text-sm text-gray-500 border border-gray-200 min-w-fit rounded-s-md border-e-0 bg-gray-50 dark:bg-gray-700 dark:border-gray-700 dark:text-gray-400">+60</span>
        <input type="text" id="phone_no" name="phone_no" placeholder="12-345 6789"
          class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="phone-no" value="{{ old('phone_no', $user->phone_no) }}">
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->

  <div class="flex justify-end mt-5 gap-x-2">
    {{-- @if (session('status') === 'profile-updated')
      <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
        {{ __('Saved.') }}</p>
    @endif --}}

    <button type="submit"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      @if (session('status') === 'profile-updated')
        <span x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
          class="animate-spin inline-block size-4 border-[3px] border-current border-t-transparent text-white rounded-full"
          role="status" aria-label="loading"></span>
        <svg x-data="{ show: false }" x-show="show" x-transition x-init="setTimeout(() => show = true, 2000)" class="flex-shrink-0 size-4"
          xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="lucide lucide-user">
          <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
          <circle cx="12" cy="7" r="4" />
        </svg>
      @else
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-user">
          <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
          <circle cx="12" cy="7" r="4" />
        </svg>
      @endif
      Save Profile
    </button>
  </div>
</form>
