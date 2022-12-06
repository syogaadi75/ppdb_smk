<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Rekap Pendaftaran & DU /Asal Sekolah',
        'nav' => 'Rekap',
        'sub_nav' => 'Pendaftaran & DU /Asal Sekolah'
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
                                        <div class="card-title mb-0 d-flex justify-content-between">
                                            <div>
                                                <h5 class="m-0 me-2"><?= $data['title'] ?></h5>
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
                                                <tr align="center">
                                                    <th class="alert alert-primary" rowspan="2">ASAL SEKOLAH</th>
                                                    <th colspan="3">PENDAFTARAN</th>
                                                    <th colspan="3">DAFTAR ULANG</th>
                                                </tr>
                                                <tr align="center">
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                    <th>L</th>
                                                    <th>P</th>
                                                    <th>JML</th>
                                                </tr>
                                                <?php foreach ($sekolah as $x) { ?>
                                                    <tr align="center">
                                                        <th style="width: 300px;"><?php echo $x->asalsekolah; ?></th>
                                                        <!-- PENDAFTARAN -->
                                                        <th><?php echo $this->db->get_where('calon', array('asalsekolah' => $x->asalsekolah, 'gender' => 'L', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></th>
                                                        <th><?php echo $this->db->get_where('calon', array('asalsekolah' => $x->asalsekolah, 'gender' => 'P', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></th>
                                                        <th><?php echo $this->db->get_where('calon', array('asalsekolah' => $x->asalsekolah, 'uang_pendaftaran >=' => 50000))->num_rows(); ?></th>

                                                        <!-- DAFTAR ULANG -->
                                                        <th><?php echo $this->db->get_where('reg_siswa_v', array('gender' => 'L', 'asalsekolah' => $x->asalsekolah))->num_rows(); ?></th>
                                                        <th><?php echo $this->db->get_where('reg_siswa_v', array('gender' => 'P', 'asalsekolah' => $x->asalsekolah))->num_rows(); ?></th>
                                                        <th><?php echo $this->db->get_where('reg_siswa_v', array('asalsekolah' => $x->asalsekolah))->num_rows(); ?></th>
                                                    </tr>
                                                <?php } ?>
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