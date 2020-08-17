<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Hadir Susulan UTS</title>
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
  <img src="assets/img/ft.jpg" style="position: absolute; width: 100px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center" colspan="4">
        <span style="line-height: 1.6; font-weight: bold;">
          <br>Rekap UTS Susulan Semester <?php echo $a['semester']; ?> tahun <?php echo $c['tahun']; ?>
          <br>FAKULTAS TEKNIK DAN SAINS UIKA BOGOR
        </span>
      </td>
    </tr>
  </table>
  <br><br>

  <table class="table table-bordered">
    <tr>
      <th >No</th>
      <th >Tanggal Pendaftaran</th>
      <th >Nama Mahasiswa</th>
      <th >NPM</th>
      <th >Mata Kuliah</th>
      <th >Dosen</th>
      <th >Nilai</th>
      <th >Pembayaran</th>
    </tr>
    <?php 
      $no=1;
      foreach ($d as $d ) {
     ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['createdAt']; ?></td>
        <td> <?php echo $d['nama']; ?></td>
        <td><?php echo $d['npm']; ?></td>
        <td><?php echo $d['nama_matkul']; ?></td>
        <td><?php echo $d['nama_dosen']; ?></td>
        <td></td>
        <td><?php echo $d['harga_remedial']; ?></td>
    </tr>
  <?php } ?>
  </table>
  <table style="width: 100%;">
      <tr>
        <td>Mengetahui,
        <br>Sekretaris Program Studi
        <br><br><br>(_____________________)
        <br>NIK.
        </td>
        <td></td>
        <td>Bogor,.........................
        <br>Tata Usaha Teknik Informatika
        <br><br><br>(_____________________)
        <br>NIK.
        </td>
      </tr>
      
  </table>

</body>
</html>
    