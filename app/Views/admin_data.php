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

        .container {
            margin-top: 40px;
            margin-left: 200px;
        }

        .table-wrapper {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 100px;
            margin-left: 100px;
        }

        .table thead {
            background-color: #d0ebe6;
            color: #000;
        }

        .btn-add {
            margin-bottom: 20px;
        }

        .btn-edit {
            background-color: #007bff;
            color: #fff;
        }

        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }

        .pagination {
            justify-content: center;
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
            <a href="/admin_surat"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/document--v1.png" /> Surat Pengantar RT/RW</a>
            <a href="/admin_iuran"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/money.png" /> Rekap Iuran Sampah</a>
            <a href="/admin_laporan"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/error.png" /> Laporan Warga</a>
            <a href="/admin_akunwarga"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/user.png" /> Akun Warga</a>
        </div>
    </div>

    <div class="container">
        <div class="table-wrapper">
            <h4 class="fw-bold mb-4">Data Warga Pindah dan Tinggal</h4>

            <div class="table-responsive">
                <div class="mb-3">
                    <a href="/tambah_warga" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addWargaModal">
                        Tambah Warga
                    </a>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-6 mb-2">
                        <input type="text" id="searchInput" class="form-control" placeholder="Cari Nama atau NIK..." onkeyup="searchTable()">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="filterDate">Filter Tanggal:</label>
                        <input type="date" id="filterDate" class="form-control" onchange="filterDate()">
                    </div>
                </div>

                <table class="table table-bordered table-striped">
                    <thead class="table-success text-center">
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat Asal</th>
                            <th>Alamat Tujuan</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable" class="paginated">
                        <?php foreach ($warga as $w): ?>
                            <tr>
                                <td><?= esc($w['nama_lengkap']) ?></td>
                                <td><?= esc($w['nik']) ?></td>
                                <td><?= esc($w['jenis_kelamin']) ?></td>
                                <td><?= esc($w['alamat_asal']) ?></td>
                                <td><?= esc($w['alamat_tujuan']) ?></td>
                                <td><?= esc($w['status']) ?></td>
                                <td><?= esc($w['tanggal']) ?></td>
                                <td><?= esc($w['keterangan']) ?></td>
                                <td class="text-center">
                                    <a href="<?= site_url('edit_warga/' . $w['id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="<?= site_url('hapus_warga/' . $w['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <button id="prevPage" class="btn btn-outline-primary btn-sm">Previous</button>
                    <span id="pageInfo" class="mx-2">Page 1</span>
                    <button id="nextPage" class="btn btn-outline-primary btn-sm">Next</button>
                </div>

            </div>
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
<script>
    const rowsPerPage = 10;
    let currentPage = 1;

    function showPage(page) {
        const rows = document.querySelectorAll("#dataTable tr");
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;

        currentPage = page;

        for (let i = 0; i < rows.length; i++) {
            rows[i].style.display = (i >= (page - 1) * rowsPerPage && i < page * rowsPerPage) ? '' : 'none';
        }

        document.getElementById("pageInfo").textContent = `Page ${page}`;
        document.getElementById("prevPage").disabled = (page === 1);
        document.getElementById("nextPage").disabled = (page === totalPages);
    }

    document.getElementById("prevPage").addEventListener("click", () => showPage(currentPage - 1));
    document.getElementById("nextPage").addEventListener("click", () => showPage(currentPage + 1));

    window.addEventListener("DOMContentLoaded", () => showPage(1));
</script>

</body>

</html>

