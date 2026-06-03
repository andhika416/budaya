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
            <h4 class="fw-bold mb-4">Data Iuran Sampah Bulanan</h4>

            <div class="table-responsive">
                <div class="mb-3">
                    <a href="/tambah_iuran" class="btn btn-success">Tambah Iuran</a>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-4 mb-2">
                        <label for="filterMonth">Filter Bulan:</label>
                        <select id="filterMonth" class="form-control" onchange="filterData()">
                            <option value="">Semua Bulan</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-2">
                        <label for="filterYear">Filter Tahun:</label>
                        <input type="number" id="filterYear" class="form-control" placeholder="Contoh: 2025" onchange="filterData()">
                    </div>
                </div>

                <table class="table table-bordered table-striped">
                    <thead class="table-success text-center">
                        <tr>
                            <th>ID</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Total Pemasukan</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="dataTable" class="paginated">
                        <?php foreach ($iuran as $row): ?>
                            <tr>
                                <td><?= $row['id']; ?></td>
                                <td><?= $row['bulan']; ?></td>
                                <td><?= $row['tahun']; ?></td>
                                <td>Rp <?= number_format($row['total_pemasukan'], 0, ',', '.'); ?></td>
                                <td><?= $row['keterangan']; ?></td>
                                <td class="text-center">
                                    <a href="/edit_iuran/<?= $row['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <form action="/hapus_iuran/<?= $row['id']; ?>" method="post" style="display:inline;">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
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

<script>
    function filterData() {
        let filterMonth = document.getElementById("filterMonth").value;
        let filterYear = document.getElementById("filterYear").value;
        let table = document.getElementById("dataTable");
        let tr = table.getElementsByTagName("tr");

        for (let i = 0; i < tr.length; i++) {
            let tdMonth = tr[i].getElementsByTagName("td")[1];
            let tdYear = tr[i].getElementsByTagName("td")[2];

            if (tdMonth && tdYear) {
                let month = tdMonth.textContent || tdMonth.innerText;
                let year = tdYear.textContent || tdYear.innerText;

                let matchMonth = filterMonth === "" || month === filterMonth;
                let matchYear = filterYear === "" || year === filterYear;

                tr[i].style.display = (matchMonth && matchYear) ? "" : "none";
            }
        }
    }

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

