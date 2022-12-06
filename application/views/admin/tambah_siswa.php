<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('assets/'); ?>assets/" data-template="vertical-menu-template-free">

<head>
	<?php
	$data = [
		'title' => 'Tambah Calon Siswa',
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
											<h5 class="m-0 me-2">Tambah Calon Siswa</h5>
										</div>
									</div>
									<div class="card-body pt-4">
										<form method="POST" id="submit_daftar" action="<?php echo base_url() ?>C_proses_admin/tambah_siswa_admin">

											<!-- Identitas Peserta Didik -->
											<div class="text-muted mb-2"><strong>Identitas Peserta Didik</strong></div>
											<div class="row form-group">
												<div class="col-md-12">
													<?php
													$no_pendaftaran = $this->db->get('calon')->num_rows() + 1;
													?>
													<input type="text" id="no_pendaftaran" hidden="" name="no_pendaftaran" value="<?php echo $no_pendaftaran; ?>">
													<input type="hidden" name="petugas" id="petugas" value="<?php echo $petugas; ?>">
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12">
													<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" id="nama" required><small>*Sesuai ijazah SMP/MTS</small>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<select class="form-control" id="kelp" name="kelp" required>
														<option value="L">Laki-Laki</option>
														<option value="P">Perempuan</option>
													</select>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<input type="text" id="tlahirp" name="tlahirp" class="form-control" placeholder="Tempat Lahir" required>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<input type="date" name="tglp" id="tglp_cek" class="form-control" required>
													<div hidden="" id="err_tgl" class="alert alert-danger">Tanggal lahir harus di atas tahun 1999</div>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<select class="form-control" name="agamap" required>
														<?php if ($x->agama == "") { ?>
															<option hidden value="">Agama</option>
														<?php } else { ?>
															<option><?php echo $x->agama; ?></option>
														<?php } ?>
														<?php foreach ($agama as $y) { ?>
															<option><?php echo $y->agama; ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12">
													<input type="text" id="asekolahp" name="asekolahp" class="form-control" placeholder="Asal Sekolah" required>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12">
													<input type="text" id="ayahp" name="ayahp" class="form-control" placeholder="Nama Ayah" required>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12">
													<input type="text" id="ibup" name="ibup" class="form-control" placeholder="Nama Ibu" required>
												</div>
											</div>
											<div class="row form-group mb-4">
												<div class="col-md-12">
													<input type="text" id="pap" name="pap" class="form-control" placeholder="Pekerjaan Ayah" required>
												</div>
											</div>

											<!-- Alamat -->
											<div class="text-muted mb-2"><strong>Alamat</strong></div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<textarea required="" name="alamat" id="alamat" class="form-control" placeholder="Jl.patimura NO 78 RT 004 RW 022 GANG WRINGISARI"></textarea>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-6 col-sm-offset-0">
													<input type="text" name="desap" id="desap" class="form-control" placeholder="Kelurahan/Desa" required>
												</div>
												<div class="col-md-6 col-sm-offset-0">
													<input type="text" name="kecp" class="form-control" placeholder="Kecamatan" required>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<input type="text" name="kabp" class="form-control" placeholder="Kabupaten" required>
												</div>
											</div>
											<div class="row form-group mb-4">
												<div class="col-md-6 col-sm-offset-0">
													<input type="number" name="no_hp_siswa" id="telpp" class="form-control" placeholder="No WA Siswa (Aktif)" required>
												</div>
												<div class="col-md-6 col-sm-offset-0">
													<input type="number" name="no_hp_wali" id="telpp" class="form-control" placeholder="No Hp wali" required>
												</div>
											</div>

											<!-- Pilih Alternatif Paket Keahlian -->
											<div class="text-muted mb-2"><strong>Pilih Alternatif Paket Keahlian</strong></div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<select class="form-control" name="altp1" id="altp1" required="">
														<option value="">Pilih Keahlian</option>
														<option value="RPL">Rekayasa Perangkat Lunak</option>
														<option value="MM">Multi Media</option>
														<option value="TBSM">Teknik & Bisnis Sepeda Motor</option>
														<option value="BDP">Bisnis Daring & Pemasaran</option>
														<option value="AKL">Akuntansi & Keuangan Lembaga</option>
														<option value="OTKP">Otomatisasi & Tata Kelola Perkantoran</option>
													</select>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<select class="form-control" name="altp2" id="altp2" required="">
														<option value="">Pilih Keahlian</option>
														<option value="RPL">Rekayasa Perangkat Lunak</option>
														<option value="MM">Multi Media</option>
														<option value="TBSM">Teknik & Bisnis Sepeda Motor</option>
														<option value="BDP">Bisnis Daring & Pemasaran</option>
														<option value="AKL">Akuntansi & Keuangan Lembaga</option>
														<option value="OTKP">Otomatisasi & Tata Kelola Perkantoran</option>
													</select>
												</div>
											</div>
											<div class="row form-group mb-3">
												<div class="col-md-12 col-sm-offset-0">
													<select class="form-control" name="altp3" id="altp3" required="">
														<option value="">Pilih Keahlian</option>
														<option value="RPL">Rekayasa Perangkat Lunak</option>
														<option value="MM">Multi Media</option>
														<option value="TBSM">Teknik & Bisnis Sepeda Motor</option>
														<option value="BDP">Bisnis Daring & Pemasaran</option>
														<option value="AKL">Akuntansi & Keuangan Lembaga</option>
														<option value="OTKP">Otomatisasi & Tata Kelola Perkantoran</option>
													</select>
												</div>
											</div>

											<div class="text-muted mb-2"><strong>Uang Bayar</strong></div>
											<div class="form-group mb-4">
												<input type="number" name="uang_daftar" id="uang_daftar" class="form-control" placeholder="> 50.000">
												<div hidden="" id="err_uangBayar" class="alert alert-danger">Biaya daftar Rp 50.000</div>
											</div>

											<div class="form-group">
												<button href="#" name="submit" id="btn_submit" class="btn btn-primary" onclick="return confirm('Data Yang dimasukkan apakah sudah benar')">SIMPAN</button>
												<a href="<?php echo base_url() . "C_admin/pendaftaran" ?>" class="btn btn-danger">Kembali</a>
											</div>
										</form>
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
		<?php echo $this->session->flashdata('msg'); ?>
		$("#submit_daftar").submit(function() {
			var date = new Date($('#tglp_cek').val());
			year = date.getFullYear();
			if (year < 2000) {
				$("#err_tgl").attr('hidden', false);
				$("#tglp_cek").focus();
				return false;
			} else {
				$("#err_tgl").attr('hidden', true);
				return true;
			}
		});
		dataPertama = "";
		$("#altp1").change(function() {
			if (dataPertama != "") {
				if (dataPertama == $(this).val()) {
					$("#altp2 option[value='" + $(this).val() + "']").hide();
					$("#altp3 option[value='" + $(this).val() + "']").hide();
				} else {
					$("#altp2 option[value='" + $(this).val() + "']").hide();
					$("#altp3 option[value='" + $(this).val() + "']").hide();
					$("#altp1 option[value='" + dataPertama + "']").show();
					$("#altp2 option[value='" + dataPertama + "']").show();
					$("#altp3 option[value='" + dataPertama + "']").show();
				}
			} else {
				$("#altp2 option[value='" + $(this).val() + "']").hide();
				$("#altp3 option[value='" + $(this).val() + "']").hide();
			}
			dataPertama = $(this).val();
		})

		dataKedua = "";

		$("#altp2").change(function() {
			if (dataKedua != "") {
				if (dataKedua == $(this).val()) {
					$("#altp1 option[value='" + $(this).val() + "']").hide();
					$("#altp3 option[value='" + $(this).val() + "']").hide();
				} else {
					$("#altp1 option[value='" + $(this).val() + "']").hide();
					$("#altp3 option[value='" + $(this).val() + "']").hide();
					$("#altp2 option[value='" + dataKedua + "']").show();
					$("#altp1 option[value='" + dataKedua + "']").show();
					$("#altp3 option[value='" + dataKedua + "']").show();
					$("#altp3 option[value='']").show();
				}
			} else {
				$("#altp1 option[value='" + $(this).val() + "']").hide();
				$("#altp3 option[value='" + $(this).val() + "']").hide();
			}
			dataKedua = $(this).val();
		})

		dataKetiga = "";
		$("#altp3").change(function() {
			if ($(this).val() == "") {
				$("#altp1 option[value='" + dataKetiga + "']").show();
				$("#altp2 option[value='" + dataKetiga + "']").show();
			} else {
				$("#altp1 option[value='" + $(this).val() + "']").hide();
				$("#altp2 option[value='" + $(this).val() + "']").hide();
			}
			dataKetiga = $(this).val();
		})

		$("#uang_daftar").keyup(function() {
			if ($(this).val() < 50000) {
				$("#err_uangBayar").attr('hidden', false);
				$("#btn_submit").attr('disabled', true);
				$("#div_cetak").attr('hidden', true);
				$("#cetak_kwitansi").attr('href', '#');
			} else {
				$("#err_uangBayar").attr('hidden', true);
				$("#btn_submit").attr('disabled', false);
				$("#div_cetak").attr('hidden', false);
				biaya = 50000;
				uang_bayar = $(this).val();
				kembalian = uang_bayar - biaya;
				nama = $("#nama").val();
				tgl_lahir = $("#tglp_cek").val();
				alamat = $("#alamat").val();
				asalsekolah = $("#asekolahp").val();
				p1 = $("#altp1").val();
				p2 = $("#altp2").val();
				p3 = $("#altp3").val();
				base_url = '<?php echo base_url(); ?>';
				no_pendaftaran = $("#no_pendaftaran").val();
				petugas = $("#petugas").val();
				$("#cetak_kwitansi").attr('href', base_url + 'C_admin/kwitansi_pendaftaran_admin?no_pendaftaran=' + no_pendaftaran + '&nama=' + nama + '&tgl_lahir=' + tgl_lahir + '&alamat=' + alamat + '&asalsekolah=' + asalsekolah + '&biaya=' + biaya + '&nominal=' + uang_bayar + '&kembalian=' + kembalian + '&p1=' + p1 + '&p2=' + p2 + '&p3=' + p3 + '&petugas=' + petugas + '');
			}
		});
	</script>
</body>

</html>