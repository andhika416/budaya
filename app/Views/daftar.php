<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<style>
    body {
        background-color: #0a3323;
    }

    .card {
        background-color: white;
    }
</style>

<body class="">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4 shadow rounded-4" style="max-width: 800px; width: 100%;">
            <div class="row g-4">
                <!-- Gambar -->
                <div class="col-md-6 text-center">
                <img src="<?= base_url('images/daftar.png') ?>" class="img-fluid" alt="Ilustrasi Daftar">
                </div>
                <!-- Form -->
                <div class="col-md-6">
                    <h4 class="text-center mb-2">FORM DAFTAR</h4>
                    <p class="text-center text-muted mb-4">Silahkan Mendaftar Terlebih Dahulu</p>
                    <form action="<?= base_url('register/process') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-2">
                            <input type="text" name="nik" class="form-control" placeholder="NIK" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="telepon" class="form-control" placeholder="No. Telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto_ktp" class="form-label">Upload Foto KTP</label>
                            <input type="file" name="foto_ktp" id="foto_ktp" class="form-control" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">DAFTAR</button>
                    </form>
                    <a href="<?= base_url('/halaman_utama') ?>" class="btn btn-warning w-100 mt-3">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </div>
</body>


</html>

