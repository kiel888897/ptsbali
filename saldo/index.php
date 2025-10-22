<?php

require_once '../db.php';
// Query gabungan untuk total pemasukan
$query = "
SELECT 
    IFNULL((SELECT SUM(toktok + sukarela) FROM iuran), 0) +
    IFNULL((SELECT SUM(jumlah) FROM sumbangan WHERE jenis = 'dana'), 0) +
    IFNULL((SELECT SUM(bayar) FROM bayar_kupon), 0) +
    IFNULL((SELECT SUM(jumlah) FROM bayar_baju), 0) +
    IFNULL((SELECT SUM(jumlah) FROM bayar_silua), 0) AS total_pemasukan
";

$stmt = $pdo->query($query);
$total = $stmt->fetch(PDO::FETCH_ASSOC);

// Ambil nilai total pemasukan
$total_pemasukan = $total['total_pemasukan'];

// ===== TOTAL PENGELUARAN =====
$queryPengeluaran = "SELECT IFNULL(SUM(jumlah), 0) AS total_pengeluaran FROM pengeluaran";
$stmt2 = $pdo->query($queryPengeluaran);
$total2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$total_pengeluaran = $total2['total_pengeluaran'];
$saldo = $total_pemasukan - $total_pengeluaran;
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <title>Saldo Bona Taon Punguan Tuan Sihubil</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Panitia Bona Taon PTS" />
    <meta name="author" content="KIEL" />
    <meta
        name="description"
        content="Panitia Bona Taon PTS" />
    <meta
        name="keywords"
        content="Panitia Bona Taon PTS" />

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #000, #400000);
            color: white;
            overflow: hidden;
        }

        .batak-bg {
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200"><path d="M0,100 L100,0 L200,100 L100,200 Z" fill="none" stroke="%23b30000" stroke-width="6"/></svg>');
            background-size: 150px;
            background-repeat: repeat;
            opacity: 0.06;
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .motif-batak {
            position: absolute;
            inset: 0;
            opacity: 0.05;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/2/2a/Batak_Gorga.svg');
            background-repeat: repeat;
            background-size: 300px;
            pointer-events: none;
        }

        .loader-image {
            width: 150px;
            height: 150px;
            animation: pulse 2s infinite ease-in-out;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.9;
            }

            50% {
                transform: scale(1.1);
                opacity: 1;
            }

            100% {
                transform: scale(1);
                opacity: 0.9;
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .saldo-glow {
            text-shadow: 0 0 6px #ff1a1a, 0 0 12px #ff3333, 0 0 24px #ff6666;
            animation: glowPulse 2s infinite alternate;
            line-height: 1.2;
            word-break: break-word;
        }


        @keyframes glowPulse {
            0% {
                text-shadow: 0 0 8px #ff1a1a, 0 0 16px #ff3333, 0 0 32px #ff6666;
            }

            100% {
                text-shadow: 0 0 20px #ff4d4d, 0 0 40px #ff6666, 0 0 60px #ff8080;
            }
        }

        .glow-button {
            box-shadow: 0 0 10px #b30000, 0 0 20px #ff1a1a, 0 0 30px #ff3333;
            animation: pulseGlow 2s infinite alternate;
        }

        @keyframes pulseGlow {
            0% {
                box-shadow: 0 0 6px #b30000, 0 0 12px #ff1a1a, 0 0 20px #ff3333;
                transform: scale(1);
            }

            100% {
                box-shadow: 0 0 20px #ff3333, 0 0 40px #ff4d4d, 0 0 60px #ff6666;
                transform: scale(1.05);
            }
        }

        .title-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #ffcccc;
            text-shadow: 0 0 8px #b30000, 0 0 16px #ff3333;
            letter-spacing: 1px;
            margin-bottom: 1rem;
            animation: titleGlow 2s infinite alternate;
        }

        @keyframes titleGlow {
            0% {
                text-shadow: 0 0 6px #b30000, 0 0 12px #ff1a1a;
            }

            100% {
                text-shadow: 0 0 16px #ff3333, 0 0 32px #ff6666;
            }
        }

        /* Responsif agar angka saldo tidak terpotong */
        #saldoValue {
            display: inline-block;
            max-width: 90vw;
            /* agar tidak melebihi lebar layar */
            overflow-wrap: break-word;
            word-wrap: break-word;
            font-size: clamp(2rem, 8vw, 5rem);
            /* ukuran otomatis menyesuaikan layar */
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen relative">
    <div class="batak-bg"></div>

    <!-- Tombol Mulai -->
    <div id="startButton" class="text-center z-10">
        <h2 class="title-text pb-2">Saldo Bona Taon Punguan Tuan Sihubil</h2>
        <button onclick="mulaiSaldo()"
            class="bg-red-700 hover:bg-red-800 text-white px-6 py-3 rounded-lg font-semibold glow-button">
            Lihat Saldo
        </button>
    </div>



    <!-- Loading dengan gambar -->
    <div id="loading" class="hidden text-center z-10">
        <img src="loading.png" alt="Loading..." class="loader-image mx-auto mb-6">
        <p class="text-gray-300 text-lg">Satongkin ma, mangitung saldo...</p>
    </div>

    <!-- Tampilan Saldo -->
    <div id="saldoContainer" class="hidden text-center fade-in z-10">
        <h1 class="text-5xl md:text-7xl font-extrabold text-white-600 drop-shadow-lg saldo-glow">Rp <span id="saldoValue">0</span></h1>
    </div>

    <!-- Suara Gong -->
    <audio id="gongSound" src="gong_batak.mp3" preload="auto"></audio>

    <script>
        //const saldo = <?php echo $saldo; ?>;
        const saldo = 100000000000;

        function mulaiSaldo() {
            document.getElementById('startButton').classList.add('hidden');
            document.getElementById('loading').classList.remove('hidden');

            setTimeout(() => {
                document.getElementById('loading').classList.add('hidden');
                document.getElementById('saldoContainer').classList.remove('hidden');
                countUpSaldo(saldo);

                const gong = document.getElementById('gongSound');
                gong.currentTime = 0;
                gong.play().catch(e => console.log('Tidak bisa play:', e));
            }, 3000);
        }

        function countUpSaldo(target) {
            let current = 0;
            const duration = 2000;
            const increment = target / (duration / 30);
            const saldoEl = document.getElementById('saldoValue');

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                saldoEl.textContent = current.toLocaleString('id-ID');
            }, 30);
        }
    </script>
</body>

</html>