<x-dashboard.detailslowongan>


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
                        <h3 class="text-xl font-bold text-gray-900">Detail Lowongan</h3>
                        <p class="mt-1 text-sm text-gray-500">Informasi lengkap tentang lowongan ini.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Nama Lowongan</label>
                            <div class="mt-1 text-gray-900">{{ $lowongan->job_title ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_name ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Lokasi Kerja</label>
                            <div class="mt-1 text-gray-900">{{ $lowongan->job_location ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-1">
                            <label class="block text-sm font-medium text-gray-700">Telepon Perusahaan</label>
                            <div class="mt-1 text-gray-900">{{ $company->company_phone ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Gaji</label>
                            <div class="mt-1 text-gray-900">{{ $lowongan->salary ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Deskripsi Lowongan</label>
                            <div class="mt-1 text-gray-900">{{ $lowongan->job_description ?? '-' }}</div>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-medium text-gray-700">Status Lowongan</label>
                            <div class="mt-1 text-gray-900">{{ $lowongan->status ?? '-' }}</div>
                        </div>
                    </div>

                    <a href="{{ route('company.edit', $lowongan->uid) }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        Edit Lowongan
                    </a>

                    <form action="{{ route('company.destroy', $lowongan->uid) }}" method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus perusahaan ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                            Hapus Lowongan
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>



</x-dashboard.detailslowongan>
