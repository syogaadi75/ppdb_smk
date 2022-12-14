<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Rekap Pencarian /Asal Sekolah',
        'nav' => 'Rekap',
        'sub_nav' => 'Pencarian /Asal Sekolah'
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
                                        <div class="card-title mb-0 d-flex justify-content-between flex-lg-row flex-column gap-2">
                                            <div>
                                                <h5 class="m-0 me-2"><?= $data['title'] ?></h5>
                                                <form class="form-header" action="<?php echo base_url() . "C_admin/rekap_persekolah"; ?>" method="POST">
                                                    <div class="d-flex gap-2 mt-2">
                                                        <select class="form-control" name="cari">
                                                            <?php foreach ($sekolah as $x) { ?>
                                                                <option><?php echo $x->asalsekolah; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <button class="btn btn-primary btn-icon">
                                                            <i class="bx bx-search"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div>
                                                <button onclick="exportTableToExcel('tableData','Rekap')" type="button" class="btn btn-danger">
                                                    <i class="bx bx-file"></i>
                                                    Export Excel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered" id="tableData">
                                                <thead>
                                                    <tr>
                                                        <th>No. DU</th>
                                                        <th>No. Daftar</th>
                                                        <th>Tanggal DU</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>TTL</th>
                                                        <th>Asal Sekolah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($siswa as $x) {
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <?php
                                                                $data = $this->db->get_where('reg_siswa', array('no_pendaftaran' => $x->no_pendaftaran));
                                                                if ($data->num_rows() == 0) {
                                                                    echo '<button type="button" class="btn btn-outline-danger btn-sm" disabled="">Belum Lunas <br>DU</button>';
                                                                } else {
                                                                    echo $data->result_array()[0]['no_du'];
                                                                }
                                                                ?>


                                                            </td>
                                                            <td><?php echo $x->no_pendaftaran; ?></td>
                                                            <td><?php echo $x->tgl_daftar; ?></td>
                                                            <td><?php echo $x->nama; ?></td>
                                                            <td><?php echo $x->alamat; ?></td>
                                                            <td><?php echo $x->tmp_lahir . "," . $x->tgl_lahir; ?></td>
                                                            <td><?php echo $x->asalsekolah; ?></td>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#tableData').DataTable();
        });

        function exportTableToExcel(tableID, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
    </script>
</body>

</html>