<x-dashboard.profile>
    <div class="flex items-center justify-center">
        <div class="container flex flex-col md:flex-row gap-8 justify-center items-center">
            <div class="md:w-1/3 bg-white rounded-lg shadow p-6 flex flex-col items-center">
                <h2 class="text-xl font-semibold">{{ Auth::user()->name }}</h2>
                <p class="text-gray-500">{{ Auth::user()->email }}</p>
                <a href="#" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Edit Profile</a>
            </div>

            <div class="md:w-2/3 bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold mb-4">Perusahaan Anda</h3>
                    <a href="{{ route('company.addcompany') }}" class="mt-2 inline-block px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Tambah Perusahaan</a>
                </div>
                @if(!empty($company) && $company->count())
                    <ul>
                        @foreach($company as $companyItem)
                            <li class="mb-4 border-b pb-4">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="font-bold">{{ $companyItem->company_name }}</div>
                                        <div class="text-gray-500 text-sm">{{ $companyItem->company_field }}</div>
                                    </div>
                                    <a href="#" class="text-blue-600 hover:underline">Lihat</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500">Anda belum memiliki perusahaan.</p>
                @endif
            </div>
        </div>
    </div>
</x-dashboard.profile>
