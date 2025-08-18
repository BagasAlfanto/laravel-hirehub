@props(['active' => ''])
<nav class="bg-white shadow-md">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

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

            <div class="flex items-center">
                <div class="md:block">
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3"><i
                                class="fas fa-search text-gray-400"></i></span>
                        <input type="text" placeholder="Search..."
                            class="w-full pl-10 pr-4 py-2 border rounded-full text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="relative">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="ml-4 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                            Logout
                        </button>
                    </form>
                </div>
            </div>

            <div class="mr-2 flex md:hidden">
                <button id="mobile-menu-button"
                    class="bg-white p-2 inline-flex items-center justify-center rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <span class="sr-only">Open main menu</span>
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/"
                class="{{ $active == 'dashboard' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="/buka-lowongan"
                class="{{ $active == 'buka-lowongan' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} block px-3 py-2 rounded-md text-base font-medium">Cari
                Info Lowongan</a>
            <a href="/profile"
                class="{{ $active == 'profil' ? 'bg-blue-600 text-white' : 'text-gray-500 hover:bg-gray-200 hover:text-gray-900' }} block px-3 py-2 rounded-md text-base font-medium">Profil
                Akun</a>
        </div>
    </div>
</nav>


<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
</script>
