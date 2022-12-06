<!DOCTYPE html>
<html>

<head>
	<script type="text/javascript">
		function sub(el) {
			var pt = document.body.innerHTML;
			var sub = document.getElementById(el).innerHTML;
			document.body.innerHTML = sub;
			window.print();
			document.body.innerHTML = pt;
			base_url = '<?php echo base_url(); ?>';
			setTimeout(function() {
				window.location.href = base_url + 'C_admin/daftar_ulang';
			}, 1);
		}
	</script>
	<style>
		body {
			margin-top: -10px;
		}

		.font {
			font-family: Tahoma;
			font-size: 16px;
		}

		.fontku {
			font-family: Tahoma;
			font-size: 17px;
		}

		li {
			margin-bottom: 5px
		}

		.legality li p {
			padding: 0px 20px;
			margin: 0px;
			font-size: 13px
		}
	</style>
</head>

<body onload="sub('print')">
	<div id="print">
		<table align="center" style="width: 1292px; height: 100px; font-size: 16px; background-color: white;">
			<tr>
				<th style="width: 210px;"><br></th>
				<td style="text-align: right;"><img style="padding-left: 100px; width: 80px; height: 80px;" src="<?php echo base_url() ?>assets/images/logo.png"></td>
				<td class="fontku" align="left">
					<p style="text-align: center; padding-right: 130px;">
						<b> Bukti Pembayaran Daftar Ulang<br>
							PPDB SMK PGRI 5 JEMBER <br>
							Tahun Pelajaran 2022-2023
						</b>
					</p>
				</td>

				<th style="width: 220px;"><br></th>
				<th style="width: 220px;"><br></th>
			</tr>
		</table>
		<table align="center" style="width: 1100px; height: 70px; background-color: white;" class="font">
			<tr>
				<td style='width : 150px; text-align: left; '>No Daftar Ulang </td>
				<td> : <b><?php echo $reg_siswa['no_du']; ?></b></td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>No Pendaftaran </td>
				<td> : <b><?php echo $reg_siswa['no_pendaftaran']; ?></b></td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>Nama </td>
				<td> : <b><?php echo $reg_siswa['nama']; ?></b></td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>Tanggal Lahir </td>
				<td> : <b><?php echo date('d-m-Y', strtotime($reg_siswa['tgl_lahir'])); ?></b></td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>Alamat </td>
				<td> : <b><?= $reg_siswa['alamat']; ?>, <?= $reg_siswa['kecamatan']; ?>, <?= $reg_siswa['kota']; ?></b></td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>Asal Sekolah</td>
				<td> : <b><?php echo $reg_siswa['asalsekolah']; ?></b></td>
			</tr>
		</table>
		<table align="right" style=" margin-top: -140px; margin-left: 100px;" class="font">
			<tr>
				<td style='width : 150px;'>Kompetensi keahlian</td>
				<td>
					: <b><?php echo $reg_siswa['paket_keahlian']; ?></b>
				</td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>Biaya Daftar Ulang</td>
				<td> : &nbsp;<b>Rp <?php echo number_format($reg_siswa['uang'], 0, ',', '.'); ?></b></td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>Bayar</td>
				<td> : &nbsp;<b>Rp <?php echo number_format($reg_siswa['nominal'], 0, ',', '.'); ?></b></td>
			</tr>
			<tr>
				<td style='width : 150px; text-align: left; '>Kembalian</td>
				<td> : &nbsp;<b>Rp <?php echo number_format($reg_siswa['kembalian'], 0, ',', '.'); ?></b></td>
			</tr>
		</table>
		<div style="margin-left: 25px !important; margin-top: -10px;">
			<br>
			<b class="font">Keterangan :</b>
			<li style="padding: 0px 20px; padding-top: 3px;">
				<span class="fontku">Peserta didik baru yang sudah melaksanakan daftar ulang masuk pada : <br>
					&nbsp;&nbsp;&nbsp;&nbsp;Hari : Kamis, Tanggal : 14 Juli 2022 Jam 07.00 WIB. <br>&nbsp;&nbsp;&nbsp; Memakai seragam biru putih dari
					SMP/MTs</span>
			</li>
			<li style="padding: 0px 20px; margin-top: -5px;">
				<span class="fontku">Jadwal sewaktu-waktu dapat berubah dan akan di informasikan lebih lanjut <br>
					&nbsp;&nbsp;&nbsp;&nbsp;di Grup Whatsapp “Daftar Ulang PPDB PRIMA 2223”</span>
			</li>
			<li style="padding: 0px 20px; margin-top: -5px;">
				<span class="fontku">Biaya yang sudah dibayarkan tidak dapat ditarik kembali, kecuali siswa tidak lulus <br>
					&nbsp;&nbsp;&nbsp;&nbsp;(dengan menyertakan Bukti surat keterangan dari SMP/MTs)</span>
			</li>
			<li style="padding: 0px 20px; margin-top: -5px;">
				<span class="fontku">Simpan Kwitansi Pembayaran ini dengan baik.</span>
			</li>
		</div>
		<table border="0" rules="none" align="center" style="width: 1250px; height: 40px; background-color: white; margin-top: -150px; margin-left: -100px" class="fontku">
			<tr align="center">
				<td width="800px;"><br></td>
				<td>Kencong,<?php echo date("d-m-Y"); ?></td>
			</tr>
			<tr align="center">
				<td width="800px;"><br></td>
				<td>Petugas</td>
			</tr>

			<tr align="center">
				<td width="800px;"><br></td>
				<td><br></td>
			</tr>
			<tr align="center">
				<td width="800px;"><br></td>
				<td><br></td>
			</tr>
			<tr align="center">
				<td width="800px;"><br></td>
				<td><br></td>
			</tr>
			<tr align="center">
				<td width="800px;"><br></td>
				<td><b><?php echo $reg_siswa['petugas']; ?></b></td>
			</tr>
		</table>
	</div>
	<div>
	</div>
</body>

</html>