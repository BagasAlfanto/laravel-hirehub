<x-dashboard.profile>
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <!-- Kard Utama cenah -->
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">

            <!-- Bagian Profil Akunn -->
            <div class="p-6 border-b border-gray-200 md:flex md:items-center md:justify-between">
                <div class="flex items-center">
                    <!-- Placeholder untuk foto profil -->
                    <div class="flex-shrink-0 h-16 w-16 bg-gray-200 rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-2xl text-gray-500"></i>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-xl font-bold text-gray-900">{{ Auth::user()->name }}</h2>
                        <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        <i class="fas fa-pencil-alt mr-2"></i>
                        Edit Profile
                    </a>
                </div>
            </div>

            <!-- Bagian Perusahaan -->
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Perusahaan Anda</h3>
                    <a href="{{ route('company.addcompany') }}"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Perusahaan
                    </a>
                </div>

                <!-- Daftar Perusahaan atau Pesan Kosong kalo gada gas -->
                <div class="mt-4 space-y-4">
                    @if (!empty($company) && $company->count())
                        @foreach ($company as $companyItem)
                            <div
                                class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <div class="flex items-center">
                                    <!-- Placeholder untuk logo perusahaan -->
                                    <div
                                        class="flex-shrink-0 h-10 w-10 bg-white rounded-md flex items-center justify-center border">
                                        <i class="fas fa-building text-gray-400"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-bold text-gray-800">{{ $companyItem->company_name }}</div>
                                        <div class="text-gray-500 text-sm">{{ $companyItem->company_field }}</div>
                                    </div>
                                </div>
                                <a href="#"
                                    class="text-blue-600 hover:text-blue-800 font-medium text-sm transition">Lihat
                                    Detail →</a>
                            </div>
                        @endforeach
                    @else
                        <!-- Tampilan jika tidak ada perusahaan -->
                        <div
                            class="text-center py-12 px-6 bg-gray-50 rounded-lg border-2 border-dashed border-gray-200">
                            <i class="fas fa-building text-4xl text-gray-400 mb-3"></i>
                            <h4 class="text-lg font-medium text-gray-700">Anda Belum Memiliki Perusahaan</h4>
                            <p class="text-gray-500 mt-1">Tambahkan perusahaan Anda untuk mulai membuat lowongan.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-dashboard.profile>
