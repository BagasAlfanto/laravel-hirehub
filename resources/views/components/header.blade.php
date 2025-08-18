<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="w-full px-4 sm:px-6 lg:px-8 py-5 flex justify-between items-center">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-800">
            {{ $slot }}
        </h1>
        
        @if (isset($actions))
            <div class="flex items-center space-x-2">
                {{ $actions }}
            </div>
        @endif
    </div>
</header>
