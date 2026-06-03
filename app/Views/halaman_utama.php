<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0a3323;
            color: white;
        }

        .btn-daftar {
            background-color: white;
            color: #E27602;
            border-radius: 10px;
            font-weight: bold;
        }

        .img-ilustrasi {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <img src="images/logo.png" class="logo" alt="Logo" width="60" class="me-2">
                <div>
                    <h5 class="m-0 fw-bold text-warning">Sistem Aplikasi E-Rukun Warga</h5>
                    <small>Rukun Warga 1 Rungkut Kidul</small>
                </div>
            </div>
            <div>
                <a href="<?= base_url('login_admin') ?>" class="btn btn-daftar">Login Admin</a>
                <a href="<?= base_url('login') ?>" class="btn btn-daftar">Login</a>
                <a href="<?= base_url('daftar') ?>" class="btn btn-daftar">Daftar</a>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold">Layanan Untuk Warga</h2>
                <h5 class="text-light">Rukun Warga 1 Rungkut Kidul</h5>
                <p class="mt-3">Sampaikan laporan pengaduan Anda disini, kami akan memproses secara langsung!</p>
            </div>
            <div class="col-md-6 text-center">
                <<img src="images/utama.png" alt="Ilustrasi" width="350" class="img-ilustrasi">
            </div>
        </div>

    </div>

</body>

</html>
