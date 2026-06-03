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
            background-color: #E27602;
            margin-top: 350px;
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
            height: 100%;
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

        .artikel-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 100px;
            padding-top: 10px;
        }


        .artikel-card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 5px;
            margin-top: 20px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .artikel-card img {
            max-width: 100%;
            border-radius: 5px;
        }

        .artikel-card h3 {
            font-size: 15px;
            margin: 15px 0;
            text-align: left;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
            margin-top: 50px;
            font-weight: bold;
            font-size: 25px;
        }

        p {
            font-size: 12px;
            text-align: left;
            margin-top: 10px;
        }

        .custom-card {
            width: 100%;
            /* atau tentukan fixed size seperti 300px */
            max-width: 400px;
            margin-top: 50px;
        }

        .custom-img {
            height: 200px;
            object-fit: cover;
        }

        .custom-date {
            font-size: 12px;
            /* Ukuran font tanggal */
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

    <?= view('partials/public_navbar', ['activePage' => '']) ?>

<main>
    <h2>BERITA</h2>
</main>

<div class="row gy-4 gx-4 mt-5 ms-5 me-5">
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
                            <img src="<?= base_url('images/sid.jpg') ?>" class="card-img-top custom-img" alt="Pekkae Ecolodge and EcoRiver Cafe">
            <div class="card-body">
                <small class="text-muted custom-date">Diposting pada : 13 April 2025</small>
                <h5 class="card-title mt-2">Card title</h5>
                <p class="card-text">Deskripsi atau isi dari card.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
                            <img src="<?= base_url('images/sid.jpg') ?>" class="card-img-top custom-img" alt="Pekkae Ecolodge and EcoRiver Cafe">
            <div class="card-body">
                <small class="text-muted custom-date">Diposting pada : 13 April 2025</small>
                <h5 class="card-title mt-2">Card title</h5>
                <p class="card-text">Deskripsi atau isi dari card.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
                            <img src="<?= base_url('images/sid.jpg') ?>" class="card-img-top custom-img" alt="Pekkae Ecolodge and EcoRiver Cafe">
            <div class="card-body">
                <small class="text-muted custom-date">Diposting pada : 13 April 2025</small>
                <h5 class="card-title mt-2">Card title</h5>
                <p class="card-text">Deskripsi atau isi dari card.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
                            <img src="<?= base_url('images/sid.jpg') ?>" class="card-img-top custom-img" alt="Pekkae Ecolodge and EcoRiver Cafe">
            <div class="card-body">
                <small class="text-muted custom-date">Diposting pada : 13 April 2025</small>
                <h5 class="card-title mt-2">Card title</h5>
                <p class="card-text">Deskripsi atau isi dari card.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
                            <img src="<?= base_url('images/sid.jpg') ?>" class="card-img-top custom-img" alt="Pekkae Ecolodge and EcoRiver Cafe">
            <div class="card-body">
                <small class="text-muted custom-date">Diposting pada : 13 April 2025</small>
                <h5 class="card-title mt-2">Card title</h5>
                <p class="card-text">Deskripsi atau isi dari card.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>


</div>


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

<!-- -->

<?= view('partials/public_footer') ?>

</body>

</html>



