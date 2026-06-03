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

        .card {
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: -60px;
            border: 5px solid white;
        }

        .left-info {
            background: #f8f9fa;
            border-right: 1px solid #dee2e6;
        }

        .left-info h6 {
            font-weight: bold;
            color: #6c757d;
        }

        .left-info a {
            display: block;
            margin-bottom: 0.5rem;
            color: #0d6efd;
        }

        .nav-tabs .nav-link.active {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Your body content goes here -->
</body>

</html>

<body>

    <?= view('partials/public_navbar', ['activePage' => 'profil']) ?>

    <!-- HEADER END -->

    <!-- CONTENT START -->
    <section>

        <!-- .container start -->
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="shadow border rounded p-5">
                        <h2 class="mb-4 text-center">Edit Profil</h2>

                        <form action="<?= base_url('profil/update') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>

                            <!-- Nama Lengkap -->
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>

                            <!-- Foto Profil -->
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Profil</label>
                                <input class="form-control" type="file" id="foto" name="foto" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <label for="website" class="form-label">NIK</label>
                                <input type="url" class="form-control" id="website" name="website">
                            </div>
                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Nomor Telepon -->
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="telepon" name="telepon" required>
                            </div>

                            <!-- Tombol Simpan -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- .container end -->

    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <?= view('partials/public_footer') ?>
    <!-- FOOTER END -->

</body>
</body>
<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->



<!-- SCRIPTS -->



<!-- -->

</body>


</html>
< href="#" class="link-warning text-decoration-none fw-bold ms-2 mr-900">
    <i class="fa-solid fa-sign-out"></i>
    Keluar
    </a



