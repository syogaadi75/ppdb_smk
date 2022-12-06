<!DOCTYPE html>
<html>
<head>
	<style>
		.font{font-family: Times New Roman;font-size: 25px;}
		.fon{font-family: Times New Roman;font-size: 22px;}
	</style>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url() ?>unapp/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="colorlib-contact" id="print">
		<div class="container">
			<table align="center" style="width: 1130px; height: 100px; font-size: 16px; background-color: white;" >
				<tr>
					<th><center>
						<img style="width: 110px; height: 80px;" src="<?php echo base_url() ?>img/smkprima.png">
					</center></th>
					<th >
						<center><h2><b>PENERIMAAN PESERTA DIDIK BARU (PPDB)</b></h2></center>
					</th>
					<th style="width: 220px;"><br></th>
				</tr>
			</table>
			<div class="row" style="background-color: white;"> 
				<div class="container" align="left">
					<hr>
					<div class="font"><b>Data Diri Siswa</b></div>
					<table align="center" style="width: 1290px; height: 70px; background-color: white;" class="font">
						<tr>
							<td style='width : 200px;' class="font">No Pendaftaran</td>
							<td class="font" style="padding-: -10px !important;">: <b><?php echo $this->input->get('no_pendaftaran'); ?></b></td>
						</tr>
						<tr>
							<td style='width : 200px;' class="font">Nama</td>
							<td class="font" style="padding-: -10px !important;">: <b><?php echo $this->input->get('nama'); ?></b></td>
						</tr>
						<tr>
							<td style='width : 200px;' class="font">Asal Sekolah</td>
							<td class="font" style="padding-: -10px !important;">: <b><?php echo $this->input->get('asalsekolah'); ?></b></td>
						</tr>
					</table>
				</div> 
				<div>
					<h2 align="left" class="font" style="margin-bottom: 7px;"><b>Pembayaran Pendaftaran Siswa Baru :</b></h2>
						<li class="fon">
							<p style="padding: 0px 20px; margin-top: -25px;"><b>Pembayaran Online,</b>Silahkan melakukan pembayaran Rp. <b>50.000,-</b> Bank JATIM dengan memasukkan rekening (1411000814) SMK PGRI 5 JEMBER</p>
						</li>
					<div style="margin-top: -20px;">
						<li class="fon">
						<p style="padding: 0px 20px; margin-top: -25px;"><b>Pembayaran Offline,</b>Silahkan melakukan pembayaran Rp. <b>50.000,-</b> di SMK PGRI 5 JEMBER</p>
						
					</li>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<center><a href="<?php echo base_url()."C_pendaftaran/"; ?>" onclick="sub('print')" class="btn btn-success">PRINT</a></center>
	</div>
</body>
	<script type="text/javascript">
		function sub(el){
			var pt = document.body.innerHTML;
			var sub = document.getElementById(el).innerHTML;
			document.body.innerHTML = sub;
			window.print();
			document.body.innerHTML = pt;
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tglp").datepicker({

			})
		})
	</script>
</html>