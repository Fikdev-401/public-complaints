<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Masyarakat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @media (max-width: 576px) {
            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body class="bg-gray-100 px-8 font-[poppins]">

    <main>
        <div class="container mx-auto py-4">
            <header class="pb-3 mb-4 border-b border-gray-300">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <a href="/"
                            class=" bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent text-2xl font-bold">ADUAN
                            MASYARAKAT</a>
                    </div>
                    <div>
                        <a href="{{ route('login') }}"
                            class="px-4 py-2 border border-blue-500 text-blue-500 hover:bg-blue-500 hover:text-white transition rounded">Login</a>
                    </div>
                </div>
            </header>

            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">
                <div class=" flex flex-wrap justify-between items-center">
                    <img src="{{ asset('masyarakat.png')}}" width="500" class="sm:pe-28 sm:pb-20" alt="">
                    <div class=" w-96 me-20">
                        <h3 class="text-3xl font-bold text-gray-900">Layanan Pengaduan Masyarakat</h3>
                        <p class="text-lg text-gray-700 mt-3">Selamat Datang di Website Pengaduan Masyarakat.</p>
                        <p class="text-gray-600 mt-3">Tempat dimana Anda dapat menyampaikan keluhan dan aspirasi dengan
                            mudah dan cepat. Website ini dirancang untuk memberikan saluran resmi kepada masyarakat
                            dalam melaporkan berbagai permasalahan yang terjadi di lingkungan sekitar.</p>
                        <p class="font-medium text-gray-700 mt-3">Belum punya akun? Silahkan Registrasi disini 😊</p>
                            <a href="{{ route('register') }}">
                                <button
                                    class="mt-5 px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Register</button>
                            </a>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg mb-6">

            </div>
        </div>
    </main>

</body>

</html>
