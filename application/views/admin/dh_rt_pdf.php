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
      <td align="center"  colspan="4">
        <span style="line-height: 1.6; font-weight: bold;">
          <br>DAFTAR PESERTA DAN NILAI AKHIR (DPNA) 
          <br>UJIAN TENGAH SEMESTER (UTS) SUSULAN <?php echo $jadwalk['semester']; ?> <?php echo $jadwalk['tahun'];?>
        </span>
      </td>
    </tr>

    <tr align="left">
      <td>
        kode Matakuliah
        <br>MataKuliah
        <br>Dosen Penguji
      </td>
      <td>:<?php echo $jadwalk['kode_matkul']; ?>
        <br>:<?php echo $jadwalk['nama_matkul']; ?><br>:</td>
      <td>
        Dosen Pengampu
        <br>Semester
        <br>Hari/Tanggal
      </td>
      <td>:<?php echo $jadwalk['nama_dosen']; ?>
        <br>:<?php echo $jadwalk['semester']; ?><br>:<?php echo $jadwalk['Hari']; ?>, <?php echo $jadwalk['Tanggal']; ?></td>
    </tr>
  </table>

  <table class="table table-bordered">
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">NPM</th>
      <th rowspan="2">Nama</th>
      <th colspan="2">Nilai Akhir</th>
      <th rowspan="2">Tanda Tangan</th>
    </tr>
    <tr>
        <th>Angka</th>
        <th>Huruf</th>
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
      
    </tr>
    <?php } ?>
  
  </table>
  <table style="width: 100%;">
      <tr>
        <td>
          
          Interval Nilai Akhir  :
          <br>83 &#60; A &#8804;  100
          <br>76 &#60; AB &#8804; 83
          <br>69 &#60; B &#8804; 76
          <br>62 &#60; BC &#8804; 69
          <br>55 &#60; C &#8804; 62
          <br>48 &#60; CD &#8804; 55
          <br>41 &#60; D &#8804; 48
          <br>E &#8804; 41
        </td>
        <td></td>
        <td align="right">Bogor,..................................
        <br>Dosen Penguji,                             
        <br><br><br>(_____________________)
        </td>
      </tr>
      
  </table>

</body>
</html>
    