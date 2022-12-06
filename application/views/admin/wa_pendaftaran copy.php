<!DOCTYPE html>
<html lang="en">
<?php $total_uang = 0; ?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Nomor WA Pendaftaran</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url() ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>jquery/jquery-ui.css">
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/dataTables/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>sweet/sweetalert.css">
    <!-- Vendor CSS-->
    <link href="<?php echo base_url() ?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/css/theme.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php $this->load->view('layout/header_mobile', ['title' => '']); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view('layout/sidebar'); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url('assets/images/images.png'); ?>" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $this->session->userdata('petugas') ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="account-dropdown__footer">
                                                <a href="<?php echo base_url() . "C_admin/logout" ?>" onclick="return confirm('Apakah anda yakin ingin keluar?')">
                                                    <i class="zmdi zmdi-power text text-danger"></i>Keluar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Data Calon Siswa</strong>
                                    </div>
                                    <div class="card-body">
                                        <div style="margin-bottom: 10px;">
                                            <form class="form-header" action="<?php echo base_url() . "C_admin/cari_wa_pendaftaran"; ?>" method="POST">
                                                <input class="au-input au-input--xl" style="margin-right: 10px;" type="text" id="tgl" name="tgl_awal" placeholder="Tanggal Bayar Awal" autocomplete="off">
                                                <input class="au-input au-input--xl" type="text" id="tgl1" name="tgl_akhir" placeholder="Tanggal Bayar Akhir" autocomplete="off">
                                                <button class="au-btn--submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <table class="table table-bordered" id="tableData">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Nomor</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script src="<?php echo base_url() ?>assets/vendor/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>jquery/jquery-ui.min.js"></script>
        <script src="<?php echo base_url() ?>assets/datatable/js/jquery.dataTables.min.js">
        </script>
        <script src="<?php echo base_url() ?>assets/datatable/js/dataTables.bootstrap4.min.js">
        </script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/dataTables/jquery.dataTables.js"></script>
        <!-- Vendor JS       -->
        <script src="<?php echo base_url() ?>sweet/sweetalert.min.js"></script>

        <script src="<?php echo base_url() ?>assets/vendor/slick/slick.min.js">
        </script>
        <script src="<?php echo base_url() ?>assets/vendor/wow/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/animsition/animsition.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="<?php echo base_url() ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="<?php echo base_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/select2/select2.min.js">
        </script>
        <script src="<?php echo base_url() ?>assets/js/main.js"></script>
        <script>
            $(document).ready(function() {
                $('#tableData').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'csv', 'excel',
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
<!-- end document-->