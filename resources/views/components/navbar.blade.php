{{-- <header class="">
    <nav class="bg-black border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center">
            <div class="flex justify-start items-center">
              <a href="/dashboard" class="flex mr-4">
                <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />
                <span class="self-center  text-sm font-medium  text-white">Dashboard</span>
              </a>
              <a href="/tersedia" class="flex mr-4">
                <span class="self-center text-sm font-medium 	 text-white">Daftar Semua Buku</span>
              </a>
              <a href="/borrow" class="flex mr-4">
                <span class="self-center text-sm font-medium 	 text-white">Daftar Buku Dipinjam</span>
              </a>
              <a href="/formBuku" class="flex mr-4">
                <span class="self-center text-sm font-medium 	 text-white">Tambah Buku</span>
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

   --}}
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library App</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <!-- Logo -->
            <div class="nav-logo">
                <i class="fas fa-book-reader"></i>
                <span>LibraryApp</span>
            </div>

            <!-- Desktop Menu -->
            <ul class="nav-menu">
                <li><a href="/dashboard" class="nav-link"><i class="fas fa-chart-line"></i> Dashboard</a></li>
                {{-- <li><a href="/tersedia" class="nav-link"><i class="fas fa-book"></i> Semua Buku</a></li>
                <li><a href="#" class="nav-link"><i class="fas fa-book"></i> Buku Tersedia</a></li>
                <li><a href="/borrow" class="nav-link"><i class="fas fa-book"></i> Buku Dipinjam</a></li> --}}
                {{-- <li><a href="/formBuku" class="nav-button"><i class="fas fa-plus-circle"></i> Tambah Buku</a></li> --}}
            </ul>

            <!-- User Profile & Mobile Toggle -->
            <div class="nav-right">
                <div class="user-profile">
                    <img src="https://github.com/shadcn.png" alt="User">
                    <div class="profile-dropdown">
                        <a href="#"><i class="fas fa-user"></i> Profile</a>
                        <a href="#"><i class="fas fa-cog"></i> Settings</a>
                        <a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
                <button class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="#"><i class="fas fa-chart-line"></i> Dashboard</a>
            <a href="#"><i class="fas fa-books"></i> Semua Buku</a>
            <a href="#"><i class="fas fa-book"></i> Buku Dipinjam</a>
            <a href="#" class="mobile-button"><i class="fas fa-plus-circle"></i> Tambah Buku</a>
        </div>
    </nav>


    <script>
        // Mobile menu toggle
        const mobileToggle = document.querySelector('.mobile-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        const userProfile = document.querySelector('.user-profile');

        mobileToggle.addEventListener('click', () => {
            mobileToggle.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });

        // User profile dropdown
        userProfile.addEventListener('click', () => {
            userProfile.classList.toggle('active');
        });
    </script>
</body>
</html>