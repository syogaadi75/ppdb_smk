<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Rekap Pendaftaran (Jurusan Utama)',
        'nav' => 'Rekap',
        'sub_nav' => 'Pendaftaran (Jurusan Utama)'
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
                                                        <th>Pendaftaran</th>
                                                        <th>RPL</th>
                                                        <th>DKV</th>
                                                        <th>TSM</th>
                                                        <th>AK</th>
                                                        <th>MP</th>
                                                        <th>BD</th>
                                                        <th>Jumlah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Laki-Laki</th>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'RPL', 'uang_pendaftaran >=' => 50000, 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'DKV', 'uang_pendaftaran >=' => 50000, 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'TSM', 'uang_pendaftaran >=' => 50000, 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'AK', 'uang_pendaftaran >=' => 50000, 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'MP', 'uang_pendaftaran >=' => 50000, 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'BD', 'uang_pendaftaran >=' => 50000, 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('gender' => 'L', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Perempuan</th>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'RPL', 'uang_pendaftaran >=' => 50000, 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'DKV', 'uang_pendaftaran >=' => 50000, 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'TSM', 'uang_pendaftaran >=' => 50000, 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'AK', 'uang_pendaftaran >=' => 50000, 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'MP', 'uang_pendaftaran >=' => 50000, 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'BD', 'uang_pendaftaran >=' => 50000, 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('gender' => 'P', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total</th>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'RPL', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'DKV', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'TSM', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'AK', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'MP', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('prioritas1' => 'BD', 'uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('calon', array('uang_pendaftaran >=' => 50000))->num_rows(); ?></td>
                                                    </tr>
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