<x-dashboard.profile>
    <div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm overflow-hidden">
            <div class="p-6 border-b border-gray-200 md:flex md:items-center md:justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0 h-16 w-16 bg-gray-200 rounded-full flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-500">
                            {{ strtoupper(collect(explode(' ', Auth::user()->username))->take(2)->map(fn($w) => Str::substr($w, 0, 1))->implode('')) }}
                        </span>
                    </div>
                    <div class="ml-4">
                        <h2 class="text-xl font-bold text-gray-900">{{ Auth::user()->username }}</h2>
                        <p class="text-sm text-gray-500">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="mt-4 md:mt-0">
                    <form action="{{ route('profile.edit', Auth::user()->uid) }}" method="get" class="inline">
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            <i class="fas fa-pencil-alt mr-2"></i>
                            Edit Profile
                        </button>
                    </form>
                </div>
            </div>

            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-800">Perusahaan Anda</h3>
                    @if (!empty($company) && $company->count() < 3)
                        <a href="{{ route('company.index') }}"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            <i class="fas fa-plus mr-2"></i>
                            Tambah Perusahaan
                        </a>
                    @elseif (!empty($company) && $company->count() >= 3)
                        <span class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-400 bg-gray-100 cursor-not-allowed">
                            <i class="fas fa-ban mr-2"></i>
                            Maksimal 3 perusahaan
                        </span>
                    @endif
                </div>

                <div class="mt-4 space-y-4">
                    @if (!empty($company) && $company->count())
                        @foreach ($company as $companyItem)
                            <div
                                class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-200">
                                <div class="flex items-center">
                                    <div
                                        class="flex-shrink-0 h-10 w-10 bg-white rounded-md flex items-center justify-center border">
                                        <i class="fas fa-building text-gray-400"></i>
                                    </div>
                                    <div class="ml-4">
                                        <div class="font-bold text-gray-800">{{ $companyItem->company_name }}</div>
                                        <div class="text-gray-500 text-sm">{{ $companyItem->company_field }}</div>
                                    </div>
                                </div>
                                <a href="{{ route('company.show', $companyItem->uid) }}"
                                    class="text-blue-600 hover:text-blue-800 font-medium text-sm transition">Lihat
                                    Detail →</a>
                            </div>
                        @endforeach
                    @else
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
