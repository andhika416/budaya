<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar</title>
<link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
    <?= view('partials/tailwind_head') ?>
</head>

<style>
    body {
        background-color: #0a3323;
    }
</style>

<body class="">
    <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-center items-center min-h-screen">
        <div class="rounded-xl border border-slate-200 bg-white shadow-soft p-4 shadow rounded-2xl" style="max-width: 800px; width: 100%;">
            <div class="grid gap-4 md:grid-cols-12">
                <!-- Gambar -->
                <div class="md:col-span-6 text-center">
                <img src="<?= base_url('images/daftar.png') ?>" class="h-auto max-w-full" alt="Ilustrasi Daftar">
                </div>
                <!-- Form -->
                <div class="md:col-span-6">
                    <h4 class="text-center mb-2">FORM DAFTAR</h4>
                    <p class="text-center text-slate-500 mb-4">Silahkan Mendaftar Terlebih Dahulu</p>
                    <form action="<?= base_url('register/process') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-2">
                            <input type="text" name="nik" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="NIK" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="nama" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="username" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Username" required>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="password" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="Password" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" name="telepon" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" placeholder="No. Telepon" required>
                        </div>
                        <div class="mb-3">
                            <label for="foto_ktp" class="mb-1.5 block text-sm font-medium text-slate-700">Upload Foto KTP</label>
                            <input type="file" name="foto_ktp" id="foto_ktp" class="block min-h-10 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15" accept="image/*" required>
                        </div>
                        <button type="submit" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-rw-green text-white hover:bg-rw-teal focus:ring-rw-green/20 w-full">DAFTAR</button>
                    </form>
                    <a href="<?= base_url('home') ?>" class="inline-flex min-h-10 items-center justify-center gap-2 rounded-xl px-4 py-2 text-sm font-semibold leading-none shadow-sm transition hover:-translate-y-0.5 focus:outline-none focus:ring-4 disabled:cursor-not-allowed disabled:opacity-50 bg-rw-gold text-rw-ink hover:bg-yellow-300 focus:ring-yellow-200 w-full mt-3">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
</body>


</html>

