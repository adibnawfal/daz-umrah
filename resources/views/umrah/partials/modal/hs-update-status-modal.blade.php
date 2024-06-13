<div id="hs-update-status-{{ $reservationData->id }}-modal"
  class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
  <div
    class="m-3 mt-0 transition-all ease-out opacity-0 hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 sm:max-w-lg sm:w-full sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
    <div
      class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
      <form method="post" action="{{ route('umrah.put-update-status', $reservationData->id) }}">
        @csrf
        @method('put')

        <div class="flex items-center justify-between px-4 py-3 border-b dark:border-gray-700">
          <h3 class="font-bold text-gray-800 dark:text-white">
            Update Status
          </h3>
          <button type="button"
            class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
            data-hs-overlay="#hs-update-status-{{ $reservationData->id }}-modal">
            <span class="sr-only">Close</span>
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
        <div class="p-4 overflow-y-auto">
          <div>
            <select id="status" name="status"
              class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg pe-9 focus:border-[#c31e39] focus:ring-[#c31e39] disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
              <option @selected(old('status', $reservationData->status) == '') disabled value=''>Select status</option>
              <option @selected(old('status', $reservationData->status) == 'Under Review') value='Under Review'>Under Review</option>
              <option @selected(old('status', $reservationData->status) == 'Update Details') value='Update Details'>Update Details</option>
              <option @selected(old('status', $reservationData->status) == 'Make Payment') value='Make Payment'>Make Payment</option>
              <option @selected(old('status', $reservationData->status) == 'Approved') value='Approved'>Approved</option>
            </select>
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
          </div>
        </div>
        <div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-gray-700">
          <button type="button"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
            data-hs-overlay="#hs-update-status-{{ $reservationData->id }}-modal">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-x">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
            Cancel
          </button>
          <button type="submit"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" class="lucide lucide-check">
              <path d="M20 6 9 17l-5-5" />
            </svg>
            Update
          </button>
      </form>
    </div>
  </div>
</div>
</div>
