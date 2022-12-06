<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body style="font-family: font-family: 'Poppins', sans-serif;">
<?php foreach ($dataCalon as $calon) { ?>
<img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo Smk">
<center><h3>Anda sudah berhasil mendaftar</h3></center>
<table cellpadding="10">
    <tr>
        <td>No pendaftaran</td>
        <td>: <b><?= $calon->no_pendaftaran; ?></b></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>: <b><?= $calon->nama; ?></b></td>
    </tr>
    <tr>
        <td>Asal Sekolah</td>
        <td>: <b><?= $calon->asalsekolah; ?></b></td>
    </tr>
</table> 

<p>Silahkan untuk membawa bukti pendaftaran ini ke SMK PGRI 5 JEMBER untuk melakukan pembayaran administrasi pendaftaran (Rp 50.000) </p>

<p>Untuk informasi lebih lanjut silahkan hubungi :</p>
<table>
    <tr>
        <td> 
            <span class="mr-6">Ibu Tias Rahmawati O, S.Pd</span>
        </td>
        <td>
            <span><b>0813 3658 8167</b></span><br>
        </td>
    </tr>
    <tr>
        <td>
            <span>Ibu Ika sri Wahyuningrum</span>
        </td>
        <td>
            <span><b>0822 6601 7631</b></span><br>
        </td>
    </tr>
    <tr>
        <td>
            <span>Bpk. Tri Suwarso, S.E</span>
        </td>
        <td>
            <span><b>0821 1517 4444</b></span>
        </td>
    </tr>
</table>
<?php } ?>
</body>
</html>