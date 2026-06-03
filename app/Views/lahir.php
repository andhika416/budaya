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
            top: 50%;
            left: 14px;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            z-index: 1000;
            max-width: 100%;
            object-fit: contain;
            background: rgba(255, 255, 255, 0.14);
            border-radius: 14px;
            padding: 4px;
        }

        .judul1 {
            position: absolute;
            top: 11px;
            left: 78px;
            z-index: 1001;
        }

        .judul1 h1 {
            margin: 0;
            font-size: 15px;
            line-height: 1.05;
            color: white;
        }

        .judul2 {
            position: absolute;
            top: 30px;
            left: 78px;
            z-index: 1001;
        }

        .judul2 h2 {
            font-weight: 500;
            margin: 0;
            font-size: 10.5px;
            line-height: 1.1;
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
            padding-bottom: 8px;
            margin-bottom: -8px;
        }

        .menu a {
            text-decoration: none;
            padding: 15px;
            display: block;
        }

        .dropdown {
            display: none;
            position: absolute;
            top: calc(100% - 2px);
            left: 0;
            min-width: 220px;
            padding: 8px;
            border-radius: 14px;
            background-color: #0a3323;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .menu>li:hover .dropdown,
        .menu>li:focus-within .dropdown {
            display: block;
        }

        .dropdown li {
            display: block;
            /* Tampilkan item dropdown dalam baris */
        }

        .dropdown a {
            padding: 10px 12px;
            border-radius: 10px;
            white-space: nowrap;
        }

        .dropdown a:hover {
            background-color: rgba(255, 255, 255, 0.12);
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

        footer {
            background-color: #0a3323;
            margin-top: 300px;
            padding-left: 100px;
            padding-right: 100px;
            height: 305px;
            color: white;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer .logo-footer img {
            position: absolute;
            width: 100px;
            margin-top: 40px;
            margin-left: 20px;
        }

        footer .tentang-footer {
            position: absolute;
            padding: 2rem 1.75rem;
            width: 560px;
            font-size: 15px;
            margin-top: 130px;
        }

        footer .tentang-footer p.komunitas-pecinta-kucing {
            position: absolute;
            font-weight: bold;
            font-size: 20px;
            margin-top: -30px;
        }

        footer .kontak {
            position: absolute;
            margin-top: 100px;
            margin-left: 660px;
            font-size: 15px;
            font-weight: bold;
        }

        footer .kontak1 {
            position: absolute;
            margin-top: 135px;
            margin-left: 660px;
            font-size: 15px;
            text-decoration: none;
        }

        footer .kontak2 {
            position: absolute;
            margin-top: 170px;
            margin-left: 660px;
            font-size: 15px;
            text-decoration: none;
        }

        footer .sosialmedia {
            position: absolute;
            margin-top: 100px;
            margin-left: 920px;
            font-size: 15px;
            font-weight: bold;
        }

        footer .sosialmedia1 {
            position: absolute;
            margin-top: 135px;
            margin-left: 920px;
            font-size: 15px;
            text-decoration: none;
            color: white;
        }

        footer .sosialmedia2 {
            position: absolute;
            margin-top: 170px;
            margin-left: 920px;
            font-size: 15px;
            text-decoration: none;
            color: white;
        }

        footer .sosialmedia3 {
            position: absolute;
            margin-top: 205px;
            margin-left: 920px;
            font-size: 15px;
            text-decoration: none;
            color: white;
        }

        .image-container {
            width: 1263px;
            height: 550px;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 106%;
            object-fit: cover;
        }

        .text-over-image3 {
            position: absolute;
            top: 40%;
            left: 375px;
            right: 30%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 10px;
            padding: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .text-over-image2 {
            position: absolute;
            top: 27%;
            left: 375px;
            right: 30%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 25px;
            font-weight: bold;
            padding: 10px;
            font-family: 'Poppins', sans-serif;
        }

        .text-over-image {
            position: absolute;
            top: 20%;
            left: 20%;
            transform: translate(-50%, -50%);
            color: white;
            padding: 10px;
            font-weight: bold;
            font-size: 25px;
        }

        .container {
            width: 1200px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #0a3323;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            height: 1000px;
        }

        h1 {
            text-align: center;
            color: #0a3323;
            font-size: 17px;
        }

        h1.p {
            text-align: center;
            color: #FFA500;
            font-size: 15px;
        }

        .table-hover {
            margin-top: 200px;
            margin-left: 20px;
            margin-right: 100px;
            max-width: 900px;
            padding-left: 20px;
            padding-top: 20px;

        }

        h2 {
            text-align: center;
            margin: 20px 0;
            margin-top: 50px;
            font-weight: bold;
            font-size: 25px;
        }
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

    <?= view('partials/public_navbar', ['activePage' => 'wargaku']) ?>

<main>
    <h2>Pendataan Kelahiran</h2>
    <div class="container mt-4">

        <!-- Filter Tanggal dan Status -->
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="filterTanggal">Filter Tanggal:</label>
                <input type="text" id="filterTanggal" class="form-control" placeholder="YYYY-MM-DD">
            </div>
            <div class="col-md-4">
                <label for="filterStatus">Filter Status:</label>
                <select id="filterStatus" class="form-control">
                    <option value="">Semua</option>
                    <option value="Pindah">Pindah</option>
                    <option value="Tinggal">Tinggal</option>
                    <option value="Lahir">Lahir</option>
                    <option value="Meninggal">Meninggal</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table id="tableWarga" class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Bayi</th>
                        <th>NIK</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tr>
                    <td>1</td>
                    <td>Siti Aminah</td>
                    <td>1234567890123456</td>
                    <td>Perempuan</td>
                    <td>Surabaya</td>
                    <td>2025-04-05</td>
                    <td>Ahmad</td>
                    <td>Lina</td>
                    <td>Anak Pertama</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Muhammad Rizky</td>
                    <td>1234567890123457</td>
                    <td>Laki-laki</td>
                    <td>Jakarta</td>
                    <td>2025-03-20</td>
                    <td>Budi</td>
                    <td>Sari</td>
                    <td>Anak Kedua</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ayu Lestari</td>
                    <td>1234567890123458</td>
                    <td>Perempuan</td>
                    <td>Bandung</td>
                    <td>2025-02-15</td>
                    <td>Joko</td>
                    <td>Maya</td>
                    <td>Anak Ketiga</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Fahri Hidayat</td>
                    <td>1234567890123459</td>
                    <td>Laki-laki</td>
                    <td>Medan</td>
                    <td>2025-01-10</td>
                    <td>Rian</td>
                    <td>Wulan</td>
                    <td>Anak Pertama</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nabila Zahra</td>
                    <td>1234567890123460</td>
                    <td>Perempuan</td>
                    <td>Makassar</td>
                    <td>2025-04-01</td>
                    <td>Dedi</td>
                    <td>Rina</td>
                    <td>Anak Kedua</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ilham Pratama</td>
                    <td>1234567890123461</td>
                    <td>Laki-laki</td>
                    <td>Yogyakarta</td>
                    <td>2025-03-28</td>
                    <td>Fajar</td>
                    <td>Desi</td>
                    <td>Anak Ketiga</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Putri Anjani</td>
                    <td>1234567890123462</td>
                    <td>Perempuan</td>
                    <td>Palembang</td>
                    <td>2025-03-18</td>
                    <td>Hendra</td>
                    <td>Lilis</td>
                    <td>Anak Pertama</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Rafi Ramadhan</td>
                    <td>1234567890123463</td>
                    <td>Laki-laki</td>
                    <td>Semarang</td>
                    <td>2025-02-27</td>
                    <td>Andi</td>
                    <td>Dewi</td>
                    <td>Anak Kedua</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Selvi Oktaviani</td>
                    <td>1234567890123464</td>
                    <td>Perempuan</td>
                    <td>Balikpapan</td>
                    <td>2025-04-10</td>
                    <td>Yusuf</td>
                    <td>Fitri</td>
                    <td>Anak Pertama</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Akbar Maulana</td>
                    <td>1234567890123465</td>
                    <td>Laki-laki</td>
                    <td>Denpasar</td>
                    <td>2025-04-15</td>
                    <td>Samsul</td>
                    <td>Indah</td>
                    <td>Anak Ketiga</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</main>



<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->



<!-- SCRIPTS -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown');

        dropdownToggle.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah navigasi
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        // Menutup dropdown jika klik di luar
        window.addEventListener('click', function(event) {
            if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
    });
</script>
<!-- Include jQuery, DataTables, and jQuery UI (for calendar) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    $(document).ready(function() {
        // Aktifkan DatePicker
        $('#filterTanggal').datepicker({
            dateFormat: 'yy-mm-dd'
        });

        // Inisialisasi DataTable dengan tombol export
        let table = $('#tableWarga').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'pdfHtml5'
            ]
        });

        // Filter tanggal
        $('#filterTanggal').on('change', function() {
            table.column(7).search(this.value).draw();
        });

        // Filter status
        $('#filterStatus').on('change', function() {
            table.column(6).search(this.value).draw();
        });
    });
</script>


<!-- -->


<?= view('partials/public_footer') ?>

</html>



