<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">

	<title>Pendaftaran Online</title>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url(); ?>assets/landing-page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

	<!--

TemplateMo 570 Chain App Dev

https://templatemo.com/tm-570-chain-app-dev

-->

	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing-page/assets/css/templatemo-chain-app-dev.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing-page/assets/css/animated.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/landing-page/assets/css/owl.css">
	<style>
		.nav-setting {
			margin-top: -10px !important;
			margin: 3px 30px 3px 30px;
		}

		.banner-margin {
			margin-left: -20px;
		}

		@media only screen and (max-width: 600px) {
			.nav-setting {
				margin-top: -10px !important;
				margin-left: 0px !important;
			}

			.banner-margin {
				margin-top: -100px;
				margin-left: 0px !important;
			}
		}

		/* Swiper */
		.swiper {
			width: 100%;
			height: 100%;
		}

		.swiper-slide {
			text-align: center;
			font-size: 18px;
			background: #fff;

			/* Center slide text vertically */
			display: -webkit-box;
			display: -ms-flexbox;
			display: -webkit-flex;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			-webkit-justify-content: center;
			justify-content: center;
			-webkit-box-align: center;
			-ms-flex-align: center;
			-webkit-align-items: center;
			align-items: center;
		}

		.swiper-slide img {
			display: block;
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
	</style>
</head>

<body>

	<!-- ***** Preloader Start ***** -->
	<div id="js-preloader" class="js-preloader">
		<div class="preloader-inner">
			<span class="dot"></span>
			<div class="dots">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- ***** Preloader End ***** -->

	<!-- ***** Header Area Start ***** -->
	<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
		<div class="row nav-setting">
			<div class="col-12">
				<nav class="main-nav">
					<!-- ***** Logo Start ***** -->
					<a href="<?= base_url(); ?>" class="logo" style="color: #4798F2;">
						<img src="<?= base_url(); ?>assets/images/logo.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 5px;"> SMK PGRI 05 JEMBER
					</a>
					<!-- ***** Logo End ***** -->
					<!-- ***** Menu Start ***** -->
					<ul class="nav">
						<li class="scroll-to-section"><a href="#top" class="active">Pendaftaran</a></li>
						<li class="scroll-to-section"><a href="https://esemkaprima.com/">Esemkaprima</a></li>
						<li class="scroll-to-section"><a href="https://esemkaprima.com/guru">Guru</a></li>
						<li class="scroll-to-section"><a href="https://esemkaprima.com/siswa">Mitra</a></li>
						<li class="scroll-to-section"><a href="https://esemkaprima.com/blog">Blog</a></li>
						<li>
							<div class="gradient-button"><a href="<?php echo base_url('C_admin/login'); ?>"><i class="fa fa-sign-in-alt"></i> Admin Sign In</a></div>
						</li>
					</ul>
					<a class='menu-trigger'>
						<span>Menu</span>
					</a>
					<!-- ***** Menu End ***** -->
				</nav>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->
	<div id="app">
		<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row">
							<div class="col-lg-6 align-self-center">
								<div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
									<div class="row">
										<div class="col-lg-12 banner-margin">
											<h2>Penerimaan Peserta Didik Baru</h2>
											<p>SMK PGRI 05 JEMBER menumbuhkembangkan sumber daya <br> siswa di bidang akademik dan non akademik.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="swiper mySwiper" style="margin-top: -30px !important;">
										<div class="swiper-wrapper">
											<div class="swiper-slide" v-for="(item,i) in items" :key="i">
												<img :src="item.src" alt="banner" style="width: 100% !important; ">
											</div>
										</div>
										<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="services" class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
							<h4>Silahkan <em>Melakukan</em> Pendaftaran</h4>
							<img src="<?= base_url(); ?>assets/landing-page/assets/images/heading-line-dec.png" alt="">
							<p>Silahkan isi data diri anda & pilih alternatif paket keahlian.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<v-app>
							<div style="z-index: 1;" class="pricing-item-pro">
								<span class="price"><i class="fa fa-user"></i></span>
								<v-form ref="form" v-model="valid" lazy-validation method="POST" action="<?php echo base_url() ?>C_proses_pendaftaran/editpdfsiswa_insert">
									<h4>Identitas </h4>
									<v-row>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="nama" name="nama" :rules="empetyRules" label="Nama Lengkap" required></v-text-field>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-select v-model="kelp" :items="itemsJenisKelamin" :rules="empetyRules" label="Jenis Kelamin" name="kelp" required></v-select>
										</v-col>
									</v-row>

									<v-row>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="tlahirp" name="tlahirp" :rules="empetyRules" label="Tempat Lahir" required></v-text-field>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-dialog ref="dialog" v-model="modal" :return-value.sync="tglp" persistent width="290px">
												<template v-slot:activator="{ on, attrs }">
													<v-text-field v-model="tglp" name="tglp" label="Tanggal Lahir" :rules="empetyRules" readonly v-bind="attrs" v-on="on"></v-text-field>
												</template>
												<v-date-picker v-model="tglp" scrollable>
													<v-spacer></v-spacer>
													<v-btn text color="primary" @click="modal = false">
														Cancel
													</v-btn>
													<v-btn text color="primary" @click="$refs.dialog.save(tglp)">
														OK
													</v-btn>
												</v-date-picker>
											</v-dialog>
										</v-col>
									</v-row>

									<v-row>
										<v-col cols="12" md="6" lg="6">
											<v-select v-model="agamap" name="agamap" :items="itemsAgama" :rules="empetyRules" label="Agama" required></v-select>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="asekolahp" name="asekolahp" :rules="empetyRules" label="Asal Sekolah" required></v-text-field>
										</v-col>
									</v-row>

									<v-row>
										<v-col cols="12" md="4" lg="4">
											<v-text-field v-model="ayahp" name="ayahp" :rules="empetyRules" label="Nama Ayah" required></v-text-field>
										</v-col>
										<v-col cols="12" md="4" lg="4">
											<v-text-field v-model="ibup" name="ibup" :rules="empetyRules" label="Nama Ibu" required></v-text-field>
										</v-col>
										<v-col cols="12" md="4" lg="4">
											<v-text-field v-model="pap" name="pap" :rules="empetyRules" label="Pekerjaan Ayah" required></v-text-field>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="no_hp_siswa" name="no_hp_siswa" :rules="empetyRules" label="Nomor Wa Siswa (Aktif)" required type="number"></v-text-field>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="no_hp_wali" name="no_hp_wali" :rules="empetyRules" label="Nomor Hp Wali" required type="number"></v-text-field>
										</v-col>
									</v-row>
									<div class="mt-6" style="text-align: left;"><b>Alamat</b></div>
									<v-row>
										<v-col cols="12" md="6" lg="6">
											<v-textarea name="alamat" label="Jl.patimura NO 78 RT 004 RW 022 GANG WRINGISARI" :rules="empetyRules" rows="2"></v-textarea>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="desap" name="desap" :rules="empetyRules" label="Kelurahan/Desa" required></v-text-field>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="kecp" name="kecp" :rules="empetyRules" label="Kecamatan" required></v-text-field>
										</v-col>
										<v-col cols="12" md="6" lg="6">
											<v-text-field v-model="kabp" name="kabp" :rules="empetyRules" label="Kabupaten" required></v-text-field>
										</v-col>
									</v-row>
									<div class="mt-6" style="text-align: left;"><b>Pilihan Alternatif Paket Keahlian</b></div>
									<v-row>
										<v-col cols="12">
											<v-select v-model="pilihan1" :items="itemsAltp1" item-text="state" item-value="abbr" :rules="empetyRules" label="Alternatif 1" name="altp1" required @change="alternatifItem(1)"></v-select>
										</v-col>
										<v-col cols="12">
											<v-select v-model="pilihan2" :items="itemsAltp2" item-text="state" item-value="abbr" :rules="empetyRules" label="Alternatif 2" name="altp2" required :disabled="!stat1" @change="alternatifItem(2)"></v-select>
										</v-col>
										<v-col cols="12">
											<v-select v-model="pilihan3" :items="itemsAltp3" item-text="state" item-value="abbr" :rules="empetyRules" label="Alternatif 3" name="altp3" required :disabled="!stat2"></v-select>
										</v-col>
									</v-row>

									<div class="mt-6" style="text-align: left;"><b>Kelengkapan : (Jika belum terbit/belum ada bisa menyusul/setelah terbit berkasnya)</b></div>
									<p style="text-align: left;">
										Ijazah SMP/MTS sederajat <br>
										Surat keterangan lulus / pengumuman kelulusan SMP/MTS
									</p>

									<div class="mt-6" style="text-align: left;"><b>Informasi: </b></div>
									<p style="text-align: left;">
										Setelah mendaftar, serahkan bukti pendaftaran ke SMK PGRI 5 JEMBER untuk melakukan pembayaran administrasi pendaftaran (Rp 50.000) <br>
										Untuk informasi lebih lanjut silahkan hubungi : <br>
									<table>
										<tr>
											<td align="left">
												<span class="mr-6">Ibu Tias Rahmawati O, S.Pd</span>
											</td>
											<td align="left">
												<span><b>0813 3658 8167</b></span><br>
											</td>
										</tr>
										<tr>
											<td align="left">
												<span>Ibu Ika sri Wahyuningrum</span>
											</td>
											<td align="left">
												<span><b>0822 6601 7631</b></span><br>
											</td>
										</tr>
										<tr>
											<td align="left">
												<span>Bpk. Tri Suwarso, S.E</span>
											</td>
											<td align="left">
												<span><b>0821 1517 4444</b></span>
											</td>
										</tr>
									</table>
									</p>
									<div class="border-button">
										<v-checkbox v-model="checkbox" :rules="[v => !!v || 'Anda harus menyetujui untuk melanjutkan!']" label="Saya setuju untuk melakukan pendaftaran" required></v-checkbox>

										<v-btn :disabled="!valid" color="primary" class="mr-4" @click="validate" type="submit">
											Daftar
										</v-btn>
									</div>
								</v-form>
							</div>
						</v-app>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright-text">
						<p>Copyright © 2021 SMK PGRI 05 JEMBER. All Rights Reserved.
							<br>Design: <a href="https://fopegram.id/" target="_blank" title="css templates">Fopegram</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<!-- Scripts -->
	<script src="<?= base_url(); ?>assets/landing-page/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url(); ?>assets/landing-page/assets/js/owl-carousel.js"></script>
	<script src="<?= base_url(); ?>assets/landing-page/assets/js/animation.js"></script>
	<script src="<?= base_url(); ?>assets/landing-page/assets/js/imagesloaded.js"></script>
	<script src="<?= base_url(); ?>assets/landing-page/assets/js/popup.js"></script>
	<script src="<?= base_url(); ?>assets/landing-page/assets/js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
	<script>
		var base_url = '<?= base_url(); ?>'
		var no_pendaftaran = '<?= $this->session->flashdata('no_pendaftaran'); ?>'
		var nama = '<?= $this->session->flashdata('nama'); ?>'
		var asalsekolah = '<?= $this->session->flashdata('asalsekolah'); ?>'
		var status_daftar = '<?= $this->session->flashdata('status_daftar'); ?>'
		var x = `
			<div style="text-align: left">
				<table cellpadding="10">
					<tr>
						<td>No pendaftaran</td>
						<td>: <b>` + no_pendaftaran + `</b></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>: <b>` + nama + `</b></td>
					</tr>
					<tr>
						<td>Asal Sekolah</td>
						<td>: <b>` + asalsekolah + `</b></td>
					</tr>
				</table>    
				<p style="margin-bottom: 2%; margin-top: 2%;">Silahkan screenshot tampilan ini, dan bawa ke SMK PGRI 5 JEMBER, sekaligus pelunasan biaya pendaftaran sebesar Rp 50.000</p>
				<p>Untuk informasi lebih lanjut silahkan hubungi :</p> 
				<table>
					<tr>
						<td> 
							<span>Ibu Tias Rahmawati O, S.Pd</span>
						</td>
						<td>
							<span><b>(0813 3658 8167)</b></span><br>
						</td>
					</tr>
					<tr>
						<td>
							<span>Ibu Ika sri Wahyuningrum</span>
						</td>
						<td>
							<span><b>(0822 6601 7631)</b></span><br>
						</td>
					</tr>
					<tr>
						<td>
							<span>Bpk. Tri Suwarso, S.E</span>
						</td>
						<td>
							<span><b>(0821 1517 4444)</b></span>
						</td>
					</tr>
				</table>
			</div>`
		if (no_pendaftaran != '') {
			Swal.fire({
				icon: 'success',
				title: "<i>Anda sudah berhasil mendaftar</i>",
				html: x,
				confirmButtonText: "Ok",
			});
		}

		if (status_daftar == 'gagal') {
			Swal.fire({
				icon: 'error',
				title: 'Gagal Daftar',
				html: 'Data yang anda masukkan telah terdaftar',
				confirmButtonText: "Ok",
			})
		}

		new Vue({
			el: '#app',
			vuetify: new Vuetify(),
			data: {
				items: [{
					src: base_url + 'assets/images/carousel/banner1.jpg',
				}, ],
				// for date
				modal: false,
				valid: true,
				tlahirp: '',
				tglp: '',
				nama: '',
				kelp: '',
				agamap: '',
				asekolahp: '',
				ayahp: '',
				ibup: '',
				pap: '',
				no_hp_siswa: '',
				no_hp_wali: '',
				desap: '',
				kecp: '',
				kabp: '',
				pilihan1: '',
				pilihan2: '',
				pilihan3: '',
				empetyRules: [
					v => !!v || 'Data harus diisi'
				],
				itemsJenisKelamin: [
					'Laki-Laki',
					'Perempuan',
				],
				itemsAgama: [
					'Islam',
					'Kristen Protestan',
					'Kristen Katolik',
					'Hindu',
					'Budha',
					'Konghuchu'
				],
				itemsAltp1: [{
						state: 'Rekayasa Perangkat Lunak',
						abbr: 'RPL'
					},
					{
						state: 'Multimedia',
						abbr: 'MM'
					},
					{
						state: 'Teknik & Bisnis Sepeda Motor',
						abbr: 'TBSM'
					},
					{
						state: 'Bisnis Daring & Pemasaran',
						abbr: 'BDP'
					},
					{
						state: 'Akuntansi & Keuangan Lembaga',
						abbr: 'AKL'
					},
					{
						state: 'Otomatisasi & Tata Kelola Perkantoran',
						abbr: 'OTKP'
					},
				],
				itemsAltp2: [{
						state: 'Rekayasa Perangkat Lunak',
						abbr: 'RPL'
					},
					{
						state: 'Multimedia',
						abbr: 'MM'
					},
					{
						state: 'Teknik & Bisnis Sepeda Motor',
						abbr: 'TBSM'
					},
					{
						state: 'Bisnis Daring & Pemasaran',
						abbr: 'BDP'
					},
					{
						state: 'Akuntansi & Keuangan Lembaga',
						abbr: 'AKL'
					},
					{
						state: 'Otomatisasi & Tata Kelola Perkantoran',
						abbr: 'OTKP'
					},
				],
				itemsAltp3: [{
						state: 'Rekayasa Perangkat Lunak',
						abbr: 'RPL'
					},
					{
						state: 'Multimedia',
						abbr: 'MM'
					},
					{
						state: 'Teknik & Bisnis Sepeda Motor',
						abbr: 'TBSM'
					},
					{
						state: 'Bisnis Daring & Pemasaran',
						abbr: 'BDP'
					},
					{
						state: 'Akuntansi & Keuangan Lembaga',
						abbr: 'AKL'
					},
					{
						state: 'Otomatisasi & Tata Kelola Perkantoran',
						abbr: 'OTKP'
					},
				],
				stat1: false,
				stat2: false,
				stat3: false,
				checkbox: false,
				re_data: [],
				re_data2: [],
			},
			methods: {
				validate() {
					this.$refs.form.validate()
				},
				alternatifItem(no) {
					if (no == 1) {
						if (this.stat1 == false) {
							this.stat1 = true
							this.itemsAltp2.splice(this.itemsAltp2.findIndex(e => e.abbr === this.pilihan1), 1)
							this.itemsAltp3.splice(this.itemsAltp3.findIndex(e => e.abbr === this.pilihan1), 1)
							var r = this.itemsAltp1.filter(el => {
								return el.abbr.indexOf(this.pilihan1) > -1
							});
							this.re_data = r
						} else {
							this.itemsAltp2.splice(this.itemsAltp2.findIndex(e => e.abbr === this.pilihan1), 1)
							this.itemsAltp3.splice(this.itemsAltp3.findIndex(e => e.abbr === this.pilihan1), 1)

							this.re_data.forEach(elm => {
								this.itemsAltp2.push({
									state: elm.state,
									abbr: elm.abbr
								})

								this.itemsAltp3.push({
									state: elm.state,
									abbr: elm.abbr
								})
							});

							var r = this.itemsAltp1.filter(el => {
								return el.abbr.indexOf(this.pilihan1) > -1
							});
							this.re_data = r
						}
					}

					if (no == 2) {
						if (this.stat2 == false) {
							this.stat2 = true
							this.itemsAltp3.splice(this.itemsAltp3.findIndex(e => e.abbr === this.pilihan2), 1)
							var r = this.itemsAltp2.filter(el => {
								return el.abbr.indexOf(this.pilihan2) > -1
							});
							this.re_data2 = r
						} else {
							this.itemsAltp3.splice(this.itemsAltp3.findIndex(e => e.abbr === this.pilihan2), 1)

							this.re_data2.forEach(elm => {
								this.itemsAltp3.push({
									state: elm.state,
									abbr: elm.abbr
								})
							});
							var r = this.itemsAltp2.filter(el => {
								return el.abbr.indexOf(this.pilihan2) > -1
							});
							this.re_data2 = r
						}
					}
				}
			},
		})
	</script>
	<script>
		var swiper = new Swiper(".mySwiper", {
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
		});
	</script>
</body>

</html>