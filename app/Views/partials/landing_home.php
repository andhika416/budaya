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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
                            mint: '#8ef2d8',
                        },
                    },
                    boxShadow: {
                        soft: '0 22px 50px rgba(10, 51, 35, 0.12)',
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

<body class="min-h-screen bg-[#f4f7f2] font-sans text-rw-ink antialiased">
    <div class="min-h-screen overflow-hidden bg-[radial-gradient(circle_at_top_left,rgba(10,51,35,0.14),transparent_28%),radial-gradient(circle_at_top_right,rgba(244,163,64,0.16),transparent_25%),linear-gradient(180deg,#f8fbf9_0%,#eef4ef_100%)]">
        <?= view('partials/public_navbar', ['activePage' => 'home']) ?>

        <main>
            <section class="relative">
                <div class="relative isolate min-h-[460px] overflow-hidden sm:min-h-[500px] lg:min-h-[540px] xl:min-h-[560px]">
                    <div class="home-hero__slide absolute inset-0 bg-cover bg-center opacity-100 scale-100 transition-all duration-1000 ease-out" style="background-image: url('<?= base_url('images/Rungkut_Kidul.jpg') ?>');"></div>
                    <div class="home-hero__slide absolute inset-0 bg-cover bg-center opacity-0 scale-105 transition-all duration-1000 ease-out" style="background-image: url('<?= base_url('images/Rungkut_Kidul2.jpg') ?>');"></div>
                    <div class="absolute inset-0 z-[1] bg-[linear-gradient(110deg,rgba(6,20,18,0.9)_0%,rgba(8,39,34,0.68)_42%,rgba(6,20,18,0.22)_100%),linear-gradient(180deg,rgba(0,0,0,0.08)_0%,rgba(0,0,0,0.45)_100%)]"></div>

                    <div class="relative z-[2] flex min-h-[460px] items-center px-5 py-10 sm:min-h-[500px] sm:px-8 lg:min-h-[540px] lg:px-14 xl:min-h-[560px]">
                        <div class="w-full min-w-0 max-w-xl text-white">
                            <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3.5 py-1.5 text-[0.72rem] font-medium shadow-sm backdrop-blur sm:text-xs">
                                <i class="fas fa-seedling text-rw-mint"></i>
                                Platform Digital Rukun Warga
                            </span>

                            <h1 class="mt-4 max-w-2xl break-words text-[1.45rem] font-extrabold leading-tight sm:text-3xl lg:text-[2.65rem] xl:text-[2.9rem]">
                                Selamat Datang di <span class="block text-rw-mint">Rungkut Kidul RW.01</span>
                            </h1>

                            <p class="mt-4 max-w-lg break-words text-[0.82rem] leading-6 text-white/90 sm:text-sm sm:leading-7">
                                Satu pintu informasi untuk pengumuman, agenda, layanan warga, dan administrasi lingkungan yang lebih cepat, rapi, dan mudah diakses.
                            </p>

                            <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                                <a href="<?= base_url('agenda') ?>" class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-rw-orange px-4 py-2.5 text-[0.8rem] font-semibold text-white shadow-lg shadow-orange-900/20 transition hover:-translate-y-0.5 hover:bg-[#e9932f] focus:outline-none focus:ring-4 focus:ring-rw-orange/30 sm:w-auto">
                                    <i class="fas fa-calendar-alt"></i>
                                    Lihat Agenda Warga
                                </a>
                                <a href="<?= base_url('wargaku') ?>" class="inline-flex w-full items-center justify-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2.5 text-[0.8rem] font-semibold text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20 focus:outline-none focus:ring-4 focus:ring-white/20 sm:w-auto">
                                    <i class="fas fa-hand-holding-heart"></i>
                                    Buka Pelayanan
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="absolute bottom-5 right-5 z-[3] flex gap-2">
                        <button class="home-hero__control--prev inline-flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-white/10 text-sm text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20 focus:outline-none focus:ring-4 focus:ring-white/20" type="button" aria-label="Slide sebelumnya">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="home-hero__control--next inline-flex h-9 w-9 items-center justify-center rounded-full border border-white/20 bg-white/10 text-sm text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/20 focus:outline-none focus:ring-4 focus:ring-white/20" type="button" aria-label="Slide berikutnya">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </section>

            <section class="mx-auto max-w-7xl px-5 pt-10 sm:px-8 lg:px-10">
                <div class="min-w-0 rounded-[28px] border border-white/70 bg-white/75 p-5 shadow-soft backdrop-blur md:p-8">
                    <div class="mb-7 grid gap-5 lg:grid-cols-[0.95fr_1fr] lg:items-end">
                        <div>
                            <span class="text-xs font-semibold text-rw-green sm:text-[0.82rem]">Kenapa sistem ini penting</span>
                            <h2 class="mt-2 break-words text-xl font-bold leading-tight text-rw-ink sm:text-2xl lg:text-3xl">Administrasi warga dibuat lebih tertata dan mudah dijangkau</h2>
                        </div>
                        <p class="text-sm leading-7 text-rw-muted sm:text-[0.95rem]">
                            Beranda ini menjadi pusat orientasi warga untuk mengetahui layanan yang tersedia, informasi yang aktif, dan arah navigasi yang jelas.
                        </p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <article class="rounded-2xl border border-rw-green/10 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-rw-green/10 text-rw-green">
                                <i class="fas fa-bullhorn"></i>
                            </div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Informasi Cepat</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Warga bisa langsung melihat pengumuman, agenda, dan update lingkungan tanpa mencari ke banyak halaman.</p>
                        </article>
                        <article class="rounded-2xl border border-rw-green/10 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-rw-orange/20 text-rw-green">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Layanan Ringkas</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Pengajuan surat dan kebutuhan administratif dibuat lebih terarah agar proses warga lebih praktis.</p>
                        </article>
                        <article class="rounded-2xl border border-rw-green/10 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-rw-green/10 text-rw-green">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Keuangan Transparan</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Ringkasan iuran dan catatan keuangan lingkungan dapat ditampilkan lebih terbuka dan mudah dipantau.</p>
                        </article>
                        <article class="rounded-2xl border border-rw-green/10 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-rw-orange/20 text-rw-green">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Koneksi Warga</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Platform membantu komunikasi yang lebih rapi antara pengurus dan seluruh warga RW.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section class="mx-auto grid max-w-7xl gap-6 px-5 pt-8 sm:px-8 lg:grid-cols-[1.1fr_0.9fr] lg:px-10">
                <div class="min-w-0 rounded-[28px] border border-rw-green/10 bg-white p-5 shadow-soft md:p-7">
                    <span class="text-xs font-semibold text-rw-green sm:text-[0.82rem]">Akses cepat</span>
                    <h2 class="mt-2 break-words text-xl font-bold leading-tight text-rw-ink sm:text-2xl">Langsung ke layanan warga</h2>

                    <div class="mt-6 grid gap-4 sm:grid-cols-2">
                        <a href="<?= base_url('tamu') ?>" class="group rounded-2xl border border-rw-green/10 bg-gradient-to-b from-rw-green/5 to-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-rw-green text-white transition group-hover:bg-rw-orange"><i class="fas fa-comments"></i></div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Pengaduan dan Aspirasi</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Sampaikan masukan atau laporan warga melalui kanal yang lebih terstruktur.</p>
                        </a>
                        <a href="<?= base_url('agenda') ?>" class="group rounded-2xl border border-rw-green/10 bg-gradient-to-b from-rw-green/5 to-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-rw-green text-white transition group-hover:bg-rw-orange"><i class="fas fa-calendar-alt"></i></div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Agenda Lingkungan</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Pantau kegiatan warga dan informasi mobilitas penduduk di lingkungan RW.</p>
                        </a>
                        <a href="<?= base_url('keuangan') ?>" class="group rounded-2xl border border-rw-green/10 bg-gradient-to-b from-rw-green/5 to-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-rw-green text-white transition group-hover:bg-rw-orange"><i class="fas fa-coins"></i></div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Rekap Keuangan</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Lihat ringkasan iuran dan pencatatan keuangan warga dengan lebih jelas.</p>
                        </a>
                        <a href="<?= base_url('surat') ?>" class="group rounded-2xl border border-rw-green/10 bg-gradient-to-b from-rw-green/5 to-white p-5 transition hover:-translate-y-1 hover:shadow-lg">
                            <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-rw-green text-white transition group-hover:bg-rw-orange"><i class="fas fa-envelope-open-text"></i></div>
                            <h3 class="text-[0.95rem] font-bold text-rw-ink">Pengajuan Surat</h3>
                            <p class="mt-2 text-sm leading-6 text-rw-muted">Ajukan kebutuhan surat pengantar RW secara lebih ringkas melalui sistem.</p>
                        </a>
                    </div>
                </div>

                <aside class="min-w-0 overflow-hidden rounded-[28px] border border-rw-green/10 bg-white shadow-soft">
                    <img src="<?= base_url('images/Rungkut_Kidul2.jpg') ?>" alt="Lingkungan Rungkut Kidul" class="h-64 w-full object-cover">
                    <div class="p-6 md:p-7">
                        <span class="inline-flex rounded-full bg-rw-green/10 px-3 py-1.5 text-xs font-semibold text-rw-green">Tentang E-Rukun Warga</span>
                        <h3 class="mt-4 text-lg font-bold leading-snug text-rw-ink">Sistem yang membantu pengurus dan warga bergerak dalam ritme yang sama</h3>
                        <p class="mt-3 text-sm leading-7 text-rw-muted">
                            E-Rukun Warga dirancang sebagai jembatan antara kebutuhan layanan warga dan pengelolaan lingkungan yang tertib. Beranda kini bisa berfungsi sebagai pintu masuk utama, bukan sekadar halaman formalitas.
                        </p>
                    </div>
                </aside>
            </section>
        </main>

        <?= view('partials/public_footer') ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = Array.from(document.querySelectorAll('.home-hero__slide'));
            const nextButton = document.querySelector('.home-hero__control--next');
            const prevButton = document.querySelector('.home-hero__control--prev');
            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach(function(slide, slideIndex) {
                    const isActive = slideIndex === index;
                    slide.classList.toggle('opacity-100', isActive);
                    slide.classList.toggle('scale-100', isActive);
                    slide.classList.toggle('opacity-0', !isActive);
                    slide.classList.toggle('scale-105', !isActive);
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
        });
    </script>
</body>

</html>
