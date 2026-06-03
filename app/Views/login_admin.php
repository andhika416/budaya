<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perangkat RW</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0a3323;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .login-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            gap: 20px;
            align-items: center;
        }

        .login-image {
            width: 300px;
        }

        .login-form {
            flex: 1;
        }

        .header-title {
            color: #ffc107;
            font-weight: bold;
            font-size: 24px;
        }

        .sub-title {
            color: white;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <div class="text-center mb-4">
        <div class="header-title">Sistem Aplikasi E-Rukun Warga</div>
        <div class="sub-title">Rukun Warga 1 Rungkut Kidul</div>
    </div>

    <div class="login-card">
                <img src="<?= base_url('images/login.png') ?>" alt="Login Illustration" class="login-image">
        <div class="login-form">
            <h5 class="text-center">LOGIN PERANGKAT RW</h5>
            <p class="text-center">Silahkan Masukan Akun</p>

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success text-center"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger text-center"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <form action="<?= base_url('login_admin/submit'); ?>" method="post">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="d-grid mb-2">
                    <button type="submit" class="btn btn-primary">MASUK</button>
                </div>
            </form>
            <div class="d-grid">
                <a href="<?= base_url('/halaman_utama'); ?>" class="btn btn-warning">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>

</body>

</html>

