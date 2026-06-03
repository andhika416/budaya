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
            margin-top: 37px;
            margin-left: 70px;
            font-size: 10px;
            color: white;
        }

        nav {
            background-color: #0a3323;
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
            /* Sembunyikan dropdown secara default */
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

        body {
            background-color: #f5f5f5;
        }

        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            background-color: #0a3323;
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-control[readonly] {
            background-color: #f0f2f5;
            border: none;
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
            <h4 class="fw-bold mb-4">Data Akun Warga</h4>

            <!-- Filter Inputs -->
            <div class="row mb-3">
                <div class="col-md-3 mb-2">
                    <input type="text" id="filterNIK" class="form-control" placeholder="Filter NIK">
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" id="filterNama" class="form-control" placeholder="Filter Nama">
                </div>
                <div class="d-flex justify-content-start gap-2">
                    <button class="btn btn-outline-success" onclick="exportExcel()">Export Excel</button>
                    <button class="btn btn-outline-danger" onclick="exportPDF()">Export PDF</button>
                </div>
            </div>

            <!-- Table -->
            <table class="table table-bordered" id="akunTable">
                <thead class="table-primary">
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>No Telepon</th>
                        <th>Foto KTP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="akunBody">
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= esc($user['nama']) ?></td>
                            <td><?= esc($user['nik']) ?></td>
                            <td><?= esc($user['nama']) ?></td>
                            <td><?= esc($user['username']) ?></td>
                            <td><?= esc($user['password']) ?></td>
                            <td><?= esc($user['telepon']) ?></td>
                            <td>
                                <?php if (!empty($user['foto_ktp'])): ?>
                                    <img src="<?= base_url('uploads/ktp/' . $user['foto_ktp']) ?>" alt="KTP" width="60">
                                <?php else: ?>
                                    Tidak ada foto
                                <?php endif; ?>
                            </td>
                            <td>
                                <form action="<?= base_url('admin_akunwarga/delete/' . $user['id_user']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>


            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-between">
                <button id="prevPage" class="btn btn-secondary btn-sm">Previous</button>
                <button id="nextPage" class="btn btn-secondary btn-sm">Next</button>
            </div>
        </div>

</body>

<!-- JS Filter + Pagination -->
<script>
    const filterNIK = document.getElementById('filterNIK');
    const filterNama = document.getElementById('filterNama');
    const rows = Array.from(document.querySelectorAll('#akunBody tr'));
    const prevBtn = document.getElementById('prevPage');
    const nextBtn = document.getElementById('nextPage');

    let currentPage = 1;
    const rowsPerPage = 10;

    function filterData() {
        const nikVal = filterNIK.value.toLowerCase().trim();
        const namaVal = filterNama.value.toLowerCase().trim();
        return rows.filter(row => {
            const nik = row.cells[1].textContent.toLowerCase();
            const nama = row.cells[0].textContent.toLowerCase();
            return nik.includes(nikVal) && nama.includes(namaVal);
        });
    }

    function displayRows() {
        const filtered = filterData();
        const totalPages = Math.ceil(filtered.length / rowsPerPage);
        currentPage = Math.min(currentPage, totalPages) || 1;
        rows.forEach(row => row.style.display = 'none');
        const start = (currentPage - 1) * rowsPerPage;
        const end = start + rowsPerPage;
        filtered.slice(start, end).forEach(row => row.style.display = '');
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages || totalPages === 0;
    }

    [filterNIK, filterNama].forEach(input => {
        input.addEventListener('input', () => {
            currentPage = 1;
            displayRows();
        });
    });

    prevBtn.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayRows();
        }
    });

    nextBtn.addEventListener('click', () => {
        const filtered = filterData();
        const totalPages = Math.ceil(filtered.length / rowsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayRows();
        }
    });

    displayRows();
</script>

<!-- JS Library: jsPDF & SheetJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

<!-- Export Functions -->
<script>
    function exportExcel() {
        const wb = XLSX.utils.book_new();
        const ws_data = [
            ["Nama", "NIK", "Nama Lengkap", "Username", "Password", "No Telepon"]
        ];
        filterData().forEach(row => {
            ws_data.push([
                row.cells[0].innerText,
                row.cells[1].innerText,
                row.cells[2].innerText,
                row.cells[3].innerText,
                row.cells[4].innerText,
                row.cells[5].innerText,
            ]);
        });
        const ws = XLSX.utils.aoa_to_sheet(ws_data);
        XLSX.utils.book_append_sheet(wb, ws, "AkunWarga");
        XLSX.writeFile(wb, "akun_warga.xlsx");
    }

    async function exportPDF() {
        const {
            jsPDF
        } = window.jspdf;
        const doc = new jsPDF();
        doc.text("Data Akun Warga", 14, 15);
        let y = 25;
        doc.setFontSize(9);
        doc.text("Nama", 14, y);
        doc.text("NIK", 40, y);
        doc.text("Nama Lengkap", 70, y);
        doc.text("Username", 110, y);
        doc.text("Password", 140, y);
        doc.text("No Telepon", 170, y);

        y += 5;
        filterData().forEach(row => {
            doc.text(row.cells[0].innerText, 14, y);
            doc.text(row.cells[1].innerText, 40, y);
            doc.text(row.cells[2].innerText, 70, y);
            doc.text(row.cells[3].innerText, 110, y);
            doc.text(row.cells[4].innerText, 140, y);
            doc.text(row.cells[5].innerText, 170, y);
            y += 7;
        });

        doc.save("akun_warga.pdf");
    }
</script>


</html>

