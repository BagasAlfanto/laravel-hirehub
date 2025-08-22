<x-company.editcompany>
    <form action="{{ route('company.update', $company->uid) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="space-y-6">
            <div>
                <label for="company_name" class="block text-sm font-medium text-gray-700">Nama Perusahaan</label>
                <input type="text" name="company_name" id="company_name" value="{{ $company->company_name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="company_email" class="block text-sm font-medium text-gray-700">Email Perusahaan</label>
                <input type="email" name="company_email" id="company_email" value="{{ $company->company_email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="company_phone" class="block text-sm font-medium text-gray-700">Telepon Perusahaan</label>
                <input type="text" name="company_phone" id="company_phone" value="{{ $company->company_phone }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="company_description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="company_description" id="company_description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ $company->company_description }}</textarea>
            </div>

            <div>
                <label for="company_website" class="block text-sm font-medium text-gray-700">Situs Web</label>
                <input type="text" name="company_website" id="company_website" value="{{ $company->company_website }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="company_address" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="company_address" id="company_address" value="{{ $company->company_address }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="company_field" class="block text-sm font-medium text-gray-700">Bidang</label>
                <input type="text" name="company_field" id="company_field" value="{{ $company->company_field }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>

            <div>
                <label for="company_logo" class="block text-sm font-medium text-gray-700">Logo Perusahaan</label>
                <input type="file" name="company_logo" id="company_logo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
            </div>
        </div>

        <div class="mt-6">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Simpan Perubahan
            </button>
        </div>
    </form>
</x-company.editcompany>
