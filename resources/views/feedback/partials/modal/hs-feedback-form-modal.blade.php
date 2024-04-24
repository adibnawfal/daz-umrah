<div id="hs-feedback-form-modal"
  class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
  <div
    class="m-3 mt-0 transition-all ease-out opacity-0 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:max-w-lg sm:w-full sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
    <div
      class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <div class="flex items-center justify-between px-4 py-3 border-b dark:border-gray-700">
        <h3 class="font-bold text-gray-800 dark:text-white">
          Give Feedback
        </h3>
        <button type="button"
          class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
          data-hs-overlay="#hs-feedback-form-modal">
          <span class="sr-only">Close</span>
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
        </button>
      </div>

      <div class="grid grid-cols-2 px-4 pt-4 gap-x-4">
        <!-- First Name -->
        <div>
          <label for="first_name" class="block mb-2 text-sm dark:text-white">First Name</label>
          <input type="text" id="first_name" name="first_name" placeholder="Enter your first name"
            class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            autocomplete="first-name" value="{{ old('first_name', $user->first_name) }}">
          <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
        </div>
        <!-- End First Name -->

        <!-- Last Name -->
        <div>
          <label for="last_name" class="block mb-2 text-sm dark:text-white">Last Name</label>
          <input type="text" id="last_name" name="last_name" placeholder="Enter your last name"
            class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
            autocomplete="last-name" value="{{ old('last_name', $user->last_name) }}">
          <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
        </div>
        <!-- End Last Name -->
      </div>

      <!-- Email Address -->
      <div class="px-4 pt-4">
        <label for="email" class="block mb-2 text-sm dark:text-white">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email address"
          class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="email" value="{{ old('email', $user->email) }}">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>
      <!-- End Email Address -->

      <!-- Title -->
      <div class="px-4 pt-4">
        <label for="title" class="block mb-2 text-sm dark:text-white">Title</label>
        <input type="text" id="title" name="title" placeholder="Enter feedback title"
          class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="title" value="{{ old('title') }}">
        <x-input-error :messages="$errors->get('title')" class="mt-2" />
      </div>
      <!-- End Title -->

      <!-- Rating -->
      <div class="p-4">
        <label for="rating" class="block mb-2 text-sm dark:text-white">Rating</label>
        <div class="flex items-center">
          <div class="flex flex-row-reverse items-center justify-end">
            <input id="hs-ratings-readonly-1" type="radio"
              class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
              name="hs-ratings-readonly" value="1">
            <label for="hs-ratings-readonly-1"
              class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
              <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
            </label>
            <input id="hs-ratings-readonly-2" type="radio"
              class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
              name="hs-ratings-readonly" value="2">
            <label for="hs-ratings-readonly-2"
              class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
              <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
            </label>
            <input id="hs-ratings-readonly-3" type="radio"
              class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
              name="hs-ratings-readonly" value="3">
            <label for="hs-ratings-readonly-3"
              class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
              <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
            </label>
            <input id="hs-ratings-readonly-4" type="radio"
              class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
              name="hs-ratings-readonly" value="4">
            <label for="hs-ratings-readonly-4"
              class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
              <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
            </label>
            <input id="hs-ratings-readonly-5" type="radio"
              class="text-transparent bg-transparent border-0 appearance-none cursor-pointer peer -ms-6 size-7 checked:bg-none focus:bg-none focus:ring-0 focus:ring-offset-0"
              name="hs-ratings-readonly" value="5">
            <label for="hs-ratings-readonly-5"
              class="text-gray-300 pointer-events-none peer-checked:text-yellow-400 dark:peer-checked:text-yellow-600 dark:text-gray-600">
              <svg class="flex-shrink-0 size-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" viewBox="0 0 16 16">
                <path
                  d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
              </svg>
            </label>
          </div>
          <p class="text-sm text-gray-400 ms-2 dark:text-gray-600">
            4 Star
          </p>
        </div>
      </div>
      <!-- End Rating -->

      <!-- Feedback -->
      <div class="p-4">
        <label for="feedback" class="block mb-2 text-sm dark:text-white">Feedback</label>
        <textarea id="feedback" name="feedback" placeholder="Leave your feedback here..."
          class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg resize-none focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
          autocomplete="feedback" value="{{ old('feedback') }}" rows="6"></textarea>
        <x-input-error :messages="$errors->get('feedback')" class="mt-2" />
      </div>
      <!-- End Feedback -->

      <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-gray-700">
        <button type="button"
          class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
          data-hs-overlay="#hs-feedback-form-modal">
          Cancel
        </button>
        <button type="button"
          class="inline-flex items-center px-3 py-2 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
          Submit
        </button>
      </div>
    </div>
  </div>
</div>
