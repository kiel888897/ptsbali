<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Undangan Pernikahan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-100 font-sans text-gray-800">

    <!-- Hero Section -->
    <section id="home" class="h-screen flex flex-col items-center justify-center bg-gradient-to-br from-yellow-100 to-yellow-300 text-center p-6">
        <h1 class="text-4xl md:text-6xl font-bold text-gray-900">Undangan Pernikahan</h1>
        <p class="mt-4 text-lg md:text-xl text-gray-700">Kami mengundang Anda untuk hadir dalam hari bahagia kami</p>
    </section>

    <!-- Mempelai Section -->
    <section id="mempelai" class="py-16 bg-white text-center">
        <h2 class="text-2xl md:text-3xl font-semibold mb-8">Mempelai</h2>
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/200" alt="Mempelai Pria" class="w-48 h-48 object-cover rounded-full shadow-lg" />
                <h3 class="mt-4 text-xl font-medium">Nama Mempelai Pria</h3>
            </div>
            <div class="flex flex-col items-center">
                <img src="https://via.placeholder.com/200" alt="Mempelai Wanita" class="w-48 h-48 object-cover rounded-full shadow-lg" />
                <h3 class="mt-4 text-xl font-medium">Nama Mempelai Wanita</h3>
            </div>
        </div>
    </section>

    <!-- Tanggal Section -->
    <section id="tanggal" class="py-16 bg-gray-50 text-center">
        <h2 class="text-2xl md:text-3xl font-semibold mb-8">Tanggal Pernikahan</h2>
        <p class="text-lg md:text-xl text-gray-700">Minggu, 12 Desember 2025</p>
        <p class="mt-2 text-lg md:text-xl text-gray-700">Hotel Contoh, Jakarta</p>
    </section>

    <!-- Galeri Section -->
    <section id="galeri" class="py-16 bg-white text-center">
        <h2 class="text-2xl md:text-3xl font-semibold mb-8">Galeri</h2>
        <div class="max-w-5xl mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <img src="https://via.placeholder.com/300" alt="Galeri 1" class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" />
            <img src="https://via.placeholder.com/300" alt="Galeri 2" class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" />
            <img src="https://via.placeholder.com/300" alt="Galeri 3" class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" />
            <img src="https://via.placeholder.com/300" alt="Galeri 4" class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" />
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-900 text-white text-center">
        <p class="text-sm">&copy; 2025 Undangan Pernikahan. Semua Hak Dilindungi.</p>
    </footer>

    <!-- Bottom Navbar -->
    <nav class="fixed bottom-0 w-full bg-gray-900 text-white rounded-t-2xl shadow-lg">
        <ul class="flex justify-around text-center">
            <li>
                <a href="#home" class="flex flex-col items-center py-2 hover:text-yellow-400">
                    <i class="fas fa-home"></i>
                    <span class="text-xs">Home</span>
                </a>
            </li>
            <li>
                <a href="#mempelai" class="flex flex-col items-center py-2 hover:text-yellow-400">
                    <i class="fa-solid fa-user-group"></i>
                    <span class="text-xs">Undangan</span>
                </a>
            </li>
            <li>
                <a href="#tanggal" class="flex flex-col items-center py-2 hover:text-yellow-400">
                    <i class="fa-solid fa-calendar-check"></i>
                    <span class="text-xs">Tanggal</span>
                </a>
            </li>
            <li>
                <a href="#galeri" class="flex flex-col items-center py-2 hover:text-yellow-400">
                    <i class="fa-solid fa-images"></i>
                    <span class="text-xs">Galeri</span>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>