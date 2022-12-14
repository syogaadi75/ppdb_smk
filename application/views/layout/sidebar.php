<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="<?= base_url() ?>" class="app-brand-link">
            <img width="35" src="<?= base_url(); ?>assets/images/logo.png" alt="Logo">
            <span class="demo menu-text fw-bolder ms-2">SMK PGRI 5 JEMBER</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item <?php if ($nav == 'Beranda') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('C_admin/beranda') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Beranda</div>
            </a>
        </li>
        <!-- Pendaftaran -->
        <li class="menu-item <?php if ($nav == 'Pendaftaran') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('C_admin/pendaftaran') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Analytics">Pendaftaran</div>
            </a>
        </li>
        <!-- Daftar Ulang -->
        <li class="menu-item <?php if ($nav == 'Daftar Ulang') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('C_admin/daftar_ulang') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-check"></i>
                <div data-i18n="Analytics">Daftar Ulang</div>
            </a>
        </li>
        <!-- Kategori -->
        <li class="menu-item <?php if ($nav == 'Kategori') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('C_admin/kategori') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-ul"></i>
                <div data-i18n="Analytics">Kategori</div>
            </a>
        </li>
        <!-- Titipan -->
        <li class="menu-item <?php if ($nav == 'Titipan') {
                                    echo "active";
                                } ?>">
            <a href="<?= base_url('C_admin/titipan') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-note"></i>
                <div data-i18n="Analytics">Titipan</div>
            </a>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Rekap & Laporan</span></li>
        <!-- Forms -->
        <li class="menu-item <?php if ($nav == 'Rekap') {
                                    echo "active open";
                                } ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Rekap">Rekap</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if ($sub_nav == 'Pendaftaran (Jurusan Utama)') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_admin/rekap_pendaftaran_jurusan_utama'); ?>" class="menu-link">
                        <div data-i18n="Pendaftaran (Jurusan Utama)">Pendaftaran (Jurusan Utama)</div>
                    </a>
                </li>
                <li class="menu-item <?php if ($sub_nav == 'DU Perjurusan') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_admin/rekap_du_perjurusan'); ?>" class="menu-link">
                        <div data-i18n="DU Perjurusan">DU Perjurusan</div>
                    </a>
                </li>
                <li class="menu-item <?php if ($sub_nav == 'Pencarian /Asal Sekolah') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_admin/rekap_persekolah'); ?>" class="menu-link">
                        <div data-i18n="Pencarian /Asal Sekolah">Pencarian /Asal Sekolah</div>
                    </a>
                </li>
                <li class="menu-item <?php if ($sub_nav == 'Pendaftaran & DU /Asal Sekolah') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_admin/rekap_persekolah1'); ?>" class="menu-link">
                        <div data-i18n="Pendaftaran & DU /Asal Sekolah">Pendaftaran & DU /Asal Sekolah</div>
                    </a>
                </li>
                <li class="menu-item <?php if ($sub_nav == 'Pendaftaran Berdasarkan Agama') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_admin/rekap_agama'); ?>" class="menu-link">
                        <div data-i18n="Pendaftaran Berdasarkan Agama">Pendaftaran Berdasarkan Agama</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item <?php if ($nav == 'Laporan') {
                                    echo "active open";
                                } ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book"></i>
                <div data-i18n="Form Layouts">Laporan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if ($sub_nav == 'Pendaftaran') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_admin/laporan_pendaftaran'); ?>" class="menu-link">
                        <div data-i18n="Pendaftaran">Pendaftaran</div>
                    </a>
                </li>
                <li class="menu-item <?php if ($sub_nav == 'Daftar Ulang') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_admin/laporan_daftar_ulang'); ?>" class="menu-link">
                        <div data-i18n="Daftar Ulang">Daftar Ulang</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item <?php if ($nav == 'Notifikasi WhatsApp') {
                                    echo "active open";
                                } ?>">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-whatsapp"></i>
                <div data-i18n="Form Layouts">Notifikasi WhatsApp</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item <?php if ($sub_nav == 'Pendaftaran') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_Whatsapp/pendaftaran'); ?>" class="menu-link">
                        <div data-i18n="Pendaftaran">Pendaftaran</div>
                    </a>
                </li>
                <li class="menu-item <?php if ($sub_nav == 'Daftar Ulang') {
                                            echo "active";
                                        } ?>">
                    <a href="<?= base_url('C_Whatsapp/daftar_ulang'); ?>" class="menu-link">
                        <div data-i18n="Daftar Ulang">Daftar Ulang</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>