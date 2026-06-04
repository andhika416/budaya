<?php
$headlineItems = [
    [
        'category' => 'Kegiatan Lingkungan',
        'date' => '04 Juni 2026',
        'title' => 'Kerja bakti akhir pekan difokuskan pada saluran air dan taman gang.',
        'summary' => 'Warga diajak hadir mulai pukul 06.30 WIB untuk pembersihan area saluran, penyisiran sampah, dan penataan pot tanaman di pintu masuk lingkungan.',
        'image' => base_url('images/Rungkut_Kidul.jpg'),
    ],
    [
        'category' => 'Pengumuman RW',
        'date' => '02 Juni 2026',
        'title' => 'Jadwal ronda malam diperbarui agar pembagian regu lebih merata.',
        'summary' => 'Pembagian jadwal baru dibuat untuk memudahkan koordinasi antarwarga dan menjaga keamanan lingkungan pada jam rawan.',
        'image' => base_url('images/Rungkut_Kidul2.jpg'),
    ],
    [
        'category' => 'Layanan Warga',
        'date' => '31 Mei 2026',
        'title' => 'Pengajuan surat domisili dan pengantar kini diprioritaskan melalui sistem digital.',
        'summary' => 'Warga dapat memantau status pengajuan lebih cepat melalui menu Pelayanan tanpa perlu menunggu informasi manual.',
        'image' => base_url('images/sid.jpg'),
    ],
];

$newsCards = [
    [
        'tag' => 'Administrasi',
        'title' => 'Jam verifikasi surat warga dibuka setiap Senin sampai Jumat.',
        'text' => 'Pengurus membuka sesi verifikasi pada pukul 19.00 sampai 21.00 WIB agar proses surat lebih tertib dan tidak menumpuk.',
        'icon' => 'fa-file-lines',
    ],
    [
        'tag' => 'Keamanan',
        'title' => 'Warga diminta memperbarui data kontak darurat keluarga.',
        'text' => 'Pembaruan nomor telepon penting membantu koordinasi lebih cepat ketika ada kondisi mendesak di lingkungan RW.',
        'icon' => 'fa-shield-halved',
    ],
    [
        'tag' => 'Kegiatan',
        'title' => 'Posyandu bulanan kembali digelar di balai warga akhir pekan ini.',
        'text' => 'Ibu dan balita dapat datang sesuai jadwal RT masing-masing agar pemeriksaan berlangsung lebih tertib dan nyaman.',
        'icon' => 'fa-house-medical',
    ],
    [
        'tag' => 'Komunitas',
        'title' => 'Karang Taruna membuka pendaftaran relawan lomba tujuhbelasan.',
        'text' => 'Remaja dan pemuda dapat bergabung sebagai panitia acara, dokumentasi, perlengkapan, atau publikasi kegiatan warga.',
        'icon' => 'fa-people-group',
    ],
];

