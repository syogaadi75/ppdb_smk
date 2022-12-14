<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    $data = [
        'title' => 'Kategori',
        'nav' => 'Kategori',
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
                            <div class="col-md-12 col-12 order-0 mb-4">
                                <div class="card h-100">
                                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                                        <div class="card-title mb-0">
                                            <h5 class="m-0 me-2"><?= $data['title']; ?></h5>
                                            <small class="text-muted"> Anda dapat menambah, mengubah, & menghapus data <?= $data['title']; ?></small>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <button class="btn btn-primary mb-4" onclick="tambahData()">Tambah Data</button>
                                        <div class="table-responsive text-nowrap">
                                            <table class="table" id="datatable">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Kategori</th>
                                                        <th>Harga</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($kategori as $i => $value) { ?>
                                                        <tr>
                                                            <td><?= $i + 1; ?></td>
                                                            <td><?= $value->nama_kategori; ?></td>
                                                            <td>Rp. <?= number_format($value->harga, 0, ',', '.'); ?></td>
                                                            <td>
                                                                <button onclick="editData(<?= $value->id; ?>)" class="btn btn-primary btn-icon">
                                                                    <i class="bx bx-edit"></i>
                                                                </button>
                                                                <button onclick="hapusData(<?= $value->id; ?>)" class="btn btn-danger btn-icon">
                                                                    <i class="bx bx-x"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    <!-- Modal Form -->
    <div class="modal fade" id="modal-form" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="POST" id="form">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">...</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori">
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Tutup
                        </button>
                        <button type="submit" class="btn btn-primary" id="btn-save">...</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="modal-delete" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Kata yang telah terhapus tidak dapat dikembalikan lagi.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <a href="" id="btn-delete" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <?php $this->load->view('layout/js', $data); ?>

    <script>
        const base_url = "<?= base_url(); ?>"
        var pesan = "<?= $this->session->flashdata('pesan'); ?>"

        $(document).ready(function() {
            $('#datatable').DataTable();

            if (pesan) {
                Swal.fire({
                    title: "Informasi!",
                    text: pesan
                })
            }
        })


        function tambahData() {
            const url = base_url + 'CrudController/insert/kategori'
            $("#form").attr('action', url)
            $("#modal-title").html('Tambah Kategori')
            $("#btn-save").html('Tambah')

            $("#nama_kategori").val('')
            $("#harga").val('')

            $("#modal-form").modal('show')
        }

        function editData(id) {
            $.ajax({
                url: base_url + 'CrudController/getById/kategori/' + id,
                type: 'get',
                dataType: 'json',
                success: function(res) {
                    const url = base_url + 'CrudController/update/kategori/' + id
                    $("#form").attr('action', url)
                    $("#modal-title").html('Edit Kategori')
                    $("#btn-save").html('Simpan Perubahan')

                    $("#nama_kategori").val(res.nama_kategori)
                    $("#harga").val(res.harga)

                    $("#modal-form").modal('show')
                }
            })

        }

        function hapusData(id) {
            const url = base_url + 'CrudController/delete/kategori/' + id
            $("#btn-delete").attr('href', url)

            $("#modal-delete").modal('show')
        }
    </script>
</body>

</html>