<x-company.addcompany>
    <div class="py-6 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="px-6 py-4 bg-gray-50">
                    <a href="{{ url()->previous() }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                         &larr; Kembali
                    </a>
                </div>
                <form action="{{ route('company.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Daftarkan Perusahaan Anda</h3>
                            <p class="mt-1 text-sm text-gray-500">Isi detail di bawah ini untuk menambahkan perusahaan
                                baru.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-1">
                                <label for="company_name" class="block text-sm font-medium text-gray-700">Nama
                                    Perusahaan</label>
                                <input type="text" id="company_name" name="company_name" required
                                    placeholder="Contoh: PT Teknologi Maju"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="company_field" class="block text-sm font-medium text-gray-700">Bidang
                                    Industri</label>

                                <input type="text" id="company_field" name="company_field"
                                    placeholder="Contoh: Teknologi, Finansial"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="company_email" class="block text-sm font-medium text-gray-700">Email
                                    Perusahaan</label>

                                <input type="email" id="company_email" name="company_email" required
                                    placeholder="contoh@perusahaan.com"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="company_phone" class="block text-sm font-medium text-gray-700">Telepon
                                    Perusahaan</label>

                                <input type="text" id="company_phone" name="company_phone"
                                    placeholder="+62 812 3456 7890"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-2">
                                <label for="company_website" class="block text-sm font-medium text-gray-700">Situs
                                    Web</label>

                                <input type="url" id="company_website" name="company_website"
                                    placeholder="https://contoh.com"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-2">
                                <label for="company_address"
                                    class="block text-sm font-medium text-gray-700">Alamat</label>

                                <textarea id="company_address" name="company_address" rows="3" placeholder="Alamat lengkap perusahaan"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3"></textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label for="company_description"
                                    class="block text-sm font-medium text-gray-700">Deskripsi</label>

                                <textarea id="company_description" name="company_description" rows="4"
                                    placeholder="Jelaskan tentang perusahaan Anda"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3"></textarea>
                            </div>
                            <div class="md:col-span-2">
                                <label for="company_logo" class="block text-sm font-medium text-gray-700">Logo
                                    Perusahaan</label>
                                <input type="file" id="company_logo" name="company_logo" accept="image/*"
                                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                            </div>
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50 text-right">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Simpan Perusahaan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-company.addcompany>
