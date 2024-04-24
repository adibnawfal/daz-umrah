<x-app-layout>
  <x-slot:title>
    Manage Package
  </x-slot>

  <div class="inline-flex items-start justify-between">
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
            stroke-linejoin="round" class="lucide lucide-clipboard-list">
            <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
            <path d="M12 11h4" />
            <path d="M12 16h4" />
            <path d="M8 11h.01" />
            <path d="M8 16h.01" />
          </svg>
          Manage Package
        </p>
      </li>
    </ol>
    <!-- End Breadcrumb -->

    <!-- Button -->
    <div class="inline-flex gap-x-2">
      <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        href="#">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" class="lucide lucide-text">
          <path d="M17 6.1H3" />
          <path d="M21 12.1H3" />
          <path d="M15.1 18H3" />
        </svg>
        View all
      </a>

      <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-gray-800 border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-900 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        href="{{ route('package.add') }}">
        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round">
          <path d="M5 12h14" />
          <path d="M12 5v14" />
        </svg>
        Add Package
      </a>
    </div>
    <!-- End Button -->
  </div>

  <!-- Grid -->
  <div class="grid gap-6 min-[1870px]:grid-cols-5 min-[1590px]:grid-cols-4 xl:grid-cols-3 sm:grid-cols-2">
    {{-- <!-- Card -->
    <a class="group flex flex-col h-full bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="#">
      <div class="aspect-w-16 aspect-h-11">
        <img class="object-cover w-full rounded-xl h-[170px]"
          src="https://images.unsplash.com/photo-1571909552531-1601eaec8f79?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
          Pakej Rayyan 2024
        </h3>

        <p class="text-gray-600 dark:text-gray-400">
          12 Hari 10 Malam
        </p>

        <ul class="mt-5 space-y-1 text-sm">
          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Makkah Dorrar Al Eiman
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Madinah Badr Al Maqam
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              50M / Setaraf
            </span>
          </li>
        </ul>
      </div>
      <div class="flex items-center justify-between mt-auto gap-x-3">
        <p class="text-sm text-gray-800 dark:text-gray-200">Harga bermula</p>
        <p class="font-semibold text-gray-800 dark:text-gray-400">
          RM<span class="text-2xl">9,990</span>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="#">
      <div class="aspect-w-16 aspect-h-11">
        <img class="object-cover w-full rounded-xl h-[170px]"
          src="https://images.unsplash.com/photo-1592326871020-04f58c1a52f3?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
          Pakej Rayyan 2024
        </h3>

        <p class="text-gray-600 dark:text-gray-400">
          12 Hari 10 Malam
        </p>

        <ul class="mt-5 space-y-1 text-sm">
          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Makkah Dorrar Al Eiman
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Madinah Badr Al Maqam
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              50M / Setaraf
            </span>
          </li>
        </ul>
      </div>
      <div class="flex items-center justify-between mt-auto gap-x-3">
        <p class="text-sm text-gray-800 dark:text-gray-200">Harga bermula</p>
        <p class="font-semibold text-gray-800 dark:text-gray-400">
          RM<span class="text-2xl">9,990</span>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="#">
      <div class="aspect-w-16 aspect-h-11">
        <img class="object-cover w-full rounded-xl h-[170px]"
          src="https://images.unsplash.com/photo-1677835214504-9648944c3e50?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
          Pakej Rayyan 2024
        </h3>

        <p class="text-gray-600 dark:text-gray-400">
          12 Hari 10 Malam
        </p>

        <ul class="mt-5 space-y-1 text-sm">
          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Makkah Dorrar Al Eiman
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Madinah Badr Al Maqam
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              50M / Setaraf
            </span>
          </li>
        </ul>
      </div>
      <div class="flex items-center justify-between mt-auto gap-x-3">
        <p class="text-sm text-gray-800 dark:text-gray-200">Harga bermula</p>
        <p class="font-semibold text-gray-800 dark:text-gray-400">
          RM<span class="text-2xl">9,990</span>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="#">
      <div class="aspect-w-16 aspect-h-11">
        <img class="object-cover w-full rounded-xl h-[170px]"
          src="https://images.unsplash.com/photo-1513072064285-240f87fa81e8?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
          Pakej Rayyan 2024
        </h3>

        <p class="text-gray-600 dark:text-gray-400">
          12 Hari 10 Malam
        </p>

        <ul class="mt-5 space-y-1 text-sm">
          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Makkah Dorrar Al Eiman
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Madinah Badr Al Maqam
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              50M / Setaraf
            </span>
          </li>
        </ul>
      </div>
      <div class="flex items-center justify-between mt-auto gap-x-3">
        <p class="text-sm text-gray-800 dark:text-gray-200">Harga bermula</p>
        <p class="font-semibold text-gray-800 dark:text-gray-400">
          RM<span class="text-2xl">9,990</span>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="#">
      <div class="aspect-w-16 aspect-h-11">
        <img class="object-cover w-full rounded-xl h-[170px]"
          src="https://images.unsplash.com/photo-1554976757-606d486f5d92?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
          Pakej Rayyan 2024
        </h3>

        <p class="text-gray-600 dark:text-gray-400">
          12 Hari 10 Malam
        </p>

        <ul class="mt-5 space-y-1 text-sm">
          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Makkah Dorrar Al Eiman
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Madinah Badr Al Maqam
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              50M / Setaraf
            </span>
          </li>
        </ul>
      </div>
      <div class="flex items-center justify-between mt-auto gap-x-3">
        <p class="text-sm text-gray-800 dark:text-gray-200">Harga bermula</p>
        <p class="font-semibold text-gray-800 dark:text-gray-400">
          RM<span class="text-2xl">9,990</span>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="#">
      <div class="aspect-w-16 aspect-h-11">
        <img class="object-cover w-full rounded-xl h-[170px]"
          src="https://images.unsplash.com/photo-1584186028062-637e3e77318d?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
          Pakej Rayyan 2024
        </h3>

        <p class="text-gray-600 dark:text-gray-400">
          12 Hari 10 Malam
        </p>

        <ul class="mt-5 space-y-1 text-sm">
          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Makkah Dorrar Al Eiman
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Madinah Badr Al Maqam
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              50M / Setaraf
            </span>
          </li>
        </ul>
      </div>
      <div class="flex items-center justify-between mt-auto gap-x-3">
        <p class="text-sm text-gray-800 dark:text-gray-200">Harga bermula</p>
        <p class="font-semibold text-gray-800 dark:text-gray-400">
          RM<span class="text-2xl">9,990</span>
        </p>
      </div>
    </a>
    <!-- End Card -->

    <!-- Card -->
    <a class="group flex flex-col h-full bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
      href="#">
      <div class="aspect-w-16 aspect-h-11">
        <img class="object-cover w-full rounded-xl h-[170px]"
          src="https://images.unsplash.com/photo-1591604159758-680f22f77d24?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="Image Description">
      </div>
      <div class="my-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
          Pakej Rayyan 2024
        </h3>

        <p class="text-gray-600 dark:text-gray-400">
          12 Hari 10 Malam
        </p>

        <ul class="mt-5 space-y-1 text-sm">
          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Makkah Dorrar Al Eiman
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              Hotel Madinah Badr Al Maqam
            </span>
          </li>

          <li class="flex space-x-3">
            <svg class="flex-shrink-0 size-4 mt-0.5 text-gray-800 dark:text-gray-400"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-dot">
              <circle cx="12.1" cy="12.1" r="1" />
            </svg>
            <span class="text-gray-800 dark:text-gray-400">
              50M / Setaraf
            </span>
          </li>
        </ul>
      </div>
      <div class="flex items-center justify-between mt-auto gap-x-3">
        <p class="text-sm text-gray-800 dark:text-gray-200">Harga bermula</p>
        <p class="font-semibold text-gray-800 dark:text-gray-400">
          RM<span class="text-2xl">9,990</span>
        </p>
      </div>
    </a>
    <!-- End Card --> --}}

    <!-- Card -->
    @foreach ($packages as $packageData)
      <a class="group flex p-5 flex-col h-max bg-white border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl dark:bg-gray-800 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4] dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
        href="{{ route('package.details', $packageData->id) }}">
        <!-- Image -->
        <div class="relative">
          @if ($packageData->cover_img)
            <img class="object-cover w-full rounded-xl h-[170px] border border-gray-200"
              src="{{ asset('images/packages/' . $packageData->cover_img) }}" alt="Cover Image">
          @else
            <div class="flex justify-center items-center w-full rounded-xl h-[170px] bg-gray-50 border border-gray-200">
              <p class="text-xs font-semibold text-gray-500 uppercase ">Cover Image</p>
            </div>
          @endif
        </div>
        <!-- End Image -->

        <!-- Details -->
        <div class="flex flex-col justify-between pt-4">

          <!-- Badge -->
          <div class="flex gap-x-2">
            @foreach (json_decode($packageData->details, true) as $key => $value)
              <p
                class="text-[0.6rem] gap-1.5 py-1.5 mb-2 px-3 rounded-lg uppercase font-semibold bg-gray-800/[0.1] text-gray-800">
                {{ Str::title(Str::replace('_', ' ', $key)) }}
              </p>
            @endforeach
          </div>
          <!-- End Badge -->

          <!-- Title -->
          <h3 class="mb-4 text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
            Package {{ $packageData->name }} {{ $packageData->year }}
          </h3>
          <!-- End Title -->

          <!-- List -->
          <ul class="mb-4 space-y-1 text-sm">
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Hotel {{ $packageData->hotel_makkah->category }} {{ $packageData->hotel_makkah->name }}
              </span>
            </li>
            <li class="flex space-x-2">
              <svg class="flex-shrink-0 mt-0.5 size-4 text-[#c31e39]" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12" />
              </svg>
              <span class="text-gray-800 dark:text-gray-400">
                Hotel {{ $packageData->hotel_madinah->category }} {{ $packageData->hotel_madinah->name }}
              </span>
            </li>
          </ul>
          <!-- End List -->

          <!-- Price -->
          <div class="flex items-end justify-between">
            <div class="flex flex-col">
              <p class="text-xs text-gray-800 dark:text-gray-200">Price from</p>
              <p class="text-xl font-semibold text-gray-800 dark:text-gray-400">
                RM
                @php
                  $details = json_decode($packageData->details, true);
                @endphp
                @if (Arr::exists($details, '12_days_10_nights'))
                  {{ Arr::get($details, '12_days_10_nights.price.room_4_5') }}
                @else
                  {{ Arr::get($details, '22_days_20_nights.price.room_4_5') }}
                @endif
              </p>
            </div>
            <p class="text-sm decoration-2 group-hover:text-[#c31e39] group-hover:underline">See more</p>
          </div>
          <!-- End Price -->
        </div>
        <!-- End Details -->
      </a>
    @endforeach
    <!-- End Card -->
  </div>
  <!-- End Grid -->
</x-app-layout>
