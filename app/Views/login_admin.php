<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perangkat RW</title>
    <?= view('partials/tailwind_head') ?>
</head>

<body class="min-h-screen bg-rw-green font-sans text-white antialiased">
    <main class="flex min-h-screen items-center justify-center px-4 py-8">
        <section class="grid w-full max-w-3xl gap-5">
            <header class="text-center">
                <h1 class="text-2xl font-extrabold leading-tight text-rw-gold sm:text-3xl">
                    Sistem Aplikasi E-Rukun Warga
                </h1>
                <p class="mt-2 text-sm font-medium text-white/85 sm:text-base">
                    Rukun Warga 1 Rungkut Kidul
                </p>
            </header>

            <div class="grid overflow-hidden rounded-2xl bg-white shadow-2xl md:grid-cols-[0.85fr_1fr]">
                <div class="flex items-center justify-center bg-emerald-50 p-6">
                    <img
                        src="<?= base_url('images/login.png') ?>"
                        alt="Ilustrasi login perangkat RW"
                        class="h-auto w-44 drop-shadow-xl sm:w-56"
                    >
                </div>

                <div class="p-6 text-slate-900 sm:p-8">
                    <span class="inline-flex rounded-full border border-rw-green/15 bg-rw-green/10 px-3 py-1 text-xs font-semibold text-rw-green">
                        Portal Perangkat
                    </span>
                    <h2 class="mt-4 text-2xl font-extrabold text-rw-ink">Login Perangkat RW</h2>
                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Silakan masuk menggunakan akun perangkat RW.
                    </p>

                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="mt-5 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-center text-sm text-emerald-800">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="mt-5 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-center text-sm text-red-800">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('login_admin/submit'); ?>" method="post" class="mt-6 grid gap-4">
                        <label>
                            <span class="mb-1.5 block text-sm font-medium text-slate-700">Username</span>
                            <input
                                type="text"
                                name="username"
                                class="block min-h-11 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15"
                                placeholder="Masukkan username"
                                autocomplete="username"
                                required
                            >
                        </label>

                        <label>
                            <span class="mb-1.5 block text-sm font-medium text-slate-700">Password</span>
                            <input
                                type="password"
                                name="password"
                                class="block min-h-11 w-full rounded-xl border border-slate-300 bg-white px-3 py-2 text-sm text-slate-800 shadow-sm outline-none transition placeholder:text-slate-400 focus:border-rw-teal focus:ring-4 focus:ring-rw-teal/15"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required
                            >
                        </label>

                        <button
                            type="submit"
                            class="inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-rw-green px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:-translate-y-0.5 hover:bg-rw-teal focus:outline-none focus:ring-4 focus:ring-rw-green/20"
                        >
                            Masuk
                        </button>
                    </form>

                    <a
                        href="<?= base_url('/halaman_utama'); ?>"
                        class="mt-3 inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-rw-gold px-4 py-2 text-sm font-semibold text-rw-ink shadow-sm transition hover:-translate-y-0.5 hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-200"
                    >
                        Kembali ke Halaman Utama
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
