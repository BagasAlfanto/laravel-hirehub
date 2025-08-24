<x-dashboard.index>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <x-header />
        @if ($lowongans->isEmpty())
            <x-layout.empty-state>
                <i class="fas fa-briefcase text-4xl text-gray-400 mb-3"></i>
                <h4 class="text-lg font-medium text-gray-700">Tidak Ada Lowongan Tersedia</h4>
                <p class="text-gray-500 mt-1">Tambahkan lowongan baru untuk mulai menarik kandidat.</p>
                @if (!empty($companies) && $companies->count())
                    <a href="{{ route('lowongan.create') }}"
                        class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Lowongan
                    </a>
                @else
                    <a href="{{ route('company.index') }}"
                        class="mt-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        <i class="fas fa-plus mr-2"></i>
                        Tambah Perusahaan Terlebih Dahulu
                    </a>
                @endif
            </x-layout.empty-state>

        @endif
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($lowongans as $lowongan)
                <article class="flex flex-col overflow-hidden rounded-lg shadow-sm transition hover:shadow-lg bg-white">
                    <img
                        alt="Company Logo"
                        src="{{ $lowongan->companyProfile->logo_url ?? 'https://placehold.co/600x400/E2E8F0/4A5568?text=Company' }}"
                        class="h-40 w-full object-cover"
                    />

                    <div class="flex flex-col flex-1 p-4 justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-lg font-semibold text-gray-900">
                                    {{ $lowongan->job_title }}
                                </h3>
                                @if ($lowongan->job_type == 'full-time')
                                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2 py-0.5 rounded-full">Full-time</span>
                                @elseif($lowongan->job_type == 'part-time')
                                    <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2 py-0.5 rounded-full">Part-time</span>
                                @elseif($lowongan->job_type == 'contract')
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-semibold px-2 py-0.5 rounded-full">Contract</span>
                                @endif
                            </div>
                            <p class="text-sm font-medium text-gray-700 truncate">
                                {{ $companies->firstWhere('id', $lowongan->company_profile_id)->company_name ?? '-' }}
                            </p>
                            <p class="text-xs text-gray-500 flex items-center mt-1">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                {{ $lowongan->job_location }}
                            </p>
                            <p class="mt-2 text-sm text-gray-500 line-clamp-3">
                                {{ Str::limit($lowongan->job_description, 50) }}
                            </p>
                        </div>
                        <a href="{{ route('lowongan.show', $lowongan->uid) }}"
                            class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600 hover:underline">
                            Lihat Detail
                            <span aria-hidden="true" class="transition-transform group-hover:translate-x-1">→</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-dashboard.index>
