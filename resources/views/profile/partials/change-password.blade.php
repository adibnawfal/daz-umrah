<div class="mb-8">
  <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
    Update Password
  </h2>
  <p class="text-sm text-gray-600 dark:text-gray-400">
    Ensure your account is using a long, random password to stay secure.
  </p>
</div>

<form method="post" action="{{ route('password.update') }}">
  @csrf
  @method('put')

  <!-- Grid -->
  <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">
    <div class="sm:col-span-3">
      <label for="account_password" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
        Password
      </label>
    </div>
    <!-- End Col -->

    <div class="sm:col-span-9">
      <div class="space-y-2">
        <input type="password" id="update_password_current_password" name="current_password"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          placeholder="Enter current password" autocomplete="current-password">
        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        <input type="password" id="update_password_password" name="password"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          placeholder="Enter new password" autocomplete="new-password">
        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        <input type="password" id="update_password_password_confirmation" name="password_confirmation"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          placeholder="Re-type new password" autocomplete="new-password">
        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->

  <div class="flex justify-end mt-5 gap-x-2">
    {{-- @if (session('status') === 'password-updated')
      <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
        {{ __('Saved.') }}</p>
    @endif --}}

    <button type="submit"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" class="lucide lucide-key-round">
        <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z" />
        <circle cx="16.5" cy="7.5" r=".5" fill="currentColor" />
      </svg>
      Update Password
    </button>
  </div>
</form>

{{-- <section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Update Password') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600">
      {{ __('Ensure your account is using a long, random password to stay secure.') }}
    </p>
  </header>

  <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('put')

    <div>
      <x-input-label for="update_password_current_password" :value="__('Current Password')" />
      <x-text-input id="update_password_current_password" name="current_password" type="password" class="block w-full mt-1"
        autocomplete="current-password" />
      <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
    </div>

    <div>
      <x-input-label for="update_password_password" :value="__('New Password')" />
      <x-text-input id="update_password_password" name="password" type="password" class="block w-full mt-1"
        autocomplete="new-password" />
      <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
    </div>

    <div>
      <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
      <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password"
        class="block w-full mt-1" autocomplete="new-password" />
      <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center gap-4">
      <x-primary-button>{{ __('Save') }}</x-primary-button>

      @if (session('status') === 'password-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
          {{ __('Saved.') }}</p>
      @endif
    </div>
  </form>
</section> --}}
