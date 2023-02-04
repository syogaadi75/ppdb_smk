<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Rekap DU Perjurusan',
        'nav' => 'Rekap',
        'sub_nav' => 'DU Perjurusan'
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
                            <!-- Rekap DU Perjurusan -->
                            <div class="col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <div class="card-title mb-0 d-flex justify-content-between flex-lg-row flex-column gap-2">
                                            <div>
                                                <h5 class="m-0 me-2"><?= $data['title'] ?></h5>
                                            </div>
                                            <div>
                                                <button onclick="exportTableToExcel('tableData','Rekap DU Perjurusan')" type="button" class="btn btn-danger">
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
                                                        <th>Daftar Ulang</th>
                                                        <th>RPL</th>
                                                        <th>DKV</th>
                                                        <th>TSM</th>
                                                        <th>AK</th>
                                                        <th>MP</th>
                                                        <th>BD</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Laki-Laki</th>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'RPL', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'DKV', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'TSM', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'AK', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'MP', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'BD', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('gender' => 'L'))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Perempuan</th>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'RPL', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'DKV', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'TSM', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'AK', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'MP', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'BD', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('gender' => 'P'))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jumlah</th>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'RPL'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'DKV'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'TSM'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'AK'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'MP'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('du_v', array('paket_keahlian' => 'BD'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get('du_v')->num_rows(); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Rekap DU Perjurusan -->

                            <!-- Rekap Titipan Perjurusan -->
                            <div class="col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <div class="card-title mb-0 d-flex justify-content-between flex-lg-row flex-column gap-2">
                                            <div>
                                                <h5 class="m-0 me-2">Rekap Titipan Perjurusan</h5>
                                            </div>
                                            <div>
                                                <button onclick="exportTableToExcel('tableTitipan','Rekap Titipan Perjurusan')" type="button" class="btn btn-danger">
                                                    <i class="bx bx-file"></i>
                                                    Export Excel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered" id="tableTitipan">
                                                <thead>
                                                    <tr>
                                                        <th>Titipan</th>
                                                        <th>RPL</th>
                                                        <th>DKV</th>
                                                        <th>TSM</th>
                                                        <th>AK</th>
                                                        <th>MP</th>
                                                        <th>BD</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Laki-Laki</th>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'RPL', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'DKV', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'TSM', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'AK', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'MP', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'BD', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('gender' => 'L'))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Perempuan</th>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'RPL', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'DKV', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'TSM', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'AK', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'MP', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'BD', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('gender' => 'P'))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jumlah</th>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'RPL'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'DKV'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'TSM'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'AK'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'MP'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'BD'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get('v_titipan')->num_rows(); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Rekap Titipan Perjurusan -->

                            <!-- Rekap Jumlah DU & Titipan Perjurusan -->
                            <div class="col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header pb-0">
                                        <div class="card-title mb-0 d-flex justify-content-between flex-lg-row flex-column gap-2">
                                            <div>
                                                <h5 class="m-0 me-2">Rekap Jumlah DU & Titipan Perjurusan</h5>
                                            </div>
                                            <div>
                                                <button onclick="exportTableToExcel('tableJumlah','Rekap Jumlah DU & Titipan Perjurusan')" type="button" class="btn btn-danger">
                                                    <i class="bx bx-file"></i>
                                                    Export Excel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered" id="tableJumlah">
                                                <thead>
                                                    <tr>
                                                        <th>Titipan</th>
                                                        <th>RPL</th>
                                                        <th>DKV</th>
                                                        <th>TSM</th>
                                                        <th>AK</th>
                                                        <th>MP</th>
                                                        <th>BD</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Laki-Laki</th>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'RPL', 'gender' => 'L'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'RPL', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'DKV', 'gender' => 'L'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'DKV', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'TSM', 'gender' => 'L'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'TSM', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'AK', 'gender' => 'L'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'AK', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'MP', 'gender' => 'L'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'MP', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'BD', 'gender' => 'L'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'BD', 'gender' => 'L'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('gender' => 'L'))->num_rows() + $this->db->get_where('du_v', array('gender' => 'L'))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Perempuan</th>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'RPL', 'gender' => 'P'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'RPL', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'DKV', 'gender' => 'P'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'DKV', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'TSM', 'gender' => 'P'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'TSM', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'AK', 'gender' => 'P'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'AK', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'MP', 'gender' => 'P'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'MP', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'BD', 'gender' => 'P'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'BD', 'gender' => 'P'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('gender' => 'P'))->num_rows() + $this->db->get_where('du_v', array('gender' => 'P'))->num_rows(); ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Jumlah</th>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'RPL'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'RPL'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'DKV'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'DKV'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'TSM'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'TSM'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'AK'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'AK'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'MP'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'MP'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get_where('v_titipan', array('kode_paket' => 'BD'))->num_rows() + $this->db->get_where('du_v', array('paket_keahlian' => 'BD'))->num_rows(); ?></td>
                                                        <td><?php echo $this->db->get('v_titipan')->num_rows() + $this->db->get('du_v')->num_rows(); ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Rekap Jumlah DU & Titipan Perjurusan -->
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