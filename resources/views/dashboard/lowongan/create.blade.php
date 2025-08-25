<x-dashboard.addlowongan>
    <div class="py-6 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">

                <form action="{{ route('lowongan.store') }}" method="POST" id="lowonganForm">
                    @csrf
                    <div class="p-6 space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Tambah Lowongan Baru</h3>
                            <p class="mt-1 text-sm text-gray-500">Isi detail di bawah ini untuk menambahkan lowongan pekerjaan baru.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2">
                                <label for="company_profile_id" class="block text-sm font-medium text-gray-700">Perusahaan</label>
                                @if($companies->count() === 1)
                                    <input type="hidden" name="company_profile_id" value="{{ $companies->first()->id }}">
                                    <input type="text" value="{{ $companies->first()->company_name }}" class="mt-1 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3" readonly>
                                @elseif($companies->count() > 1)
                                    <select name="company_profile_id" required class="mt-1 block w-1/2 border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                                        <option value="" disabled selected>Pilih Perusahaan</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                        @endforeach
                                    </select>
                                @elseif($companies->count() === 0)
                                    <p class="mt-1 text-sm text-gray-500">Tidak ada perusahaan yang tersedia.</p>
                                    <p class="mt-1 text-sm text-gray-500">Silakan tambahkan perusahaan terlebih dahulu <a href="{{ route('company.index') }}" class="text-blue-500 hover:underline">disini</a></p>
                                @endif
                            </div>
                            <div class="md:col-span-2">
                                <label for="job_title" class="block text-sm font-medium text-gray-700">Judul Pekerjaan</label>
                                <input type="text" id="job_title" name="job_title" required
                                    placeholder="Contoh: Backend Developer"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-2">
                                <label for="job_description" class="block text-sm font-medium text-gray-700">Deskripsi Pekerjaan</label>
                                <textarea id="job_description" name="job_description" rows="4" required
                                    placeholder="Jelaskan detail pekerjaan"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3"></textarea>
                            </div>
                            <div class="md:col-span-1">
                                <label for="job_location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                <input type="text" id="job_location" name="job_location"
                                    placeholder="Contoh: Jakarta, Remote"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="job_type" class="block text-sm font-medium text-gray-700">Tipe Pekerjaan</label>
                                <select id="job_type" name="job_type" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                                    <option value="full-time">Full-time</option>
                                    <option value="part-time">Part-time</option>
                                    <option value="contract">Contract</option>
                                </select>
                            </div>
                            <div class="md:col-span-1">
                                <label for="salary" class="block text-sm font-medium text-gray-700">Gaji</label>
                                <input type="number" id="salary" name="salary" step="0.01" min="0"
                                    placeholder="Contoh: 5000000"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="application_deadline" class="block text-sm font-medium text-gray-700">Batas Akhir Lamaran</label>
                                <input type="date" id="application_deadline" name="application_deadline"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                <select id="status" name="status" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                                    <option value="open">Open</option>
                                    <option value="closed">Closed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50 text-right">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Simpan Lowongan
                        </button>
                    </div>
                </form>
                @if($companies->count() === 0)
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const form = document.getElementById('lowonganForm');
                        if (form) {
                            Array.from(form.querySelectorAll('input, select, textarea, button')).forEach(function(el) {
                                el.disabled = true;
                            });
                            form.style.backgroundColor = '#f3f4f6';
                        }
                    });
                </script>
                @endif
            </div>
        </div>
    </div>
</x-dashboard.addlowongan>
