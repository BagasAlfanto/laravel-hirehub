<x-dashboard.index >
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">

        <x-header />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($lowongans as $lowongan)
                <article class="overflow-hidden rounded-lg shadow-sm transition hover:shadow-lg">
                    <img alt="" src="{{ $lowongan->companyProfile->logo_url ?? 'https://placehold.co/600x400/E2E8F0/4A5568?text=Company' }}"
                        class="h-56 w-full object-cover" />

                    <div class="bg-white p-4 sm:p-6">
                        <div class="flex justify-between items-start">
                            <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                                {{ $lowongan->job_title }}
                            </h3>

                            @if ($lowongan->job_type == 'full-time')
                                <span class="inline-block bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Full-time</span>
                            @elseif($lowongan->job_type == 'part-time')
                                <span class="inline-block bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Part-time</span>
                            @elseif($lowongan->job_type == 'contract')
                                <span class="inline-block bg-yellow-100 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">Contract</span>
                            @endif
                        </div>

                        <p class="mt-1 text-sm font-semibold text-gray-700">
                            {{ $companies->firstWhere('id', $lowongan->company_profile_id)->company_name ?? '-' }}
                        </p>
                        <p class="text-xs text-gray-500"><i class="fas fa-map-marker-alt mr-1"></i>
                            {{ $lowongan->job_location }}
                        </p>

                        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                            {{ Str::limit($lowongan->job_description, 120) }}
                        </p>

                        <a href="{{ route('lowongan.show', $lowongan->id) }}"
                            class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
                            Lihat Detail
                            <span aria-hidden="true"
                                class="block transition-all group-hover:ms-0.5 rtl:rotate-180">→</span>
                        </a>
                    </div>
                </article>
            @endforeach

        </div>
    </div>
</x-dashboard.index>
