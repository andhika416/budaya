<?php
$activePage = $activePage ?? '';
$isLoggedIn = (bool) session()->get('logged_in');
$isHomeNavbar = $activePage === 'home';
$linkClass = 'site-navbar__link inline-flex min-h-10 items-center justify-center rounded-xl px-3 py-2 text-[0.86rem] font-medium text-white no-underline transition duration-200 hover:-translate-y-0.5 hover:bg-white/10 hover:text-white';
$iconLinkClass = 'site-navbar__link inline-flex h-10 w-10 items-center justify-center rounded-xl text-base text-white no-underline transition duration-200 hover:-translate-y-0.5 hover:bg-white/10 hover:text-white';
$activeLinkClass = ' bg-white/10 text-white';
$dropdownItemClass = 'block rounded-xl px-3 py-2.5 text-[0.86rem] text-[#16302b] no-underline transition hover:bg-[#0a3323]/10 hover:text-[#0a3323]';
?>

<style>
    .site-navbar,
    .site-navbar__inner,
    .site-navbar__logo {
        transition-property: padding, max-width, margin, border-radius, background-color, border-color, box-shadow, width, height, backdrop-filter, -webkit-backdrop-filter;
        transition-duration: 520ms;
        transition-timing-function: cubic-bezier(0.22, 1, 0.36, 1);
    }

    .site-navbar[data-home-navbar="true"] {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    .site-navbar.is-pill {
        padding-right: 24px;
        padding-left: 24px;
    }

    .site-navbar.is-pill .site-navbar__inner {
        max-width: 1120px;
        margin-top: 22px;
        border-radius: 9999px;
        border-color: rgba(255, 255, 255, 0.2);
        background: rgba(10, 51, 35, 0.68);
        box-shadow: 0 18px 38px rgba(10, 51, 35, 0.24), inset 0 1px 0 rgba(255, 255, 255, 0.16);
        backdrop-filter: blur(22px) saturate(145%);
        -webkit-backdrop-filter: blur(22px) saturate(145%);
    }

    .site-navbar.is-pill .site-navbar__logo {
        width: 40px;
        height: 40px;
        border-radius: 9999px;
    }

    .site-navbar__dropdown.is-open .site-navbar__dropdown-menu,
    .site-navbar__dropdown:hover .site-navbar__dropdown-menu {
        display: block;
    }

    @media (min-width: 1024px) {
        .site-navbar:not(.is-pill) .site-navbar__primary-menu {
            transform: translateX(-8rem);
        }

        .site-navbar.is-pill .site-navbar__primary-menu {
            transform: translateX(-6rem);
        }
    }

    @media (max-width: 1023px) {
        .site-navbar__menu.is-open {
            display: flex;
        }

        .site-navbar.is-pill .site-navbar__inner {
            margin-top: 14px;
            border-radius: 24px;
        }
    }

    @media (max-width: 640px) {
        .site-navbar.is-pill {
            padding-right: 12px;
            padding-left: 12px;
        }
    }
</style>

<nav class="site-navbar sticky top-0 z-[1000] w-full bg-transparent px-0 transition-all duration-300" data-home-navbar="<?= $isHomeNavbar ? 'true' : 'false' ?>">
    <div class="site-navbar__inner mx-auto flex w-full items-center justify-between gap-5 border-b border-white/10 bg-[#0a3323]/90 px-6 py-2 shadow-[0_10px_24px_rgba(10,51,35,0.28)] backdrop-blur-2xl transition-all duration-300 max-sm:px-3.5">
        <a href="<?= base_url('home') ?>" class="flex min-w-0 items-center gap-2.5 no-underline" aria-label="Beranda RW">
            <img src="<?= base_url('images/Surabaya_Logo.png') ?>" alt="Logo Surabaya" class="site-navbar__logo h-[46px] w-[46px] shrink-0 rounded-xl object-contain p-1 transition-all duration-300">
            <div class="flex min-w-0 flex-col justify-center">
                <span class="text-[0.88rem] font-bold uppercase leading-none text-white max-sm:text-[0.82rem]">Sistem Informasi RW</span>
                <span class="mt-1 text-[0.66rem] font-medium leading-none text-white/80 max-sm:text-[0.62rem]">Rungkut Kidul RW.01</span>
            </div>
        </a>

        <button class="site-navbar__toggle inline-flex h-10 w-10 shrink-0 flex-col items-center justify-center gap-1.5 rounded-xl border-0 bg-white/10 p-2.5 lg:hidden" type="button" aria-label="Buka menu">
            <span class="h-0.5 w-full rounded-full bg-white"></span>
            <span class="h-0.5 w-full rounded-full bg-white"></span>
            <span class="h-0.5 w-full rounded-full bg-white"></span>
        </button>

        <div class="site-navbar__menu absolute left-3.5 right-3.5 top-[calc(100%+12px)] hidden flex-col items-stretch gap-2.5 rounded-3xl border border-white/10 bg-[#0a3323]/95 p-3.5 backdrop-blur-2xl lg:static lg:flex lg:flex-row lg:items-center lg:gap-1.5 lg:border-0 lg:bg-transparent lg:p-0 lg:backdrop-blur-none">
            <div class="site-navbar__primary-menu flex flex-col items-stretch gap-2.5 lg:flex-row lg:items-center lg:gap-1.5">
                <a href="<?= base_url('home') ?>" class="<?= $linkClass ?><?= $activePage === 'home' ? $activeLinkClass : '' ?>">Beranda</a>

                <div class="site-navbar__dropdown relative">
                    <button class="<?= $linkClass ?> site-navbar__dropdown-toggle w-full justify-between border-0 bg-transparent lg:w-auto <?= in_array($activePage, ['struktur', 'kartar'], true) ? $activeLinkClass : '' ?>" type="button">
                        <span>Lembaga</span>
                        <i class="fas fa-angle-down ml-2 text-xs"></i>
                    </button>
                    <div class="site-navbar__dropdown-menu mt-2 hidden min-w-[220px] rounded-2xl border border-white/40 bg-white/95 p-2.5 shadow-[0_18px_34px_rgba(10,51,35,0.16)] backdrop-blur-xl lg:absolute lg:left-0 lg:top-full">
                        <a href="<?= base_url('struktur') ?>" class="<?= $dropdownItemClass ?>">Perangkat RT/RW</a>
                        <a href="<?= base_url('kartar') ?>" class="<?= $dropdownItemClass ?>">Karang Taruna</a>
                    </div>
                </div>

                <a href="<?= base_url('berita') ?>" class="<?= $linkClass ?><?= $activePage === 'berita' ? $activeLinkClass : '' ?>">Berita</a>

                <a href="<?= base_url('wargaku') ?>" class="<?= $linkClass ?><?= $activePage === 'wargaku' ? $activeLinkClass : '' ?>">Pelayanan</a>
            </div>

            <?php if ($isLoggedIn) : ?>
                <div class="site-navbar__dropdown site-navbar__dropdown--account relative">
                    <button class="<?= $linkClass ?> site-navbar__account-toggle w-full justify-between border-0 bg-transparent lg:w-auto <?= $activePage === 'profil' ? $activeLinkClass : '' ?>" type="button">
                        <span class="inline-flex items-center gap-2">
                            <i class="fas fa-circle-user text-sm"></i>
                            Akun
                        </span>
                        <i class="fas fa-angle-down ml-2 text-xs"></i>
                    </button>
                    <div class="site-navbar__dropdown-menu mt-2 hidden min-w-[180px] rounded-2xl border border-white/40 bg-white/95 p-2.5 shadow-[0_18px_34px_rgba(10,51,35,0.16)] backdrop-blur-xl lg:absolute lg:right-0 lg:top-full">
                        <a href="<?= base_url('profil') ?>" class="<?= $dropdownItemClass ?>">Profil</a>
                        <a href="<?= base_url('logout') ?>" class="<?= $dropdownItemClass ?>">Log Out</a>
                    </div>
                </div>
            <?php else : ?>
                <a href="<?= base_url('login') ?>" class="<?= $iconLinkClass ?><?= $activePage === 'login' ? $activeLinkClass : '' ?>" aria-label="Login" title="Login">
                    <i class="fas fa-right-to-bracket"></i>
                </a>
                <a href="<?= base_url('daftar') ?>" class="<?= $iconLinkClass ?><?= $activePage === 'daftar' ? $activeLinkClass : '' ?>" aria-label="Daftar Akun" title="Daftar Akun">
                    <i class="fas fa-user-plus"></i>
                </a>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div class="site-navbar__spacer <?= $isHomeNavbar ? '' : 'hidden' ?>" style="<?= $isHomeNavbar ? 'height: 62px;' : '' ?>"></div>

<script>
    if (!window.__publicNavbarBound) {
        window.__publicNavbarBound = true;

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.site-navbar').forEach(function(navbar) {
                const menuToggle = navbar.querySelector('.site-navbar__toggle');
                const menu = navbar.querySelector('.site-navbar__menu');
                const dropdowns = Array.from(navbar.querySelectorAll('.site-navbar__dropdown'));
                const isHomeNavbar = navbar.dataset.homeNavbar === 'true';
                const spacer = navbar.nextElementSibling?.classList.contains('site-navbar__spacer') ? navbar.nextElementSibling : null;

                function updateNavbarShape() {
                    if (!isHomeNavbar) {
                        navbar.classList.remove('is-pill');
                        spacer?.classList.add('hidden');
                        return;
                    }

                    const isScrolled = window.scrollY > 24;

                    navbar.classList.toggle('is-pill', isScrolled);

                    if (spacer) {
                        spacer.classList.remove('hidden');
                        spacer.style.height = `${navbar.querySelector('.site-navbar__inner')?.offsetHeight || navbar.offsetHeight}px`;
                    }
                }

                menuToggle?.addEventListener('click', function() {
                    menu?.classList.toggle('is-open');
                });

                dropdowns.forEach(function(dropdown) {
                    const toggle = dropdown.querySelector('.site-navbar__dropdown-toggle, .site-navbar__account-toggle');

                    toggle?.addEventListener('click', function(event) {
                        if (window.innerWidth >= 1024) {
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

                window.addEventListener('scroll', updateNavbarShape, { passive: true });
                window.addEventListener('resize', updateNavbarShape);
                updateNavbarShape();
            });
        });
    }
</script>
