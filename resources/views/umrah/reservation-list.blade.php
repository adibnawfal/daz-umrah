<x-app-layout>
  <x-slot:title>
    Reservation List
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
      <p class="flex items-center text-sm font-semibold text-gray-800 dark:text-white">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-plane">
          <path
            d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z" />
        </svg>
        Umrah
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  @if ($reservation->isEmpty())
    <div class="p-4 overflow-y-auto text-center sm:p-10">
      <div class="flex items-center justify-center mb-8">
        <img width="400" src="{{ asset('images/umrah/reservation-list.svg') }}">
      </div>

      <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
        No Umrah Reservation!
      </h3>
      <p class="text-gray-600 dark:text-neutral-400">
        Make Umrah reservation to track your reservation progress.
      </p>

      <div class="flex justify-center mt-6 gap-x-4">
        <a href="{{ route('welcome.all-package') }}"
          class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" class="lucide lucide-clipboard-list">
            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
            <path d="M12 11h4" />
            <path d="M12 16h4" />
            <path d="M8 11h.01" />
            <path d="M8 16h.01" />
          </svg>
          Browse Umrah Package
        </a>
      </div>
    </div>
  @else
    @if ($user->role === 'admin' || $user->role === 'staff')
      <!-- Table 12 Days 10 Nights -->
      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div
              class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700">
              <!-- Header -->
              <div
                class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-gray-700">
                <div>
                  <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    12 Days 10 Nights
                  </h2>
                  <p class="text-sm text-gray-600 dark:text-gray-400">
                    Reservation list for 12 days 10 nights.
                  </p>
                </div>

                <div>
                  <div class="inline-flex gap-x-2">
                    <!-- Filter -->
                    <div class="hs-dropdown relative inline-block [--placement:bottom-right]"
                      data-hs-dropdown-auto-close="inside">
                      <button id="hs-as-table-table-filter-dropdown" type="button"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18" />
                          <path d="M7 12h10" />
                          <path d="M10 18h4" />
                        </svg>
                        Filter
                        <span
                          class="text-xs font-semibold text-gray-800 border-gray-200 ps-2 border-s dark:border-gray-700 dark:text-white">
                          0
                        </span>
                      </button>
                      <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-48 z-20 bg-white shadow-md rounded-lg mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                        aria-labelledby="hs-as-table-table-filter-dropdown">
                        <div class="divide-y divide-gray-200 dark:divide-gray-700">
                          <label for="hs-as-filters-dropdown-frequency" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-frequency" checked>
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Frequency</span>
                          </label>
                          <label for="hs-as-filters-dropdown-status" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-status" checked>
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Status</span>
                          </label>
                          <label for="hs-as-filters-dropdown-created" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-created">
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Created</span>
                          </label>
                          <label for="hs-as-filters-dropdown-due-date" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-due-date">
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Due Date</span>
                          </label>
                          <label for="hs-as-filters-dropdown-amount" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-amount">
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Amount</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <!-- End Filter -->
                  </div>
                </div>
              </div>
              <!-- End Header -->

              <!-- Table -->
              <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="divide-y divide-gray-200 bg-gray-50 dark:bg-gray-800 dark:divide-gray-700">
                  <tr>
                    <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s dark:border-gray-700">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        No.
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Customer
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Package
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Room
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        From Date
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        To Date
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Status
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Remarks
                      </span>
                    </th>

                    <!-- Actions Header -->
                    <th scope="col" class="px-6 py-3 text-end"></th>
                    <!-- End Actions Header -->
                  </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                  @foreach ($reservation as $reservationData)
                    <tr>
                      <!-- No. -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-800 dark:text-gray-200">{{ $loop->iteration }}.</span>
                        </div>
                      </td>
                      <!-- End No. -->

                      <!-- Customer -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <div class="flex items-center gap-x-3">
                            <span
                              class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-300 dark:bg-gray-700">
                              <span class="font-medium leading-none text-gray-800 dark:text-gray-200">AN</span>
                            </span>
                            <div class="grow">
                              <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                                {{ $reservationData->user->first_name }} {{ $reservationData->user->last_name }}
                              </span>
                              <span class="block text-sm text-gray-500">{{ $reservationData->user->email }}</span>
                            </div>
                          </div>
                        </div>
                      </td>
                      <!-- End Customer -->

                      <!-- Package -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-800 dark:text-gray-200">
                            {{ $reservationData->package->name }} {{ $reservationData->package->year }}
                          </span>
                        </div>
                      </td>
                      <!-- End Package -->

                      <!-- Room -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-800 dark:text-gray-200">{{ $reservationData->room }}</span>
                        </div>
                      </td>
                      <!-- End Room -->

                      <!-- From Date -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-600 dark:text-neutral-400">
                            {{ Carbon\Carbon::parse($reservationData->from_date)->format('d M Y') }}
                          </span>
                        </div>
                      </td>
                      <!-- End From Date -->

                      <!-- To Date -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-600 dark:text-neutral-400">
                            {{ Carbon\Carbon::parse($reservationData->to_date)->format('d M Y') }}
                          </span>
                        </div>
                      </td>
                      <!-- End To Date -->

                      <!-- Status -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          @if ($reservationData->status === 'Under Review')
                            <span
                              class="inline-flex w-max items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-blue-100 text-blue-800 border border-blue-200">
                              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                              </svg>
                              {{ $reservationData->status }}
                            </span>
                          @endif
                        </div>
                      </td>
                      <!-- End Status -->

                      <!-- Remarks -->
                      <td class="h-px align-top w-72 min-w-72">
                        <div class="relative z-10 block" href="#">
                          <div class="p-6">
                            <p class="text-sm text-gray-500 dark:text-neutral-500">
                              {{ $reservationData->remarks }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <!-- End Remarks -->

                      <!-- Actions -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                            <button id="hs-table-dropdown-1" type="button"
                              class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg text-gray-700 align-middle disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="19" cy="12" r="1" />
                                <circle cx="5" cy="12" r="1" />
                              </svg>
                            </button>
                            <div
                              class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-40 z-20 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                              aria-labelledby="hs-table-dropdown-1">
                              <div class="py-2 first:pt-0 last:pb-0">
                                <span
                                  class="block px-3 py-2 text-xs font-medium text-gray-400 uppercase dark:text-gray-600">
                                  Actions
                                </span>
                                <a class="flex items-center px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                  href="#">
                                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-arrow-left-right">
                                    <path d="M8 3 4 7l4 4" />
                                    <path d="M4 7h16" />
                                    <path d="m16 21 4-4-4-4" />
                                    <path d="M20 17H4" />
                                  </svg>
                                  Update Status
                                </a>
                                <a class="flex items-center px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                  href="#">
                                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-message-circle-more">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                    <path d="M8 12h.01" />
                                    <path d="M12 12h.01" />
                                    <path d="M16 12h.01" />
                                  </svg>
                                  Write Remarks
                                </a>
                              </div>
                              <div class="py-2 first:pt-0 last:pb-0">
                                <button type="submit"
                                  class="flex items-center px-3 py-2 text-sm text-red-600 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-trash-2">
                                    <path d="M3 6h18" />
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                                    <line x1="10" x2="10" y1="11" y2="17" />
                                    <line x1="14" x2="14" y1="11" y2="17" />
                                  </svg>
                                  Delete
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <!-- End Actions -->
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table -->

              <!-- Footer -->
              <div
                class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-gray-700">
                <div>
                  <p class="text-sm text-gray-600 dark:text-gray-400">
                    <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $reservation->count() }}</span>
                    results
                  </p>
                </div>

                <div>
                  <div class="inline-flex gap-x-2">
                    <button type="button"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                      </svg>
                      Prev
                    </button>

                    <button type="button"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                      Next
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Table 12 Days 10 Nights -->
    @elseif ($user->role === 'customer')
      <!-- Table 12 Days 10 Nights -->
      <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div
              class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-slate-900 dark:border-gray-700">
              <!-- Header -->
              <div
                class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-gray-700">
                <div>
                  <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    Reservation List
                  </h2>
                  <p class="text-sm text-gray-600 dark:text-gray-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  </p>
                </div>

                <div>
                  <div class="inline-flex gap-x-2">
                    <!-- Filter -->
                    <div class="hs-dropdown relative inline-block [--placement:bottom-right]"
                      data-hs-dropdown-auto-close="inside">
                      <button id="hs-as-table-table-filter-dropdown" type="button"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18" />
                          <path d="M7 12h10" />
                          <path d="M10 18h4" />
                        </svg>
                        Filter
                        <span
                          class="text-xs font-semibold text-gray-800 border-gray-200 ps-2 border-s dark:border-gray-700 dark:text-white">
                          0
                        </span>
                      </button>
                      <div
                        class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-48 z-20 bg-white shadow-md rounded-lg mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                        aria-labelledby="hs-as-table-table-filter-dropdown">
                        <div class="divide-y divide-gray-200 dark:divide-gray-700">
                          <label for="hs-as-filters-dropdown-frequency" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-frequency" checked>
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Frequency</span>
                          </label>
                          <label for="hs-as-filters-dropdown-status" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-status" checked>
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Status</span>
                          </label>
                          <label for="hs-as-filters-dropdown-created" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-created">
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Created</span>
                          </label>
                          <label for="hs-as-filters-dropdown-due-date" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-due-date">
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Due Date</span>
                          </label>
                          <label for="hs-as-filters-dropdown-amount" class="flex py-2.5 px-3">
                            <input type="checkbox"
                              class="shrink-0 mt-0.5 border-gray-300 rounded text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                              id="hs-as-filters-dropdown-amount">
                            <span class="text-sm text-gray-800 ms-3 dark:text-gray-200">Amount</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <!-- End Filter -->

                    <!-- Give Feedback -->
                    <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                      href="{{ route('welcome.package') }}">
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-plus">
                        <path d="M8 2v4" />
                        <path d="M16 2v4" />
                        <path d="M21 13V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h8" />
                        <path d="M3 10h18" />
                        <path d="M16 19h6" />
                        <path d="M19 16v6" />
                      </svg>
                      Make Reservation
                    </a>
                    <!-- End Give Feedback -->
                  </div>
                </div>
              </div>
              <!-- End Header -->

              <!-- Table -->
              <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="divide-y divide-gray-200 bg-gray-50 dark:bg-gray-800 dark:divide-gray-700">
                  <tr>
                    <th scope="col" class="px-6 py-3 border-gray-200 text-start border-s dark:border-gray-700">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        No.
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Package
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Room
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        From Date
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        To Date
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Status
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Progress
                      </span>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                        Remarks
                      </span>
                    </th>

                    <!-- Actions Header -->
                    <th scope="col" class="px-6 py-3 text-end"></th>
                    <!-- End Actions Header -->
                  </tr>
                </thead>

                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                  @php
                    $count = 1;
                  @endphp
                  @foreach ($reservation as $reservationData)
                    <tr>
                      <!-- No. -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-800 dark:text-gray-200">{{ $count++ }}.</span>
                        </div>
                      </td>
                      <!-- End No. -->

                      <!-- Package -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                            {{ $reservationData->package->name }} {{ $reservationData->package->year }}
                          </span>
                          <span class="block text-sm text-gray-500 dark:text-neutral-500">
                            {{ $reservationData->payment->package }}
                          </span>
                        </div>
                      </td>
                      <!-- End Package -->

                      <!-- Room -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-800 dark:text-gray-200">{{ $reservationData->room }}</span>
                        </div>
                      </td>
                      <!-- End Room -->

                      <!-- From Date -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-600 dark:text-neutral-400">
                            {{ Carbon\Carbon::parse($reservationData->from_date)->format('d M Y') }}
                          </span>
                        </div>
                      </td>
                      <!-- End From Date -->

                      <!-- To Date -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <span class="text-sm text-gray-600 dark:text-neutral-400">
                            {{ Carbon\Carbon::parse($reservationData->to_date)->format('d M Y') }}
                          </span>
                        </div>
                      </td>
                      <!-- End To Date -->

                      <!-- Status -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          @if ($reservationData->status === 'Under Review')
                            <span
                              class="inline-flex w-max items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-blue-100 text-blue-800 border border-blue-200">
                              <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4"></path>
                                <path d="M12 8h.01"></path>
                              </svg>
                              {{ $reservationData->status }}
                            </span>
                          @endif
                        </div>
                      </td>
                      <!-- End Status -->

                      <!-- Progress -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          @if ($reservationData->status === 'Under Review')
                            <div class="flex items-center gap-x-3">
                              <span class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                              <div
                                class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                <div
                                  class="flex flex-col justify-center overflow-hidden bg-gray-800 dark:bg-neutral-200"
                                  role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                  aria-valuemax="100"></div>
                              </div>
                            </div>
                          @endif
                        </div>
                      </td>
                      <!-- End Progress -->

                      <!-- Remarks -->
                      <td class="h-px align-top w-72 min-w-72">
                        <div class="relative z-10 block" href="#">
                          <div class="p-6">
                            <p class="text-sm text-gray-500 dark:text-neutral-500">
                              {{ $reservationData->remarks }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <!-- End Remarks -->

                      <!-- Actions -->
                      <td class="align-top size-px whitespace-nowrap">
                        <div class="p-6">
                          <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                            <button id="hs-table-dropdown-1" type="button"
                              class="hs-dropdown-toggle py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-lg text-gray-700 align-middle disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                              <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1" />
                                <circle cx="19" cy="12" r="1" />
                                <circle cx="5" cy="12" r="1" />
                              </svg>
                            </button>
                            <div
                              class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden divide-y divide-gray-200 min-w-40 z-20 bg-white shadow-2xl rounded-lg p-2 mt-2 dark:divide-gray-700 dark:bg-gray-800 dark:border dark:border-gray-700"
                              aria-labelledby="hs-table-dropdown-1">
                              <div class="py-2 first:pt-0 last:pb-0">
                                <span
                                  class="block px-3 py-2 text-xs font-medium text-gray-400 uppercase dark:text-gray-600">
                                  Actions
                                </span>
                                <a class="flex items-center px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                  href="#">
                                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-pen-line">
                                    <path d="m18 5-3-3H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2" />
                                    <path d="M8 18h1" />
                                    <path d="M18.4 9.6a2 2 0 1 1 3 3L17 17l-4 1 1-4Z" />
                                  </svg>
                                  Update Details
                                </a>
                                <a class="flex items-center px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                  href="#">
                                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-circle-dollar-sign">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8" />
                                    <path d="M12 18V6" />
                                  </svg>
                                  Make Payment
                                </a>
                              </div>
                              <div class="py-2 first:pt-0 last:pb-0">
                                <button type="submit"
                                  class="flex items-center px-3 py-2 text-sm text-red-600 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-calendar-off">
                                    <path d="M4.2 4.2A2 2 0 0 0 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 1.82-1.18" />
                                    <path d="M21 15.5V6a2 2 0 0 0-2-2H9.5" />
                                    <path d="M16 2v4" />
                                    <path d="M3 10h7" />
                                    <path d="M21 10h-5.5" />
                                    <path d="m2 2 20 20" />
                                  </svg>
                                  Cancel Reservation
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <!-- End Actions -->
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table -->

              <!-- Footer -->
              <div
                class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-gray-700">
                <div>
                  <p class="text-sm text-gray-600 dark:text-gray-400">
                    <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $reservation->count() }}</span>
                    results
                  </p>
                </div>

                <div>
                  <div class="inline-flex gap-x-2">
                    <button type="button"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m15 18-6-6 6-6" />
                      </svg>
                      Prev
                    </button>

                    <button type="button"
                      class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                      Next
                      <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Table 12 Days 10 Nights -->
    @endif
  @endif

</x-app-layout>
