<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>RW</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
            max-width: 1000px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
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


        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 12px;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 12px;
        }

        .button-container {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .simpan {
            background-color: #FFA500;
            color: white;
        }

        .batal {
            background-color: white;
            border: 1px solid #0a3323;
            color: #0a3323;
        }

        .card-header {
            font-size: 15px;
        }

        .container {
            max-width: 800px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background-color: #007bff;
            color: white;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control,
        .form-select,
        .form-control:focus {
            border-radius: 8px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .btn-danger {
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .card-body {
            padding: 30px;
        }

        .calendar-day {
            height: 100px;
            border: 1px solid #dee2e6;
            cursor: pointer;
        }

        .calendar-day:hover {
            background-color: #f8f9fa;
        }

        .today {
            background-color: #cfe2ff;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
            margin-top: 50px;
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

    <?= view('partials/public_navbar', ['activePage' => 'wargaku']) ?>

    <!-- CONTENT -->

    <body class="bg-light">
        <div class="container mt-5">
            <div class="row">
                <!-- Form Pengajuan -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-success text-white text-center">
                            <h5 class="mb-0">Form Pengajuan Surat</h5>
                        </div>

                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success m-3">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger m-3">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('/surat/proses') ?>" method="post">
                            <div class="card-body px-4">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="keperluan" class="form-label">Keperluan</label>
                                    <textarea name="keperluan" class="form-control" rows="3" placeholder="Tuliskan keperluan Anda" required></textarea>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="rt" class="form-label">RT</label>
                                        <select name="rt" class="form-select" required>
                                            <option selected disabled>Pilih RT</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="rw" class="form-label">RW</label>
                                        <input type="text" name="rw" class="form-control" placeholder="Misal: 01" required>
                                    </div>
                                </div>
                                <div class="text-end d-flex justify-content-between">
                                    <a href="<?= base_url('wargaku') ?>" class="btn btn-danger px-4">Batal</a>
                                    <button type="submit" class="btn btn-primary px-4">Kirim Permintaan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Status Surat -->
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-success text-white text-center">
                            <h5 class="mb-0">Status Permintaan Surat</h5>
                        </div>
                        <div class="card-body">
                            <?php if (!empty($surat)) : ?>
                                <ul class="list-group">
                                    <?php foreach ($surat as $s) : ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <strong><?= esc($s['keperluan']) ?></strong><br>
                                                <small><?= date('d M Y', strtotime($s['tanggal'])) ?></small>
                                            </div>
                                            <div class="text-end">
                                                <span class="badge bg-<?= $s['status'] === 'disetujui' ? 'success' : ($s['status'] === 'pending' ? 'warning text-dark' : 'danger') ?>">
                                                    <?= strtoupper($s['status']) ?>
                                                </span><br>
                                                <?php if ($s['status'] === 'disetujui') : ?>
                                                    <a href="/surat/cetak/<?= $s['id'] ?>" class="btn btn-sm btn-outline-primary mt-2">Cetak Surat</a>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else : ?>
                                <p class="text-muted text-center">Belum ada permintaan surat.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?= view('partials/public_footer') ?>

    </body>


    </html>



