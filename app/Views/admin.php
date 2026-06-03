<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RW</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- STYLES -->

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            max-width: 100%;
            overflow-x: hidden;
        }

        .logo {
            position: absolute;
            margin-top: 2px;

            width: 52px;
            height: 50px;
            z-index: 1000;
            max-width: 100%;
        }

        .judul1 {
            position: absolute;
            z-index: 1001;
        }

        .judul1 h1 {
            margin-top: 0px;
            margin-left: 50px;
            font-size: 15px;
            color: white;
        }

        .judul2 {
            position: absolute;
            z-index: 1001;
        }

        .judul2 h2 {
            font-weight: 500;
            margin-top: 25px;
            margin-left: 50px;
            font-size: 10px;
            color: white;
        }

        nav {
            background-color: rgba(1, 133, 119, 0.8);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            font-family: 'Poppins', sans-serif;
            max-width: 100%;
            transition: border-bottom 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;

        }

        .navbar-nav {
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }

        .menu {
            list-style-type: none;
            padding: 0;
        }

        .menu>li {
            position: relative;
            display: inline-block;
        }

        .menu a {
            text-decoration: none;
            padding: 15px;
            display: block;
        }

        .dropdown {
            display: none;
            position: absolute;
            background-color: #0a3323;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .menu>li:hover .dropdown {
            display: block;
            /* Tampilkan dropdown saat hover */
        }

        .dropdown li {
            display: block;
            /* Tampilkan item dropdown dalam baris */
        }

        .dropdown a {
            padding: 10px 5px;
            /* Padding untuk item dropdown */
            white-space: nowrap;
            /* Mencegah teks membungkus */
        }

        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            width: 100%;
        }

        .menu li {
            margin-left: 5px;
        }

        .menu li a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            padding-right: 50px;
        }

        .menu a:hover {
            font-weight: bold;
            color: #E27602;
        }

        .content {
            margin-top: 40px;
            /* Jarak dari atas */
            margin-left: 300px;
            /* Supaya tidak ketimpa sidebar */
            font-size: 18px;
            /* Ukuran teks biasa */
        }

        .content h1 {
            font-size: 32px;
            /* Ukuran heading */
            font-weight: bold;
        }

        .content p {
            font-size: 18px;
            margin-right: 200px;
        }


        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background-color: #0a3323;
            padding-top: 20px;
            color: white;
            overflow-y: auto;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            font-size: 14px;
        }

        .sidebar a:hover {
            background-color: #016b63;
        }

        .dropdown-toggle::after {
            float: right;
            margin-top: 6px;
        }

        .dropdown-menu {
            background-color: #017a6c;
        }

        .dropdown-menu a {
            color: white !important;
        }

        .dropdown-menu a:hover {
            background-color: #016b63 !important;
        }

        .sidebar img.icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
    </style>

    </style>

    </style>

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
            font-family: 'Poppins', sans-serif;
            /* Changed to Poppins */
        }
    </style>
</head>

<body>
    <!-- Your body content goes here -->
</body>

</html>

<body>


    <?= view('partials/public_navbar', ['activePage' => '']) ?>
<div class="d-flex">
    <div class="sidebar col-3 col-md-2">
        <h5 class="text-center mb-5"></h5>
        <a href="/admin"> <img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/dashboard.png" /> Dashboard</a>
        <a href="/admin_data"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/groups.png" /> Pendataan Warga</a>
        <a href="/admin_surat"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/document--v1.png" /> Surat Pengantar RT/RW</a>
        <a href="/admin_iuran"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/money.png" /> Rekap Iuran Sampah</a>
        <a href="/admin_laporan"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/error.png" /> Laporan Warga</a>
        <a href="/admin_akunwarga"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/user.png" /> Akun Warga</a>
    </div>
</div>

<div class="content">
    <h1>Selamat Datang di Admin E-Rukun Warga</h1>
</div>
<div class="dashboard-container">
    <div class="card card-warga-pindah">
        <div class="card-value" id="warga-pindah"><?= $wargaPindah ?></div>
        <div class="card-title">Warga Pindah</div>
    </div>

    <div class="card card-warga-tinggal">
        <div class="card-value" id="warga-tinggal"><?= $wargaTinggal ?></div>
        <div class="card-title">Warga Tinggal</div>
    </div>

    <div class="card card-laporan">
        <div class="card-value" id="laporan-warga"><?= $laporanWarga ?></div>
        <div class="card-title">Laporan Warga</div>
    </div>

    <div class="card card-surat">
        <div class="card-value" id="surat-pengantar"><?= $suratPengantar ?></div>
        <div class="card-title">Surat Pengantar</div>
    </div>
</div>
</div>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f7fa;
        margin: 0;
        padding: 15px;
        color: #333;
    }

    .dashboard-header {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
    }

    .dashboard-header h1 {
        font-size: 1.5rem;
        margin-bottom: 5px;
    }

    .dashboard-header p {
        font-size: 0.9rem;
        color: #7f8c8d;
        margin-top: 0;
    }

    .dashboard-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        max-width: 900px;
        margin: 0 auto;
        padding: 0 10px;
        margin-left: 275px;
        margin-top: 30px;
    }

    .card {
        background-color: white;
        border-radius: 8px;
        padding: 18px;
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: all 0.2s ease;
    }

    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 8px rgba(0, 0, 0, 0.15);
    }

    .card-value {
        font-size: 28px;
        font-weight: bold;
        margin: 12px 0 8px;
        color: #3498db;
        line-height: 1.2;
    }

    .card-title {
        font-size: 14px;
        color: #7f8c8d;
        margin-bottom: 5px;
        font-weight: 500;
    }

    .card small {
        font-size: 12px;
        color: #95a5a6;
        display: block;
    }

    .card-warga-pindah {
        border-top: 3px solid #e74c3c;
    }

    .card-warga-tinggal {
        border-top: 3px solid #2ecc71;
    }

    .card-laporan {
        border-top: 3px solid #f39c12;
    }

    .card-surat {
        border-top: 3px solid #9b59b6;
    }

    @media (max-width: 600px) {
        .dashboard-container {
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .card {
            padding: 15px 10px;
        }

        .card-value {
            font-size: 24px;
        }
    }
</style>
</head>


</html>

</header>

<!-- CONTENT -->


<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->



<!-- SCRIPTS -->



<!-- -->

<script>
    const dropdownToggle = document.getElementById('dropdownLembaga');
    const dropdownMenu = document.getElementById('menuLembaga');

    dropdownToggle.addEventListener('click', function(e) {
        e.preventDefault();
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Optional: Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.style.display = 'none';
        }
    });
</script>

<script>
    // CARA 3: Auto-refresh setiap 30 detik
    function startAutoRefresh() {
        updateDataFromAPI(); // Langsung ambil data pertama kali
        setInterval(updateDataFromAPI, 30000); // Update setiap 30 detik
    }

    // Fungsi untuk update tampilan
    function updateDashboard(data) {
        document.getElementById('warga-pindah').textContent = data.pindah;
        document.getElementById('warga-tinggal').textContent = data.tinggal;
        document.getElementById('laporan-warga').textContent = data.laporan;
        document.getElementById('surat-pengantar').textContent = data.surat;

        // Tambahkan animasi update
        const cards = document.querySelectorAll('.card-value');
        cards.forEach(card => {
            card.style.transform = 'scale(1.1)';
            setTimeout(() => card.style.transform = 'scale(1)', 300);
        });
    }
    // Panggil fungsi update dengan data Anda
    updateDashboard(dataWarga);
</script>
</body>

</html>

