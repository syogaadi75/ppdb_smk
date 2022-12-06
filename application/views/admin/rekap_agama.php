<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Rekap Pendaftaran Berdasarkan Agama',
        'nav' => 'Rekap',
        'sub_nav' => 'Pendaftaran Berdasarkan Agama'
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
                            <div class="col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <div class="card-title mb-4 d-flex justify-content-between">
                                            <div>
                                                <h5 class="m-0 me-2"><?= $data['title'] ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4 d-flex justify-content-center w-full">
                                        <div class="row">
                                            <?php foreach ($agama as $x) { ?>
                                                <div class="col-sm-4 col-lg-4 mb-4">
                                                    <div class="d-flex flex-column gap-3">
                                                        <div class="d-flex gap-2 align-items-center">
                                                            <button class="btn btn-icon btn-primary btn-">
                                                                <i class="bx bx-user"></i>
                                                            </button>
                                                            <div>
                                                                <span class="text-primary">
                                                                    <b><?php echo $this->db->get_where('calon', array('agama' => $x->agama, 'uang_pendaftaran >=' => 50000))->num_rows(); ?></b>
                                                                </span>
                                                                Siswa
                                                            </div>
                                                        </div>
                                                        <div class="h6"><?php echo $x->agama; ?></div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Data Pendaftaran -->
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