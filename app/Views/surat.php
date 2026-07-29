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
    <?= view('partials/tailwind_head') ?>
</head>

<body>

    <?= view('partials/public_navbar', ['activePage' => 'wargaku']) ?>

    <!-- CONTENT -->

    <body class="bg-slate-100">
        <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 mt-5">
            <div class="grid gap-4 md:grid-cols-12">
                <!-- Form Pengajuan -->
                <div class="md:col-span-6">
                    <div class="rounded-xl border border-slate-200 bg-white shadow-soft shadow-sm border-0">
                        <div class="rounded-t-xl px-5 py-4 font-semibold bg-rw-green text-white text-center">
                            <h5 class="mb-0">Form Pengajuan Surat</h5>
                        </div>

                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="mb-4 rounded-xl border px-4 py-3 text-sm border-emerald-200 bg-emerald-50 text-emerald-800 m-3">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="mb-4 rounded-xl border px-4 py-3 text-sm border-red-200 bg-red-50 text-red-800 m-3">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('/surat/proses') ?>" method="post">
                            <div class="p-5 px-4">
                                <div class="mb-3">
                                    <label for="nama" class="mb-1.5 block text-sm font-medium text-slate-700">Nama Lengkap</label>
                                    <input type="text" name="nama" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nik" class="mb-1.5 block text-sm font-medium text-slate-700">NIK</label>
                                    <input type="text" name="nik" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Masukkan NIK" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="mb-1.5 block text-sm font-medium text-slate-700">Alamat</label>
                                    <input type="text" name="alamat" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Masukkan alamat" required>
                                </div>
                                <div class="mb-3">
                                    <label for="keperluan" class="mb-1.5 block text-sm font-medium text-slate-700">Keperluan</label>
                                    <textarea name="keperluan" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" rows="3" placeholder="Tuliskan keperluan Anda" required></textarea>
                                </div>
                                <div class="grid gap-4 md:grid-cols-12 mb-3">
                                    <div class="md:col-span-6">
                                        <label for="rt" class="mb-1.5 block text-sm font-medium text-slate-700">RT</label>
                                        <select name="rt" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
                                            <option selected disabled>Pilih RT</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                        </select>
                                    </div>
                                    <div class="md:col-span-6">
                                        <label for="rw" class="mb-1.5 block text-sm font-medium text-slate-700">RW</label>
                                        <input type="text" name="rw" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Misal: 01" required>
                                    </div>
                                </div>
                                <div class="text-right flex justify-between">
                                    <a href="<?= base_url('wargaku') ?>" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-red-600 text-white hover:bg-red-700 focus:ring-red-200">Batal</a>
                                    <button type="submit" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-rw-green text-white hover:bg-rw-teal focus:ring-rw-green/20">Kirim Permintaan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Status Surat -->
                <div class="md:col-span-6">
                    <div class="rounded-xl border border-slate-200 bg-white shadow-soft shadow-sm border-0">
                        <div class="rounded-t-xl px-5 py-4 font-semibold bg-rw-green text-white text-center">
                            <h5 class="mb-0">Status Permintaan Surat</h5>
                        </div>
                        <div class="p-5">
                            <?php if (!empty($surat)) : ?>
                                <ul class="divide-y divide-slate-200 rounded-xl border border-slate-200 bg-white">
                                    <?php foreach ($surat as $s) : ?>
                                        <li class="flex items-center justify-between gap-4 px-4 py-3">
                                            <div>
                                                <strong><?= esc($s['keperluan']) ?></strong><br>
                                                <small><?= date('d M Y', strtotime($s['tanggal'])) ?></small>
                                            </div>
                                            <div class="text-right">
                                                <?php
                                                    $statusClass = match ($s['status']) {
                                                        'disetujui' => 'bg-emerald-100 text-emerald-800',
                                                        'pending' => 'bg-yellow-100 text-yellow-800',
                                                        default => 'bg-red-100 text-red-800',
                                                    };
                                                ?>
                                                <span class="inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold <?= $statusClass ?>">
                                                    <?= strtoupper($s['status']) ?>
                                                </span><br>
                                                <?php if ($s['status'] === 'disetujui') : ?>
                                                    <a href="/surat/cetak/<?= $s['id'] ?>" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 min-h-8 rounded-lg px-3 py-1.5 text-xs border border-rw-green bg-white text-rw-green hover:bg-rw-green hover:text-white focus:ring-rw-green/20 mt-2">Cetak Surat</a>
                                                <?php endif; ?>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else : ?>
                                <p class="text-slate-500 text-center">Belum ada permintaan surat.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <?= view('partials/public_footer') ?>

    </body>


    </html>



