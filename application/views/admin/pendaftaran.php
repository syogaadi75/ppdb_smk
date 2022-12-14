<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Pendaftaran',
        'nav' => 'Pendaftaran',
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
                            <div class="col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Data Pendaftaran</h5>
                                            <small class="text-muted">
                                                Menampilkan semua data <b>calon siswa</b> yang telah mendaftar.
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <table class="table-borderless mb-4">
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">
                                                        <a href="<?php echo base_url() . "C_admin/tambah_siswa?petugas=" . $this->session->userdata('petugas'); ?>" class="btn btn-primary">Tambah</a>
                                                    </td>
                                                    <td style="padding-left: 1rem;">
                                                        <form class="form-header" action="<?php echo base_url() . "C_admin/pendaftaran"; ?>" method="POST">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="cari" placeholder="No Daftar" aria-label="No Pendaftaran" aria-describedby="button-addon2">
                                                                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-hover" id="example" style="margin-top: 20px;">
                                                <thead>
                                                    <tr class="text-nowrap">
                                                        <th>No.</th>
                                                        <th>NAMA</th>
                                                        <th>ASAL SEKOLAH</th>
                                                        <th>TTL</th>
                                                        <th>ALAMAT</th>
                                                        <th>JK</th>
                                                        <th>Pilihan Utama</th>
                                                        <th>Konfirmasi Pembayaran</th>
                                                        <th>Status</th>
                                                        <th>Tgl Daftar</th>
                                                        <th>Tgl Bayar</th>
                                                        <th>Petugas</th>
                                                        <th>
                                                            <center>Aksi</center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($calon as $x) { ?>
                                                        <tr>
                                                            <td><?php echo $x->no_pendaftaran; ?></td>
                                                            <td><?php echo $x->nama; ?></td>
                                                            <td><?php echo $x->asalsekolah; ?></td>
                                                            <td><?php echo $x->tmp_lahir . "," . $x->tgl_lahir; ?></td>
                                                            <td><?php echo $x->alamat; ?></td>
                                                            <td align="center"><?php echo $x->gender; ?></td>
                                                            <td><?php echo $x->prioritas1; ?></td>
                                                            <td>
                                                                <center>
                                                                    <?php if ($x->uang_pendaftaran >= 50000) { ?>
                                                                        <?php if ($x->petugas == $petugas || $level == 'super_admin') { ?>
                                                                            <button class="btn btn-danger btn-sm" id="batal" onclick="batal('<?= $x->no_pendaftaran; ?>')">Batalkan</button>
                                                                        <?php } else {
                                                                            echo "Tidak berhak membatalkan";
                                                                        } ?>
                                                                    <?php } else { ?>
                                                                        <button class="btn btn-primary btn-sm" onclick="iya('<?= $x->no_pendaftaran ?>', '<?= $x->nama ?>', '<?= $x->tgl_lahir ?>','<?= $x->asalsekolah ?>', '<?= $x->prioritas1 ?>', '<?= $x->prioritas2 ?>', '<?= $x->prioritas3 ?>',)">Iya</button>
                                                                        </script>
                                                                    <?php } ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <?php if ($x->uang_pendaftaran >= 50000) { ?>
                                                                    <button type="button" class="btn btn-outline-success btn-sm" disabled="">Lunas</button>
                                                                <?php } else { ?>
                                                                    <button type="button" class="btn btn-outline-danger btn-sm" disabled="">Belum Lunas</button>
                                                                <?php } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($x->tgl_daftar != "") {
                                                                    echo date('d M Y', strtotime($x->tgl_daftar));
                                                                } else {
                                                                    echo "<center>-</center>";
                                                                } ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($x->tgl_bayar != "") {
                                                                    echo date('d M Y', strtotime($x->tgl_bayar));
                                                                } else {
                                                                    echo "<center>-</center>";
                                                                } ?>
                                                            </td>
                                                            <td><?php echo $x->petugas; ?></td>
                                                            <td align="center">
                                                                <a href="<?= base_url('C_proses_admin/edit_pendaftar/' . $x->no_pendaftaran); ?>" class="btn btn-icon btn-primary"><i class="bx bx-edit"></i></a>
                                                                <a href="<?= base_url('C_proses_admin/hapus_pendaftar/' . $x->no_pendaftaran); ?>" class="btn btn-icon btn-danger"><i class="bx bx-x"></i></a>
                                                            </td>
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
    <script>
        base_url = '<?= base_url(); ?>'
        $(document).ready(function() {
            succ_hapus = '<?= $this->session->flashdata('succ_hapus'); ?>'
            status_batal = '<?= $this->session->flashdata('status_batal'); ?>'
            if (succ_hapus == 'true') {
                Swal.fire({
                    title: "Informasi!",
                    text: 'Berhasil Menghapus'
                })
            }

            if (status_batal == 'berhasil') {
                Swal.fire({
                    title: "Informasi!",
                    text: 'Berhasil membatalkan pendaftaran'
                })
            }


            $('#example').DataTable();
        });

        function iya(no_pendaftaran, nama, tgl_lahir, asalsekolah, prioritas1, prioritas2, prioritas3) {
            Swal.fire({
                title: "Konfirmasi",
                text: "Apakah Siswa Sudah Membayar ?",
                type: "warning",
                showDenyButton: true,
                confirmButtonText: 'Iya',
                denyButtonText: `Belum`,
            }).then(res => {
                if (res.isConfirmed) {
                    window.location = base_url + "C_proses_admin/pendaftaran_bank?no_pendaftaran=" + no_pendaftaran + "&nama=" + nama + "&tgl_lahir=" + tgl_lahir + "&asalsekolah=" + asalsekolah + "&biaya=50000&nominal=50000&kembalian=0&p1=" + prioritas1 + "&p2=" + prioritas2 + "&p3=" + prioritas3 + "";
                }
            });
        }

        function batal(no_pendaftaran) {
            Swal.fire({
                title: "Konfirmasi",
                text: "Yakin membatalkan pendaftaran ?",
                type: "warning",
                showDenyButton: true,
                confirmButtonText: 'Iya',
                denyButtonText: `Tutup`,
            }).then(res => {
                if (res.isConfirmed) {
                    window.location = base_url + "C_proses_admin/batal_pendaftaran?no_pendaftaran=" + no_pendaftaran;
                }
            });
        }

        $("#tampil").slideToggle(0);
        $("#tampil_bayar").click(function() {
            $("#tampil").slideToggle('slow');
        });
        $("#kategori").change(function() {
            $("#biaya").val($("#kategori").val());
            $("#biaya1").val($("#kategori").val());
        });
        $("#nominal").keyup(function() {
            var kembalian = parseInt($("#nominal").val()) - 50000;
            $("#kemb").val(kembalian);
            $("#kemb1").val(kembalian);
            if ($("#nominal").val() < 50000) {
                $("#bayar").attr('disabled', true);
            } else {
                $("#bayar").attr('disabled', false);
            }
        });
        $("#bayar").attr('disabled', true);
    </script>
</body>

</html>