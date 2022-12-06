<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html" style="width: 200px">
                    <img src="<?php echo base_url() ?>img/pgri2.png" alt="CoolAdmin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li class="<?php if ($title == 'Beranda') {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url('C_admin/beranda') ?>">
                        <i class="fas fa-file"></i>Beranda</a>
                </li>
                <li class="<?php if ($title == 'Pendaftaran') {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url('C_admin/pendaftaran') ?>">
                        <i class="fas fa-file"></i>Pendaftaran</a>
                </li>
                <li class="<?php if ($title == 'Daftar Ulang') {
                                echo "active";
                            } ?>">
                    <a href="<?php echo base_url('C_admin/daftar_ulang') ?>">
                        <i class="fas fa-file"></i>Daftar Ulang</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Rekap</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="<?php echo base_url() . "C_admin/rekap_pendaftaran_jurusan_utama"; ?>">Pendaftaran(Jurusan Utama)</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() . "C_admin/rekap_du_perjurusan"; ?>">Daftar Ulang Perjurusan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() . "C_admin/rekap_persekolah"; ?>">Pencarian Per asal sekolah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() . "C_admin/rekap_persekolah1"; ?>">Pendaftaran dan Daftar Ulang Per asal sekolah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() . "C_admin/rekap_agama"; ?>">Pendaftaran Berdasarkan Agama</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Laporan</a>
                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="<?php echo base_url() . "C_admin/laporan_pendaftaran"; ?>">Pendaftaran</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url() . "C_admin/laporan_daftar_ulang"; ?>">Daftar Ulang</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>