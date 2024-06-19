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
              Manage the 12 Days 10 Nights Umrah reservation details.
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
            </div>
          </div>
        </div>
        <!-- End Header -->

        <!-- Table -->
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
          <thead class="divide-y divide-gray-200 bg-gray-50 dark:bg-gray-800 dark:divide-gray-700">
            <tr>
              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  No.
                </span>
              </th>

              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  Customer
                </span>
              </th>

              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  Package
                </span>
              </th>

              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  Total Amount
                </span>
              </th>

              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  Payment
                </span>
              </th>

              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  Status
                </span>
              </th>

              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  Remarks
                </span>
              </th>

              <th scope="col" class="py-3 ps-6 text-start">
                <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                  Actions
                </span>
              </th>
            </tr>
          </thead>

          <!-- Body -->
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @php
              $count = 1;
            @endphp
            @foreach ($reservation as $reservationData)
              @if ($reservationData->payment->package === '12 Days 10 Nights')
                <tr>
                  <!-- No. -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-800 dark:text-gray-200">{{ $count++ }}.</span>
                    </div>
                  </td>
                  <!-- End No. -->

                  <!-- Customer -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <div class="flex items-center gap-x-3">
                        @if ($reservationData->user->profile_img)
                          <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="{{ asset('images/users/' . $reservationData->user->profile_img) }}"
                            alt="Profile Picture">
                        @else
                          <div>
                            <span
                              class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-300 dark:bg-gray-700 ring-2 ring-white dark:ring-gray-800">
                              <span class="text-xs font-medium leading-none text-gray-800 dark:text-gray-200">
                                {{ substr($reservationData->user->first_name, 0, 1) . substr($reservationData->user->last_name, 0, 1) }}
                              </span>
                            </span>
                          </div>
                        @endif
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                            {{ $reservationData->user->first_name }} {{ $reservationData->user->last_name }}
                          </span>
                          <span
                            class="block text-sm text-gray-600 dark:text-neutral-400">{{ $reservationData->user->email }}</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <!-- End Customer -->

                  <!-- Package -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">
                        {{ $reservationData->package->name }} {{ $reservationData->package->year }}
                      </span>
                      <span class="block text-sm text-gray-600 dark:text-neutral-400">
                        {{ $reservationData->payment->package }}
                      </span>
                      <div class="flex items-center mt-2 text-xs text-gray-600 dark:text-neutral-400">
                        <svg class="flex-shrink-0 size-3.5 me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users">
                          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                          <circle cx="9" cy="7" r="4" />
                          <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        {{ $reservationData->room }}
                      </div>
                      <div class="flex items-center mt-1 text-xs text-gray-600 dark:text-neutral-400">
                        <svg class="flex-shrink-0 size-3.5 me-2 mb-0.5" xmlns="http://www.w3.org/2000/svg"
                          width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="lucide lucide-calendar-days">
                          <path d="M8 2v4" />
                          <path d="M16 2v4" />
                          <rect width="18" height="18" x="3" y="4" rx="2" />
                          <path d="M3 10h18" />
                          <path d="M8 14h.01" />
                          <path d="M12 14h.01" />
                          <path d="M16 14h.01" />
                          <path d="M8 18h.01" />
                          <path d="M12 18h.01" />
                          <path d="M16 18h.01" />
                        </svg>
                        {{ Carbon\Carbon::parse($reservationData->from_date)->format('d M Y') }} -
                        {{ Carbon\Carbon::parse($reservationData->to_date)->format('d M Y') }}
                      </div>
                    </div>
                  </td>
                  <!-- End Package -->

                  <!-- Total Amount -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        RM {{ number_format($reservationData->payment->total_amount, 0, ',') }}
                      </span>
                    </div>
                  </td>
                  <!-- End Total Amount -->

                  <!-- Payment -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="flex flex-col py-3 text-sm text-gray-500 ps-6 dark:text-neutral-500">
                      @if ($reservationData->payment->method === 'Cash')
                        <span class="flex">
                          <svg class="size-5 me-3" width="48px" height="48px" viewBox="0 0 48 48"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>70 Basic icons by Xicons.co</title>
                            <rect x="1" y="7" width="46" height="32" rx="2" ry="2"
                              fill="#4dbe86" />
                            <path d="M24,15a7,7,0,1,0,7,7A7,7,0,0,0,24,15Zm0,10a3,3,0,1,1,3-3A3,3,0,0,1,24,25Z"
                              fill="#b7e4ce" />
                            <path d="M42,14H34a1,1,0,0,1,0-2h8A1,1,0,0,1,42,14Z" fill="#b7e4ce" />
                            <path d="M42,35H34a1,1,0,0,1,0-2h8A1,1,0,0,1,42,35Z" fill="#b7e4ce" />
                            <path d="M14,14H6a1,1,0,0,1,0-2h8A1,1,0,0,1,14,14Z" fill="#b7e4ce" />
                            <path d="M14,35H6a1,1,0,0,1,0-2h8A1,1,0,0,1,14,35Z" fill="#b7e4ce" />
                          </svg>
                          <span class="flex flex-col">
                            <span class="font-semibold text-gray-800 dark:text-neutral-200">
                              {{ $reservationData->payment->method }}
                            </span>
                            <span class="text-sm text-gray-600 dark:text-neutral-400">
                              {{ $reservationData->payment->status }}
                            </span>
                            @if ($reservationData->payment->date_paid)
                              <span class="text-sm text-gray-600 dark:text-neutral-400">
                                {{ Carbon\Carbon::parse($reservationData->payment->date_paid)->format('d M Y') }}
                              </span>
                            @endif
                          </span>
                        </span>
                      @elseif ($reservationData->payment->method === 'Stripe')
                        <span class="flex">
                          <svg class="size-5 me-3" width="512px" height="512px" viewBox="0 -149 512 512"
                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                            <g>
                              <path
                                d="M35.9822222,83.4844444 C35.9822222,77.9377778 40.5333333,75.8044444 48.0711111,75.8044444 C58.88,75.8044444 72.5333333,79.0755556 83.3422222,84.9066667 L83.3422222,51.4844444 C71.5377778,46.7911111 59.8755556,44.9422222 48.0711111,44.9422222 C19.2,44.9422222 0,60.0177778 0,85.1911111 C0,124.444444 54.0444444,118.186667 54.0444444,135.111111 C54.0444444,141.653333 48.3555556,143.786667 40.3911111,143.786667 C28.5866667,143.786667 13.5111111,138.951111 1.56444444,132.408889 L1.56444444,166.257778 C14.7911111,171.946667 28.16,174.364444 40.3911111,174.364444 C69.9733333,174.364444 90.3111111,159.715556 90.3111111,134.257778 C90.1688889,91.8755556 35.9822222,99.4133333 35.9822222,83.4844444 Z M132.124444,16.4977778 L97.4222222,23.8933333 L97.28,137.813333 C97.28,158.862222 113.066667,174.364444 134.115556,174.364444 C145.777778,174.364444 154.311111,172.231111 159.004444,169.671111 L159.004444,140.8 C154.453333,142.648889 131.982222,149.191111 131.982222,128.142222 L131.982222,77.6533333 L159.004444,77.6533333 L159.004444,47.36 L131.982222,47.36 L132.124444,16.4977778 Z M203.235556,57.8844444 L200.96,47.36 L170.24,47.36 L170.24,171.804444 L205.795556,171.804444 L205.795556,87.4666667 C214.186667,76.5155556 228.408889,78.5066667 232.817778,80.0711111 L232.817778,47.36 C228.266667,45.6533333 211.626667,42.5244444 203.235556,57.8844444 Z M241.493333,47.36 L277.191111,47.36 L277.191111,171.804444 L241.493333,171.804444 L241.493333,47.36 Z M241.493333,36.5511111 L277.191111,28.8711111 L277.191111,0 L241.493333,7.53777778 L241.493333,36.5511111 Z M351.431111,44.9422222 C337.493333,44.9422222 328.533333,51.4844444 323.555556,56.0355556 L321.706667,47.2177778 L290.417778,47.2177778 L290.417778,213.048889 L325.973333,205.511111 L326.115556,165.262222 C331.235556,168.96 338.773333,174.222222 351.288889,174.222222 C376.746667,174.222222 399.928889,153.742222 399.928889,108.657778 C399.786667,67.4133333 376.32,44.9422222 351.431111,44.9422222 Z M342.897778,142.933333 C334.506667,142.933333 329.528889,139.946667 326.115556,136.248889 L325.973333,83.4844444 C329.671111,79.36 334.791111,76.5155556 342.897778,76.5155556 C355.84,76.5155556 364.8,91.0222222 364.8,109.653333 C364.8,128.711111 355.982222,142.933333 342.897778,142.933333 Z M512,110.08 C512,73.6711111 494.364444,44.9422222 460.657778,44.9422222 C426.808889,44.9422222 406.328889,73.6711111 406.328889,109.795556 C406.328889,152.604444 430.506667,174.222222 465.208889,174.222222 C482.133333,174.222222 494.933333,170.382222 504.604444,164.977778 L504.604444,136.533333 C494.933333,141.368889 483.84,144.355556 469.76,144.355556 C455.964444,144.355556 443.733333,139.52 442.168889,122.737778 L511.715556,122.737778 C511.715556,120.888889 512,113.493333 512,110.08 Z M441.742222,96.5688889 C441.742222,80.4977778 451.555556,73.8133333 460.515556,73.8133333 C469.191111,73.8133333 478.435556,80.4977778 478.435556,96.5688889 L441.742222,96.5688889 L441.742222,96.5688889 Z"
                                fill="#6772E5"></path>
                            </g>
                          </svg>
                          <span class="flex flex-col">
                            <span class="font-semibold text-gray-800 dark:text-neutral-200">
                              {{ $reservationData->payment->method }}
                            </span>
                            <span class="text-sm text-gray-600 dark:text-neutral-400">
                              {{ $reservationData->payment->status }}
                            </span>
                            <span class="text-sm text-gray-600 dark:text-neutral-400">
                              {{ Carbon\Carbon::parse($reservationData->payment->date_paid)->format('d M Y') }}
                            </span>
                          </span>
                        </span>
                      @else
                        <span class="text-sm text-gray-600 dark:text-neutral-400">-</span>
                      @endif
                    </div>
                  </td>
                  <!-- End Payment -->

                  <!-- Status -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      @if ($reservationData->status === 'Under Review')
                        <span
                          class="inline-flex w-max items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-blue-100 text-blue-800 border border-blue-200">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 16v-4" />
                            <path d="M12 8h.01" />
                          </svg>
                          {{ $reservationData->status }}
                        </span>
                      @elseif ($reservationData->status === 'Update Details')
                        <span
                          class="inline-flex w-max items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 16v-4" />
                            <path d="M12 8h.01" />
                          </svg>
                          {{ $reservationData->status }}
                        </span>
                      @elseif ($reservationData->status === 'Make Payment')
                        <span
                          class="inline-flex w-max items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-info">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 16v-4" />
                            <path d="M12 8h.01" />
                          </svg>
                          {{ $reservationData->status }}
                        </span>
                      @elseif ($reservationData->status === 'Approved')
                        <span
                          class="inline-flex w-max items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-teal-100 text-teal-800 border border-teal-200">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check">
                            <circle cx="12" cy="12" r="10" />
                            <path d="m9 12 2 2 4-4" />
                          </svg>
                          {{ $reservationData->status }}
                        </span>
                      @elseif ($reservationData->status === 'Canceled')
                        <span
                          class="inline-flex w-max items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-red-100 text-red-800 border border-red-200">
                          <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x">
                            <circle cx="12" cy="12" r="10" />
                            <path d="m15 9-6 6" />
                            <path d="m9 9 6 6" />
                          </svg>
                          {{ $reservationData->status }}
                        </span>
                      @endif
                    </div>
                  </td>
                  <!-- End Status -->

                  <!-- Remarks -->
                  <td class="h-px align-top w-44 min-w-44">
                    <div class="py-3 ps-6">
                      <p class="text-sm text-gray-600 dark:text-neutral-400">
                        {{ $reservationData->remarks }}
                      </p>
                    </div>
                  </td>
                  <!-- End Remarks -->

                  <!-- Actions -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
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
                            <button
                              class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                              data-hs-overlay="#hs-update-status-{{ $reservationData->id }}-modal">
                              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-left-right">
                                <path d="M8 3 4 7l4 4" />
                                <path d="M4 7h16" />
                                <path d="m16 21 4-4-4-4" />
                                <path d="M20 17H4" />
                              </svg>
                              Update Status
                            </button>
                            <button
                              class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                              data-hs-overlay="#hs-write-remarks-{{ $reservationData->id }}-modal">
                              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-message-circle-more">
                                <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                                <path d="M8 12h.01" />
                                <path d="M12 12h.01" />
                                <path d="M16 12h.01" />
                              </svg>
                              Write Remarks
                            </button>
                            @if ($reservationData->payment->method === 'Cash')
                              <form method="post" action="{{ route('umrah.paid-cash', $reservationData->id) }}">
                                @csrf
                                @method('patch')

                                <button type="submit"
                                  class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-banknote">
                                    <rect width="20" height="12" x="2" y="6" rx="2" />
                                    <circle cx="12" cy="12" r="2" />
                                    <path d="M6 12h.01M18 12h.01" />
                                  </svg>
                                  Paid by Cash
                                </button>
                              </form>
                            @endif
                            @if ($reservationData->identity_card && $reservationData->passport)
                              <a class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('umrah.download-documents', $reservationData->id) }}">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-down">
                                  <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                  <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                  <path d="M12 18v-6" />
                                  <path d="m9 15 3 3 3-3" />
                                </svg>
                                Download Documents
                              </a>
                            @endif
                          </div>
                          <div class="py-2 first:pt-0 last:pb-0">
                            <form method="post"
                              action="{{ route('umrah.delete-reservation', $reservationData->id) }}">
                              @csrf
                              @method('delete')

                              <button type="submit"
                                class="flex items-center w-full px-3 py-2 text-sm text-red-600 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-off">
                                  <path d="M4.2 4.2A2 2 0 0 0 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 1.82-1.18" />
                                  <path d="M21 15.5V6a2 2 0 0 0-2-2H9.5" />
                                  <path d="M16 2v4" />
                                  <path d="M3 10h7" />
                                  <path d="M21 10h-5.5" />
                                  <path d="m2 2 20 20" />
                                </svg>
                                Delete Reservation
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <!-- End Actions -->
                </tr>
                @include('umrah.partials.modal.hs-update-status-modal')
                @include('umrah.partials.modal.hs-write-remarks-modal')
              @endif
            @endforeach
          </tbody>
          <!-- End Body -->
        </table>
        <!-- End Table -->

        <!-- Footer -->
        <div
          class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-gray-700">
          <!-- Results -->
          <div>
            <p class="text-sm text-gray-600 dark:text-gray-400">
              <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $count - 1 }}</span>
              results
            </p>
          </div>
          <!-- End Results -->

          <!-- Pagination -->
          <div>
            <div class="inline-flex gap-x-2">
              <button type="button"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m15 18-6-6 6-6" />
                </svg>
                Prev
              </button>

              <button type="button"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                Next
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
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
