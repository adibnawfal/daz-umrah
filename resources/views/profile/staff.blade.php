<x-app-layout>
  <x-slot:title>
    Staff
  </x-slot>

  <!-- Breadcrumb -->
  <ol class="flex items-center whitespace-nowrap" aria-label="Breadcrumb">
    <li class="inline-flex items-center">
      <p class="flex items-center text-sm text-gray-500" href="#">
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
      <p class="flex items-center text-sm font-semibold text-gray-800 dark:text-white" href="#">
        <svg class="flex-shrink-0 me-3 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-users">
          <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
          <circle cx="9" cy="7" r="4" />
          <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
        </svg>
        Manage Staff
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
                All Staff
              </h2>
              <p class="text-sm text-gray-600 dark:text-neutral-400">
                View and manage all staff members' information.
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
                  href="{{ route('profile.get-add-staff') }}">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-user-plus">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                    <line x1="19" x2="19" y1="8" y2="14" />
                    <line x1="22" x2="16" y1="11" y2="11" />
                  </svg>
                  Add Staff
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

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                      Actions
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
              @foreach ($staff as $staffData)
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
                      @if ($staffData->profile_img)
                        <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-gray-800"
                          src="{{ asset('images/users/' . $staffData->profile_img) }}" alt="Profile Picture">
                      @else
                        <div>
                          <span
                            class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-300 dark:bg-gray-700 ring-2 ring-white dark:ring-gray-800">
                            <span class="text-xs font-medium leading-none text-gray-800 dark:text-gray-200">
                              {{ substr($staffData->first_name, 0, 1) . substr($staffData->last_name, 0, 1) }}
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
                        {{ $staffData->first_name }}
                      </span>
                    </div>
                  </td>
                  <!-- End First Name -->

                  <!-- Last Name -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        @if ($staffData->last_name)
                          {{ $staffData->last_name }}
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
                        {{ $staffData->email }}
                      </span>
                    </div>
                  </td>
                  <!-- End Email -->

                  <!-- Role -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span
                        class="inline-flex items-center gap-1.5 py-1 px-2 rounded-lg text-xs font-medium bg-gray-100 text-gray-800 dark:bg-neutral-900 dark:text-neutral-200">
                        {{ $staffData->role }}
                      </span>
                    </div>
                  </td>
                  <!-- End Role -->

                  <!-- Phone No -->
                  <td class="size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span class="text-sm text-gray-600 dark:text-neutral-400">
                        @if ($staffData->phone_no)
                          +60{{ $staffData->phone_no }}
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
                        @if ($staffData->address1)
                          <span class="block">{{ $staffData->address1 }}</span>
                          <span>{{ $staffData->address2 }}</span>
                          <span class="block">{{ $staffData->postal_code }} {{ $staffData->city }}</span>
                          <span class="block">{{ $staffData->state }}</span>
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
                        {{ $staffData->created_at->format('d F Y') }}
                      </span>
                    </div>
                  </td>
                  <!-- End Created -->

                  <!-- Actions -->
                  <td class="size-px whitespace-nowrap">
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
                            <a class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                              href="{{ route('profile.get-update-staff', $staffData->id) }}">
                              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-cog">
                                <circle cx="18" cy="15" r="3" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M10 15H6a4 4 0 0 0-4 4v2" />
                                <path d="m21.7 16.4-.9-.3" />
                                <path d="m15.2 13.9-.9-.3" />
                                <path d="m16.6 18.7.3-.9" />
                                <path d="m19.1 12.2.3-.9" />
                                <path d="m19.6 18.7-.4-1" />
                                <path d="m16.8 12.3-.4-1" />
                                <path d="m14.3 16.6 1-.4" />
                                <path d="m20.7 13.8 1-.4" />
                              </svg>
                              Update Staff
                            </a>
                          </div>
                          <div class="py-2 first:pt-0 last:pb-0">
                            <button
                              class="flex items-center w-full px-3 py-2 text-sm text-red-600 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-red-500 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                              data-hs-overlay="#hs-delete-staff-{{ $staffData->id }}-modal">
                              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-minus">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <line x1="22" x2="16" y1="11" y2="11" />
                              </svg>
                              Delete Staff
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <!-- End Actions -->
                </tr>
                @include('profile.partials.modal.hs-delete-staff-modal')
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
                <span class="font-semibold text-gray-800 dark:text-neutral-200">{{ $staff->count() }}</span>
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

  @if (session('status') === 'staff-submitted')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Staff Added.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The staff has been successfully added to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'staff-updated')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Staff Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The staff has been successfully updated to the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @elseif (session('status') === 'staff-deleted')
    <div id="dismiss-toast"
      class="fixed bottom-0 m-8 transition duration-300 end-0 hs-removing:translate-x-5 hs-removing:opacity-0">
      <div class="space-y-5">
        <div class="p-4 border-teal-500 rounded-xl bg-teal-50 border-s-4 dark:bg-teal-800/30" role="alert">
          <div class="flex">
            <div class="flex-shrink-0">
              <span
                class="inline-flex items-center justify-center text-teal-800 bg-teal-200 border-4 border-teal-100 rounded-full size-8 dark:border-teal-900 dark:bg-teal-800 dark:text-teal-400">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" class="lucide lucide-check">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
              </span>
            </div>
            <div class="ms-3">
              <h3 class="font-semibold text-gray-800 dark:text-white">
                Staff Deleted.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The staff has been successfully deleted from the system.
              </p>
            </div>
            <div class="ms-8">
              <button type="button"
                class="inline-flex items-center justify-center flex-shrink-0 text-gray-800 rounded-lg opacity-50 size-5 hover:opacity-100 focus:outline-none focus:opacity-100 dark:text-white"
                data-hs-remove-element="#dismiss-toast">
                <span class="sr-only">Close</span>
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="M18 6 6 18"></path>
                  <path d="m6 6 12 12"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endif
</x-app-layout>