$highlights = [
    'Informasi terbaru disusun singkat agar mudah dipahami semua warga.',
    'Agenda penting, kegiatan, dan layanan ditempatkan dalam satu halaman.',
    'Tautan ke pelayanan tetap dekat agar warga bisa langsung bertindak.',
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Warga | Sistem Informasi RW</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        :root {
            --primary: #0a3323;
            --primary-soft: rgba(10, 51, 35, 0.08);
            --primary-border: rgba(10, 51, 35, 0.16);
            --text-main: #16302b;
            --text-soft: #4f6660;
            --surface: #ffffff;
            --surface-muted: #f4f8f6;
            --shadow-lg: 0 22px 48px rgba(10, 51, 35, 0.12);
            --shadow-sm: 0 12px 28px rgba(10, 51, 35, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: var(--text-main);
            background:
                radial-gradient(circle at top left, rgba(10, 51, 35, 0.08), transparent 32%),
                linear-gradient(180deg, #eff6f2 0%, #ffffff 28%, #f7fbf9 100%);
        }

        .news-page {
            min-height: 100vh;
        }

        .news-shell {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        .news-hero {
            padding: 36px 0 24px;
        }

        .news-hero__grid {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(320px, 0.9fr);
            gap: 28px;
            align-items: stretch;
        }

        .news-hero__content,
        .news-hero__featured {
            border-radius: 28px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .news-hero__content {
            padding: 34px;
            background: linear-gradient(160deg, rgba(10, 51, 35, 0.98), rgba(10, 51, 35, 0.9));
            color: #fff;
            position: relative;
            isolation: isolate;
        }

        .news-hero__content::after {
            content: '';
            position: absolute;
            inset: auto -40px -60px auto;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
            z-index: -1;
        }

        .news-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 0.84rem;
            font-weight: 600;
            letter-spacing: 0.01em;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .news-hero__title {
            margin: 18px 0 12px;
            font-size: clamp(2rem, 4.1vw, 3.2rem);
            line-height: 1.06;
            font-weight: 800;
            max-width: 10ch;
        }

        .news-hero__text {
            margin: 0;
            max-width: 60ch;
            font-size: 0.98rem;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.86);
        }

        .news-hero__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 24px;
        }

        .news-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 46px;
            padding: 0 18px;
            border-radius: 14px;
            border: 1px solid transparent;
            text-decoration: none;
            font-size: 0.94rem;
            font-weight: 600;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        }

        .news-button:hover {
            transform: translateY(-1px);
        }

        .news-button--primary {
            background: #ffffff;
            color: var(--primary);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.14);
        }

        .news-button--secondary {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.14);
            color: #ffffff;
        }

        .news-highlights {
            display: grid;
            gap: 10px;
            margin-top: 24px;
        }

        .news-highlight {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 0.93rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.86);
        }

        .news-highlight i {
            margin-top: 4px;
            color: #c8f5e4;
        }

        .news-hero__featured {
            position: relative;
            min-height: 420px;
        }

        .news-hero__featured img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .news-hero__overlay {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: flex-end;
            padding: 30px;
            background: linear-gradient(180deg, rgba(10, 51, 35, 0.06) 0%, rgba(10, 51, 35, 0.84) 100%);
        }

        .news-hero__card {
            width: 100%;
            padding: 22px;
            border-radius: 22px;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            color: #fff;
        }

        .news-hero__meta {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            font-size: 0.78rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.82);
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .news-hero__headline {
            margin: 12px 0 10px;
            font-size: 1.45rem;
            line-height: 1.32;
            font-weight: 700;
        }

        .news-hero__summary {
            margin: 0;
            font-size: 0.92rem;
            line-height: 1.75;
            color: rgba(255, 255, 255, 0.88);
        }

        .news-section {
            padding: 16px 0 0;
        }

        .news-section__heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px;
        }

        .news-section__heading h2 {
            margin: 0;
            font-size: 1.5rem;
            line-height: 1.2;
            font-weight: 700;
            color: var(--primary);
        }

        .news-section__heading p {
            margin: 0;
            font-size: 0.92rem;
            line-height: 1.7;
            color: var(--text-soft);
        }

        .news-grid {
            display: grid;
            grid-template-columns: minmax(0, 1.35fr) minmax(300px, 0.8fr);
            gap: 26px;
        }

        .news-feed {
            display: grid;
            gap: 18px;
        }

        .news-card {
            display: grid;
            grid-template-columns: 170px minmax(0, 1fr);
            gap: 18px;
            padding: 18px;
            border-radius: 22px;
            background: var(--surface);
            border: 1px solid var(--primary-border);
            box-shadow: var(--shadow-sm);
        }

        .news-card__image {
            border-radius: 18px;
            overflow: hidden;
            min-height: 146px;
        }

        .news-card__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .news-card__body {
            min-width: 0;
        }

        .news-card__meta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 10px;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--primary);
            background: var(--primary-soft);
        }

        .news-card__title {
            margin: 14px 0 10px;
            font-size: 1.14rem;
            line-height: 1.45;
            font-weight: 700;
        }

        .news-card__text {
            margin: 0;
            font-size: 0.92rem;
            line-height: 1.76;
            color: var(--text-soft);
        }

        .news-aside {
            display: grid;
            gap: 18px;
        }

        .news-panel {
            padding: 22px;
            border-radius: 24px;
            background: var(--surface);
            border: 1px solid var(--primary-border);
            box-shadow: var(--shadow-sm);
        }

        .news-panel h3 {
            margin: 0 0 14px;
            font-size: 1.1rem;
            line-height: 1.3;
            font-weight: 700;
            color: var(--primary);
        }

        .news-panel__list {
            display: grid;
            gap: 12px;
        }

        .news-panel__item {
            padding: 14px 16px;
            border-radius: 16px;
            background: var(--surface-muted);
        }

        .news-panel__item strong {
            display: block;
            font-size: 0.92rem;
            line-height: 1.5;
            color: var(--text-main);
        }

        .news-panel__item span {
            display: block;
            margin-top: 4px;
            font-size: 0.84rem;
            line-height: 1.6;
            color: var(--text-soft);
        }

        .news-links {
            display: grid;
            gap: 14px;
        }

        .news-link-card {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 16px;
            border-radius: 18px;
            background: var(--surface-muted);
            text-decoration: none;
            color: inherit;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .news-link-card:hover {
            transform: translateY(-1px);
            box-shadow: 0 12px 22px rgba(10, 51, 35, 0.08);
        }

        .news-link-card__icon {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            flex-shrink: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: var(--primary-soft);
            color: var(--primary);
        }

        .news-link-card__body strong {
            display: block;
            font-size: 0.94rem;
            line-height: 1.45;
            color: var(--text-main);
        }

        .news-link-card__body span {
            display: block;
            margin-top: 4px;
            font-size: 0.84rem;
            line-height: 1.65;
            color: var(--text-soft);
        }

        @media (max-width: 980px) {
            .news-hero__grid,
            .news-grid {
                grid-template-columns: 1fr;
            }

            .news-hero__featured {
                min-height: 360px;
            }
        }

        @media (max-width: 720px) {
            .news-shell {
                width: min(100%, calc(100% - 24px));
            }

            .news-hero {
                padding-top: 22px;
            }

            .news-hero__content,
            .news-hero__overlay,
            .news-panel {
                padding: 22px;
            }

            .news-card {
                grid-template-columns: 1fr;
            }

            .news-card__image {
                min-height: 200px;
            }

            .news-section__heading {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="news-page">
        <?= view('partials/public_navbar', ['activePage' => 'berita']) ?>

        <main>
            <section class="news-hero">
                <div class="news-shell">
                    <div class="news-hero__grid">
                        <div class="news-hero__content">
                            <span class="news-badge">
                                <i class="fas fa-bullhorn"></i>
                                Berita Warga RW.01
                            </span>
                            <h1 class="news-hero__title">Info lingkungan yang lebih mudah diikuti warga.</h1>
                            <p class="news-hero__text">
                                Halaman ini merangkum kabar penting seputar kegiatan, pengumuman, keamanan, dan layanan warga RW Rungkut Kidul.
                                Informasi dibuat singkat agar mudah dipahami dan cepat ditindaklanjuti.
                            </p>
                            <div class="news-hero__actions">
                                <a href="<?= base_url('agenda') ?>" class="news-button news-button--primary">
                                    Lihat Agenda
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="<?= base_url('wargaku') ?>" class="news-button news-button--secondary">
                                    Buka Pelayanan
                                </a>
                            </div>
                            <div class="news-highlights">
                                <?php foreach ($highlights as $highlight): ?>
                                    <div class="news-highlight">
                                        <i class="fas fa-circle-check"></i>
                                        <span><?= esc($highlight) ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="news-hero__featured">
                            <img src="<?= esc($headlineItems[0]['image']) ?>" alt="Kegiatan lingkungan RW">
                            <div class="news-hero__overlay">
                                <article class="news-hero__card">
                                    <div class="news-hero__meta">
                                        <span><?= esc($headlineItems[0]['category']) ?></span>
                                        <span><?= esc($headlineItems[0]['date']) ?></span>
                                    </div>
                                    <h2 class="news-hero__headline"><?= esc($headlineItems[0]['title']) ?></h2>
                                    <p class="news-hero__summary"><?= esc($headlineItems[0]['summary']) ?></p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="news-section">
                <div class="news-shell">
                    <div class="news-section__heading">
                        <div>
                            <h2>Berita terbaru</h2>
                            <p>Pembaruan singkat untuk membantu warga mengetahui hal yang paling penting lebih dulu.</p>
                        </div>
                    </div>

                    <div class="news-grid">
                        <div class="news-feed">
                            <?php foreach ($headlineItems as $item): ?>
                                <article class="news-card">
                                    <div class="news-card__image">
                                        <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['category']) ?>">
                                    </div>
                                    <div class="news-card__body">
                                        <span class="news-card__meta">
                                            <i class="fas fa-calendar-days"></i>
                                            <?= esc($item['date']) ?>
                                        </span>
                                        <h3 class="news-card__title"><?= esc($item['title']) ?></h3>
                                        <p class="news-card__text"><?= esc($item['summary']) ?></p>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>

                        <aside class="news-aside">
                            <section class="news-panel">
                                <h3>Agenda dekat</h3>
                                <div class="news-panel__list">
                                    <div class="news-panel__item">
                                        <strong>Jumat, 06 Juni 2026</strong>
                                        <span>Koordinasi keamanan lingkungan dan evaluasi ronda malam di balai warga.</span>
                                    </div>
                                    <div class="news-panel__item">
                                        <strong>Minggu, 08 Juni 2026</strong>
                                        <span>Kerja bakti bersama RT untuk area gerbang, taman, dan drainase gang utama.</span>
                                    </div>
                                    <div class="news-panel__item">
                                        <strong>Selasa, 10 Juni 2026</strong>
                                        <span>Layanan verifikasi surat warga dibuka pada pukul 19.00 sampai 21.00 WIB.</span>
                                    </div>
                                </div>
                            </section>

                            <section class="news-panel">
                                <h3>Akses cepat warga</h3>
                                <div class="news-links">
                                    <?php foreach ($newsCards as $card): ?>
                                        <a href="<?= base_url('wargaku') ?>" class="news-link-card">
                                            <span class="news-link-card__icon">
                                                <i class="fas <?= esc($card['icon']) ?>"></i>
                                            </span>
                                            <span class="news-link-card__body">
                                                <strong><?= esc($card['title']) ?></strong>
                                                <span><?= esc($card['text']) ?></span>
                                            </span>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </section>
                        </aside>
                    </div>
                </div>
            </section>
        </main>

        <?= view('partials/public_footer') ?>
    </div>
</body>
</html>
