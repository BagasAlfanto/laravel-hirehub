<x-dashboard.editlowongan">

    <x-company.editcompany>
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
                    <form action="{{ route('company.update', $company->uid) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="p-6 space-y-6">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Edit Detail Lowongan</h3>
                                <p class="mt-1 text-sm text-gray-500">Perbarui informasi lowongan Anda di bawah ini.</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                <div class="md:col-span-1">
                                    <label for="job_title" class="block text-sm font-medium text-gray-700">Nama
                                        Lowongan</label>
                                    <input type="text" name="job_title" id="job_title"
                                        value="{{ old('job_title', $lowongan->job_title) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                                </div>


                                <div class="md:col-span-1">
                                    <label for="company_field"
                                        class="block text-sm font-medium text-gray-700">Bidang</label>
                                    <input type="text" name="company_field" id="company_field"
                                        value="{{ old('company_field', $company->company_field) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                                </div>


                                <div class="md:col-span-1">
                                    <label for="company_email" class="block text-sm font-medium text-gray-700">Email
                                        Perusahaan</label>
                                    <input type="email" name="company_email" id="company_email"
                                        value="{{ old('company_email', $company->company_email) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                                </div>


                                <div class="md:col-span-1">
                                    <label for="company_phone" class="block text-sm font-medium text-gray-700">Telepon
                                        Perusahaan</label>
                                    <input type="text" name="company_phone" id="company_phone"
                                        value="{{ old('company_phone', $company->company_phone) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                                </div>


                                <div class="md:col-span-2">
                                    <label for="company_website" class="block text-sm font-medium text-gray-700">Situs
                                        Web</label>
                                    <input type="text" name="company_website" id="company_website"
                                        value="{{ old('company_website', $company->company_website) }}"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">
                                </div>


                                <div class="md:col-span-2">
                                    <label for="company_address"
                                        class="block text-sm font-medium text-gray-700">Alamat</label>
                                    <textarea name="company_address" id="company_address" rows="3"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">{{ old('company_address', $company->company_address) }}</textarea>
                                </div>


                                <div class="md:col-span-2">
                                    <label for="company_description"
                                        class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                    <textarea name="company_description" id="company_description" rows="4"
                                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500 py-2 px-3">{{ old('company_description', $company->company_description) }}</textarea>
                                </div>


                                <div class="md:col-span-2">
                                    <label for="company_logo" class="block text-sm font-medium text-gray-700">Logo
                                        Perusahaan</label>
                                    <input type="file" name="company_logo" id="company_logo"
                                        class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
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
    </x-company.editcompany>


    </x-dashboard.editlowongan>
