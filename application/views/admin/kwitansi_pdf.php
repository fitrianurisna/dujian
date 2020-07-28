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
  <table style="width: 100%;" class="table table-bordered">
    <tr>
      <td align="center">
          KWITANSI
      </td>
    </tr>
  </table>
  <p>Run date (tgl cetak)</p>
  <table class="table table-bordered">
    <tr>
      <td>No</td>
      <td>:</td>
      <td>10</td>
    </tr>
    <tr>
      <td>Telah terima dari</td>
      <td>:</td>
      <td><?php echo $susulan_uts['nama_mahasiswa'];?></td>
    </tr>
    <tr>
      <td>Uang Sejumlah</td>
      <td>:</td>
      <td>RP</td>
    </tr>
    <tr>
      <td>untuk pembayaran</td>
      <td>:</td>
      <td>UTS Susulan <?php echo $susulan_uts['matkul'];?></td>
    </tr>
  </table>
  
</body>
</html>
    