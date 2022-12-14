<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>PPDB | SMK PGRI 5 JEMBER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Yoga Adi Saputra" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/images/logo.png" />

    <!-- Css -->
    <link href="<?= base_url(); ?>assets/landing-page/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/landing-page/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="<?= base_url(); ?>assets/landing-page/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landing-page/css/icons.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/landing-page/css/tailwind.css" />
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <style>
        .container-nav {
            padding: 0px 6rem 0px 6rem;
        }

        .logo-img {
            width: 40px;
        }

        .logo-text {
            font-size: 16px;
            margin-left: 4px;
        }

        @media only screen and (max-width: 768px) {
            .container-nav {
                padding: 0 1rem 0 1rem;
            }

            .logo-text {
                font-size: 12px;
                margin-left: 0;
            }
        }
    </style>
</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">

    <!-- Loader Start -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> -->
    <!-- Loader End -->

    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="container-nav">
            <!-- Logo container-->
            <a class="logo pl-0" href="<?= base_url(); ?>">
                <img src="<?= base_url(); ?>assets/images/logo.png" class="logo-img inline-block dark:hidden" alt="">
                <img src="<?= base_url(); ?>assets/images/logo.png" class="logo-img hidden dark:inline-block" alt="">

                <span class="logo-text">SMK PGRI 5 JEMBER</span>
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline pl-1 mb-0">
                    <a href="<?php echo base_url('C_admin/login'); ?>" class="btn rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white ">
                        <span>Login </span>
                    </a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li><a href="" class="sub-menu-item active">Home</a></li>
                    <li><a href="https://esemkaprima.com" class="sub-menu-item">Esemkaprima</a></li>
                    <li><a href="https://esemkaprima.com/guru" class="sub-menu-item">Guru</a></li>
                    <li><a href="https://esemkaprima.com/siswa" class="sub-menu-item">Mitra</a></li>
                    <li><a href="https://esemkaprima.com/blog" class="sub-menu-item">Blog</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </nav>
    <!--end header-->
    <!-- End Navbar -->

    <!-- Start Hero -->
    <section class="relative table w-full py-28 lg:py-32 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center mt-10 gap-[30px]">
                <div class="md:col-span-7">
                    <div class="md:mr-6">
                        <!-- <div class="bg-white dark:bg-slate-900 text-slate-400 py-2 px-4 inline-flex items-center font-medium rounded-full shadow dark:shadow-gray-800"><span class="bg-indigo-600 text-white text-[12px] font-bold px-2.5 py-0 rounded-full mr-2">Techwind</span> Get an insurance</div> -->
                        <p class="text-indigo-600 text-lg font-medium mb-4">Kami adalah tim yang sangat berdedikasi</p>
                        <h4 class="font-bold lg:leading-normal leading-normal text-4xl lg:text-5xl mb-5 mt-4">Penerimaan Peserta <br> Didik Baru</h4>
                        <p class="text-slate-400 text-lg max-w-xl">SMK PGRI 05 JEMBER menumbuhkembangkan sumber daya siswa di bidang akademik dan non akademik.</p>

                        <div class="mt-6" onclick="scrollToPendaftaran()">
                            <button class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white">
                                <i data-feather="arrow-down" class="h-4 w-4"></i>
                            </button>
                            <span class="font-semibold ml-2 align-middle">Form Pendaftaran</span>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="<?= base_url(); ?>assets/landing-page/images/Brosur.png" class="rounded-lg shadow-md dark:shadow-gray-800" alt="">
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                            <a href="#!" data-type="youtube" data-id="9RbkxlpK4YY" class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container -->
    </section>
    <!--end section-->
    <!-- End Hero -->

    <!-- Start Section-->
    <section class="relative md:py-24 py-16" id="form-pendaftaran">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 items-end">
                <h6 class="text-indigo-600 font-semibold mb-2">Penerimaan Peserta Didik Baru</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Silahkan Melakukan Pendaftaran</h3>
                <p class="text-slate-400 max-w-xl mb-8">Silahkan isi data diri anda & pilih alternatif paket keahlian.</p>

                <div id="app">
                    <v-app>
                        <div style="z-index: 1;" class="pricing-item-pro">
                            <span class="price"><i class="fa fa-user"></i></span>
                            <v-form ref="form" v-model="valid" lazy-validation method="POST" action="<?php echo base_url() ?>C_proses_pendaftaran/editpdfsiswa_insert">
                                <div style="font-size: 17px; font-weight: 600; color: gray; margin-bottom: 6px;">Identitas </div>
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
                                <div style="font-size: 17px; font-weight: 600; color: gray; margin-bottom: 6px; margin-top: 20px;">Alamat </div>
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
                                <div style="font-size: 17px; font-weight: 600; color: gray; margin-bottom: 6px; margin-top: 20px;">Pilihan Alternatif Paket Keahlian </div>
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
                                    <!-- <table>
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
                                </table> -->
                                <div class="flex gap-2 flex-col mb-4">
                                    <div class="text-gray-500">Ibu Tias Rahmawati O, S.Pd</div>
                                    <div class="text-sm font-semibold">0812 5967 9581</div>
                                </div>
                                <div class="flex gap-2 flex-col mb-4">
                                    <div class="text-gray-500">Ibu Ika Sri Wahyuningrum</div>
                                    <div class="text-sm font-semibold">0812 5967 9582</div>
                                </div>
                                <div class="flex gap-2 flex-col mb-4">
                                    <div class="text-gray-500">Ibu Widya Irmayanti</div>
                                    <div class="text-sm font-semibold">0822 3480 6236</div>
                                </div>
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
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section -->

    <!-- Footer Start -->
    <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
        <div class="py-[30px] px-0 border-t border-slate-800">
            <div class="container text-center">
                <div class="grid md:grid-cols-2 items-center">
                    <div class="md:text-left text-center">
                        <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())
                            </script> SMK PGRI 5 JEMBER. All Rights Reserved.</p>
                    </div>
                    <div class="list-none md:text-right text-center mt-6 md:mt-0">
                        Design by <a href="https://fopegram.id/" target="_blank" class="text-reset">Fopegram</a>.
                    </div>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="<?= base_url(); ?>assets/landing-page/libs/jarallax/jarallax.min.js"></script>
    <script src="<?= base_url(); ?>assets/landing-page/libs/tobii/js/tobii.min.js"></script>
    <script src="<?= base_url(); ?>assets/landing-page/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="<?= base_url(); ?>assets/landing-page/libs/feather-icons/feather.min.js"></script>
    <script src="<?= base_url(); ?>assets/landing-page/js/plugins.init.js"></script>
    <script src="<?= base_url(); ?>assets/landing-page/js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script>
        function scrollToPendaftaran() {
            document.getElementById('form-pendaftaran').scrollIntoView({
                behavior: "smooth"
            })
        }
    </script>

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
    <!-- JAVASCRIPTS -->
</body>

</html>