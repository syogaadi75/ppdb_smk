<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Daftar Ulang',
        'nav' => 'Daftar Ulang',
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
                            <!-- Data Daftar Ulang -->
                            <div class="col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2">Data Daftar Ulang</h5>
                                            <small class="text-muted">
                                                <strong>Penting!!!</strong> Silahkan melakukan pencarian <strong>No Pendaftaran</strong> untuk melakukan <strong>Daftar Ulang</strong>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <?php if ($calon[0]->uang_pendaftaran < 50000) { ?>
                                            <div class="alert alert-warning" role="alert">
                                                <strong>Tidak bisa membayar DU</strong>, silahkan melunasi pendaftaran terlebih dahulu.
                                            </div>
                                        <?php } ?>
                                        <table class="table-borderless mb-4">
                                            <tbody>
                                                <tr>
                                                    <td class="align-middle">
                                                        <?php if ($calon == null) { ?>
                                                            <button class="btn btn-primary" disabled>Bayar</button>
                                                        <?php } elseif ($calon[0]->uang_pendaftaran < 50000) { ?>
                                                            <button class="btn btn-primary" disabled>Bayar</button>
                                                        <?php } elseif ($this->db->get_where('reg_siswa', array('no_pendaftaran' => $calon[0]->no_pendaftaran))->num_rows() == 1) { ?>
                                                            <button class="btn btn-primary" disabled>Bayar</button>
                                                        <?php } else { ?>
                                                            <button class="btn btn-primary" id="tampil_bayar">Bayar</button>
                                                        <?php } ?>
                                                    </td>
                                                    <td style="padding-left: 1rem;">
                                                        <form class="form-header" action="<?php echo base_url() . "C_admin/daftar_ulang"; ?>" method="POST">
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
                                                    <tr>
                                                        <th>No.Daftar</th>
                                                        <th>No. DU</th>
                                                        <th>NAMA</th>
                                                        <th>ASAL SEKOLAH</th>
                                                        <th>JK</th>
                                                        <th>Pilihan Utama</th>
                                                        <th>BAYAR PENDAFTARAN</th>
                                                        <th>
                                                            <center>BAYAR DU</center>
                                                        </th>
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
                                                                        <button type="button" class="btn btn-outline-primary rounded-pill btn-sm" disabled="">
                                                                            <i class="bx bx-check"></i>
                                                                            Pendaftaran
                                                                        </button>
                                                                    <?php } else { ?>
                                                                        <button type="button" class="btn btn-outline-danger rounded-pill btn-sm" disabled="">
                                                                            <i class="bx bx-x"></i>
                                                                            Pendaftaran
                                                                        </button>
                                                                    <?php } ?>
                                                                </center>
                                                            </td>
                                                            <td>
                                                                <center>
                                                                    <?php
                                                                    if ($this->db->get_where('reg_siswa', array('no_pendaftaran' => $x->no_pendaftaran))->num_rows() > 0) {
                                                                    ?>
                                                                        <button type="button" class="btn btn-outline-primary rounded-pill btn-sm" disabled="">
                                                                            <i class="bx bx-check"></i>
                                                                            DU
                                                                        </button>
                                                                        <?php
                                                                        $cekDu1 = $this->db->get_where('reg_siswa', array('no_pendaftaran' => $x->no_pendaftaran));
                                                                        $def_petugas = '';
                                                                        if ($cekDu1->num_rows() > 0) {
                                                                            foreach ($cekDu1->result() as $item1) {
                                                                                $def_petugas = $item1->petugas;
                                                                            }
                                                                        }
                                                                        if ($def_petugas == $petugas || $level == 'super_admin') { ?>
                                                                            <button type="button" class="btn btn-danger rounded-pill btn-sm" onclick="batal('<?= $x->no_pendaftaran; ?>')">Batalkan</button>
                                                                        <?php } else { ?>
                                                                            <br>
                                                                            Tidak berhak membatalkan
                                                                        <?php } ?>
                                                                    <?php } else { ?>
                                                                        <button type="button" class="btn btn-outline-danger rounded-pill btn-sm" disabled="">
                                                                            <i class="bx bx-x"></i>
                                                                            DU
                                                                        </button>
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
                                    </div>
                                </div>
                            </div>
                            <!--/ Data Daftar Ulang -->
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Modal Bayar -->
                    <div class="modal fade" id="modalBayar" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="<?php echo base_url() . "C_proses_admin/daftar_ulang"; ?>">
                                    <div class="modal-body">
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
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label>Pilih Jurusan</label>
                                                <?php foreach ($calon as $x) { ?>
                                                    <select class="form-control" name="prioritas" id="prioritas" onchange="tentukanHarga()">
                                                        <option><?php echo $x->prioritas1; ?></option>
                                                        <option><?php echo $x->prioritas2; ?></option>
                                                        <option><?php echo $x->prioritas3; ?></option>
                                                    </select>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row g-2 mb-3">
                                            <div class="col mb-0">
                                                <label>Kategori</label>
                                                <select class="form-control" name="kategori" id="kategori" onchange="tentukanHarga()">
                                                    <option value="">Pilih Kategori</option>
                                                    <?php foreach ($kategori_du as $kdu) { ?>
                                                        <option value="<?= $kdu->id; ?>"><?= $kdu->nama_kategori; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="col mb-0">
                                                <label>Biaya</label>
                                                <input type="hidden" name="biaya" id="biaya">
                                                <input type="text" id="biaya1" class="form-control" disabled style="color: black;" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label>Pilihan</label>
                                                <select id="pembayaran" name="pembayaran" class="form-control">
                                                    <option hidden>Proses Pembayaran</option>
                                                    <option value="1">Ditempat</option>
                                                    <option value="2">Bank</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row g-2 mb-3">
                                            <div class="col mb-3">
                                                <label>Uang</label>
                                                <input type="text" name="nominal" id="nominal" class="form-control" disabled required>
                                            </div>
                                            <div class="col">
                                                <label>Kembalian</label>
                                                <input type="hidden" name="kembalian" id="kemb" required>
                                                <input type="text" id="kemb1" class="form-control" disabled style="color: black;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Tutup
                                        </button>
                                        <button id="bayar" name="bayar" type="submit" class="btn btn-primary">Bayar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

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
            $('#example').DataTable();

            status_batal = '<?= $this->session->flashdata('status_batal'); ?>'

            if (status_batal == 'berhasil') {
                Swal.fire({
                    title: "Informasi!",
                    text: 'Berhasil membatalkan daftar ulang'
                })
            }
        });

        function batal(no_pen) {
            Swal.fire({
                title: "Konfirmasi",
                text: "Yakin membatalkan daftar ulang?",
                type: "warning",
                showDenyButton: true,
                confirmButtonText: 'Iya',
                denyButtonText: `Tutup`,
            }).then(res => {
                if (res.isConfirmed) {
                    window.location = base_url + "C_proses_admin/batal_du?no_pendaftaran=" + no_pen;
                }
            });
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
            // $("#tampil").slideToggle('slow');
            $("#modalBayar").modal('show')
        });

        function tentukanHarga() {
            $.ajax({
                url: base_url + 'CrudController/getById/kategori/' + $("#kategori").val(),
                type: 'get',
                dataType: 'json',
                success: function(res) {
                    var prioritas = $("#prioritas").val()
                    var kategori = $("#kategori").val()
                    if (kategori == '') {
                        $("#kategori").attr('disabled', false)
                    } else {
                        var harga = parseInt(res.harga);
                        if (prioritas == 'RPL' || prioritas == 'TBSM' || prioritas == 'MM') {
                            harga += 15000
                        }
                        $("#biaya").val(harga);
                        $("#biaya1").val(harga);
                    }
                }
            })
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