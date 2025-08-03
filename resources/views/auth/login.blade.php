<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-white h-screen flex items-center justify-center">
    <div class="flex flex-col md:flex-row md:mx-8 w-full max-w-5xl shadow-xl rounded-2xl overflow-hidden">
        <!-- Kiri: Gambar -->
        <div
            class="hidden md:flex md:w-1/2 bg-gradient-to-br from-[#8C4DFF] via-purple-500 to-purple-400 items-center justify-center p-6">
            <img src="/illustration.png" alt="gambar" class="max-h-96 object-contain">
        </div>

        <!-- Kanan: Form Login -->
        <div class="w-full md:w-1/2 bg-white p-6 md:p-10">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Login ke Akunmu</h2>
            <form action="{{ route('login.store') }}" method="POST" class="space-y-5" onsubmit="return validateForm();">
                @csrf
                <div>
                    <input type="email" id="email" name="email" placeholder="Email"
                        class="w-full px-5 py-3 bg-gray-100 text-gray-700 placeholder-gray-500 rounded-full focus:outline-none focus:ring-2 focus:ring-[#8C4DFF]"
                        required />
                    <span id="emailErrorMsg" class="text-red-500 text-sm block mt-2"></span>
                </div>
                <div class="relative">
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="w-full px-5 py-3 bg-gray-100 text-gray-700 placeholder-gray-500 rounded-full focus:outline-none focus:ring-2 focus:ring-[#8C4DFF]"
                            required />
                        <button type="button"
                            class="absolute inset-y-0 right-4 flex items-center text-gray-400 cursor-pointer px-2 focus:outline-none"
                            tabindex="-1">
                            <span class="toggle-password" toggle="#password">👁️</span>
                        </button>
                    </div>
                    <span id="passwordErrorMsg" class="text-red-500 text-sm block mt-2"></span>
                </div>
                <div class="flex justify-between items-center text-sm px-1">
                    <label class="inline-flex items-center space-x-2 text-gray-700">
                        <input type="checkbox" class="form-checkbox text-[#8C4DFF]">
                        <span>Ingat saya</span>
                    </label>
                </div>
                <button type="submit"
                    class="w-full bg-[#8C4DFF] hover:bg-purple-700 text-white font-semibold py-3 rounded-full transition duration-200">
                    Login
                </button>
                <p class="text-center text-sm text-gray-500 mt-6">
                    Belum punya akun?
                    <a href="/register" class="text-[#8C4DFF] font-semibold hover:underline">Register disini</a>
                </p>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('.toggle-password').forEach(item => {
            item.addEventListener('click', function () {
                const input = document.querySelector(this.getAttribute('toggle'));
                if (input.type === "password") {
                    input.type = "text";
                    this.textContent = "🙈";
                } else {
                    input.type = "password";
                    this.textContent = "👁️";
                }
            });
        });
        
        function validateForm() {
            const emailInput = document.getElementById("email").value;
            const allowedDomains = ["gmail.com", "yahoo.com", "outlook.com"];
            const emailErrorMsg = document.getElementById("emailErrorMsg");
            const passwordInput = document.getElementById("password").value;
            const passwordErrorMsg = document.getElementById("passwordErrorMsg");

            let valid = true;

            const emailDomain = emailInput.split("@")[1];
            if (allowedDomains.includes(emailDomain)) {
                emailErrorMsg.textContent = "";
            } else {
                emailErrorMsg.textContent = "Hanya email dari gmail, yahoo, atau outlook yang diizinkan.";
                valid = false;
            }

            if (passwordInput.length >= 8) {
                passwordErrorMsg.textContent = "";
            } else {
                passwordErrorMsg.textContent = "Password harus minimal 8 karakter.";
                valid = false;
            }

            return valid;
        }
    </script>
</body>

</html>
