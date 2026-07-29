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
.data-panel {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 100px;
            margin-left: 100px;
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
    <?= view('partials/tailwind_head') ?>
</head>

<body>


    <?= view('partials/public_navbar', ['activePage' => '']) ?>
<div class="flex">
        <div class="sidebar col-span-3 md:col-span-2">
            <h5 class="text-center mb-5"></h5>
            <a href="/admin"> <img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/dashboard.png" /> Dashboard</a>
            <a href="/admin_data"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/groups.png" /> Pendataan Warga</a>
            <a href="/admin_surat"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/document--v1.png" /> Surat Pengantar RT/RW</a>
            <a href="/admin_iuran"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/money.png" /> Rekap Iuran Sampah</a>
            <a href="/admin_laporan"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/error.png" /> Laporan Warga</a>
            <a href="/admin_akunwarga"><img class="icon" src="https://img.icons8.com/ios-filled/50/ffffff/user.png" /> Akun Warga</a>
        </div>
    </div>

    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="data-panel">
            <h4 class="font-bold mb-4">Data Laporan Warga</h4>

            <!-- Table -->
            <div class="grid gap-4 md:grid-cols-12 mb-3">
                <div class="md:col-span-3 mb-2">
                    <input type="text" id="filterNama" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Filter Nama" />
                </div>
                <div class="md:col-span-3 mb-2">
                    <input type="text" id="filterLaporan" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Filter Kata Kunci Laporan" />
                </div>
                <div class="md:col-span-3 mb-2">
                    <input type="date" id="filterTanggal" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" />
                </div>
                <div class="flex justify-start gap-2">
                    <button class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 border border-emerald-700 bg-white text-emerald-700 hover:bg-emerald-700 hover:text-white focus:ring-emerald-200" onclick="exportExcel()">Export Excel</button>
                    <button class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 border border-red-600 bg-white text-red-600 hover:bg-red-600 hover:text-white focus:ring-red-200" onclick="exportPDF()">Export PDF</button>
                </div>
            </div>

            <!-- Table -->
            <table class="w-full min-w-max border-collapse text-sm [&_td]:border [&_td]:border-slate-200 [&_td]:px-3 [&_td]:py-2 [&_td]:align-middle [&_th]:border [&_th]:border-slate-200 [&_th]:px-3 [&_th]:py-2 [&_th]:align-middle border border-slate-200" id="laporanTable">
                <thead class="bg-emerald-50 text-rw-ink">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Laporan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="laporanBody">
                    <?php if (!empty($laporan)) : ?>
                        <?php foreach ($laporan as $row) : ?>
                            <tr>
                                <td><?= esc($row['id']) ?></td>
                                <td><?= esc($row['nama']) ?></td>
                                <td><?= esc($row['laporan']) ?></td>
                                <td><?= esc($row['tanggal']) ?></td>
                                <td>
                                    <a href="<?= base_url('/adminlaporan/hapus/' . $row['id']) ?>" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 min-h-8 rounded-lg px-3 py-1.5 text-xs bg-red-600 text-white hover:bg-red-700 focus:ring-red-200" onclick="return confirm('Yakin ingin menghapus laporan ini?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr><td colspan="5">Belum ada laporan.</td></tr>
                    <?php endif; ?>
                </tbody>

            </table>

            <!-- Pagination -->
            <div class="flex justify-between">
                <button id="prevPage" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-slate-600 text-white hover:bg-slate-700 focus:ring-slate-300 min-h-8 rounded-lg px-3 py-1.5 text-xs">Previous</button>
                <button id="nextPage" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-slate-600 text-white hover:bg-slate-700 focus:ring-slate-300 min-h-8 rounded-lg px-3 py-1.5 text-xs">Next</button>
            </div>
        </div>
</body>

        <!-- JS: Filter + Pagination -->
        <script>
            const filterNama = document.getElementById('filterNama');
            const filterLaporan = document.getElementById('filterLaporan');
            const filterTanggal = document.getElementById('filterTanggal');
            const rows = Array.from(document.querySelectorAll('#laporanBody tr'));
            const prevBtn = document.getElementById('prevPage');
            const nextBtn = document.getElementById('nextPage');

            let currentPage = 1;
            const rowsPerPage = 10;

            function filterData() {
                const namaVal = filterNama.value.toLowerCase().trim();
                const laporanVal = filterLaporan.value.toLowerCase().trim();
                const tanggalVal = filterTanggal.value;
                return rows.filter(row => {
                    const nama = row.cells[1].textContent.toLowerCase();
                    const laporan = row.cells[2].textContent.toLowerCase();
                    const tanggal = row.cells[3].textContent;
                    return nama.includes(namaVal) &&
                        laporan.includes(laporanVal) &&
                        (tanggalVal === "" || tanggal === tanggalVal);
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

            [filterNama, filterLaporan, filterTanggal].forEach(input => {
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
                    ["ID", "Nama", "Laporan", "Tanggal"]
                ];
                filterData().forEach(row => {
                    ws_data.push([
                        row.cells[0].innerText,
                        row.cells[1].innerText,
                        row.cells[2].innerText,
                        row.cells[3].innerText,
                    ]);
                });
                const ws = XLSX.utils.aoa_to_sheet(ws_data);
                XLSX.utils.book_append_sheet(wb, ws, "LaporanWarga");
                XLSX.writeFile(wb, "laporan_warga.xlsx");
            }

            async function exportPDF() {
                const {
                    jsPDF
                } = window.jspdf;
                const doc = new jsPDF();
                doc.text("Laporan Warga", 14, 15);
                let y = 25;
                doc.setFontSize(10);
                doc.text("ID", 14, y);
                doc.text("Nama", 24, y);
                doc.text("Laporan", 70, y);
                doc.text("Tanggal", 160, y);

                y += 5;
                filterData().forEach(row => {
                    doc.text(row.cells[0].innerText, 14, y);
                    doc.text(row.cells[1].innerText, 24, y);
                    doc.text(row.cells[2].innerText, 70, y, {
                        maxWidth: 80
                    });
                    doc.text(row.cells[3].innerText, 160, y);
                    y += 7;
                });

                doc.save("laporan_warga.pdf");
            }
        </script>

</html>

