<div class="mb-8">
  <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
    Delete Account
  </h2>
  <p class="text-sm text-gray-600 dark:text-gray-400">
    Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your
    account, please download any data or information that you wish to retain.
  </p>
</div>

<form>
  <div class="flex justify-end mt-5 gap-x-2">
    <button type="button"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-[#c31e39] rounded-lg shadow-sm gap-x-2 hover:bg-[#9c182e] disabled:opacity-50 disabled:pointer-events-none">
      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="lucide lucide-user-x">
        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
        <circle cx="9" cy="7" r="4" />
        <line x1="17" x2="22" y1="8" y2="13" />
        <line x1="22" x2="17" y1="8" y2="13" />
      </svg>
      Delete Account
    </button>
  </div>
</form>

{{-- <section class="space-y-6">
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Delete Account') }}
    </h2>

    <p class="mt-1 text-sm text-gray-600">
      {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
    </p>
  </header>

  <x-danger-button x-data=""
    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">{{ __('Delete Account') }}</x-danger-button>

  <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
      @csrf
      @method('delete')

      <h2 class="text-lg font-medium text-gray-900">
        {{ __('Are you sure you want to delete your account?') }}
      </h2>

      <p class="mt-1 text-sm text-gray-600">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
      </p>

      <div class="mt-6">
        <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

        <x-text-input id="password" name="password" type="password" class="block w-3/4 mt-1"
          placeholder="{{ __('Password') }}" />

        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
      </div>

      <div class="flex justify-end mt-6">
        <x-secondary-button x-on:click="$dispatch('close')">
          {{ __('Cancel') }}
        </x-secondary-button>

        <x-danger-button class="ms-3">
          {{ __('Delete Account') }}
        </x-danger-button>
      </div>
    </form>
  </x-modal>
</section> --}}
