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
            width: 42px;
            height: 42px;
            z-index: 1000;
            max-width: 100%;
            object-fit: contain;
            background: rgba(255, 255, 255, 0.14);
            border-radius: 12px;
            padding: 4px;
        }

        .judul1 {
            position: absolute;
            top: 8px;
            left: 68px;
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
            top: 25px;
            left: 68px;
            z-index: 1001;
        }

        .judul2 h2 {
            font-weight: 500;
            margin: 0;
            font-size: 10px;
            line-height: 1.1;
            color: white;
        }

        nav {
            background-color: #0a3323;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 40px;
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

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-size: 20px;
            margin-top: 75px;
            color: #333;
        }

        h2 {
            font-size: 12px;
            color: #666;
            margin: 10px 0 30px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            height: 150px;
            width: 300px;
            margin-left: 40px;
            margin-top: 40px;
        }

        .card:active {
            filter: brightness(0.7);
        }

        .card:hover {
            filter: brightness(0.9);
            /* Membuat elemen lebih gelap */
        }

        .card:active {
            filter: brightness(0.7);
        }

        .card:hover {
            transform: scale(1.05);
            /* Membuat elemen lebih gelap */
        }

        .image {
            background-color: #FFFFFF;
            border-radius: 50%;
            height: 100px;
            width: 100px;
            margin: 0 auto 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .name {
            font-weight: bold;
            margin-bottom: 2px;
        }

        .position {
            color: #0a3323;
        }

        footer {
            background-color: #0a3323;
            margin-top: 150px;
            padding-left: 100px;
            padding-right: 100px;
            height: 305px;
            color: white;
            z-index: 1000;
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
            width: 240px;
            height: 350px;
            background: #FFFFFF;
            border: 3px solid #0a3323;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-top: 70px;
            margin-left: 75px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .box2 p {
            position: absolute;
            color: #000000;
            margin-left: 30px;
            margin-top: 130px;
            font-size: 14px;
            font-weight: bold;
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
            width: 240px;
            height: 350px;
            background: #FFFFFF;
            border: 3px solid #0a3323;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-top: -355px;
            margin-left: 360px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .box3 p {
            position: absolute;
            color: #000000;
            margin-left: 30px;
            margin-top: 130px;
            font-size: 14px;
            font-weight: bold;
        }

        .box3:active {
            filter: brightness(0.7);
        }

        .box3:hover {
            filter: brightness(0.9);
            /* Membuat elemen lebih gelap */
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
            width: 240px;
            height: 350px;
            background: #FFFFFF;
            border: 3px solid #0a3323;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-top: -355px;
            margin-left: 645px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .box4 p {
            position: absolute;
            color: #000000;
            margin-left: 30px;
            margin-top: 130px;
            font-size: 14px;
            font-weight: bold;
        }

        .box4:active {
            filter: brightness(0.7);
        }

        .box4:hover {
            filter: brightness(0.9);
            /* Membuat elemen lebih gelap */
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
            width: 240px;
            height: 350px;
            background: #FFFFFF;
            border: 3px solid #0a3323;
            border-radius: 10px;
            background-position: center;
            transition: filter 0.5s;
            margin-top: -355px;
            margin-left: 935px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        }

        .box5 p {
            position: absolute;
            color: #000000;
            margin-left: 30px;
            margin-top: 130px;
            font-size: 14px;
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

    <?= view('partials/public_navbar', ['activePage' => 'kartar']) ?>
    <div class="container">
        <h1>Karang Taruna</h1>
        <h2>Periode Aktif 2022–2027</h2>
        <div class="grid">
            <div class="card">
                <div class="image">👤</div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">👤</div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">
                    <div class="image">
                    <img src="<?= base_url('images/logo.png') ?>" alt="" style="width: 130px; height: 130px; object-fit: cover; border-radius: 50%;">
                    </div>
                </div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">
                    <div class="image">
                    <img src="<?= base_url('images/logo.png') ?>" alt="" style="width: 130px; height: 130px; object-fit: cover; border-radius: 50%;">
                    </div>
                </div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">👤</div>
                <div class="name">Andhika Fijtiullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">👤</div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">👤</div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">👤</div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
            <div class="card">
                <div class="image">👤</div>
                <div class="name">Andhika Firjatullah</div>
                <div class="position">Jabatan</div>
            </div>
        </div>
    </div>

</body>


</header>

<!-- CONTENT -->



<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->



<!-- SCRIPTS -->



<!-- -->

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
<?= view('partials/public_footer') ?>
</body>

</html>



