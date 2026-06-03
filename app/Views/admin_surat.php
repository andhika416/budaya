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
            <h4 class="fw-bold mb-4">Data Surat Pengantar Warga</h4>

            <!-- Table -->
            <div class="row mb-3">
                <div class="col-md-3 mb-2">
                    <input type="text" id="filterNama" class="form-control" placeholder="Filter Nama" />
                </div>
                <div class="col-md-3 mb-2">
                    <input type="text" id="filterNIK" class="form-control" placeholder="Filter NIK" />
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-success" onclick="exportExcel()">Export Excel</button>
                    <button class="btn btn-outline-danger" onclick="exportPDF()">Export PDF</button>
                </div>
            </div>

            <!-- Table -->
            <table class="table table-bordered" id="laporanTable">
                <thead class="table-success">
                    <tr>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Keperluan</th>
                        <th>RT</th>
                        <th>RW</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="laporanBody">
                    <?php foreach ($surat as $row): ?>
                        <tr>
                            <td><?= esc($row['nama']) ?></td>
                            <td><?= esc($row['nik']) ?></td>
                            <td><?= esc($row['alamat']) ?></td>
                            <td><?= esc($row['keperluan']) ?></td>
                            <td><?= esc($row['rt']) ?></td>
                            <td><?= esc($row['rw']) ?></td>
                            <td><?= esc($row['status']) ?></td>

                            <td>
                                <?php if ($row['status'] == 'pending'): ?>
                                    <a href="/admin_surat/setujui/<?= $row['id'] ?>" class="btn btn-sm btn-success">Setujui</a>
                                    <a href="/admin_surat/tolak/<?= $row['id'] ?>" class="btn btn-sm btn-danger">Tolak</a>
                                <?php elseif ($row['status'] == 'disetujui'): ?>
                                    <a href="/admin_surat/cetak/<?= $row['id'] ?>" class="btn btn-sm btn-primary">Cetak</a>
                                <?php else: ?>
                                    <span class="text-danger">Ditolak</span>
                                <?php endif; ?>
                                <a href="/admin_surat/delete/<?= $row['id'] ?>" class="btn btn-sm btn-delete" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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

        <!-- JS: Filter + Pagination -->
        <script>

            const tbody = document.getElementById('laporanBody');
            const filterNama = document.getElementById('filterNama');
            const filterNIK = document.getElementById('filterNIK');
            const prevBtn = document.getElementById('prevPage');
            const nextBtn = document.getElementById('nextPage');

            let currentPage = 1;
            const rowsPerPage = 10;

            function renderTable() {
                const namaFilter = filterNama.value.toLowerCase();
                const nikFilter = filterNIK.value.toLowerCase();
                const filtered = data.filter(row =>
                    row[0].toLowerCase().includes(namaFilter) &&
                    row[1].toLowerCase().includes(nikFilter)
                );

                const totalPages = Math.ceil(filtered.length / rowsPerPage);
                currentPage = Math.max(1, Math.min(currentPage, totalPages));

                tbody.innerHTML = "";
                const start = (currentPage - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                const pageRows = filtered.slice(start, end);

                pageRows.forEach(row => {
                    const tr = document.createElement('tr');
                    row.forEach(cell => {
                        const td = document.createElement('td');
                        td.textContent = cell;
                        tr.appendChild(td);
                    });
                    const tdAksi = document.createElement('td');
                    tdAksi.innerHTML = `<a href="#" class="btn btn-sm btn-danger">Hapus</a>`;
                    tr.appendChild(tdAksi);
                    tbody.appendChild(tr);
                });

                prevBtn.disabled = currentPage === 1;
                nextBtn.disabled = currentPage === totalPages || totalPages === 0;
            }

            filterNama.addEventListener('input', () => {
                currentPage = 1;
                renderTable();
            });

            filterNIK.addEventListener('input', () => {
                currentPage = 1;
                renderTable();
            });

            prevBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderTable();
                }
            });

            nextBtn.addEventListener('click', () => {
                currentPage++;
                renderTable();
            });
        </script>

        <!-- JS Library: jsPDF & SheetJS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

        <script>
            function exportExcel() {
                const namaFilter = filterNama.value.toLowerCase();
                const nikFilter = filterNIK.value.toLowerCase();
                const filtered = data.filter(row =>
                    row[0].toLowerCase().includes(namaFilter) &&
                    row[1].toLowerCase().includes(nikFilter)
                );

                const wb = XLSX.utils.book_new();
                const ws_data = [
                    ["Nama", "NIK", "Alamat", "Keperluan", "RT", "RW"]
                ];
                filtered.forEach(row => ws_data.push(row));
                const ws = XLSX.utils.aoa_to_sheet(ws_data);
                XLSX.utils.book_append_sheet(wb, ws, "LaporanSurat");
                XLSX.writeFile(wb, "laporan_surat.xlsx");
            }

            async function exportPDF() {
                const {
                    jsPDF
                } = window.jspdf;
                const doc = new jsPDF();
                doc.text("Laporan Surat", 14, 15);
                let y = 25;
                doc.setFontSize(10);
                doc.text("Nama", 14, y);
                doc.text("NIK", 60, y);
                doc.text("Alamat", 100, y);

                const namaFilter = filterNama.value.toLowerCase();
                const nikFilter = filterNIK.value.toLowerCase();
                const filtered = data.filter(row =>
                    row[0].toLowerCase().includes(namaFilter) &&
                    row[1].toLowerCase().includes(nikFilter)
                );

                y += 5;
                filtered.forEach(row => {
                    doc.text(row[0], 14, y);
                    doc.text(row[1], 60, y);
                    doc.text(row[2], 100, y);
                    y += 7;
                    if (y > 280) {
                        doc.addPage();
                        y = 25;
                    }
                });

                doc.save("laporan_surat.pdf");
            }

            renderTable();
        </script>

</html>

