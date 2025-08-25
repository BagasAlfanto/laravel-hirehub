<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    @if (session('success'))
        <div id="toast"
            class="fixed top-20 right-8 w-80 bg-white border border-green-500 shadow-2xl rounded-lg px-6 py-5 z-50 opacity-0 transition-opacity duration-500 flex items-start gap-4">
            <div class="flex-shrink-0 flex items-center justify-center w-10 h-10 bg-green-100 rounded-md">
            <i class="fas fa-check text-green-600 text-xl"></i>
            </div>
            <div class="flex-1">
            <span class="block text-green-700 font-bold text-base mb-1">Berhasil!</span>
            <span class="text-gray-700 text-sm">{{ session('success') }}</span>
            </div>
            <button onclick="document.getElementById('toast').remove()" class="ml-2 text-gray-400 hover:text-gray-700 focus:outline-none">
            <i class="fas fa-times text-lg"></i>
            </button>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const toast = document.getElementById("toast");
                toast.classList.remove("opacity-0");
                setTimeout(() => {
                    toast.classList.add("opacity-0");
                    setTimeout(() => toast.remove(), 500);
                }, 3000);
            });
        </script>
    @endif

    {{ $slot }}
</body>

</html>
