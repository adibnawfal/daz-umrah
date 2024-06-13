<x-app-layout>
  <x-slot:title>
    Update Feedback
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
    <a class="inline-flex items-center" href="{{ route('feedback') }}">
      <p class="flex items-center text-sm text-gray-500">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-message-circle-more">
          <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
          <path d="M8 12h.01" />
          <path d="M12 12h.01" />
          <path d="M16 12h.01" />
        </svg>
        Feedback
      </p>
      <svg class="flex-shrink-0 mx-2 overflow-visible text-gray-400 size-4 dark:text-neutral-600"
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6" />
      </svg>
    </a>
    <li class="inline-flex items-center">
      <p class="flex items-center text-sm font-semibold text-gray-800 dark:text-white">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-pencil-line">
          <path d="M12 20h9" />
          <path
            d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z" />
          <path d="m15 5 3 3" />
        </svg>
        Update Feedback
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <!-- Content -->
  <div class="p-4 bg-white border border-gray-200 h-max rounded-xl sm:p-7 dark:bg-gray-800 dark:border-gray-700">

    <!-- Title -->
    <div class="mb-8">
      <h2 class="text-xl font-bold text-gray-800 dark:text-gray-200">
        Update Feedback
      </h2>
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Update your feedback.
      </p>
    </div>
    <!-- End Title -->

    <!-- Form -->
    <form method="post" action="{{ route('feedback.patch-update-feedback', $feedback->id) }}">
      @csrf
      @method('patch')

      <!-- Grid -->
      <div class="grid gap-2 sm:grid-cols-12 sm:gap-6">

        <!-- Full Name -->
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
        <div class="sm:col-span-9">
          <div class="sm:flex">
            <input type="text" name="first_name" id="first_name" placeholder="First Name"
              class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
              autocomplete="first_name" value="{{ old('first_name', $feedback->user->first_name) }}" disabled>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name"
              class="relative block w-full px-3 py-2 -mt-px text-sm border-gray-200 shadow-sm pe-11 -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
              autocomplete="last_name" value="{{ old('last_name', $feedback->user->last_name) }}" disabled>
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
            autocomplete="username" value="{{ old('last_name', $feedback->user->email) }}" disabled>
        </div>
        <!-- End Email Address -->

        <!-- Rating -->
        <div class="sm:col-span-3">
          <label for="rating" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Rating
          </label>
        </div>
        <div class="sm:col-span-9">
          <div class="flex items-center" x-data="{ rating: '{{ old('rating', $feedback->rating) }}' }">
            <div class="flex flex-row-reverse items-center justify-end">
              <input type="radio" name="rating" id="rating-1"
                class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                value="5" x-model="rating">
              <label for="rating-1"
                class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
                <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
              </label>
              <input type="radio" name="rating" id="rating-2"
                class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                value="4" x-model="rating">
              <label for="rating-2"
                class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
                <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
              </label>
              <input type="radio" name="rating" id="rating-3"
                class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                value="3" x-model="rating">
              <label for="rating-3"
                class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
                <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
              </label>
              <input type="radio" name="rating" id="rating-4"
                class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                value="2" x-model="rating">
              <label for="rating-4"
                class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
                <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
              </label>
              <input type="radio" name="rating" id="rating-5"
                class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
                value="1" x-model="rating">
              <label for="rating-5"
                class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
                <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                  fill="currentColor" viewBox="0 0 16 16">
                  <path
                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
              </label>
              <input type="radio" name="rating" id="rating-0" class="hidden " value="0" x-model="rating">
            </div>
            <p class="text-sm text-gray-400 ms-2 dark:text-gray-600">
              <span x-text="rating"></span> Star
            </p>
          </div>
        </div>
        <!-- End Rating -->

        <!-- Feedback Title -->
        <div class="sm:col-span-3">
          <label for="title" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Title
          </label>
        </div>
        <div class="sm:col-span-9">
          <input type="text" name="title" id="title" placeholder="Feedback title"
            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg shadow-sm pe-11 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            autocomplete="title" value="{{ old('title', $feedback->title) }}">
          <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <!-- End Feedback Title -->

        <!-- Feedback Details -->
        <div class="sm:col-span-3">
          <label for="details" class="inline-block text-sm text-gray-800 mt-2.5 dark:text-gray-200">
            Feedback
          </label>
        </div>
        <div class="sm:col-span-9">
          <textarea id="details" name="details" placeholder="Leave your feedback here..."
            class="block w-full px-3 py-2 text-sm border-gray-200 rounded-lg resize-none focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            rows="6">{{ old('details', $feedback->details) }}</textarea>
          <x-input-error class="mt-2" :messages="$errors->get('details')" />
        </div>
        <!-- End Feedback Details -->

      </div>
      <!-- End Grid -->

      <!-- Button-->
      <div class="flex justify-end mt-5 gap-x-2">
        <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
          href="{{ route('feedback') }}">
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
            stroke-linejoin="round" class="lucide lucide-pencil-line">
            <path d="M12 20h9" />
            <path
              d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z" />
            <path d="m15 5 3 3" />
          </svg>
          Update Feedback
        </button>
      </div>
      <!-- End Button-->

    </form>
    <!-- End Form -->
  </div>
  <!-- End Content -->
</x-app-layout>
