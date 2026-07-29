<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Admin</title>
    <?= view('partials/tailwind_head') ?>
</head>
<body class="bg-slate-100">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 mt-5">
        <h3 class="mb-4 text-center">Form Pendaftaran Admin</h3>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="mb-4 rounded-xl border px-4 py-3 text-sm border-red-200 bg-red-50 text-red-800"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="mb-4 rounded-xl border px-4 py-3 text-sm border-emerald-200 bg-emerald-50 text-emerald-800"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('daftar_admin/submit') ?>" method="post">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
            </div>
            <div class="mb-3">
                <label>Konfirmasi Password</label>
                <input type="password" name="password_confirm" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" required>
            </div>
            <button type="submit" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-rw-green text-white hover:bg-rw-teal focus:ring-rw-green/20">Daftar</button>
            <a href="<?= base_url('/login_admin') ?>" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-slate-600 text-white hover:bg-slate-700 focus:ring-slate-300">Login</a>
        </form>
    </div>
</body>
</html>
