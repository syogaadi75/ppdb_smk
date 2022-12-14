<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Notifikasi WhatsApp Daftar Ulang',
        'nav' => 'Notifikasi WhatsApp',
        'sub_nav' => 'Daftar Ulang'
    ];
    ?>
    <?php $this->load->view('layout/head', $data); ?>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"> -->
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
                                        <div class="card-title mb-0 d-flex justify-content-between">
                                            <div>
                                                <h5 class="m-0 me-2"><?= $data['title'] ?></h5>
                                                <small class="text-muted">
                                                    Data siswa, pencarian tanggal awal & akhir
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <form class="form-header" action="<?php echo base_url() . "C_admin/cari_wa_du"; ?>" method="POST">
                                            <div class="mb-4 d-flex w-full flex-row gap-4 align-items-lg-center flex-lg-row flex-column">
                                                <div class="d-flex align-items-center gap-2">
                                                    <label>Tgl.Awal: </label>
                                                    <input class="form-control" type="date" id="tgl" name="tgl_awal" placeholder="Tanggal Bayar Awal">
                                                </div>
                                                <div class="d-flex align-items-center gap-2">
                                                    <label>Tgl.Akhir: </label>
                                                    <input class="form-control" type="date" id="tgl1" name="tgl_akhir" placeholder="Tanggal Bayar Akhir">
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary">
                                                        <i class="bx bx-search"></i> Cari
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered table-sm" id="tableData">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Nomor</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($dataTable as $x) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $x->nama; ?></td>
                                                            <td><?php echo $x->no_hp_siswa; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
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
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tableData').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'csv',
                        className: 'btn btn-info'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-success'
                    },
                ]
            });

            $("#tgl").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#tgl1").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>
</body>

</html>