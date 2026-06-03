<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Beranda RW</title>
    <meta name="description" content="Sistem informasi digital warga Rungkut Kidul RW.01">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #f4f7f2;
            --surface: rgba(255, 255, 255, 0.7);
            --surface-strong: #ffffff;
            --text: #16302b;
            --muted: #5f726b;
            --primary: #0a3323;
            --primary-dark: #0a3323;
            --accent: #f4a340;
            --line: rgba(10, 51, 35, 0.12);
            --shadow: 0 24px 60px rgba(10, 51, 35, 0.12);
            --radius-xl: 32px;
            --radius-lg: 22px;
            --radius-md: 16px;
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
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(10, 51, 35, 0.16), transparent 28%),
                radial-gradient(circle at top right, rgba(244, 163, 64, 0.14), transparent 26%),
                linear-gradient(180deg, #f6faf8 0%, #eef3ee 100%);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .home-page {
            min-height: 100vh;
        }

        .site-navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            padding: 0;
        }

        .site-navbar__inner {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 10px 28px;
            background: rgba(10, 51, 35, 0.88);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 0;
            box-shadow: 0 10px 24px rgba(10, 51, 35, 0.28);
        }

        .site-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            min-width: 0;
        }

        .site-brand__logo {
            width: 52px;
            height: 52px;
            object-fit: contain;
            border-radius: 14px;
            padding: 4px;
        }

        .site-brand__text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-width: 0;
        }

        .site-brand__title {
            color: #fff;
            font-size: 0.96rem;
            font-weight: 700;
            line-height: 1.05;
            text-transform: uppercase;
        }

        .site-brand__subtitle {
            color: rgba(255, 255, 255, 0.82);
            font-size: 0.72rem;
            font-weight: 500;
            line-height: 1.1;
        }

        .site-navbar__menu {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .site-navbar__link,
        .site-navbar__dropdown-toggle,
        .site-navbar__account-toggle {
            border: 0;
            background: transparent;
            color: #f6fffc;
            font: inherit;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 10px 14px;
            border-radius: 10px;
            transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
            cursor: pointer;
        }

        .site-navbar__link:hover,
        .site-navbar__dropdown-toggle:hover,
        .site-navbar__account-toggle:hover,
        .site-navbar__link.is-active,
        .site-navbar__dropdown-toggle.is-active,
        .site-navbar__account-toggle.is-active {
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            transform: translateY(-1px);
        }

        .site-navbar__account-toggle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .site-navbar__dropdown {
            position: relative;
        }

        .site-navbar__dropdown::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            height: 10px;
        }

        .site-navbar__dropdown-toggle i,
        .site-navbar__account-toggle .fa-angle-down {
            margin-left: 8px;
            font-size: 0.78rem;
        }

        .site-navbar__account-toggle .fa-circle-user {
            margin-left: 0;
            font-size: 1rem;
        }

        .site-navbar__dropdown-menu {
            position: absolute;
            top: calc(100% + 4px);
            left: 0;
            min-width: 220px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 18px;
            box-shadow: 0 18px 34px rgba(10, 51, 35, 0.16);
            display: none;
        }

        .site-navbar__dropdown--account .site-navbar__dropdown-menu {
            left: auto;
            right: 0;
            min-width: 180px;
        }

        .site-navbar__dropdown.is-open .site-navbar__dropdown-menu,
        .site-navbar__dropdown:hover .site-navbar__dropdown-menu {
            display: block;
        }

        .site-navbar__dropdown-item {
            display: block;
            padding: 12px 14px;
            color: var(--text);
            border-radius: 12px;
            font-size: 0.96rem;
        }

        .site-navbar__dropdown-item:hover {
            background: rgba(10, 51, 35, 0.1);
            color: var(--primary-dark);
        }

        .site-navbar__toggle {
            display: none;
            width: 40px;
            height: 40px;
            border: 0;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.08);
            padding: 9px;
            cursor: pointer;
        }

        .site-navbar__toggle span {
            display: block;
            height: 2px;
            margin: 5px 0;
            background: #fff;
            border-radius: 999px;
        }

        .home-hero {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .home-hero__frame {
            position: relative;
            overflow: hidden;
            min-height: calc(100vh - 67px);
            height: calc(100vh - 67px);
            border-radius: 0;
            box-shadow: none;
            isolation: isolate;
        }

        .home-hero__slide {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transform: scale(1.03);
            transition: opacity 0.8s ease, transform 5s ease;
        }

        .home-hero__slide.is-active {
            opacity: 1;
            transform: scale(1);
        }

        .home-hero__overlay {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(110deg, rgba(8, 24, 23, 0.86) 0%, rgba(9, 39, 36, 0.6) 35%, rgba(6, 22, 20, 0.24) 100%),
                linear-gradient(180deg, rgba(0, 0, 0, 0.12) 0%, rgba(0, 0, 0, 0.42) 100%);
            z-index: 1;
        }

        .home-hero__content {
            position: relative;
            z-index: 2;
            width: min(100%, 560px);
            padding: clamp(72px, 9vh, 96px) 52px 40px;
            color: #fff;
        }

        .home-hero__eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 13px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            font-size: 0.76rem;
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        .home-hero__title {
            margin: 16px 0 12px;
            font-size: clamp(1.85rem, 3.4vw, 2.75rem);
            line-height: 1.02;
            font-weight: 800;
            letter-spacing: -0.035em;
        }

        .home-hero__title span {
            color: #8ef2d8;
        }

        .home-hero__desc {
            max-width: 460px;
            font-size: 0.9rem;
            line-height: 1.65;
            color: rgba(255, 255, 255, 0.88);
            margin: 0 0 18px;
        }

        .home-hero__actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .home-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 999px;
            font-size: 0.86rem;
            font-weight: 600;
            transition: transform 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        }

        .home-btn:hover {
            transform: translateY(-2px);
        }

        .home-btn--primary {
            color: #fff;
            background: linear-gradient(135deg, var(--accent), #ffbc6d);
            box-shadow: 0 12px 22px rgba(244, 163, 64, 0.24);
        }

        .home-btn--ghost {
            color: #fff;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }

        .home-hero__controls {
            position: absolute;
            right: 18px;
            bottom: 18px;
            z-index: 3;
            display: flex;
            gap: 8px;
        }

        .home-hero__control {
            width: 40px;
            height: 40px;
            border: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.14);
            color: #fff;
            backdrop-filter: blur(10px);
            cursor: pointer;
            font-size: 0.84rem;
            transition: background-color 0.2s ease, transform 0.2s ease;
        }

        .home-hero__control:hover {
            background: rgba(255, 255, 255, 0.22);
            transform: translateY(-2px);
        }

        .home-section {
            max-width: 1240px;
            margin: 0 auto;
            padding: 42px 22px 0;
        }

        .section-panel {
            background: rgba(255, 255, 255, 0.68);
            border: 1px solid rgba(255, 255, 255, 0.64);
            backdrop-filter: blur(12px);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow);
            padding: 30px;
        }

        .section-heading {
            display: flex;
            justify-content: space-between;
            gap: 18px;
            align-items: end;
            margin-bottom: 24px;
        }

        .section-heading__kicker {
            display: inline-block;
            margin-bottom: 8px;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.88rem;
        }

        .section-heading h2 {
            margin: 0;
            font-size: clamp(1.55rem, 2.4vw, 2.25rem);
            line-height: 1.1;
        }

        .section-heading p {
            margin: 10px 0 0;
            max-width: 580px;
            color: var(--muted);
            line-height: 1.7;
            font-size: 0.95rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
        }

        .feature-card {
            padding: 20px;
            border-radius: var(--radius-lg);
            background: var(--surface-strong);
            border: 1px solid var(--line);
            box-shadow: 0 14px 30px rgba(12, 51, 46, 0.06);
        }

        .feature-card__icon {
            width: 46px;
            height: 46px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            margin-bottom: 14px;
            background: linear-gradient(135deg, rgba(10, 51, 35, 0.14), rgba(244, 163, 64, 0.18));
            color: var(--primary);
            font-size: 1.05rem;
        }

        .feature-card h3 {
            margin: 0 0 8px;
            font-size: 1rem;
        }

        .feature-card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.65;
            font-size: 0.9rem;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 20px;
            margin-top: 28px;
        }

        .quick-card,
        .about-card {
            border-radius: var(--radius-xl);
            overflow: hidden;
            background: var(--surface-strong);
            border: 1px solid var(--line);
            box-shadow: 0 14px 30px rgba(12, 51, 46, 0.06);
        }

        .quick-links {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            padding: 22px;
        }

        .quick-link {
            padding: 18px;
            border-radius: 18px;
            background: linear-gradient(180deg, rgba(10, 51, 35, 0.06), rgba(255, 255, 255, 0.9));
            border: 1px solid rgba(10, 51, 35, 0.1);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .quick-link:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 30px rgba(10, 51, 35, 0.08);
        }

        .quick-link__icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: #fff;
            margin-bottom: 14px;
            background: linear-gradient(135deg, var(--primary), #0a3323);
        }

        .quick-link h3 {
            margin: 0 0 6px;
            font-size: 0.98rem;
        }

        .quick-link p {
            margin: 0;
            color: var(--muted);
            font-size: 0.88rem;
            line-height: 1.6;
        }

        .about-card__body {
            padding: 24px;
        }

        .about-card__image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }

        .about-card__badge {
            display: inline-flex;
            padding: 7px 12px;
            border-radius: 999px;
            background: rgba(10, 51, 35, 0.12);
            color: var(--primary-dark);
            font-weight: 600;
            font-size: 0.8rem;
            margin-bottom: 12px;
        }

        .about-card h3 {
            margin: 0 0 10px;
            font-size: 1.28rem;
        }

        .about-card p {
            margin: 0;
            color: var(--muted);
            line-height: 1.72;
            font-size: 0.93rem;
        }

        @media (max-width: 1080px) {
            .feature-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .quick-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 860px) {
            .site-navbar__toggle {
                display: block;
            }

            .site-navbar__menu {
                position: absolute;
                top: calc(100% + 12px);
                left: 14px;
                right: 14px;
                display: none;
                flex-direction: column;
                align-items: stretch;
                gap: 10px;
                padding: 14px;
                background: rgba(10, 51, 35, 0.94);
                border: 1px solid rgba(255, 255, 255, 0.08);
                backdrop-filter: blur(16px);
                border-radius: 20px;
            }

            .site-navbar__menu.is-open {
                display: flex;
            }

            .site-navbar__link,
            .site-navbar__dropdown-toggle,
            .site-navbar__account-toggle {
                width: 100%;
                justify-content: space-between;
                text-align: left;
            }

            .site-navbar__account-toggle .fa-circle-user {
                margin-right: auto;
            }

            .site-navbar__dropdown-menu {
                position: static;
                margin-top: 10px;
            }

            .home-hero__frame {
                min-height: calc(100vh - 61px);
                height: calc(100vh - 61px);
            }

            .home-hero__content {
                width: 100%;
                padding: 76px 24px 40px;
            }

            .section-heading {
                flex-direction: column;
                align-items: flex-start;
            }

            .quick-links {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .site-navbar {
                padding: 0;
            }

            .site-navbar__inner,
            .home-hero,
            .home-section {
                padding-left: 0;
                padding-right: 0;
            }

            .site-navbar__inner {
                padding: 10px 14px;
            }

            .site-brand__title {
                font-size: 0.88rem;
            }

            .site-brand__subtitle {
                font-size: 0.68rem;
            }

            .home-hero__frame {
                min-height: calc(100svh - 61px);
                height: calc(100svh - 61px);
                border-radius: 0;
            }

            .home-hero__content,
            .section-panel,
            .about-card__body {
                padding-left: 22px;
                padding-right: 22px;
            }

            .home-hero__title {
                font-size: clamp(1.75rem, 8.4vw, 2.45rem);
            }

            .home-hero__desc {
                font-size: 0.9rem;
            }

            .home-btn {
                width: 100%;
                justify-content: center;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <div class="home-page">
        <?= view('partials/public_navbar', ['activePage' => 'home']) ?>

        <main>
            <section class="home-hero">
                <div class="home-hero__frame">
                    <div class="home-hero__slide is-active" style="background-image: url('<?= base_url('images/Rungkut_Kidul.jpg') ?>');"></div>
                    <div class="home-hero__slide" style="background-image: url('<?= base_url('images/Rungkut_Kidul2.jpg') ?>');"></div>
                    <div class="home-hero__overlay"></div>

                    <div class="home-hero__content">
                        <span class="home-hero__eyebrow">
                            <i class="fas fa-seedling"></i>
                            Platform Digital Rukun Warga
                        </span>
                        <h1 class="home-hero__title">Selamat Datang di <span>Rungkut Kidul RW.01</span></h1>
                        <p class="home-hero__desc">
                            Satu pintu informasi untuk pengumuman, agenda, layanan warga, dan administrasi lingkungan yang lebih cepat, rapi, dan mudah diakses.
                        </p>
                        <div class="home-hero__actions">
                            <a href="<?= base_url('agenda') ?>" class="home-btn home-btn--ghost">
                                Lihat Agenda Warga
                            </a>
                        </div>
                    </div>

                    <div class="home-hero__controls">
                        <button class="home-hero__control home-hero__control--prev" type="button" aria-label="Slide sebelumnya">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="home-hero__control home-hero__control--next" type="button" aria-label="Slide berikutnya">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </section>

            <section class="home-section">
                <div class="section-panel">
                    <div class="section-heading">
                        <div>
                            <span class="section-heading__kicker">Kenapa sistem ini penting</span>
                            <h2>Administrasi warga dibuat lebih tertata dan mudah dijangkau</h2>
                        </div>
                        <p>
                            Beranda ini bukan sekadar tampilan pembuka. Ini menjadi pusat orientasi warga untuk mengetahui layanan yang tersedia, informasi yang aktif, dan arah navigasi yang jelas.
                        </p>
                    </div>

                    <div class="feature-grid">
                        <article class="feature-card">
                            <div class="feature-card__icon"><i class="fas fa-bullhorn"></i></div>
                            <h3>Informasi Cepat</h3>
                            <p>Warga bisa langsung melihat pengumuman, agenda, dan update lingkungan tanpa harus mencari ke banyak halaman.</p>
                        </article>
                        <article class="feature-card">
                            <div class="feature-card__icon"><i class="fas fa-file-signature"></i></div>
                            <h3>Layanan Lebih Ringkas</h3>
                            <p>Pengajuan surat dan kebutuhan administratif dibuat lebih terarah sehingga proses warga jadi lebih praktis.</p>
                        </article>
                        <article class="feature-card">
                            <div class="feature-card__icon"><i class="fas fa-wallet"></i></div>
                            <h3>Transparansi Keuangan</h3>
                            <p>Ringkasan iuran dan catatan keuangan lingkungan dapat ditampilkan lebih terbuka dan mudah dipantau.</p>
                        </article>
                        <article class="feature-card">
                            <div class="feature-card__icon"><i class="fas fa-users"></i></div>
                            <h3>Koneksi Warga</h3>
                            <p>Platform membantu membangun kebiasaan komunikasi yang lebih rapi antara pengurus dan seluruh warga RW.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="home-section">
                <div class="quick-grid">
                    <div class="quick-card">
                        <div class="section-panel" style="background: transparent; box-shadow: none; border: 0; padding: 24px 24px 22px;">
                            <div class="section-heading" style="margin-bottom: 18px;">
                                <div>
                                    <span class="section-heading__kicker">Akses cepat</span>
                                    <h2 style="font-size: clamp(1.45rem, 2.1vw, 2rem);">Langsung ke layanan warga</h2>
                                </div>
                            </div>
                            <div class="quick-links">
                                <a href="<?= base_url('tamu') ?>" class="quick-link">
                                    <div class="quick-link__icon"><i class="fas fa-comments"></i></div>
                                    <h3>Pengaduan dan Aspirasi</h3>
                                    <p>Sampaikan masukan atau laporan warga melalui kanal yang lebih terstruktur.</p>
                                </a>
                                <a href="<?= base_url('agenda') ?>" class="quick-link">
                                    <div class="quick-link__icon"><i class="fas fa-calendar-alt"></i></div>
                                    <h3>Agenda Lingkungan</h3>
                                    <p>Pantau kegiatan warga dan informasi mobilitas penduduk di lingkungan RW.</p>
                                </a>
                                <a href="<?= base_url('keuangan') ?>" class="quick-link">
                                    <div class="quick-link__icon"><i class="fas fa-coins"></i></div>
                                    <h3>Rekap Keuangan</h3>
                                    <p>Lihat ringkasan iuran dan pencatatan keuangan warga dengan lebih jelas.</p>
                                </a>
                                <a href="<?= base_url('surat') ?>" class="quick-link">
                                    <div class="quick-link__icon"><i class="fas fa-envelope-open-text"></i></div>
                                    <h3>Pengajuan Surat</h3>
                                    <p>Ajukan kebutuhan surat pengantar RW secara lebih ringkas melalui sistem.</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <aside class="about-card">
                        <img src="<?= base_url('images/Rungkut_Kidul2.jpg') ?>" alt="Lingkungan Rungkut Kidul" class="about-card__image">
                        <div class="about-card__body">
                            <span class="about-card__badge">Tentang E-Rukun Warga</span>
                            <h3>Sistem yang membantu pengurus dan warga bergerak dalam ritme yang sama</h3>
                            <p>
                                E-Rukun Warga dirancang sebagai jembatan antara kebutuhan layanan warga dan pengelolaan lingkungan yang tertib. Dengan tampilan yang lebih terarah, beranda bisa berfungsi sebagai pintu masuk utama, bukan sekadar halaman formalitas.
                            </p>
                        </div>
                    </aside>
                </div>
            </section>
        </main>

        <?= view('partials/public_footer') ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = Array.from(document.querySelectorAll('.home-hero__slide'));
            const nextButton = document.querySelector('.home-hero__control--next');
            const prevButton = document.querySelector('.home-hero__control--prev');
            const menuToggle = document.querySelector('.site-navbar__toggle');
            const menu = document.querySelector('.site-navbar__menu');
            const dropdowns = Array.from(document.querySelectorAll('.site-navbar__dropdown'));
            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach(function(slide, slideIndex) {
                    slide.classList.toggle('is-active', slideIndex === index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                showSlide(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                showSlide(currentIndex);
            }

            if (slides.length > 1) {
                setInterval(nextSlide, 5000);
            }

            nextButton?.addEventListener('click', nextSlide);
            prevButton?.addEventListener('click', prevSlide);

            menuToggle?.addEventListener('click', function() {
                menu?.classList.toggle('is-open');
            });

            dropdowns.forEach(function(dropdown) {
                const toggle = dropdown.querySelector('.site-navbar__dropdown-toggle, .site-navbar__account-toggle');

                toggle?.addEventListener('click', function(event) {
                    if (window.innerWidth > 860) {
                        return;
                    }

                    event.preventDefault();
                    dropdowns.forEach(function(otherDropdown) {
                        if (otherDropdown !== dropdown) {
                            otherDropdown.classList.remove('is-open');
                        }
                    });
                    dropdown.classList.toggle('is-open');
                });
            });

            window.addEventListener('click', function(event) {
                dropdowns.forEach(function(dropdown) {
                    if (!dropdown.contains(event.target)) {
                        dropdown.classList.remove('is-open');
                    }
                });
            });
        });
    </script>
</body>

</html>

