<div class="flex flex-col">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle">
      <div
        class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
        <!-- Header -->
        <div
          class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
          <div>
            <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
              All Users
            </h2>
            <p class="text-sm text-gray-600 dark:text-neutral-400">
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
                  <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
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

              <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                href="#">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-sheet">
                  <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                  <line x1="3" x2="21" y1="9" y2="9" />
                  <line x1="3" x2="21" y1="15" y2="15" />
                  <line x1="9" x2="9" y1="9" y2="21" />
                  <line x1="15" x2="15" y1="9" y2="21" />
                </svg>
                Export to Excel
              </a>
            </div>
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
          <thead class="bg-gray-50 dark:bg-neutral-800">
            <tr>
              <th scope="col" class="py-3 ps-6 text-start">
                <label for="hs-at-with-checkboxes-main" class="flex">
                  <input type="checkbox"
                    class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                    id="hs-at-with-checkboxes-main">
                  <span class="sr-only">Checkbox</span>
                </label>
              </th>

              <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                    User
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                    Role
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                    Phone No.
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                    Address
                  </span>
                </div>
              </th>

              <th scope="col" class="px-6 py-3 text-start">
                <div class="flex items-center gap-x-2">
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                    Created
                  </span>
                </div>
              </th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
            @foreach ($allUsers as $allUsersData)
              <tr>
                <td class="size-px whitespace-nowrap">
                  <div class="py-3 ps-6">
                    <label for="hs-at-with-checkboxes-1" class="flex">
                      <input type="checkbox"
                        class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800"
                        id="hs-at-with-checkboxes-1">
                      <span class="sr-only">Checkbox</span>
                    </label>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                    <div class="flex items-center gap-x-3">
                      @php
                        $nameLetter = substr($allUsersData->first_name, 0, 1) . substr($allUsersData->last_name, 0, 1);
                      @endphp
                      @if ($allUsersData->profile_img)
                        <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-gray-800"
                          src="{{ asset('images/users/' . $allUsersData->profile_img) }}" alt="Profile Picture">
                      @else
                        <div>
                          <span
                            class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-300 dark:bg-gray-700 ring-2 ring-white dark:ring-gray-800">
                            <span class="text-xs font-medium leading-none text-gray-800 dark:text-gray-200">
                              {{ $nameLetter }}
                            </span>
                          </span>
                        </div>
                      @endif
                      <div class="grow">
                        <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                          {{ $allUsersData->first_name }} {{ $allUsersData->last_name }}
                        </span>
                        <span class="block text-sm text-gray-500">{{ $allUsersData->email }}</span>
                      </div>
                    </div>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span
                      class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                      <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                      </svg>
                      {{ $allUsersData->role }}
                    </span>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">
                      @if ($allUsersData->phone_no)
                        {{ $allUsersData->phone_no }}
                      @else
                        -
                      @endif
                    </span>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">
                      @if ($allUsersData->address1)
                        {{ $allUsersData->address1 }}
                      @else
                        -
                      @endif
                    </span>
                  </div>
                </td>

                <td class="size-px whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="text-sm text-gray-500 dark:text-neutral-500">28 Dec, 12:12</span>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <!-- End Table -->

        <!-- Footer -->
        <div
          class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
          <div>
            <p class="text-sm text-gray-600 dark:text-neutral-400">
              <span class="font-semibold text-gray-800 dark:text-neutral-200">12</span> results
            </p>
          </div>

          <div>
            <div class="inline-flex gap-x-2">
              <button type="button"
                class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m15 18-6-6 6-6" />
                </svg>
                Prev
              </button>

              <button type="button"
                class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                Next
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
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
