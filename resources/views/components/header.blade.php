<nav class="flex justify-center py-6">
    <ul class="flex space-x-8 bg-white h-12 rounded-full px-4 py-2 items-center">
        <li>
            @if(request()->get('status') == 'open')
                <a
                    href="{{ route('dashboard.index') }}"
                    class="hover:text-blue-600 font-semibold px-5 py-2 rounded-full transition duration-200 bg-blue-600 text-white shadow"
                >
                    Open
                </a>
            @else
                <a
                    href="{{ route('dashboard.index', ['status' => 'open']) }}"
                    class="text-gray-700 hover:text-blue-600 font-semibold px-5 py-2 rounded-full transition duration-200
                        {{ request()->get('status') == 'open' ? 'bg-blue-600 text-white shadow' : '' }}"
                >
                    Open
                </a>
            @endif
        </li>
        <li>
            @if(request()->get('status') == 'closed')
                <a
                    href="{{ route('dashboard.index') }}"
                    class="hover:text-blue-600 font-semibold px-5 py-2 rounded-full transition duration-200 bg-blue-600 text-white shadow"
                >
                    Closed
                </a>
            @else
                <a
                    href="{{ route('dashboard.index', ['status' => 'closed']) }}"
                    class="text-gray-700 hover:text-blue-600 font-semibold px-5 py-2 rounded-full transition duration-200
                        {{ request()->get('status') == 'closed' ? 'bg-blue-600 text-white shadow' : '' }}"
                >
                    Closed
                </a>
            @endif
        </li>
    </ul>
</nav>
