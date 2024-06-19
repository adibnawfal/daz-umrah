<x-app-layout>
  <x-slot:title>
    Customer
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
    <a class="inline-flex items-center" href="{{ route('report') }}">
      <p class="flex items-center text-sm text-gray-500">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-file-text">
          <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
          <path d="M14 2v4a2 2 0 0 0 2 2h4" />
          <path d="M10 9H8" />
          <path d="M16 13H8" />
          <path d="M16 17H8" />
        </svg>
        Report
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
          stroke-linejoin="round" class="lucide lucide-users">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
          <circle cx="9" cy="7" r="4" />
          <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
        </svg>
        Customer
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

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
                Customer
              </h2>
              <p class="text-sm text-gray-600 dark:text-neutral-400">
                Detailed information on registered customer.
              </p>
            </div>

            <div>
              <div class="inline-flex gap-x-2">
                <!-- Filter -->
                {{-- <div class="hs-dropdown relative inline-block [--placement:bottom-right]"
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
                </div> --}}
                <!-- End Filter -->

                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                  href="{{ route('report.export-customer') }}">
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
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                    No.
                  </span>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Picture
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      First Name
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Last Name
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Email
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Role
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Phone No.
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Address
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Created
                    </span>
                  </div>
                </th>
              </tr>
            </thead>

            <!-- Body -->
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
              @php
                $count = 1;
              @endphp
              @foreach ($customer as $customerData)
                <tr>
                  <!-- No. -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-800 dark:text-gray-200">{{ $count++ }}.</span>
                    </div>
                  </td>
                  <!-- End No. -->

                  <!-- Profile Picture -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      @if ($customerData->profile_img)
                        <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-gray-800"
                          src="{{ asset('images/users/' . $customerData->profile_img) }}" alt="Profile Picture">
                      @else
                        <div>
                          <span
                            class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-300 dark:bg-gray-700 ring-2 ring-white dark:ring-gray-800">
                            <span class="text-xs font-medium leading-none text-gray-800 dark:text-gray-200">
                              {{ substr($customerData->first_name, 0, 1) . substr($customerData->last_name, 0, 1) }}
                            </span>
                          </span>
                        </div>
                      @endif
                    </div>
                  </td>
                  <!-- End Profile Picture -->

                  <!-- First Name -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        {{ $customerData->first_name }}
                      </span>
                    </div>
                  </td>
                  <!-- End First Name -->

                  <!-- Last Name -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        @if ($customerData->last_name)
                          {{ $customerData->last_name }}
                        @else
                          -
                        @endif
                      </span>
                    </div>
                  </td>
                  <!-- End Last Name -->

                  <!-- Email -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        {{ $customerData->email }}
                      </span>
                    </div>
                  </td>
                  <!-- End Email -->

                  <!-- Role -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span
                        class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-neutral-900 dark:text-neutral-200">
                        {{ $customerData->role }}
                      </span>
                    </div>
                  </td>
                  <!-- End Role -->

                  <!-- Phone No -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        @if ($customerData->phone_no)
                          +60{{ $customerData->phone_no }}
                        @else
                          -
                        @endif
                      </span>
                    </div>
                  </td>
                  <!-- End Phone No -->

                  <!-- Address -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        @if ($customerData->address1)
                          <span class="block">{{ $customerData->address1 }}</span>
                          <span>{{ $customerData->address2 }}</span>
                          <span class="block">{{ $customerData->postal_code }}
                            {{ $customerData->city }}</span>
                          <span class="block">{{ $customerData->state }}</span>
                        @else
                          -
                        @endif
                      </span>
                    </div>
                  </td>
                  <!-- End Address -->

                  <!-- Created -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        {{ $customerData->created_at->format('d F Y') }}
                      </span>
                    </div>
                  </td>
                  <!-- End Created -->
                </tr>
              @endforeach
            </tbody>
            <!-- End Body -->
          </table>
          <!-- End Table -->

          <!-- Footer -->
          <div
            class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
            <!-- Results -->
            <div>
              <p class="text-sm text-gray-600 dark:text-neutral-400">
                <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $customer->count() }}</span>
                results
              </p>
            </div>
            <!-- End Results -->

            <!-- Pagination -->
            <div>
              <div class="inline-flex gap-x-2">
                <button type="button"
                  class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                  </svg>
                  Prev
                </button>

                <button type="button"
                  class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800">
                  Next
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                  </svg>
                </button>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
