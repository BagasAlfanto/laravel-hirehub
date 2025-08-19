@props(['active' => ''])
<nav class="bg-white shadow-md">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Left: Logo + Menu -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-xl font-bold text-blue-600">HireHub</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <form action="{{ route('dashboard.index') }}" method="GET" class="inline">
                            <button type="submit"
                                class="{{ $active == 'dashboard' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium">
                                Dashboard
                            </button>
                        </form>
                        <form action="{{ route('lowongan.index') }}" method="GET" class="inline">
                            <button type="submit"
                                class="{{ $active == 'lowongan' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium">
                                Buka Lowongan
                            </button>
                        </form>
                        <form action="{{ route('profile.index') }}" method="GET" class="inline">
                            <button type="submit"
                                class="{{ $active == 'profile' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} px-3 py-2 rounded-md text-sm font-medium">
                                Profil Akun
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right: Search + Profile/Logout -->
            <div class="flex items-center space-x-4">
                <!-- Search -->
                <div class="hidden md:block">
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="bg-gray-100 text-gray-700 rounded-md pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-64">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Profile dropdown -->
                <div class="ml-4 relative hidden md:block">
                    <button id="user-menu-button" type="button"
                        class="bg-gray-100 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                        aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="User profile">
                    </button>
                    <!-- Dropdown -->
                    <div id="user-menu"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white hidden ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('profile.index') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                        </form>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button"
                        class="p-2 inline-flex items-center justify-center rounded-md text-gray-400 hover:text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" class="md:hidden hidden px-2 pt-2 pb-3 space-y-1">
        <a href="{{ route('dashboard.index') }}"
            class="{{ $active == 'dashboard' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
        <a href="{{ route('lowongan.index') }}"
            class="{{ $active == 'lowongan' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} block px-3 py-2 rounded-md text-base font-medium">Cari
            Info Lowongan</a>
        <a href="{{ route('profile.index') }}"
            class="{{ $active == 'profile' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} block px-3 py-2 rounded-md text-base font-medium">Profil
            Akun</a>

        <!-- Mobile search -->
        <div class="mt-3 relative">
            <input type="text" placeholder="Search..."
                class="bg-gray-100 text-gray-700 rounded-md pl-10 pr-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>

        <!-- Mobile logout -->
        <form method="POST" action="{{ route('logout') }}" class="mt-3">
            @csrf
            <button type="submit"
                class="w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                Logout
            </button>
        </form>
    </div>

</nav>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        mobileMenu.classList.toggle('hidden');
    });

    // Profile dropdown toggle
    document.getElementById('user-menu-button')?.addEventListener('click', function() {
        const userMenu = document.getElementById('user-menu');
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', !isExpanded);
        userMenu.classList.toggle('hidden');
    });
</script>
