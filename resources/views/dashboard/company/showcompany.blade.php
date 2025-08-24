<x-company.companydetails>
    <div class="py-6 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="px-6 py-4 bg-gray-50">
                    <a href="{{ url()->previous() }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        &larr; Kembali
                    </a>
                </div>
                <div class="p-6 space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">Detail Perusahaan</h3>
                        <p class="mt-1 text-sm text-gray-500">Informasi lengkap tentang perusahaan ini.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_name ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Bidang Industri</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_field ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Email Perusahaan</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_email ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Telepon Perusahaan</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_phone ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Situs Web</label>
                            <div class="mt-1 text-gray-900">
                                @if (!empty($company->company_website))
                                    <a href="{{ $company->company_website }}" class="text-blue-600 hover:underline"
                                        target="_blank">{{ $company->company_website }}</a>
                                @else
                                    -
                                @endif
                            </div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Alamat</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_address ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_description ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Logo Perusahaan</label>
                            <div class="mt-1">
                                @if (!empty($company->company_logo))
                                    <img src="{{ asset('storage/' . $company->company_logo) }}"
                                        alt="Logo {{ $company->company_name }}" class="h-24 rounded-md shadow border">
                                @else
                                    <span class="text-gray-500">Tidak ada logo</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="flex container-between gap-2">
                        <a href="{{ route('company.edit', $company->uid) }}"
                            class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                            Edit Perusahaan
                        </a>

                        <form action="{{ route('company.destroy', $company->uid) }}" method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus perusahaan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                                Hapus Perusahaan
                            </button>
                        </form>
                    </div>

                    {{-- <a href="{{ route('company.edit', $company->uid) }}" class="text-blue-600 hover:underline">Edit Perusahaan?</a> --}}
                </div>
            </div>
        </div>
    </div>
</x-company.companydetails>
