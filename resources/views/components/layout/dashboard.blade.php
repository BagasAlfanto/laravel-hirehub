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
            class="fixed top-40 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 opacity-0 transition-opacity duration-500">
            {{ session('success') }}
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
