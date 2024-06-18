<div class="mb-8">
  <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
    Address Information
  </h2>
  <p class="text-sm text-gray-600 dark:text-gray-400">
    Update your address information.
  </p>
</div>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
  @csrf
</form>

<form method="post" action="{{ route('profile.patch-profile-address') }}">
  @csrf
  @method('patch')

  <!-- Grid -->
  <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">

    <div class="sm:col-span-3">
      <label for="af-account-email" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
        Address
      </label>
    </div>
    <!-- End Col -->

    <div class="space-y-3 sm:col-span-9">
      <input type="text" id="address1" name="address1" placeholder="Address Line 1"
        class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        autocomplete="address1" value="{{ old('address1', $user->address1) }}">
      <input type="text" id="address2" name="address2" placeholder="Address Line 2 (Optional)"
        class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
        autocomplete="address2" value="{{ old('address2', $user->address2) }}">
      <div class="grid gap-3 sm:flex">
        <input type="number" id="postal_code" name="postal_code" placeholder="Postal Code" min="0"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="postal_code" value="{{ old('postal_code', $user->postal_code) }}">
        {{-- <select name="city" id="city"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
          <option @selected(old('city') == '') disabled value="">City</option>
          <option @selected(old('city') == 'City 1') value="City 1">City 1</option>
          <option @selected(old('city') == 'City 2') value="City 2">City 2</option>
          <option @selected(old('city') == 'City 3') value="City 3">City 3</option>
        </select>
        <select name="state" id="state"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600">
          <option @selected(old('state') == '') disabled value="">State</option>
          <option @selected(old('state') == 'State 1') value="State 1">State 1</option>
          <option @selected(old('state') == 'State 2') value="State 2">State 2</option>
          <option @selected(old('state') == 'State 3') value="State 3">State 3</option>
        </select> --}}
        <input type="text" id="city" name="city" placeholder="City"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="city" value="{{ old('city', $user->city) }}">
        <input type="text" id="state" name="state" placeholder="State"
          class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="state" value="{{ old('state', $user->state) }}">
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->

  <div class="flex justify-end mt-5 gap-x-2">
    {{-- @if (session('status') === 'address-updated')
      <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="text-sm text-gray-600">
        {{ __('Saved.') }}</p>
    @endif --}}

    <button type="submit"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" class="lucide lucide-home">
        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
        <polyline points="9 22 9 12 15 12 15 22" />
      </svg>
      Update Address
    </button>
  </div>
</form>
