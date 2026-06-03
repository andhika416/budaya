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
            margin-top: 400px;
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

        .box2 {
            position: relative;
            width: 500px;
            height: 70px;
            background: #FFFFFF;
            border: 3px solid #0a3323;
            margin-top: 150px;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-left: 100px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            text-align: center;
        }

        .box2 p {
            position: absolute;
            color: #0a3323;
            margin-left: 140px;
            margin-top: 22px;
            font-size: 15px;
        }

        .box2:active {
            filter: brightness(0.7);
        }

        .box2:hover {
            filter: brightness(0.9);
            /* Membuat elemen lebih gelap */
        }

        .box2:active {
            filter: brightness(0.7);
        }

        .box2:hover {
            transform: scale(1.05);
            /* Membuat elemen lebih gelap */
        }

        .box3 {
            position: relative;
            width: 500px;
            height: 70px;
            background: #FFFFFF;
            border: 3px solid #0a3323;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-top: 20px;
            margin-left: 100px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .box3 p {
            position: absolute;
            color: #0a3323;
            margin-left: 140px;
            margin-top: 22px;
            font-size: 15px;
        }

        .box3:active {
            filter: brightness(0.7);
        }

        .box3:hover {
            filter: brightness(0.9);
        }

        .box3:active {
            filter: brightness(0.7);
        }

        .box3:hover {
            transform: scale(1.05);
            /* Membuat elemen lebih gelap */
        }


        .box4 {
            position: relative;
            width: 500px;
            height: 70px;
            background: #FFFFFF;
            margin-left: 180px;
            border: 3px solid #0a3323;
            margin-top: 20px;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-top: -171px;
            margin-left: 650px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .box4 p {
            position: absolute;
            color: #0a3323;
            margin-left: 140px;
            margin-top: 22px;
            font-size: 15px;
            font-weight: bold;
        }

        .box4:active {
            filter: brightness(0.7);
        }

        .box4:hover {
            filter: brightness(0.9);
        }

        .box4:active {
            filter: brightness(0.7);
        }

        .box4:hover {
            transform: scale(1.05);
            /* Membuat elemen lebih gelap */
        }

        .box5 {
            position: relative;
            width: 500px;
            height: 70px;
            background: #FFFFFF;
            margin-left: 180px;
            border: 3px solid #0a3323;
            margin-top: 20px;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-left: 650px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .box5 p {
            position: absolute;
            color: #0a3323;
            margin-left: 140px;
            margin-top: 22px;
            font-size: 15px;
            font-weight: bold;
        }

        .box5:active {
            filter: brightness(0.7);
        }

        .box5:hover {
            filter: brightness(0.9);
            /* Membuat elemen lebih gelap */
        }

        .box5:active {
            filter: brightness(0.7);
        }

        .box5:hover {
            transform: scale(1.05);
            /* Membuat elemen lebih gelap */
        }

        h2 {
            text-align: center;
            margin: 20px 0;
            margin-top: 50px;
            font-weight: bold;
            font-size: 25px;
        }
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
            <h2>E-Rukun Warga</h2>
        </main>


        <div class="container custom-margin text-center" style=" margin-top: 50px">
            <p class="text-muted small-text mb-3"></p>

            <a href="<?= base_url("/tamu") ?>" class="text-decoration-none">
                <div class="card shadow-sm border-2 rounded-4 border-teal p-3 transition hover-effect mx-auto" style="width: 800px;">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="<?= base_url('images/megaphone.png') ?>" alt="Megaphone Icon" width="40" height="40">
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold text-teal fs-small">Layanan Pengaduan dan Aspirasi</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="container custom-margin" style=" padding-top: 215px">
            <a href="<?= base_url("/agenda") ?>" class="text-decoration-none">
                <div class="card shadow-sm border-2 rounded-4 border-teal p-3 transition hover-effect mx-auto" style="width: 800px;">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="<?= base_url('images/family.png') ?>" alt="Megaphone Icon" width="40" height="40">
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold text-teal fs-small">Pendataan Warga Pindah dan Tinggal</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="container custom-margin" style=" padding-top: 220px">
            <a href="<?= base_url("/keuangan") ?>" class="text-decoration-none">
                <div class="card shadow-sm border-2 rounded-4 border-teal p-3 transition hover-effect mx-auto" style="width: 800px;">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="<?= base_url('images/profit.png') ?>" alt="Megaphone Icon" width="40" height="40">
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold text-teal fs-small">Rekap Keuangan Iuran Sampah</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="container custom-margin" style=" padding-top: 220px">
            <a href="<?= base_url("/surat") ?>" class="text-decoration-none">
                <div class="card shadow-sm border-2 rounded-4 border-teal p-3 transition hover-effect mx-auto" style="width: 800px;">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="<?= base_url('images/writing.png') ?>" alt="Megaphone Icon" width="40" height="40">
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold text-teal fs-small">Surat Pengantar RW</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <style>
            .text-teal {
                color: #0a3323;
            }

            .border-teal {
                border-color: #0a3323 !important;
            }

            .transition {
                transition: all 0.3s ease-in-out;
            }

            .hover-effect:hover {
                transform: scale(1.03);
                box-shadow: 0 8px 20px rgba(0, 128, 128, 0.3);
                background-color: #f0fdfa;
            }

            .custom-margin {
                margin-top: -200px;
                /* lebih dekat ke atas */
            }

            .fs-small {
                font-size: 1rem;
                /* 14px */
            }
        </style>







<!-- CONTENT -->








<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<?= view('partials/public_footer') ?>


<!-- SCRIPTS -->



<!-- -->


</body>

</html>




