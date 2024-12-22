<header class="">
    <nav class="bg-black border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
              <a href="/dashboard" class="flex mr-4">
                <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />
                <span class="self-center  text-sm font-medium uppercase text-white">Dashboard</span>
              </a>
              <a href="/tersedia" class="flex mr-4">
                <span class="self-center text-sm font-medium uppercase	 text-white">List Semua Buku</span>
              </a>
              <a href="/borrow" class="flex mr-4">
                <span class="self-center text-sm font-medium uppercase	 text-white">List Buku Dipinjam</span>
              </a>
              <a href="/formBuku" class="flex mr-4">
                <span class="self-center text-sm font-medium uppercase	 text-white">Tambah Buku</span>
              </a>

                
              </div>
            <div class="flex items-center lg:order-2">
               
                <button type="button" class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown">
                    <div class="py-3 px-4">
                        <span class="block text-sm font-semibold text-gray-900 dark:text-white">{{ $slot }}</span>
                        <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ $slot }}</span>
                    </div>
                    <ul class="py-1 text-gray-500 dark:text-gray-400" aria-labelledby="dropdown">
                        <li>
                          <form method="post" action="/admin/logout">
                            @csrf
                            <button class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</button>
                          </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
  </header>