<x-dashboard.editlowongan>
    <div class="py-6 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="mb-4">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-gray-900 transition">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <form action="{{ route('lowongan.update', $lowongan->uid) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-6 space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Edit Detail Lowongan</h3>
                            <p class="mt-1 text-sm text-gray-500">Perbarui informasi lowongan Anda di bawah ini.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-1">
                                <label for="job_title" class="block text-sm font-medium text-gray-700">Nama Lowongan</label>
                                <input type="text" name="job_title" id="job_title"
                                    value="{{ old('job_title', $lowongan->job_title) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                            </div>
                            <div class="md:col-span-2">
                                <label for="job_description" class="block text-sm font-medium text-gray-700">Deskripsi Lowongan</label>
                                <textarea name="job_description" id="job_description" rows="4"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">{{ old('job_description', $lowongan->job_description) }}</textarea>
                            </div>
                            <div class="md:col-span-1">
                                <label for="job_location" class="block text-sm font-medium text-gray-700">Lokasi Pekerjaan</label>
                                <input type="text" name="job_location" id="job_location"
                                    value="{{ old('job_location', $lowongan->job_location) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="job_type" class="block text-sm font-medium text-gray-700">Tipe Pekerjaan</label>
                                <select name="job_type" id="job_type"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                                    <option value="full-time" {{ old('job_type', $lowongan->job_type) == 'full-time' ? 'selected' : '' }}>Full-time</option>
                                    <option value="part-time" {{ old('job_type', $lowongan->job_type) == 'part-time' ? 'selected' : '' }}>Part-time</option>
                                    <option value="contract" {{ old('job_type', $lowongan->job_type) == 'contract' ? 'selected' : '' }}>Contract</option>
                                </select>
                            </div>
                            <div class="md:col-span-1">
                                <label for="salary" class="block text-sm font-medium text-gray-700">Gaji</label>
                                <input type="number" step="0.01" name="salary" id="salary"
                                    value="{{ old('salary', $lowongan->salary) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="application_deadline" class="block text-sm font-medium text-gray-700">Batas Akhir Lamaran</label>
                                <input type="date" name="application_deadline" id="application_deadline"
                                    value="{{ old('application_deadline', $lowongan->application_deadline) }}"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                <select name="status" id="status"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                                    <option value="open" {{ old('status', $lowongan->status) == 'open' ? 'selected' : '' }}>Open</option>
                                    <option value="closed" {{ old('status', $lowongan->status) == 'closed' ? 'selected' : '' }}>Closed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50 text-right">
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-dashboard.editlowongan>
