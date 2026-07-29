<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Warga</title>
    <?= view('partials/tailwind_head') ?>
</head>

<body class="min-h-screen overflow-x-hidden bg-rw-green font-sans text-white antialiased">
    <main
        class="flex min-h-screen items-center justify-center bg-cover bg-center px-4 py-8"
        style="background-image: linear-gradient(135deg, rgba(5, 43, 31, 0.92), rgba(14, 80, 57, 0.74)), url('<?= base_url('images/Rungkut_Kidul.jpg') ?>');"
    >
        <section class="grid w-full max-w-3xl gap-5">
            <header class="text-center">
                <h1 class="text-2xl font-extrabold leading-tight text-rw-gold sm:text-3xl">
                    Sistem Aplikasi E-Rukun Warga
                </h1>
                <p class="mt-2 text-sm font-medium text-white/85 sm:text-base">
                    Rukun Warga 1 Rungkut Kidul
                </p>
            </header>

            <div class="grid overflow-hidden rounded-2xl border border-white/30 bg-white/15 shadow-2xl backdrop-blur md:grid-cols-[0.85fr_1fr]">
                <div class="flex items-center justify-center bg-white/10 p-6">
                    <img
                        src="<?= base_url('images/login.png') ?>"
                        alt="Ilustrasi login warga"
                        class="h-auto w-44 drop-shadow-2xl sm:w-52"
                    >
                </div>

                <div class="bg-white p-6 text-slate-900 sm:p-8">
                    <span class="inline-flex rounded-full border border-rw-green/15 bg-rw-green/10 px-3 py-1 text-xs font-semibold text-rw-green">
                        Portal Warga
                    </span>
                    <h2 class="mt-4 text-2xl font-extrabold text-rw-ink">Login Warga</h2>
                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        Silakan masuk menggunakan akun yang sudah terdaftar.
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

                    <form action="<?= base_url('login/submit'); ?>" method="post" class="mt-6 grid gap-4">
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
                        href="<?= base_url('home'); ?>"
                        class="mt-3 inline-flex min-h-11 w-full items-center justify-center rounded-xl bg-rw-gold px-4 py-2 text-sm font-semibold text-rw-ink shadow-sm transition hover:-translate-y-0.5 hover:bg-yellow-300 focus:outline-none focus:ring-4 focus:ring-yellow-200"
                    >
                        Kembali ke Beranda
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
