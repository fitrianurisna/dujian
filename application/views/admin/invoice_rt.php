<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Invoice</title>
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
  <img src="assets/img/ft.jpg" style="position: absolute; width: 110px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          UNIVERSITAS IBN KHALDUN BOGOR
          <br>FAKULTAS TEKNIK DAN SAINS 
          <br>TEKNIK INFORMATIKA
          <br>JL.K.H.Sholeh Iskandar km.2 Bogor.Telepon/fax:(0251)8356884
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <p align="center">
    Rincian Pembayaran<br>
    
  </p>
  <table class="table table-bordered">
    <tr>
      <th>NPM</th>
      <th><?php echo $rt['npm'];?></th>
      <th>Tahun Ajaran</th>
      <th><?php echo $rt['ta'];?></th>
    </tr>
    <tr>
      <th>Nama</th>
      <th><?php echo $rt['nama'];?></th>
      <th>Program Studi</th>
      <th><?php echo $rt['program_studi'];?></th>
    </tr>
  </table>

  <table class="table table-bordered">
    <tr>
      <th>#</th>
      <th>Item Pembayaran</th>
      <th>Nominal(Rp)</th>
    </tr>
      <tr>
        <?php echo $no=1; {?>
        <td><?php echo $no++?></td>
        <td><?php echo $rt['matkul'];?></td>
        <td></td>
      <?php } ?>
      </tr>
    <tr>
    	<th></th>
    	<th>Jumlah</th>
    	<th>0</th>
    </tr>
  </table>

  <table class="table table-bordered">
    <tr>
      <th>Catatan</th>
      <th>Bogor (Tanggal)</th>
    </tr>
  </table>

</body>
</html>
    