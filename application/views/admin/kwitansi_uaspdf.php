<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Kwitansi Pembayaran</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
  <?php
  $harga = 0;
  foreach ($susulan_uast as $k) {
    $harga += $k->harga_susulan;
  }

  ?>
  <p>Jurusan/PS.Teknik Informatika Fakultas Teknik-UIKA <br>Sholeh Iskandar km.2 Bogor 16162<br>
    Tel.Fax.0251-380993</p>
  <table style="width: 100%;" class="table table-bordered">
    <tr>
      <td align="center">
        KWITANSI
      </td>
    </tr>
  </table>
  <p>Run date (<?= date('d-m-Y') ?>)</p>
  <table class="table table-bordered">
    <tr>
      <td>
        No
        <br>Telah Terima Dari
        <br>Uang Sejumlah
        <br>Untuk Pembayaran
      </td>
      <td>
        :<br>:<br>:<br>:
      </td>
      <td colspan="2">
        10
        <br><?php echo $susulan_uas['nama_mahasiswa']; ?>
        <br>RP. <?= $harga ?>
        <br>UTS Susulan <?= count($susulan_uast) ?> Mata Kuliah
      </td>

      <td colspan="2"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td>Bogor</td>
      <td>tgl</td>
    </tr>
    <tr>
      <td>RP.</td>
      <td><?= $harga ?></td>
      <td>Yang Menerima,</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td><?php echo $this->session->userdata('nama'); ?></td>
    </tr>
  </table>
  
</body>
</html>
    