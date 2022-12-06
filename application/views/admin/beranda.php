<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Beranda',
        'nav' => 'Beranda',
        'sub_nav' => ''
    ];
    ?>
    <?php $this->load->view('layout/head', $data); ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php $this->load->view('layout/sidebar', $data); ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php $this->load->view('layout/navbar', $data); ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <!-- Data Pendaftaran -->
                            <div class="col-md-6 col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Data Pendaftaran</h5>
                                            <small class="text-muted">
                                                <span class="text-primary">
                                                    <b>
                                                        <?php
                                                        $jml_siswa = $this->db->get('calon')->num_rows();
                                                        echo number_format($jml_siswa, 0, ',', '.');
                                                        ?>
                                                        Siswa
                                                    </b>
                                                </span>
                                                Telah Terdaftar
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                            <div class="d-flex flex-column gap-1">
                                                <h2 class="mb-2">Rp. <?php
                                                                        $total_uang = 0;
                                                                        foreach ($siswa1 as $y) {
                                                                            $total_uang += 50000;
                                                                        }
                                                                        echo number_format($total_uang, 0, ',', '.'); ?></h2>
                                                <span>Total Uang Pendaftaran</span>
                                            </div>
                                        </div>
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-user"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Siswa Lunas</h6>
                                                        <small class="text-muted">Pendaftaran</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold text-primary">
                                                            <?php echo number_format($this->db->get_where('calon', array('uang_pendaftaran >=' => 50000))->num_rows(), 0, ',', '.'); ?> Siswa
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-user"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Siswa Belum Lunas</h6>
                                                        <small class="text-muted">Pendaftaran</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold text-danger">
                                                            <?php echo number_format($this->db->get_where('calon', array('uang_pendaftaran' => 0))->num_rows(), 0, ',', '.'); ?> Siswa
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Data Pendaftaran -->

                            <!-- Data Daftar Ulang -->
                            <div class="col-md-6 col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Data Daftar Ulang</h5>
                                            <small class="text-muted"> Siswa yang sudah melunasi biaya pendaftaran, dapat melakukan DU</small>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="d-flex justify-content-start align-items-center mb-3">
                                            <div class="d-flex flex-column gap-1">
                                                <?php $total_uang_du = 0; ?>
                                                <h2 class="mb-2">Rp. <?php foreach ($siswa as $x) {
                                                                            $total_uang_du += $x->uang;
                                                                        }
                                                                        echo number_format($total_uang_du, 0, ',', '.'); ?></h2>
                                                <span>Total Uang Daftar Ulang</span>
                                            </div>
                                        </div>
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-user"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Siswa Sudah DU</h6>
                                                        <small class="text-muted">Daftar Ulang</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold text-primary">
                                                            <?php echo number_format($this->db->get('reg_siswa')->num_rows(), 0, ',', '.'); ?> Siswa
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-1">
                                                <div class="avatar flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded bg-label-danger"><i class="bx bx-user"></i></span>
                                                </div>
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-2">
                                                        <h6 class="mb-0">Siswa Belum DU</h6>
                                                        <small class="text-muted">Daftar Ulang</small>
                                                    </div>
                                                    <div class="user-progress">
                                                        <small class="fw-semibold text-danger">
                                                            <?php echo number_format($this->db->get_where('calon', array('uang_pendaftaran >=' => 50000))->num_rows() - $this->db->get('reg_siswa')->num_rows(), 0, ',', '.'); ?> Siswa
                                                        </small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Data Daftar Ulang -->
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php $this->load->view('layout/footer', $data); ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <?php $this->load->view('layout/js', $data); ?>
</body>

</html>