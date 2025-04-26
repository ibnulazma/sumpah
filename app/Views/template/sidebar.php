<?php
$db     = \Config\Database::connect();

$user = $db->table('tbl_user')
    ->where('id_user')
    ->get()->getRowArray();

?>

<div class="app-brand demo">
    <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="<?= base_url() ?>/foto/logo.png" alt="" width="30px">
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">SIAKADINKA</span>
    </a>

    <a href="" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
</div>

<div class="menu-inner-shadow"></div>

<<<<<<< HEAD
                    </ul>
                </li>
                <li class="nav-item <?= $menu == 'akademik' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $menu == 'akademik' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Akademik
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('kelas') ?>" class="nav-link <?= $submenu == 'kelas' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rombongan Belajar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('mapel') ?>" class="nav-link <?= $submenu == 'mapel' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mata Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('jadwal') ?>" class="nav-link <?= $submenu == 'jadwal' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Pelajaran</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- PESERTA DIDIK -->
                <li class="nav-item <?= $menu == 'peserta' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $menu == 'peserta' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Peserta Didik
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('peserta') ?>" class="nav-link <?= $submenu == 'pesertaaktif' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Aktif</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('peserta/sudahlulus') ?>" class="nav-link <?= $submenu == 'sudahlulus' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lulus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('peserta/sudahkeluar') ?>" class="nav-link <?= $submenu == 'sudahkeluar' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('mapel') ?>" class="nav-link <?= $submenu == 'mapel' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mata Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('jadwal') ?>" class="nav-link <?= $submenu == 'jadwal' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Pelajaran</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- PESERTA DIDIK -->

                <!-- GURU -->
                <li class="nav-item <?= $menu == 'guru' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $menu == 'guru' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            PTK
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('guru') ?>" class="nav-link <?= $submenu == 'subguru' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Aktif</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="<?= base_url('mapel') ?>" class="nav-link <?= $submenu == 'mapel' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mata Pelajaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('jadwal') ?>" class="nav-link <?= $submenu == 'jadwal' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jadwal Pelajaran</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <!-- GURU -->


                <li class="nav-item <?= $menu == 'nilai' ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= $menu == 'nilai' ? 'active' : '' ?>">
                        <i class="nav-icon fas fa-paper-plane"></i>
                        <p>
                            Penilaian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('nilai/uts') ?>" class="nav-link <?= $submenu == 'uts' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>UTS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('nilai/pas') ?>" class="nav-link <?= $submenu == 'pas' ? 'active' : '' ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>PAS</p>
                            </a>
                        </li>
=======
<ul class="menu-inner py-1">
    <!-- Dashboard -->

>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15

    <?php if (session()->get('level') == 1) { ?>
        <li class="menu-item <?= $menu == 'admin' ? 'active' : '' ?>">

            <a href="<?= base_url('admin') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>

        </li>
    <?php } else if (session()->get('level') == 2) { ?>

        <li class="menu-item <?= $menu == 'admin' ? 'active' : '' ?>">

            <a href="<?= base_url('guru') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>

<<<<<<< HEAD
        <?php } elseif (session()->get('level') == 'pendidik') { ?>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MENU</li>
                <li class="nav-item">
                    <a href="<?= base_url('pendidik') ?>" class="nav-link <?= $menu == 'pendidik' ? 'active' : '' ?>">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pendidik/profile') ?>" class="nav-link <?= $menu == 'profile' ? 'active' : '' ?>">
                        <i class="fas fa-user nav-icon"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pendidik/tambah_keluarga') ?>" class="nav-link <?= $menu == 'tambah_keluarga' ? 'active' : '' ?>">
                        <i class="fa-solid fa-people-roof nav-icon"></i>
                        <p>
                            Keluarga
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('pendidik/tambah_pendidikan') ?>" class="nav-link <?= $menu == 'tambah_pendidikan' ? 'active' : '' ?>">
                        <i class="fa-solid fa-graduation-cap nav-icon"></i>
                        <p>
                            Riwayat Pendidikan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('nilai') ?>" class="nav-link <?= $menu == 'nilai' ? 'active' : '' ?>">
                        <i class="fas fa-paper-plane nav-icon"></i>
                        <p>
                            Penilaian
                        </p>
                    </a>
                </li>
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="<?= base_url('auth/logout') ?>" class="nav-link  ">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
=======
        </li>
    <?php } else if (session()->get('level') == 3) { ?>
        <li class="menu-item <?= $menu == 'siswa' ? 'active' : '' ?>">
            <a href="<?= base_url('siswa') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
    <?php } ?>
    <?php if (session()->get('level') == 1) { ?>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Setting</span>
        </li>
        <li class="menu-item <?= $menu == 'ta' ? 'active' : '' ?>">
            <a href="<?= base_url('ta') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Account Settings">Tahun Pelajaran</div>
            </a>
        </li>
        <li class="menu-item <?= $menu == 'setting' ? 'active' : '' ?>">
            <a href="<?= base_url('setting') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-school"></i>
                <div data-i18n="Account Settings">Profile Sekolah</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-lock-alt"></i>
                <div data-i18n="Account Settings">Akun</div>
            </a>
        </li>
        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Akademik</span></li>
        <!-- Cards -->
        <li class="menu-item <?= $menu == 'peserta' ? 'active' : '' ?>">
            <a href="<?= base_url('peserta') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-graduation"></i>
                <div data-i18n="Basic">Peserta Didik</div>
            </a>
        </li>
        <li class="menu-item <?= $menu == 'guru' ? 'active' : '' ?>">
            <a href="<?= base_url('guru') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Basic">PTK</div>
            </a>
        </li>
        <li class="menu-item <?= $menu == 'kelas' ? 'active' : '' ?>">
            <a href="<?= base_url('kelas') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-chalkboard"></i>
                <div data-i18n="Basic">Rombel</div>
            </a>
        </li>
>>>>>>> 7b172d997c0f581332306c4fe724ea1378fa7a15

    <?php } ?>

    <?php if (session()->get('level') == 3) { ?>
        <li class="menu-item <?= $menu == 'profile' ? 'active' : '' ?>">

            <a href="<?= base_url('siswa/profile') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
    <?php } ?>



</ul>