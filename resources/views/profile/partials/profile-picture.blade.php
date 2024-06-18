<div class="flex gap-x-6">
  @if ($user->profile_img)
    <img class="inline-block size-[100px] rounded-lg mb-3" src="{{ asset('images/users/' . $user->profile_img) }}"
      alt="Profile Picture">
  @else
    <div>
      <span class="inline-flex items-center justify-center size-[100px] rounded-lg bg-gray-300 dark:bg-gray-700 mb-3">
        <span class="text-xl font-medium leading-none text-gray-800 dark:text-gray-200">
          {{ substr($user->first_name, 0, 1) }}{{ substr($user->last_name, 0, 1) }}
        </span>
      </span>
    </div>
  @endif

  <div class="flex flex-col justify-between w-full">
    <div>
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Profile Picture
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        JPEG, JPG, or PNG. Max size of 800K
      </p>
    </div>

    <div class="flex items-end justify-end mt-5 gap-x-2">
      <form method="post" action="{{ route('profile.delete-profile-picture') }}">
        @csrf
        @method('delete')

        <button type="submit"
          class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-trash-2">
            <path d="M3 6h18" />
            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
            <line x1="10" x2="10" y1="11" y2="17" />
            <line x1="14" x2="14" y1="11" y2="17" />
          </svg>
          Delete
        </button>
      </form>

      <button type="button" data-hs-overlay="#hs-profile-picture-modal"
        class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-cloud-upload">
          <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
          <path d="M12 12v9" />
          <path d="m16 16-4-4-4 4" />
        </svg>
        Upload Picture
      </button>
      @include('profile.partials.modal.hs-profile-picture-modal')

    </div>
  </div>
</div>
