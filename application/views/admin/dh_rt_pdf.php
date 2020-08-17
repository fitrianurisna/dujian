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
  <img src="assets/img/nomor2.jpg" style="position: absolute; width: 100px; height: auto;">
  <br>
  <img src="assets/img/ft-uika.png" style="position: absolute; width: 700px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          <br><br><br><br>
        </span>
      </td>
    </tr>
  </table>

  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          <br>DAFTAR HADIR REMEDIAL TEACHING SEMESTER <?php echo $jadwalk['semester']; ?> <?php echo $jadwalk['tahun'];?> 
        </span>
      </td>
    </tr>

    <tr align="left">
      <td >
        <br>
        MataKuliah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $jadwalk['nama_matkul']; ?>
        <br>Dosen Penguji :
        <br>
      </td>
    </tr>
  </table>

  <table border="1" width="100%">
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">NPM</th>
      <th rowspan="2">Nama</th>
      <th colspan="3">Pertemuan</th>
      <th rowspan="2">Ujian</th>
    </tr>
    <tr>
        <th>Tgl:</th>
        <th>Tgl:</th>
        <th>Tgl:</th>
    </tr>
      <?php
      $no = 1; 
      foreach ($jadwalq as $k) { ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $k['npm']; ?></td>
      <td><?php echo $k['nama']; ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      
    </tr>
    <?php } ?>
  
  </table>
  <table style="width: 100%;">
      <tr>
        <td align="left">Mengetahui:
        <br>Wakil Dekan I                             
        <br><br><br>(_____________________)<br>NIK :
        </td>
        <td align="left">Validasi:
        <br>Ketua Program Studi,                             
        <br><br><br>(_____________________)<br>NIK :
        </td>
        <td></td>
        <td align="left">Bogor,..................................
        <br>Dosen,                             
        <br><br><br>(_____________________)<br>NIK :
        </td>
      </tr>
      
  </table>

</body>
</html>
    