<x-profile.editprofile>
    <div class="py-6 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                <div class="px-6 py-4 bg-gray-50">
                    <a href="{{ url()->previous() }}"
                        class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                         &larr; Kembali
                    </a>
                </div>
                <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="p-6 space-y-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Edit Profil</h3>
                            <p class="mt-1 text-sm text-gray-500">Perbarui informasi profil Anda di bawah ini.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-1">
                                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                                <input type="text" id="username" name="username" required
                                    value="{{ old('username', auth()->user()->username) }}"
                                    placeholder="Username"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            <div class="md:col-span-1">
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email" required
                                    value="{{ old('email', auth()->user()->email) }}"
                                    placeholder="Email"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                            </div>
                            {{-- <div class="md:col-span-1">
                                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                                <select id="role" name="role" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm py-2 px-3">
                                    <option value="pencari" {{ old('role', auth()->user()->role) == 'pencari' ? 'selected' : '' }}>Pencari</option>
                                    <option value="penyedia" {{ old('role', auth()->user()->role) == 'penyedia' ? 'selected' : '' }}>Penyedia</option>
                                </select>
                            </div> --}}
                        </div>
                    </div>
                    <div class="px-6 py-4 bg-gray-50">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-profile.editprofile>
