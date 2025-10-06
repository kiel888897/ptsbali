<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Undangan Bona Taon PTS 2026</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.ico" />

    <!-- Theme color for mobile browser -->
    <meta name="theme-color" content="#b91c1c" />

    <!-- SEO & Social -->
    <meta name="description" content="Undangan digital resmi Pesta Bona Taon Punguan Tuan Sihubil se-Bali tahun 2026. Minggu, 15 Februari 2026 di Denpasar." />
    <meta name="keywords" content="Bona Taon, Batak, Undangan, PTS Bali, Pesta Adat, Keluarga Batak, Denpasar" />
    <meta property="og:title" content="Undangan Bona Taon PTS 2026" />
    <meta property="og:description" content="Mari bersama menghadiri Pesta Bona Taon Punguan Tuan Sihubil se-Bali | 15 Februari 2026 di Denpasar." />
    <meta property="og:image" content="https://https://ptsbali.online//assets/images/pinompar.png" />
    <meta property="og:url" content="https://https://ptsbali.online//" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/a2d9d6c11f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet" />

    <!-- Custom -->
    <link href="style.css" rel="stylesheet" />
</head>


<body class="bg-gray-100">
    <!-- Background Music -->
    <audio id="bg-music" loop>
        <source src="assets/music/sound.mp3" type="audio/mpeg" />
    </audio>

    <!-- Welcome Page -->
    <div
        id="welcome"
        class="h-screen flex items-center justify-center text-center text-white relative fade-out bg-cover bg-center">
        <div>
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Pesta Bona Taon 2026</h1>
            <div class="w-40 h-40 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-lg">
                <img src="assets/images/bg.jpeg" alt="logo/foto" class="w-full h-full object-cover" />
            </div>
            <h2 class="text-2xl md:text-4xl mb-6 font-semibold">Punguan Tuan Sihubil se- Bali</h2>
            <p class="italic mb-6 px-8">Rayakan Pesta Bona Taon Punguan Tuan Sihubil dengan penuh sukacita 🎉</p>
            <!-- Button Wrapper -->
            <div class="flex justify-center">
                <button
                    onclick="openInvitation()"
                    class="bg-gradient-to-r from-red-600 to-yellow-500 animate-bounce-gentle text-white px-8 py-3 rounded-full text-lg shadow-xl hover:scale-110 transition flex items-center gap-2 justify-center glow">
                    <i class="fa-solid fa-envelope-open"></i>
                    Buka Undangan
                </button>
            </div>
        </div>

        <!-- Marquee -->
        <div class="absolute bottom-0 w-full bg-red-700 text-white font-bold text-lg marquee">
            <span>
                🎶 Horas! Selamat datang di Punguan Tuan Sihubil • Mari kita rayakan Pesta Bona Taon dengan penuh sukacita •
                🎶
            </span>
        </div>
    </div>

    <section
        id="hero"
        class="hidden h-screen flex flex-col items-center justify-center relative overflow-hidden fade-in">
        <!-- Overlay -->
        <!-- <div class="absolute inset-0 bg-black bg-opacity-70"></div> -->

        <!-- Konten -->
        <div class="relative text-center text-white z-10 px-4" data-aos="zoom-in">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Pesta Bona Taon</h1>

            <img src="assets/images/pinompar.png" alt="Logo Punguan" class="h-40 mx-auto mb-4" />

            <h2 class="text-2xl md:text-3xl font-semibold mb-2">Punguan Tuan Sihubil se-Bali</h2>
            <p class="text-lg md:text-xl mb-6 italic">Sabtu–Minggu, 15–16 Maret 2026</p>

            <!-- Save The Date Button -->
            <a
                class="inline-flex items-center gap-2 bg-transparent border border-white hover:bg-white hover:text-red-700 text-white font-semibold px-5 py-2 rounded-full shadow-lg transition glow-btn"
                target="_blank"
                href="https://calendar.google.com/calendar/render?action=TEMPLATE&text=Pesta%20Bona%20Taon%20Punguan%20Tuan%20Sihubil&details=Pesta%20Bona%20Taon%20Pungan%20Tuan%20Sihubil%20%7C%2015%20Maret%202026%20%7C%20Wisma%20PLN%20Bedugul,%20Bali%2080239%20%7C%2010.00%20WITA&dates=20250315T100000/20250316T140000&location=https://g.co/kgs/ArAcPos">
                <i class="fa-solid fa-calendar-check"></i> Save The Date
            </a>

            <!-- Scroll Animation -->
            <div class="flex flex-col items-center mt-8">
                <div class="mouse-animation w-6 h-10 border-2 border-white rounded-full flex items-start justify-center p-1">
                    <div class="scroll-animation w-1 h-2 bg-white rounded-full"></div>
                </div>
                <p class="mt-2 text-sm opacity-80">Scroll Down</p>
            </div>
        </div>

        <!-- Confetti -->
        <canvas id="confetti-canvas" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>
    </section>

    <!-- Detail Section -->
    <section id="detail" class="py-16 hidden">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <!-- Title -->
            <h2 class="text-4xl font-sacramento font-bold text-white mb-6 text-shadow">Gokkon Dohot Jou-Jou</h2>
            <!-- Intro Text -->
            <p class="max-w-3xl mx-auto text-white leading-relaxed mb-10 text-shadow">
                Tabe mardongan las niroha disiala boi hita marhahipason mamolus tahun 2025, sai anggiat ma dipasupasu Tuhanta
                hita laho mandalami taon baru 2026 on. Disiala las niroha i, dipatupa punguanta do songon Pesta Bona Taon
                marhite-hite pangkobasion sian Panitia Bona Taon ima :
            </p>

            <!-- Floating Love Animations -->
            <div class="relative mb-10">
                <!-- Love kiri -->
                <div class="absolute left-5 top-0 animate-float-slow text-yellow-400 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 
                1.4 3.053c-.523 1.023-.641 2.5.314 
                4.385.92 1.815 2.834 3.989 
                6.286 6.357 3.452-2.368 5.365-4.542 
                6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 
                10.4.28 8.717 2.01zM8 15C-7.333 
                4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 
                3 0 0 1 .176-.17C12.72-3.042 
                23.333 4.867 8 15" />
                    </svg>
                </div>
                <div class="absolute left-10 top-40 animate-float-slow text-yellow-400 opacity-80">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="50"
                        height="50"
                        fill="currentColor"
                        viewBox="0 0 16 16"
                        class="fill-current">
                        <path
                            fill-rule="evenodd"
                            d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                    </svg>
                </div>

                <!-- Love kanan 1 -->
                <div class="absolute right-5 top-0 animate-float-fast text-yellow-500 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 
                1.707.236 3.062C4.16 6.753 5.52 8.32 
                8 10.042c2.479-1.723 3.839-3.29 
                4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721z" />
                    </svg>
                </div>

                <!-- Love kanan 2 -->
                <div class="absolute right-10 top-40 animate-float-slow text-yellow-400 opacity-60">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                    </svg>
                </div>
            </div>

            <!-- Countdown -->
            <h3 class="text-xl font-semibold mb-4 text-white text-shadow">Waktu Menuju Acara</h3>
            <div
                id="countdown"
                class="flex justify-center gap-4 mb-6 text-lg font-semibold text-yellow-200 text-shadow"></div>

            <!-- Event Info -->
            <p class="mb-2 text-lg text-white text-shadow">📅 Tanggal: 20–21 Desember 2026</p>
            <p class="mb-2 text-lg text-white text-shadow">⏰ Pukul: 10.00 WITA – Selesai</p>
            <p class="mb-6 text-lg text-white text-shadow">
                📍 Lokasi: Wisma PLN Bedugul, Candikuning, Baturiti, Tabanan Regency, Bali 82191
            </p>

            <a
                href="https://maps.app.goo.gl/paQrzmSpGWjHwce59"
                target="_blank"
                class="inline-flex items-center gap-2 px-5 py-2 rounded-full shadow-lg bg-gradient-to-r from-red-600 to-pink-500 text-white font-semibold hover:scale-105 hover:from-pink-600 hover:to-red-500 transition-all duration-300 ease-in-out">
                <i class="fa-solid fa-map-location-dot text-lg animate-bounce"></i>
                <span>Lihat Google Maps</span>
            </a>
            <p class="max-w-3xl mx-auto text-white leading-relaxed mt-10 text-shadow">
                Arop situtu rohanami asa parsidohot masude pinompar ni Ompunta Tuan Sihubil laho mangalehon partingkian,
                pangkhobasion dohot nalaho manumpaki ulaon i.
                <br />
                Disiala di neang ni langka dohot pangurupion tarlumobi panumpakion muna, hupasahat hami ma mauliate godang.
                Sai dipasu-pasu Tuhanta ma hita saluhutna.
            </p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-16 hidden">
        <!-- Floating Love Animations -->
        <div class="relative mb-10">
            <!-- Love kanan 2 -->
            <div class="absolute left-10 top-0 animate-float-slow text-yellow-400 opacity-60">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        fill-rule="evenodd"
                        d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                </svg>
            </div>
            <!-- Love kiri -->
            <div class="absolute right-5 top-20 animate-float-slow text-yellow-400 opacity-70">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 
                1.4 3.053c-.523 1.023-.641 2.5.314 
                4.385.92 1.815 2.834 3.989 
                6.286 6.357 3.452-2.368 5.365-4.542 
                6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 
                10.4.28 8.717 2.01zM8 15C-7.333 
                4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 
                3 0 0 1 .176-.17C12.72-3.042 
                23.333 4.867 8 15" />
                </svg>
            </div>
        </div>
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-4xl font-sacramento font-bold text-white mb-6 text-shadow">Galeri</h2>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Item -->
                <a href="assets/foto/1.jpg" data-fancybox="gallery" class="relative group">
                    <img
                        src="assets/foto/1.jpg"
                        class="rounded-lg shadow-lg transition-transform duration-300 group-hover:scale-105" />
                    <!-- Overlay -->
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </a>

                <!-- Ulangi untuk foto lainnya -->
                <a href="assets/foto/2.jpg" data-fancybox="gallery" class="relative group">
                    <img
                        src="assets/foto/2.jpg"
                        class="rounded-lg shadow-lg transition-transform duration-300 group-hover:scale-105" />
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </a>

                <!-- Tambahkan untuk foto 3,4,...9 -->
            </div>
        </div>
    </section>

    <!-- RSVP Section -->
    <section id="rsvp" class="py-16 hidden">
        <div class="container mx-auto px-6 text-center" data-aos="fade-up">
            <h2 class="text-4xl font-sacramento font-bold text-white mb-6 text-shadow">Sumbangan Sukarela</h2>
            <p class="max-w-3xl mx-auto text-white leading-relaxed mb-6 text-shadow">
                Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan sumbangan sukarela, dapat melalui :
            </p>
            <!-- Floating Love Animations -->
            <div class="relative mb-10">
                <!-- Love kanan 2 -->
                <div class="absolute left-10 top-0 animate-float-slow text-yellow-400 opacity-60">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                    </svg>
                </div>
                <!-- Love kiri -->
                <div class="absolute left-5 top-40 animate-float-slow text-yellow-400 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            d="m8 2.748-.717-.737C5.6.281 2.514.878 
                1.4 3.053c-.523 1.023-.641 2.5.314 
                4.385.92 1.815 2.834 3.989 
                6.286 6.357 3.452-2.368 5.365-4.542 
                6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 
                10.4.28 8.717 2.01zM8 15C-7.333 
                4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 
                3 0 0 1 .176-.17C12.72-3.042 
                23.333 4.867 8 15" />
                    </svg>
                </div>

                <!-- Love kanan 1 -->
                <div class="absolute right-5 top-0 animate-float-fast text-yellow-500 opacity-70">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 
                1.707.236 3.062C4.16 6.753 5.52 8.32 
                8 10.042c2.479-1.723 3.839-3.29 
                4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721z" />
                    </svg>
                </div>

                <!-- Love kanan 2 -->
                <div class="absolute right-10 top-40 animate-float-slow text-yellow-400 opacity-60">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" viewBox="0 0 16 16">
                        <path
                            fill-rule="evenodd"
                            d="m8 2.42-.717-.737c-1.13-1.161-3.243-.777-4.01.72-.35.685-.451 1.707.236 3.062C4.16 6.753 5.52 8.32 8 10.042c2.479-1.723 3.839-3.29 4.491-4.577.687-1.355.587-2.377.236-3.061-.767-1.498-2.88-1.882-4.01-.721zm-.49 8.5c-10.78-7.44-3-13.155.359-10.063q.068.062.132.129.065-.067.132-.129c3.36-3.092 11.137 2.624.357 10.063l.235.468a.25.25 0 1 1-.448.224l-.008-.017c.008.11.02.202.037.29.054.27.161.488.419 1.003.288.578.235 1.15.076 1.629-.157.469-.422.867-.588 1.115l-.004.007a.25.25 0 1 1-.416-.278c.168-.252.4-.6.533-1.003.133-.396.163-.824-.049-1.246l-.013-.028c-.24-.48-.38-.758-.448-1.102a3 3 0 0 1-.052-.45l-.04.08a.25.25 0 1 1-.447-.224l.235-.468ZM6.013 2.06c-.649-.18-1.483.083-1.85.798-.131.258-.245.689-.08 1.335.063.244.414.198.487-.043.21-.697.627-1.447 1.359-1.692.217-.073.304-.337.084-.398"></path>
                    </svg>
                </div>
            </div>
            <div class="flex justify-center">
                <div
                    class="bg-white border rounded-2xl shadow-lg p-6 max-w-md w-full text-center"
                    data-aos="fade-down"
                    data-aos-duration="1500">
                    <!-- Logo Bank -->
                    <img src="assets/images/bri.png" class="mx-auto w-32 rounded mb-4" alt="BRI" />

                    <!-- Nomor Rekening -->
                    <p class="text-gray-800 font-medium text-lg mb-1">
                        No. Rekening:
                        <span id="rekening" class="font-bold text-red-700">036801059546508</span>
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        a.n <span class="font-semibold">Sarah Andriani Putri</span> <br />
                        (Bendahara Panitia Bona Taon)
                    </p>

                    <!-- Tombol Salin -->
                    <button
                        onclick="copyRekening()"
                        class="bg-red-600 text-white px-4 py-2 rounded-lg shadow hover:bg-red-700 transition">
                        <i class="fa-regular fa-copy mr-2"></i> Salin No. Rekening
                    </button>

                    <!-- Notifikasi kecil -->
                    <p id="copyAlert" class="text-green-600 text-sm mt-3 hidden">✅ Nomor rekening berhasil disalin!</p>
                </div>
            </div>
        </div>
    </section>
    <hr />
    <!-- Footer -->
    <footer
        id="footer"
        class="hidden relative text-white px-6 py-4 mb-20 flex flex-col md:flex-row justify-between items-center gap-2 text-center md:text-left">
        <!-- Teks kiri -->
        <div class="flex items-center gap-2">
            <span>Build with <i class="fa-solid fa-heart text-yellow-200"></i> Panitia Bona Taon 2026</span>
        </div>

        <!-- Link kanan / bawah -->
        <div class="flex items-center gap-4">
            <a href="https://github.com/kiel888897" target="_blank" class="hover:text-yellow-300"><i class="fab fa-github"></i> kiel888897
            </a>
        </div>
    </footer>

    <!-- Tombol Musik Floating -->
    <button
        id="music-btn"
        onclick="toggleMusic()"
        class="hidden fixed bottom-20 right-4 z-50 w-12 h-12 flex items-center justify-center bg-white rounded-full shadow-lg text-red-700 hover:scale-110 transition">
        <i id="music-icon" class="fa-solid fa-play"></i>
    </button>
    <!-- Floating Elements -->
    <div id="balloons"></div>

    <!-- Bottom Navbar -->
    <nav
        id="bottom-nav"
        class="hidden fixed bottom-0 left-0 w-full bg-red-700 text-white flex justify-around rounded-t-3xl py-2 shadow-lg z-50">
        <a href="#hero" data-section="hero" class="flex flex-col items-center text-sm hover:text-yellow-300">
            <i class="fas fa-home text-lg"></i>
            <span>Home</span>
        </a>
        <a href="#detail" data-section="detail" class="flex flex-col items-center text-sm hover:text-yellow-300">
            <i class="fas fa-calendar-alt text-lg"></i>
            <span>Acara</span>
        </a>
        <a href="#gallery" data-section="gallery" class="flex flex-col items-center text-sm hover:text-yellow-300">
            <i class="fas fa-images text-lg"></i>
            <span>Galeri</span>
        </a>
        <a href="#rsvp" data-section="rsvp" class="flex flex-col items-center text-sm hover:text-yellow-300">
            <i class="fas fa-check-circle text-lg"></i>
            <span>RSVP</span>
        </a>
    </nav>

    <!-- AOS & Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200
        });
        const music = document.getElementById("bg-music");
        const body = document.body;
        let effectsStarted = false;

        function openInvitation() {
            const welcome = document.getElementById("welcome");
            const hero = document.getElementById("hero");

            // fade out welcome
            welcome.classList.add("hide");

            setTimeout(() => {
                welcome.style.display = "none";

                // tampilkan hero & semua section lain
                hero.classList.remove("hidden");
                hero.classList.add("show");
                document.getElementById("detail").classList.remove("hidden");
                document.getElementById("gallery").classList.remove("hidden");
                document.getElementById("rsvp").classList.remove("hidden");
                document.querySelector("footer").classList.remove("hidden");
                document.getElementById("bottom-nav").classList.remove("hidden");
                document.getElementById("music-btn").classList.remove("hidden");

                // aktifkan scroll
                document.body.style.overflowY = "auto";

                // jalankan efek hanya sekali
                if (!effectsStarted) {
                    effectsStarted = true;
                    startFloatingEffects();
                }
                music.play();
                // set ikon ke stop + animasi mutar
                const musicIcon = document.getElementById("music-icon");
                musicIcon.classList.remove("fa-play");
                musicIcon.classList.add("fa-stop", "spin");

                launchConfetti();
            }, 1000);
        }

        function startFloatingEffects() {
            // Balon animasi
            setInterval(createBalloon, 2000);

            // Love & bunga animasi
            setInterval(createFloatingIcon, 1000);
        }
        // Countdown
        const countdown = document.getElementById("countdown");
        const eventDate = new Date("Dec 20, 2025 17:00:00").getTime();
        setInterval(() => {
            const now = new Date().getTime();
            const distance = eventDate - now;
            if (distance < 0) {
                countdown.innerHTML = "🎉 Acara Sedang Berlangsung 🎉";
                return;
            }
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            countdown.innerHTML = `
      <div>${days} <span class="block text-sm">Hari</span></div>
      <div>${hours} <span class="block text-sm">Jam</span></div>
      <div>${minutes} <span class="block text-sm">Menit</span></div>
      <div>${seconds} <span class="block text-sm">Detik</span></div>
    `;
        }, 1000);

        // Balon animasi
        function createBalloon() {
            const balloonsContainer = document.getElementById("balloons");
            if (balloonsContainer.children.length >= 5) return; // maksimal 10 balon
            const balloon = document.createElement("div");
            balloon.className = "balloon";
            balloon.style.left = Math.random() * window.innerWidth + "px";
            balloon.style.background = `hsl(${Math.random() * 360},70%,60%)`;
            balloon.style.animationDuration = 6 + Math.random() * 5 + "s";
            document.getElementById("balloons").appendChild(balloon);
            setTimeout(() => balloon.remove(), 8000);
        }

        // Floating icon (love / flower random)
        function createFloatingIcon() {
            const icon = document.createElement("div");
            icon.style.position = "absolute";
            icon.style.bottom = "-50px";
            icon.style.left = Math.random() * window.innerWidth + "px";
            icon.style.fontSize = Math.random() * 20 + 20 + "px"; // ukuran random
            icon.style.opacity = 0.9;

            // Random pilih icon
            const icons = ["❤️", "🌸"];
            icon.innerHTML = icons[Math.floor(Math.random() * icons.length)];

            // Random durasi & arah goyangan
            const duration = 6 + Math.random() * 5;
            icon.style.animation = `floatUp ${duration}s linear forwards`;

            document.getElementById("balloons").appendChild(icon);

            // Hapus setelah selesai animasi
            setTimeout(() => icon.remove(), duration * 1000);
        }

        // Animasi naik dengan goyangan
        const style = document.createElement("style");
        style.innerHTML = `
    @keyframes floatUp {
      0% { transform: translateY(0) translateX(0) scale(1); opacity: 1; }
      25% { transform: translateY(-30vh) translateX(-20px) scale(1.1); opacity: 0.9; }
      50% { transform: translateY(-60vh) translateX(20px) scale(1.2); opacity: 0.8; }
      75% { transform: translateY(-90vh) translateX(-15px) scale(1.25); opacity: 0.7; }
      100% { transform: translateY(-120vh) translateX(0) scale(1.3); opacity: 0; }
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    .spin {
      animation: spin 2s linear infinite;
    }
  `;
        document.head.appendChild(style);

        // Jalankan tiap 800ms

        // Confetti
        const confettiCanvas = document.getElementById("confetti-canvas");
        const ctx = confettiCanvas.getContext("2d");
        let confettiParticles = [];

        function resizeCanvas() {
            confettiCanvas.width = window.innerWidth;
            confettiCanvas.height = window.innerHeight;
        }
        window.addEventListener("resize", resizeCanvas);
        resizeCanvas();

        function ConfettiParticle() {
            this.x = Math.random() * confettiCanvas.width;
            this.y = Math.random() * confettiCanvas.height - confettiCanvas.height;
            this.r = Math.random() * 6 + 4;
            this.d = Math.random() * confettiCanvas.height;
            this.color = `hsl(${Math.random() * 360},100%,50%)`;
            this.tilt = Math.floor(Math.random() * 10) - 10;
            this.tiltAngleIncremental = Math.random() * 0.07 + 0.05;
            this.tiltAngle = 0;
            this.draw = function() {
                ctx.beginPath();
                ctx.lineWidth = this.r / 2;
                ctx.strokeStyle = this.color;
                ctx.moveTo(this.x + this.tilt + this.r / 4, this.y);
                ctx.lineTo(this.x + this.tilt, this.y + this.tilt + this.r / 4);
                ctx.stroke();
            };
        }

        function launchConfetti() {
            confettiParticles = [];
            for (let i = 0; i < 150; i++) {
                confettiParticles.push(new ConfettiParticle());
            }
            requestAnimationFrame(updateConfetti);
            setTimeout(() => (confettiParticles = []), 5000);
        }

        function updateConfetti() {
            ctx.clearRect(0, 0, confettiCanvas.width, confettiCanvas.height);
            confettiParticles.forEach((p) => {
                p.tiltAngle += p.tiltAngleIncremental;
                p.y += (Math.cos(p.d) + 3 + p.r / 2) / 2;
                p.x += Math.sin(p.tiltAngle);
                p.draw();
            });
            if (confettiParticles.length > 0) requestAnimationFrame(updateConfetti);
        }

        // ✅ Musik toggle dengan ikon mutar
        function toggleMusic() {
            const musicIcon = document.getElementById("music-icon");
            if (music.paused) {
                music.play();
                musicIcon.classList.remove("fa-play");
                musicIcon.classList.add("fa-stop", "spin");
            } else {
                music.pause();
                musicIcon.classList.remove("fa-stop", "spin");
                musicIcon.classList.add("fa-play");
            }
        }
    </script>

    <script>
        // Highlight navbar active state
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll("#bottom-nav a");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        navLinks.forEach((link) => {
                            link.classList.remove("text-yellow-300", "font-bold");
                            if (link.dataset.section === entry.target.id) {
                                link.classList.add("text-yellow-300", "font-bold");
                            }
                        });
                    }
                });
            }, {
                threshold: 0.6
            }
        );

        sections.forEach((section) => {
            observer.observe(section);
        });
    </script>

    <script>
        function copyRekening() {
            const rekening = document.getElementById("rekening").textContent;
            navigator.clipboard.writeText(rekening).then(() => {
                const alert = document.getElementById("copyAlert");
                alert.classList.remove("hidden");
                setTimeout(() => alert.classList.add("hidden"), 2000);
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
</body>

</html>