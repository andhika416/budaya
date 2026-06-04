<?php $activePage = $activePage ?? ''; ?>

<style>
    .btn-success,
    .bg-success {
        background-color: #0a3323 !important;
        border-color: #0a3323 !important;
    }

    .btn-outline-success {
        color: #0a3323 !important;
        border-color: #0a3323 !important;
    }

    .btn-outline-success:hover,
    .btn-outline-success:focus {
        background-color: #0a3323 !important;
        border-color: #0a3323 !important;
        color: #fff !important;
    }

    .text-success {
        color: #0a3323 !important;
    }

    .border-success {
        border-color: #0a3323 !important;
    }

    .table-success,
    .table-success > th,
    .table-success > td {
        background-color: rgba(10, 51, 35, 0.12) !important;
    }

    .alert-success {
        color: #0a3323 !important;
        background-color: rgba(10, 51, 35, 0.12) !important;
        border-color: rgba(10, 51, 35, 0.24) !important;
    }

    .badge.bg-success {
        background-color: #0a3323 !important;
    }

    .site-navbar {
        position: sticky !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        z-index: 1000 !important;
        width: 100% !important;
        height: auto !important;
        display: block !important;
        margin: 0 !important;
        padding: 0 !important;
        background: transparent !important;
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
        box-shadow: 0 10px 24px rgba(10, 51, 35, 0.28);
    }

    .site-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 0;
        text-decoration: none;
    }

    .site-brand__logo {
        width: 52px;
        height: 52px;
        object-fit: contain;
        border-radius: 14px;
        padding: 4px;
        flex-shrink: 0;
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
        text-decoration: none;
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
        background: rgba(255, 255, 255, 0.92);
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
        color: #16302b;
        border-radius: 12px;
        font-size: 0.96rem;
        text-decoration: none;
    }

    .site-navbar__dropdown-item:hover {
        background: rgba(10, 51, 35, 0.1);
        color: #0a3323;
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
    }

    @media (max-width: 640px) {
        .site-navbar__inner {
            padding: 10px 14px;
        }

        .site-brand__title {
            font-size: 0.88rem;
        }

        .site-brand__subtitle {
            font-size: 0.68rem;
        }
    }
</style>

<nav class="site-navbar">
    <div class="site-navbar__inner">
        <a href="<?= base_url('home') ?>" class="site-brand" aria-label="Beranda RW">
            <img src="<?= base_url('images/Surabaya_Logo.png') ?>" alt="Logo Surabaya" class="site-brand__logo">
            <div class="site-brand__text">
                <span class="site-brand__title">Sistem Informasi RW</span>
                <span class="site-brand__subtitle">Rungkut Kidul RW.01</span>
            </div>
        </a>

        <button class="site-navbar__toggle" type="button" aria-label="Buka menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="site-navbar__menu">
            <a href="<?= base_url('home') ?>" class="site-navbar__link <?= $activePage === 'home' ? 'is-active' : '' ?>">Beranda</a>

            <div class="site-navbar__dropdown">
                <button class="site-navbar__link site-navbar__dropdown-toggle <?= in_array($activePage, ['struktur', 'kartar'], true) ? 'is-active' : '' ?>" type="button">
                    Lembaga
                    <i class="fas fa-angle-down"></i>
                </button>
                <div class="site-navbar__dropdown-menu">
                    <a href="<?= base_url('struktur') ?>" class="site-navbar__dropdown-item">Perangkat RT/RW</a>
                    <a href="<?= base_url('kartar') ?>" class="site-navbar__dropdown-item">Karang Taruna</a>
                </div>
            </div>

            <a href="<?= base_url('berita') ?>" class="site-navbar__link <?= $activePage === 'berita' ? 'is-active' : '' ?>">Berita</a>

            <a href="<?= base_url('wargaku') ?>" class="site-navbar__link <?= $activePage === 'wargaku' ? 'is-active' : '' ?>">Pelayanan</a>

            <div class="site-navbar__dropdown site-navbar__dropdown--account">
                <button class="site-navbar__link site-navbar__account-toggle <?= $activePage === 'profil' ? 'is-active' : '' ?>" type="button">
                    <i class="fas fa-circle-user"></i>
                    Akun
                    <i class="fas fa-angle-down"></i>
                </button>
                <div class="site-navbar__dropdown-menu site-navbar__dropdown-menu--account">
                    <a href="<?= base_url('profil') ?>" class="site-navbar__dropdown-item">Profil</a>
                    <a href="<?= base_url('logout') ?>" class="site-navbar__dropdown-item">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    if (!window.__publicNavbarBound) {
        window.__publicNavbarBound = true;

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.site-navbar').forEach(function(navbar) {
                const menuToggle = navbar.querySelector('.site-navbar__toggle');
                const menu = navbar.querySelector('.site-navbar__menu');
                const dropdowns = Array.from(navbar.querySelectorAll('.site-navbar__dropdown'));

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
        });
    }
</script>

