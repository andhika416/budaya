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

        .container {
            margin-top: 50px;
        }

        .table-responsive {
            margin-left: 250px;
            /* Adjust left margin for table */

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

        .btn {
            font-size: 14px;
            /* Set font size for buttons */
        }

        .btn-sm {
            padding: 5px 10px;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-success {
            background-color: #28a745;
            color: white;
        }

        .form-control {
            width: 200px;
            display: inline-block;
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


    <?= view('partials/public_navbar', ['activePage' => '']) ?>
<div class="d-flex">
            <div class="sidebar col-3 col-md-2">
                <h5 class="text-center mb-5"></h5>
                <a href="/admin"> <img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/dashboard.png" /> Dashboard</a>
                <a href="/admin_data"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/groups.png" /> Pendataan Warga</a>
                <a href=""><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/document--v1.png" /> Surat Keterangan RT/RW</a>
                <a href="/admin_iuran"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/money.png" /> Rekap Iuran Sampah</a>
                <a href="#"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/error.png" /> Laporan Warga</a>
                <a id="dropdownLembaga" class="dropdown-toggle" href="#" role="button">
                    <img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/organization.png" /> Lembaga
                </a>
                <ul id="menuLembaga" class="dropdown-menu border-0 shadow" style="display: none;">
                    <li>
                        <a class="dropdown-item" href="#"><img class="icon" src="https://img.icons8.com/ios-filled/24/ffffff/administrator-male.png" /> Perangkat RT/RW</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><img class="icon" src="https://img.icons8.com/ios-filled/24/ffffff/teamwork.png" /> Karang Taruna</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container mt-5">
            <div class="content">
                <h1>Edit Warga Pindah dan Tinggal</h1>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="form-container bg-light rounded p-4">
                    <!-- Form untuk menambah warga -->
                    <form id="formTambahWarga" action="/edit_warga/update/<?= $warga['id'] ?>" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $warga['nama_lengkap'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" value="<?= $warga['nik'] ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="laki-laki" <?= $warga['jenis_kelamin'] === 'laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                    <option value="perempuan" <?= $warga['jenis_kelamin'] === 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option disabled selected>Pilih Status</option>
                                    <option value="pindah" <?= $warga['status'] === 'pindah' ? 'selected' : '' ?>>Pindah</option>
                                    <option value="tinggal" <?= $warga['status'] === 'tinggal' ? 'selected' : '' ?>>Tinggal</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="alamat_asal" class="form-label">Alamat Asal</label>
                                <input type="text" class="form-control" id="alamat_asal" name="alamat_asal" value="<?= $warga['alamat_asal'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="alamat_tujuan" class="form-label">Alamat Tujuan</label>
                                <input type="text" class="form-control" id="alamat_tujuan" name="alamat_tujuan" value="<?= $warga['alamat_tujuan'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $warga['tanggal'] ?>">
                            </div>
                            <div class="col-12">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= $warga['keterangan'] ?></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <a href="/admin_data" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button> </a>
                <button type="submit" class="btn btn-primary" form="formTambahWarga">Simpan</button>
            </div>

            <!-- Tambahkan CSS di bagian atas halaman Anda atau di dalam <style> -->
            <style>
                .form-container {
                    background-color: #f8f9fa;
                    border-radius: 10px;
                    padding: 20px;
                    margin-left: 250px;
                }

                .form-label {
                    font-weight: 500;
                }
            </style>

        </div>


</body>

</html>

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

