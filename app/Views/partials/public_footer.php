<style>
    .site-footer {
        margin-top: 56px;
        background: linear-gradient(180deg, #0a3323 0%, #0a3323 100%);
        color: #f5fffb;
        width: 100%;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
        box-shadow: 0 -16px 36px rgba(10, 51, 35, 0.08);
    }

    .site-footer__inner,
    .site-footer__bottom {
        width: min(1180px, calc(100% - 48px));
        margin: 0 auto;
    }

    .site-footer__inner {
        display: grid;
        grid-template-columns: minmax(0, 1.35fr) repeat(3, minmax(0, 0.7fr));
        gap: 32px;
        padding: 36px 0 24px;
        align-items: start;
    }

    .site-footer__brand {
        display: grid;
        grid-template-columns: 72px minmax(0, 1fr);
        gap: 16px;
        align-items: start;
    }

    .site-footer__logo-wrap {
        width: 72px;
        height: 72px;
        border-radius: 18px;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.12);
    }

    .site-footer__logo {
        width: 52px;
        height: 52px;
        object-fit: contain;
    }

    .site-footer__title {
        margin: 0 0 8px;
        font-size: clamp(1.35rem, 1.8vw, 1.75rem);
        line-height: 1.12;
        font-weight: 700;
        color: #ffffff;
    }

    .site-footer__text {
        margin: 0;
        max-width: 500px;
        font-size: 0.9rem;
        line-height: 1.68;
        color: rgba(245, 255, 251, 0.9);
    }

    .site-footer__column {
        min-width: 0;
    }

    .site-footer__heading {
        margin: 0 0 14px;
        font-size: 0.95rem;
        line-height: 1.3;
        font-weight: 700;
        color: #ffffff;
    }

    .site-footer__link,
    .site-footer__meta {
        display: block;
        font-size: 0.88rem;
        line-height: 1.6;
        color: rgba(245, 255, 251, 0.88);
    }

    .site-footer__link + .site-footer__link,
    .site-footer__meta + .site-footer__meta {
        margin-top: 7px;
    }

    .site-footer__link:hover {
        color: #ffffff;
        text-decoration: underline;
        text-underline-offset: 3px;
    }

    .site-footer__socials {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 14px;
    }

    .site-footer__social {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        background: rgba(255, 255, 255, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.1);
        font-size: 0.92rem;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .site-footer__social:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-1px);
    }

    .site-footer__bottom {
        padding: 14px 0 18px;
        border-top: 1px solid rgba(255, 255, 255, 0.12);
    }

    .site-footer__bottom p {
        margin: 0;
        font-size: 0.82rem;
        line-height: 1.6;
        color: rgba(245, 255, 251, 0.78);
        text-align: center;
    }

    @media (max-width: 960px) {
        .site-footer__inner {
            grid-template-columns: 1fr 1fr;
            gap: 24px 20px;
            padding-top: 32px;
        }

        .site-footer__brand {
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 640px) {
        .site-footer {
            margin-top: 44px;
        }

        .site-footer__inner,
        .site-footer__bottom {
            width: min(100%, calc(100% - 32px));
        }

        .site-footer__inner {
            grid-template-columns: 1fr;
            gap: 24px;
            padding: 30px 0 24px;
        }

        .site-footer__brand {
            grid-template-columns: 60px minmax(0, 1fr);
            gap: 14px;
        }

        .site-footer__logo-wrap {
            width: 60px;
            height: 60px;
            border-radius: 16px;
        }

        .site-footer__logo {
            width: 44px;
            height: 44px;
        }

        .site-footer__title {
            font-size: 1.22rem;
        }

        .site-footer__text,
        .site-footer__link,
        .site-footer__meta {
            font-size: 0.86rem;
        }

        .site-footer__heading {
            margin-bottom: 10px;
            font-size: 0.92rem;
        }

        .site-footer__social {
            width: 34px;
            height: 34px;
            font-size: 0.88rem;
        }

        .site-footer__bottom p {
            font-size: 0.8rem;
        }
    }
</style>

<section class="site-footer" role="contentinfo">
    <div class="site-footer__inner">
        <div class="site-footer__brand">
            <div class="site-footer__logo-wrap">
                <img src="<?= base_url('images/logo.png') ?>" alt="Logo RW" class="site-footer__logo">
            </div>
            <div>
                <h3 class="site-footer__title">Rungkut Kidul RW.01</h3>
                <p class="site-footer__text">
                    Pusat informasi warga untuk layanan administrasi, agenda lingkungan, dan komunikasi yang lebih tertata.
                </p>
            </div>
        </div>

        <div class="site-footer__column">
            <h4 class="site-footer__heading">Navigasi</h4>
            <a href="<?= base_url('home') ?>" class="site-footer__link">Beranda</a>
            <a href="<?= base_url('wargaku') ?>" class="site-footer__link">WargaKu</a>
            <a href="<?= base_url('surat') ?>" class="site-footer__link">Layanan Surat</a>
        </div>

        <div class="site-footer__column">
            <h4 class="site-footer__heading">Lembaga</h4>
            <a href="<?= base_url('struktur') ?>" class="site-footer__link">Perangkat RT/RW</a>
            <a href="<?= base_url('kartar') ?>" class="site-footer__link">Karang Taruna</a>
            <a href="<?= base_url('agenda') ?>" class="site-footer__link">Agenda Warga</a>
        </div>

        <div class="site-footer__column">
            <h4 class="site-footer__heading">Kontak</h4>
            <span class="site-footer__meta">Surabaya, Jawa Timur</span>
            <span class="site-footer__meta">Platform layanan digital warga RW</span>
            <div class="site-footer__socials">
                <a href="#" class="site-footer__social" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="site-footer__social" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="site-footer__social" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>

    <div class="site-footer__bottom">
        <p>&copy; <?= date('Y') ?> Sistem Informasi RW Rungkut Kidul RW.01</p>
    </div>
</section>

