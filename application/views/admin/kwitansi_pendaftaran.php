<!DOCTYPE html>
<html>

<head>
  <script type="text/javascript">
    function sub(el) {
      var pt = document.body.innerHTML;
      var sub = document.getElementById(el).innerHTML;
      document.body.innerHTML = sub;
      window.print()
      document.body.innerHTML = pt;

      window.setTimeout(function() {

        // Move to a new location or you can do something else
        window.location.href = "<?= base_url('C_admin/pendaftaran'); ?>";

      }, 5000);
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
          <p style="text-align: center; padding-right: 100px;">
            <b> Bukti Pembayaran Pendaftaran <br>
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
        <td style='width : 180px; text-align: left; '>No Pendaftaran </td>
        <td> : <b><?php echo $_GET['no_pendaftaran']; ?></b></td>
      </tr>
      <tr>
        <td style='width : 180px; text-align: left; '>Nama </td>
        <td> : <b><?php echo $_GET['nama']; ?></b></td>
      </tr>
      <tr>
        <td style='width : 180px; text-align: left; '>Tempat, TanggaL Lahir </td>
        <td> : <b><?= $calon->tmp_lahir; ?>, <?php echo date('d-m-Y', strtotime($_GET['tgl_lahir'])); ?></b></td>
      </tr>
      <tr>
        <td style='width : 180px; text-align: left; '>Alamat </td>
        <td> : <b><?= $calon->alamat; ?>, <?= $calon->kecamatan; ?>, <?= $calon->kota; ?></b></td>
      </tr>
      <tr>
        <td style='width : 180px; text-align: left; '>Asal Sekolah</td>
        <td> : <b><?php echo $_GET['asalsekolah']; ?></b></td>
      </tr>
      <tr>
        <td style='width : 180px; text-align: left; '>Biaya Pendaftaran</td>
        <td> : &nbsp;<b>Rp <?php echo number_format($_GET['biaya'], 0, ',', '.'); ?></b></td>
      </tr>
      <tr>
        <td style='width : 180px; text-align: left; '>Bayar</td>
        <td> : &nbsp;<b>Rp <?php echo number_format($_GET['nominal'], 0, ',', '.'); ?></b></td>
      </tr>
      <tr>
        <td style='width : 180px; text-align: left; '>Kembalian</td>
        <td> : &nbsp;<b>Rp <?php echo number_format($_GET['kembalian'], 0, ',', '.'); ?></b></td>
      </tr>
    </table>
    <table align="right" style="width: 330px; margin-top: -180px; margin-left: 200px;" class="font">
      <tr>
        <td>Pilihan Kompetensi Keahlian :</td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;1. <b> <?php echo $_GET['p1']; ?> </b></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;2. <b> <?php echo $_GET['p2']; ?> </b></td>
      </tr>
      <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;3. <b> <?php echo $_GET['p3']; ?> </b></td>
      </tr>
      <tr>
        <br>
    </table>
    <div style="margin-left: 25px !important;">
      <b class="font">Keterangan :</b>
      <li style="padding: 0px 20px; padding-top: 3px;">
        <span class="fontku">Daftar Ulang dapat dilaksanakan mulai tanggal 01 Desember 2022 s.d 13 Juli 2023 </span>
      </li>
      <li style="padding: 0px 20px; margin-top: -5px;">
        <span class="fontku">Simpan Kwitansi Pendaftaran ini baik-baik dan bawa pada saat Daftar Ulang</span>
      </li>
      <li style="padding: 0px 20px; margin-top: -5px;">
        <span class="fontku">Biaya yang sudah di bayarkan tidak dapat ditarik kembali </span>
      </li>
    </div>
    <table border="0" rules="none" align="center" style="width: 1220px; height: 40px; background-color: white; margin-top: -120px; margin-left: -100px" class="fontku">
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
        <td><b><?php echo $_GET['petugas']; ?></b></td>
      </tr>
    </table>
  </div>
</body>

</html>