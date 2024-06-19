<x-app-layout>
  <x-slot:title>
    Feedback
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
          stroke-linejoin="round" class="lucide lucide-message-circle-more">
          <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
          <path d="M8 12h.01" />
          <path d="M12 12h.01" />
          <path d="M16 12h.01" />
        </svg>
        Feedback
      </p>
    </li>
  </ol>
  <!-- End Breadcrumb -->

  <!-- Content -->
  <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div
          class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-gray-800 dark:border-gray-700">
          <!-- Header -->
          <div
            class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-gray-700">
            <!-- Title -->
            <div>
              <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Feedback</h2>
              <p class="text-sm text-gray-600 dark:text-gray-400">Provide and manage feedback to help us improve our
                services and ensure a better experience for our customers.</p>
            </div>
            <!-- End Title -->

            <!-- Button -->
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

                <!-- Give Feedback -->
                <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                  href="{{ route('feedback.get-give-feedback') }}">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="lucide lucide-message-circle-plus">
                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z" />
                    <path d="M8 12h8" />
                    <path d="M12 8v8" />
                  </svg>
                  Give Feedback
                </a>
                <!-- End Give Feedback -->
              </div>
            </div>
            <!-- End Button -->
          </div>
          <!-- End Header -->

          <!-- Table -->
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <!-- Header -->
            <thead class="bg-gray-50 dark:bg-gray-900">
              <tr>
                <th scope="col" class="py-3 ps-6 text-start">
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                    No.
                  </span>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                      Customer
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                      Feedback
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                      Rated
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                      Date
                    </span>
                  </div>
                </th>

                <th scope="col" class="py-3 ps-6 text-start">
                  <span class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-gray-200">
                    Actions
                  </span>
                </th>
              </tr>
            </thead>
            <!-- End Header -->

            <!-- Body -->
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
              @php
                $count = 1;
              @endphp
              @foreach ($feedback as $feedbackData)
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
                        @if ($feedbackData->user->profile_img)
                          <img class="inline-block size-[38px] rounded-full ring-2 ring-white dark:ring-gray-800"
                            src="{{ asset('images/users/' . $feedbackData->user->profile_img) }}" alt="Profile Picture">
                        @else
                          <div>
                            <span
                              class="inline-flex items-center justify-center size-[38px] rounded-full bg-gray-300 dark:bg-gray-700 ring-2 ring-white dark:ring-gray-800">
                              <span class="text-xs font-medium leading-none text-gray-800 dark:text-gray-200">
                                {{ substr($feedbackData->user->first_name, 0, 1) . substr($feedbackData->user->last_name, 0, 1) }}
                              </span>
                            </span>
                          </div>
                        @endif
                        <div class="grow">
                          <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                            {{ $feedbackData->user->first_name }} {{ $feedbackData->user->last_name }}
                          </span>
                          <span
                            class="block text-sm text-gray-600 dark:text-neutral-400">{{ $feedbackData->user->email }}</span>
                        </div>
                      </div>
                    </div>
                  </td>
                  <!-- End Customer -->

                  <!-- Feedback -->
                  <td class="h-px align-top w-72 min-w-72">
                    <div class="py-3 ps-6">
                      <span class="block text-sm font-semibold text-gray-800 dark:text-gray-200">
                        {{ $feedbackData->title }}
                      </span>
                      <span
                        class="block text-sm text-gray-600 dark:text-neutral-400">{{ $feedbackData->details }}</span>
                      @if ($feedbackData->reply)
                        <div class="inline-flex p-1 mt-1 text-xs text-gray-500 -ms-1 gap-x-2 dark:text-neutral-400">
                          <svg class="flex-shrink-0 rounded-full size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-corner-down-right">
                            <polyline points="15 10 20 15 15 20" />
                            <path d="M4 4v7a4 4 0 0 0 4 4h12" />
                          </svg>
                          {{ $feedbackData->reply }}
                        </div>
                      @endif
                    </div>
                  </td>
                  <!-- End Feedback -->

                  <!-- Rated -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <div class="flex gap-x-1">
                        @for ($i = 1; $i <= 5; $i++)
                          @if ($feedbackData->rating >= $i)
                            <svg class="flex-shrink-0 text-yellow-400 size-3 dark:text-yellow-500"
                              xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              viewBox="0 0 16 16">
                              <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                          @else
                            <svg class="flex-shrink-0 text-gray-300 size-3 dark:text-neutral-600"
                              xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              viewBox="0 0 16 16">
                              <path
                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                          @endif
                        @endfor
                      </div>
                    </div>
                  </td>
                  <!-- End Rated -->

                  <!-- Date -->
                  <td class="align-top size-px whitespace-nowrap">
                    <div class="py-3 ps-6">
                      <span
                        class="text-sm text-gray-600 dark:text-gray-400">{{ $feedbackData->created_at->format('d F Y') }}</span>
                    </div>
                  </td>
                  <!-- End Date -->

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
                            @if (Auth::user()->id === $feedbackData->user_id)
                              <a class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                href="{{ route('feedback.get-update-feedback', $feedbackData->id) }}">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil-line">
                                  <path d="M12 20h9" />
                                  <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
                                  <path d="m15 5 3 3" />
                                </svg>
                                Update Feedback
                              </a>
                            @endif
                            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'staff')
                              <button
                                class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                data-hs-overlay="#hs-reply-feedback-{{ $feedbackData->id }}-modal">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-reply">
                                  <polyline points="9 17 4 12 9 7" />
                                  <path d="M20 18v-2a4 4 0 0 0-4-4H4" />
                                </svg>
                                Reply Feedback
                              </button>
                              <form method="post"
                                action="{{ route('feedback.add-to-favourites', $feedbackData->id) }}">
                                @csrf
                                @method('patch')

                                <button type="submit"
                                  class="flex items-center w-full px-3 py-2 text-sm text-gray-800 rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                                  @if ($feedbackData->favourite)
                                    <svg class="size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg"
                                      width="24" height="24" viewBox="0 0 24 24" fill="#c31e39"
                                      stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round" class="lucide lucide-heart">
                                      <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                    </svg>
                                  @else
                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                      height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                      class="lucide lucide-heart">
                                      <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                                    </svg>
                                  @endif
                                  Add to favorites
                                </button>
                              </form>
                            @endif
                          </div>
                          <div class="py-2 first:pt-0 last:pb-0">
                            <button
                              class="flex items-center w-full px-3 py-2 text-sm text-[#c31e39] rounded-lg gap-x-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-300"
                              data-hs-overlay="#hs-delete-feedback-{{ $feedbackData->id }}-modal">
                              <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-message-circle-off">
                                <path d="M20.5 14.9A9 9 0 0 0 9.1 3.5" />
                                <path d="m2 2 20 20" />
                                <path d="M5.6 5.6C3 8.3 2.2 12.5 4 16l-2 6 6-2c3.4 1.8 7.6 1.1 10.3-1.7" />
                              </svg>
                              Delete Feedback
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <!-- End Actions -->
                </tr>
                @include('feedback.partials.modal.hs-delete-feedback-modal')
                @include('feedback.partials.modal.hs-reply-feedback-modal')
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
                <span class="font-semibold text-gray-800 dark:text-gray-200">{{ $feedback->count() }}</span> results
              </p>
            </div>
            <!-- End Results -->

            <!-- Pagination -->
            <div>
              <div class="inline-flex gap-x-2">
                <button type="button"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                  <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6" />
                  </svg>
                  Prev
                </button>

                <button type="button"
                  class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
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
  <!-- End Content -->

  @if (session('status') === 'feedback-submitted')
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
                Feedback Added.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The feedback has been successfully added to the system.
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
  @elseif (session('status') === 'feedback-updated')
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
                Feedback Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The feedback has been successfully updated to the system.
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
  @elseif (session('status') === 'feedback-replied')
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
                Feedback Replied.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The feedback has been replied.
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
  @elseif (session('status') === 'feedback-added-to-favourites')
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
                Feedback Updated.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The feedback has been successfully updated to the system.
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
  @elseif (session('status') === 'feedback-deleted')
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
                Feedback Deleted.
              </h3>
              <p class="text-sm text-gray-700 dark:text-neutral-400">
                The feedback has been successfully deleted from the system.
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
