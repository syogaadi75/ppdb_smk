<?php
$petugas = $this->session->userdata('petugas');
$dataUser = $this->db->get_where('user', array('username' => $petugas))->result();
$level = '';
foreach ($dataUser as $dataUsr) {
    $level = $dataUsr->status;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Daftar Ulang</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url() ?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url() ?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

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
        <?php $this->load->view('layout/header_mobile', ['title' => 'Daftar Ulang']); ?>
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
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-dark" style="margin-top:-20px;">
                                        <li class="breadcrumb-item text-white" aria-current="page">Daftar Ulang</li>
                                    </ol>
                                </nav>
                                <div class="card" style="width:100%;">
                                    <div class="card-header">
                                        <strong class="card-title">Data Calon Siswa</strong>
                                        <?php if ($calon == null) { ?>
                                            <button class="btn btn-primary btn-sm float-right" disabled>Bayar</button>
                                        <?php } elseif ($calon[0]->uang_pendaftaran < 50000) { ?>
                                            <button class="btn btn-primary btn-sm float-right" disabled>Bayar</button>
                                        <?php } elseif ($this->db->get_where('reg_siswa', array('no_pendaftaran' => $calon[0]->no_pendaftaran))->num_rows() == 1) { ?>
                                            <button class="btn btn-primary btn-sm float-right" disabled>Bayar</button>
                                        <?php } else { ?>
                                            <button class="btn btn-primary btn-sm float-right" id="tampil_bayar">Bayar</button>
                                        <?php } ?>
                                    </div>
                                    <div class="card-body">
                                        <div style="margin-left: 200px;">
                                            <form class="form-header" action="<?php echo base_url() . "C_admin/daftar_ulang"; ?>" method="POST">
                                                <input class="au-input au-input--xl" type="text" name="cari" placeholder="No Pendaftaran" />
                                                <button class="au-btn--submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover table-sm" id="example" style="margin-top: 20px;">
                                                <thead>
                                                    <tr>
                                                        <th>No.Daftar</th>
                                                        <th>No. DU</th>
                                                        <th>NAMA</th>
                                                        <th>ASAL SEKOLAH</th>
                                                        <th>JK</th>
                                                        <th>Pilihan Utama</th>
                                                        <th>BAYAR PENDAFTARAN</th>
                                                        <th>BAYAR DU</th>
                                                        <th>Tgl Bayar</th>
                                                        <th>Petugas</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($calon as $x) { ?>
                                                        <tr>
                                                            <td>
                                                                <center><?php echo $x->no_pendaftaran; ?></center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php
                                                                    $cekDu = $this->db->get_where('reg_siswa', array('no_pendaftaran' => $x->no_pendaftaran));
                                                                    if ($cekDu->num_rows() > 0) {
                                                                        foreach ($cekDu->result() as $item) {
                                                                            echo $item->no_du;
                                                                        }
                                                                    } else {
                                                                        echo '-';
                                                                    }
                                                                    ?>
                                                                </center>
                                                            </td>
                                                            <td><?php echo $x->nama; ?></td>
                                                            <td><?php echo $x->asalsekolah; ?></td>
                                                            <td><?php echo $x->gender; ?></td>
                                                            <td><?php echo $x->prioritas1; ?></td>
                                                            <td>
                                                                <center>
                                                                    <?php if ($x->uang_pendaftaran >= 50000) { ?>
                                                                        <button type="button" class="btn btn-outline-success btn-sm" disabled="">Lunas <br>Pendaftaran</button>
                                                                    <?php } else { ?>
                                                                        <button type="button" class="btn btn-outline-danger btn-sm" disabled="">Belum Lunas <br>Pendaftaran</button>
                                                                    <?php } ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php
                                                                    if ($this->db->get_where('reg_siswa', array('no_pendaftaran' => $x->no_pendaftaran))->num_rows() > 0) {
                                                                    ?>
                                                                        <button type="button" class="btn btn-outline-success btn-sm" disabled="">Lunas <br>DU</button>
                                                                        <?php
                                                                        $cekDu1 = $this->db->get_where('reg_siswa', array('no_pendaftaran' => $x->no_pendaftaran));
                                                                        $def_petugas = '';
                                                                        if ($cekDu1->num_rows() > 0) {
                                                                            foreach ($cekDu1->result() as $item1) {
                                                                                $def_petugas = $item1->petugas;
                                                                            }
                                                                        }
                                                                        if ($def_petugas == $petugas || $level == 'super_admin') { ?>
                                                                            <button type="button" class="btn btn-danger btn-sm mt-2" onclick="batal('<?= $x->no_pendaftaran; ?>')">Batalkan</button>
                                                                        <?php } else { ?>
                                                                            <br>
                                                                            Tidak berhak membatalkan
                                                                        <?php } ?>
                                                                    <?php } else { ?>
                                                                        <button type="button" class="btn btn-outline-danger btn-sm" disabled="">Belum Lunas <br>DU</button>
                                                                    <?php } ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <?php if ($x->tgl_du != "") {
                                                                    echo date('d M Y', strtotime($x->tgl_du));
                                                                } else {
                                                                    echo "<center>-</center>";
                                                                }  ?>
                                                            </td>
                                                            <td>
                                                                <?php
                                                                $cekDu2 = $this->db->get_where('reg_siswa', array('no_pendaftaran' => $x->no_pendaftaran));
                                                                if ($cekDu2->num_rows() > 0) {
                                                                    foreach ($cekDu2->result() as $item2) {
                                                                        echo $item2->petugas;
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body col-md-5" id="tampil" align="center" style="margin-left:250px;border-style: solid; margin-top: 50px;">
                                            <form method="POST" action="<?php echo base_url() . "C_proses_admin/daftar_ulang"; ?>">
                                                <?php foreach ($calon as $y) { ?>
                                                    <div class="form-group">
                                                        <input type="hidden" name="no_pendaftaran" value="<?php echo $y->no_pendaftaran; ?>">
                                                        <input type="hidden" name="no_du" value="<?php echo $this->db->get('reg_siswa')->num_rows() + 1; ?>">
                                                        <input type="hidden" name="nama" value="<?php echo $y->nama; ?>">
                                                        <input type="hidden" name="alamat" value="<?php echo $y->alamat; ?>">
                                                        <input type="hidden" name="tgl_lahir" value="<?php echo $y->tgl_lahir; ?>">
                                                        <input type="hidden" name="asalsekolah" value="<?php echo $y->asalsekolah; ?>">
                                                    </div>
                                                <?php } ?>
                                                <div class="form-group">
                                                    <label>PILIH JURUSAN</label>
                                                    <?php foreach ($calon as $x) { ?>
                                                        <select class="form-control" name="prioritas" id="prioritas" onchange="tentukanHarga()">
                                                            <option><?php echo $x->prioritas1; ?></option>
                                                            <option><?php echo $x->prioritas2; ?></option>
                                                            <option><?php echo $x->prioritas3; ?></option>
                                                        </select>
                                                    <?php } ?>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select class="form-control" name="kategori" id="kategori" onchange="tentukanHarga()" disabled>
                                                        <option value="">Pilih Kategori</option>
                                                        <option value="L">Laki-Laki</option>
                                                        <option value="P">Perempuan</option>
                                                        <option value="M">Muslimah</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>BIAYA</label>
                                                    <input type="hidden" name="biaya" id="biaya">
                                                    <input type="text" id="biaya1" class="form-control" disabled style="color: black;">
                                                </div>
                                                <div class="form-group">
                                                    <label>PILIHAN</label>
                                                    <select id="pembayaran" name="pembayaran" class="form-control">
                                                        <option hidden>Proses Pembayaran</option>
                                                        <option value="1">Ditempat</option>
                                                        <option value="2">Bank</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>UANG</label>
                                                    <input type="text" name="nominal" id="nominal" class="form-control" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>KEMBALIAN</label>
                                                    <input type="hidden" name="kembalian" id="kemb">
                                                    <input type="text" id="kemb1" class="form-control" disabled style="color: black;">
                                                </div>
                                                <div class="form-group">
                                                    <button id="bayar" name="bayar" class="btn btn-danger">BAYAR</button>
                                                </div>
                                            </form>
                                        </div>
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

        <!-- Jquery JS-->
        <script src="<?php echo base_url() ?>assets/vendor/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/datatable/js/jquery.dataTables.min.js">
        </script>
        <script src="<?php echo base_url() ?>assets/datatable/js/dataTables.bootstrap4.min.js">
        </script>
        <!-- Bootstrap JS-->
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
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

        <!-- Main JS-->
        <script src="<?php echo base_url() ?>assets/js/main.js"></script>
        <script>
            base_url = '<?= base_url(); ?>'
            $(document).ready(function() {
                $('#example').DataTable();

                status_batal = '<?= $this->session->flashdata('status_batal'); ?>'

                if (status_batal == 'berhasil') {
                    swal('Berhasil membatalkan daftar ulang')
                }
            });

            function batal(no_pen) {
                swal({
                        title: "Konfirmasi",
                        text: "Yakin membatalkan pendaftaran ?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Iya",
                        cancelButtonText: "Tutup",
                        closeOnConfirm: true,
                        closeOnCancel: true
                    },
                    function() {
                        window.location = base_url + "C_proses_admin/batal_du?no_pendaftaran=" + no_pen;
                    }
                );
            }

            $("#pembayaran").change(function() {
                if ($("#pembayaran").val() == '1') {
                    $("#nominal").attr('disabled', false);
                    $("#bayar").attr('disabled', true);
                } else if ($("#pembayaran").val() == '2') {
                    $("#nominal").attr('disabled', true);
                    $("#bayar").attr('disabled', false);
                }
            });

            $("#tampil").slideToggle(0);
            $("#tampil_bayar").click(function() {
                $("#tampil").slideToggle('slow');
            });

            function tentukanHarga() {
                var prioritas = $("#prioritas").val()
                var kategori = $("#kategori").val()
                if (kategori == '') {
                    $("#kategori").attr('disabled', false)
                } else {
                    if (kategori == 'L') {
                        if (prioritas == 'RPL' || prioritas == 'TBSM' || prioritas == 'MM') {
                            // Putra Teknik
                            $("#biaya").val(2115000);
                            $("#biaya1").val(2115000);
                        } else {
                            // Putra Bismen
                            $("#biaya").val(2100000);
                            $("#biaya1").val(2100000);
                        }
                    } else if (kategori == 'P') {
                        if (prioritas == 'RPL' || prioritas == 'TBSM' || prioritas == 'MM') {
                            // Putri Teknik
                            $("#biaya").val(2215000);
                            $("#biaya1").val(2215000);
                        } else {
                            // Putri Bismen
                            $("#biaya").val(2200000);
                            $("#biaya1").val(2200000);
                        }
                    } else {
                        if (prioritas == 'RPL' || prioritas == 'TBSM' || prioritas == 'MM') {
                            // Muslimah Teknik
                            $("#biaya").val(2365000);
                            $("#biaya1").val(2365000);
                        } else {
                            // Muslimah Bismen
                            $("#biaya").val(2350000);
                            $("#biaya1").val(2350000);
                        }
                    }
                }
            }

            $("#nominal").keyup(function() {
                var kembalian = parseInt($("#nominal").val()) - parseInt($("#biaya").val());
                $("#kemb").val(kembalian);
                $("#kemb1").val(kembalian);
                if (parseInt($("#nominal").val()) >= parseInt($("#biaya").val())) {
                    $("#bayar").attr('disabled', false);
                } else {
                    $("#bayar").attr('disabled', true);
                }
            });
            $("#bayar").attr('disabled', true);
        </script>
</body>

</html>
<!-- end document-->