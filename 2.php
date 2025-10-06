<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Undangan Gathering Batak 2025</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a2e0e6ad65.js" crossorigin="anonymous"></script>
    <style>
        .marquee span {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .balloon {
            position: absolute;
            bottom: -150px;
            width: 40px;
            height: 50px;
            background: red;
            border-radius: 50% 50% 50% 50%;
            animation: float 10s infinite ease-in;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-110vh);
            }
        }
    </style>
</head>

<body class="bg-gray-100 overflow-hidden">

    <!-- Welcome Page -->
    <div id="welcome" class="h-screen flex items-center justify-center text-center text-white relative"
        style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), 
              url('https://upload.wikimedia.org/wikipedia/commons/5/59/Ulos_Ragidup.jpg') center/cover;">
        <div>
            <h1 class="text-3xl md:text-5xl font-bold mb-4">Pesta Bona Taon 2025</h1>

            <div class="w-40 h-40 mx-auto mb-4 rounded-full overflow-hidden border-4 border-white shadow-lg">
                <img src="https://source.unsplash.com/300x300/?family" alt="logo/foto" class="w-full h-full object-cover">
            </div>

            <h2 class="text-2xl md:text-4xl mb-6 font-semibold">Gathering Keluarga Batak</h2>
            <p class="italic mb-6">Horas! Mari kita rayakan kebersamaan dengan penuh sukacita 🎶</p>

            <button onclick="openInvitation()"
                class="bg-gradient-to-r from-yellow-400 via-red-500 to-yellow-500 text-white px-8 py-3 rounded-full text-lg shadow-xl hover:scale-110 transition">
                <i class="fa-solid fa-envelope-open mr-2"></i> Buka Undangan
            </button>
        </div>
    </div>

    <!-- Hero Section (hidden awal) -->
    <section id="hero" class="hidden h-screen flex flex-col items-center justify-center bg-cover bg-center relative overflow-hidden"
        style="background-image:url('https://source.unsplash.com/1600x900/?lake,batak')">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative text-center text-white z-10 px-4">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Gathering Keluarga Batak 2025</h1>
            <p class="text-lg md:text-xl mb-6 italic">"Horas! Mari kita bersatu, merajut tali kebersamaan dalam budaya Batak."</p>
            <!-- Countdown Timer -->
            <div id="countdown" class="flex justify-center gap-4 mb-6 text-lg font-semibold"></div>
        </div>
        <!-- Balon & Confetti -->
        <div id="balloons"></div>
        <canvas id="confetti-canvas" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>
        <!-- Marquee -->
        <div class="absolute bottom-0 w-full bg-red-700 text-white font-bold text-lg marquee">
            <span> 🎶 Horas! Selamat datang di Gathering Keluarga Batak 2025 • Mari kita rayakan kebersamaan dengan penuh sukacita • 🎶 </span>
        </div>
    </section>

    <!-- Detail Acara -->
    <section id="details" class="hidden py-16 bg-white text-center">
        <h2 class="text-3xl font-bold mb-4">📅 Detail Acara</h2>
        <p class="mb-2">Tanggal: <b>25 Desember 2025</b></p>
        <p class="mb-2">Tempat: <b>Danau Toba Convention Hall</b></p>
        <p class="mb-6">Dresscode: <b>Nuansa Batak</b></p>
    </section>

    <!-- Galeri -->
    <section id="gallery" class="hidden py-16 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-6">📸 Galeri</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 px-4 md:px-20">
            <img src="https://source.unsplash.com/400x300/?batak,culture" class="rounded-lg shadow">
            <img src="https://source.unsplash.com/400x300/?dance,batak" class="rounded-lg shadow">
            <img src="https://source.unsplash.com/400x300/?ulos,batak" class="rounded-lg shadow">
        </div>
    </section>

    <!-- RSVP -->
    <section id="rsvp" class="hidden py-16 bg-white text-center">
        <h2 class="text-3xl font-bold mb-4">🙏 Konfirmasi Kehadiran</h2>
        <form class="max-w-md mx-auto">
            <input type="text" placeholder="Nama" class="w-full mb-4 p-3 border rounded">
            <select class="w-full mb-4 p-3 border rounded">
                <option>Hadir</option>
                <option>Tidak Hadir</option>
            </select>
            <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded">Kirim</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="hidden bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2025 Gathering Keluarga Batak. Horas!</p>
    </footer>

    <!-- Musik -->
    <audio id="music" loop>
        <source src="https://www.bensound.com/bensound-music/bensound-sunny.mp3" type="audio/mpeg">
    </audio>

    <script>
        const music = document.getElementById("music");

        function openInvitation() {
            document.getElementById("welcome").style.display = "none";
            document.getElementById("hero").classList.remove("hidden");
            document.getElementById("details").classList.remove("hidden");
            document.getElementById("gallery").classList.remove("hidden");
            document.getElementById("rsvp").classList.remove("hidden");
            document.querySelector("footer").classList.remove("hidden");
            document.body.style.overflow = "auto";
            music.play();
            launchConfetti();
            createBalloons();
        }

        // Countdown
        const eventDate = new Date("Dec 25, 2025 10:00:00").getTime();
        setInterval(() => {
            const now = new Date().getTime();
            const diff = eventDate - now;
            if (diff < 0) return;
            const d = Math.floor(diff / (1000 * 60 * 60 * 24));
            const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const s = Math.floor((diff % (1000 * 60)) / 1000);
            document.getElementById("countdown").innerHTML =
                `<div>${d}<br><span class='text-sm'>Hari</span></div>
         <div>${h}<br><span class='text-sm'>Jam</span></div>
         <div>${m}<br><span class='text-sm'>Menit</span></div>
         <div>${s}<br><span class='text-sm'>Detik</span></div>`;
        }, 1000);

        // Balon
        function createBalloons() {
            const container = document.getElementById("balloons");
            for (let i = 0; i < 10; i++) {
                let b = document.createElement("div");
                b.className = "balloon";
                b.style.left = Math.random() * 100 + "%";
                b.style.background = ["#ff4d4d", "#ffcc00", "#00ccff", "#66ff66"][Math.floor(Math.random() * 4)];
                b.style.animationDuration = (5 + Math.random() * 5) + "s";
                container.appendChild(b);
            }
        }

        // Confetti
        function launchConfetti() {
            const canvas = document.getElementById("confetti-canvas");
            const ctx = canvas.getContext("2d");
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
            const confetti = Array.from({
                length: 150
            }).map(() => ({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                r: Math.random() * 6 + 4,
                d: Math.random() * Math.PI * 2,
                s: Math.random() * 3 + 2
            }));

            function draw() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                confetti.forEach(p => {
                    ctx.beginPath();
                    ctx.fillStyle = `hsl(${Math.random()*360},100%,50%)`;
                    ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2, true);
                    ctx.fill();
                    p.y += p.s;
                    if (p.y > canvas.height) p.y = 0;
                });
                requestAnimationFrame(draw);
            }
            draw();
        }
    </script>
</body>

</html>