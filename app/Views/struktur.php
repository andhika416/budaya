<?php
$officials = [
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Ketua RW.01',
        'scope' => 'Koordinasi lingkungan dan pelayanan warga',
        'photo' => base_url('images/Foto_Andhika_Firjatullah.jpg'),
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Sekretaris RW',
        'scope' => 'Administrasi, surat menyurat, dan data warga',
        'photo' => null,
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Bendahara RW',
        'scope' => 'Iuran, rekap kas, dan laporan keuangan',
        'photo' => null,
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Ketua RT 01',
        'scope' => 'Pelayanan dan koordinasi warga RT 01',
        'photo' => null,
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Ketua RT 02',
        'scope' => 'Pelayanan dan koordinasi warga RT 02',
        'photo' => null,
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Ketua RT 03',
        'scope' => 'Pelayanan dan koordinasi warga RT 03',
        'photo' => null,
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Ketua RT 04',
        'scope' => 'Pelayanan dan koordinasi warga RT 04',
        'photo' => null,
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Ketua RT 05',
        'scope' => 'Pelayanan dan koordinasi warga RT 05',
        'photo' => null,
    ],
    [
        'name' => 'Andhika Firjatullah',
        'role' => 'Ketua RT 06',
        'scope' => 'Pelayanan dan koordinasi warga RT 06',
        'photo' => null,
    ],
];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Perangkat RT/RW | Sistem Informasi RW</title>
    <meta name="description" content="Struktur perangkat RT/RW Rungkut Kidul RW.01">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        rw: {
                            green: '#0a3323',
                            ink: '#16302b',
                            muted: '#5f726b',
                            orange: '#f4a340',
                            soft: '#f4f7f2',
                        },
                    },
                    boxShadow: {
                        soft: '0 18px 42px rgba(10, 51, 35, 0.10)',
                    },
                },
            },
        };
    </script>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="min-h-screen bg-[#f5f7f4] font-sans text-rw-ink antialiased">
    <?= view('partials/public_navbar', ['activePage' => 'struktur']) ?>

    <main>
        <section class="bg-[radial-gradient(circle_at_top_left,rgba(10,51,35,0.12),transparent_28%),linear-gradient(180deg,#ffffff_0%,#f5f7f4_100%)]">
            <div class="mx-auto max-w-7xl px-5 py-12 sm:px-8 lg:px-10 lg:py-16">
                <div class="grid gap-8 lg:grid-cols-[0.85fr_1.15fr] lg:items-end">
                    <div>
                        <span class="inline-flex items-center gap-2 rounded-full bg-rw-green/10 px-4 py-2 text-xs font-semibold text-rw-green">
                            <i class="fas fa-sitemap"></i>
                            Struktur Lembaga
                        </span>
                        <h1 class="mt-5 text-3xl font-extrabold leading-tight text-rw-ink sm:text-4xl lg:text-5xl">Perangkat RT/RW</h1>
                        <p class="mt-4 max-w-2xl text-sm leading-7 text-rw-muted sm:text-base">
                            Daftar pengurus aktif Rungkut Kidul RW.01 periode 2022-2027 untuk membantu warga mengenali alur koordinasi dan pelayanan lingkungan.
                        </p>
                    </div>

                    <div class="grid gap-4 rounded-[28px] border border-rw-green/10 bg-white/80 p-5 shadow-soft backdrop-blur sm:grid-cols-3">
                        <div class="rounded-2xl bg-rw-green px-4 py-5 text-white">
                            <div class="text-3xl font-extrabold">01</div>
                            <div class="mt-1 text-xs font-medium text-white/80">RW Aktif</div>
                        </div>
                        <div class="rounded-2xl bg-rw-orange/15 px-4 py-5 text-rw-ink">
                            <div class="text-3xl font-extrabold">06</div>
                            <div class="mt-1 text-xs font-medium text-rw-muted">Wilayah RT</div>
                        </div>
                        <div class="rounded-2xl bg-rw-green/10 px-4 py-5 text-rw-ink">
                            <div class="text-3xl font-extrabold">2027</div>
                            <div class="mt-1 text-xs font-medium text-rw-muted">Akhir Periode</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-7xl px-5 pb-4 sm:px-8 lg:px-10">
            <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <span class="text-sm font-semibold text-rw-green">Pengurus aktif</span>
                    <h2 class="mt-1 text-2xl font-bold text-rw-ink">Koordinasi RT/RW Rungkut Kidul</h2>
                </div>
                <a href="<?= base_url('wargaku') ?>" class="inline-flex items-center justify-center gap-2 rounded-full bg-rw-green px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-emerald-950/10 transition hover:-translate-y-0.5 hover:bg-[#124431] focus:outline-none focus:ring-4 focus:ring-rw-green/20">
                    <i class="fas fa-hand-holding-heart"></i>
                    Buka Pelayanan
                </a>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($officials as $official): ?>
                    <article class="group min-w-0 rounded-[24px] border border-rw-green/10 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-soft">
                        <div class="flex items-start gap-4">
                            <?php if ($official['photo']): ?>
                                <img src="<?= esc($official['photo']) ?>" alt="Foto <?= esc($official['name']) ?>" class="h-20 w-20 shrink-0 rounded-2xl object-cover ring-4 ring-rw-green/10">
                            <?php else: ?>
                                <div class="flex h-20 w-20 shrink-0 items-center justify-center rounded-2xl bg-rw-green/10 text-3xl text-rw-green ring-4 ring-rw-green/5">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                            <?php endif; ?>

                            <div class="min-w-0">
                                <h3 class="break-words text-lg font-bold leading-snug text-rw-ink"><?= esc($official['name']) ?></h3>
                                <p class="mt-1 inline-flex rounded-full bg-rw-orange/15 px-3 py-1 text-xs font-semibold text-rw-green"><?= esc($official['role']) ?></p>
                            </div>
                        </div>
                        <p class="mt-5 text-sm leading-7 text-rw-muted"><?= esc($official['scope']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <?= view('partials/public_footer') ?>
</body>

</html>
