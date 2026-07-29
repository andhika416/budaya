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
            margin-left: 15px;
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
            margin-left: 70px;
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
            margin-left: 70px;
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
            margin-top: 20px;
            /* Jarak dari atas */
            margin-left: 250px;
            /* Supaya tidak ketimpa sidebar */
            font-size: 14px;
            margin-bottom: 30px;
            /* Ukuran teks biasa */
        }

        .content h1 {
            font-size: 20px;
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
.sidebar img.icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
table {
            font-size: 14px;
            /* Set font size for table */
        }

        th,
        td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            font-size: 14px;
            /* Set font size for table header */
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
    <?= view('partials/tailwind_head') ?>
</head>

<body>


    <?= view('partials/public_navbar', ['activePage' => '']) ?>
<div class="flex">
    <div class="sidebar col-span-3 md:col-span-2">
        <h5 class="text-center mb-5"></h5>
        <a href="/admin"> <img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/dashboard.png" /> Dashboard</a>
        <a href="/admin_data"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/groups.png" /> Pendataan Warga</a>
        <a href="/"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/document--v1.png" /> Surat Keterangan RT/RW</a>
        <a href="/admin_iuran"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/money.png" /> Rekap Iuran Sampah</a>
        <a href="#"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/error.png" /> Laporan Warga</a>
        <a id="dropdownLembaga" class="inline-flex items-center gap-2" href="#" role="button">
            <img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/organization.png" /> Lembaga
        </a>
        <ul id="menuLembaga" class="mt-2 rounded-xl bg-rw-green/95 p-2 shadow-soft border-0 shadow" style="display: none;">
            <li>
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-white hover:bg-white/10" href="#"><img class="icon" src="https://img.icons8.com/ios-filled/24/ffffff/administrator-male.png" /> Perangkat RT/RW</a>
            </li>
            <li>
                <a class="flex items-center gap-2 rounded-lg px-3 py-2 text-sm text-white hover:bg-white/10" href="#"><img class="icon" src="https://img.icons8.com/ios-filled/24/ffffff/teamwork.png" /> Karang Taruna</a>
            </li>
        </ul>
    </div>
</div>

<div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 mt-5">
    <div class="content">
        <h1>Tambah Warga Pindah dan Tinggal</h1>
    </div>
    <!-- Modal Body -->
    <div class="rounded-2xl bg-white p-5 shadow-soft">
        <div class="form-container bg-slate-100 rounded p-4">
            <!-- Form untuk menambah warga -->
            <h2>Form Tambah Warga</h2>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="mb-4 rounded-xl border px-4 py-3 text-sm border-emerald-200 bg-emerald-50 text-emerald-800"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <form id="formTambahWarga" action="<?= base_url('warga/store') ?>" method="post">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                </div>
                <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                </div>
                <div class="form-group">
                    <label>Alamat Asal</label>
                    <input type="text" name="alamat_asal" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                </div>
                <div class="form-group">
                    <label>Alamat Tujuan</label>
                    <input type="text" name="alamat_tujuan" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15"></textarea>
                </div>
                <button type="submit" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-rw-green text-white hover:bg-rw-teal focus:ring-rw-green/20">Simpan</button>
            </form>

        </div>
    </div>

    <!-- Modal Footer -->
    <div class="mt-4 flex flex-wrap items-center justify-end gap-2">
        <a href="/admin_data" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-slate-600 text-white hover:bg-slate-700 focus:ring-slate-300">Tutup</button> </a>
        <button type="submit" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-rw-green text-white hover:bg-rw-teal focus:ring-rw-green/20" form="formTambahWarga">Simpan</button>
    </div>

    <!-- Tambahkan CSS di bagian atas halaman Anda atau di dalam <style> -->
    <style>
        .form-container {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-left: 250px;
        }
</style>

</div>


</body>

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
    // Fungsi untuk pencarian tabel
    function searchTable() {
        let input = document.getElementById("searchInput").value.toUpperCase();
        let table = document.getElementById("dataTable");
        let tr = table.getElementsByTagName("tr");

        for (let i = 0; i < tr.length; i++) {
            let td = tr[i].getElementsByTagName("td");
            let matchFound = false;

            for (let j = 0; j < td.length - 1; j++) { // Exclude the last column (Aksi)
                if (td[j] && td[j].innerHTML.toUpperCase().indexOf(input) > -1) {
                    matchFound = true;
                }
            }

            if (matchFound) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    // Fungsi untuk filter tanggal
    function filterDate() {
        let filterDate = document.getElementById("filterDate").value;
        let table = document.getElementById("dataTable");
        let tr = table.getElementsByTagName("tr");

        for (let i = 0; i < tr.length; i++) {
            let td = tr[i].getElementsByTagName("td")[6]; // Kolom Tanggal
            if (td) {
                let date = td.textContent || td.innerText;
                if (date.indexOf(filterDate) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>

</html>

