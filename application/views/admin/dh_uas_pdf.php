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
      <td align="center"  colspan="5">
        <span style="line-height: 1.6; font-weight: bold;">
          <br>DAFTAR PESERTA DAN NILAI AKHIR (DPNA) 
          <br>UJIAN AKHIR SEMESTER (UAS) SUSULAN <?php echo $jadwalk['semester']; ?> <?php echo $jadwalk['tahun'];?>
        </span>
      </td>
    </tr>

    <tr align="left">
      <td colspan=" 2">
        kode Matakuliah :&nbsp;<?php echo $jadwalk['kode_matkul']; ?>
        <br>MataKuliah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?php echo $jadwalk['nama_matkul']; ?> 
        <br>Dosen Penguji &nbsp;&nbsp;&nbsp;:
      </td>
      <td colspan=" 3">
        Dosen Pengampu :&nbsp; <?php echo $jadwalk['nama_dosen']; ?>
        <br>Semester &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <?php echo $jadwalk['semester']; ?>
        <br>Hari/Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<?php echo $jadwalk['Hari']; ?>, <?php echo $jadwalk['Tanggal']; ?>
      </td>
    </tr>
  </table>

  <table   border="1" width="100%">
    <tr >
      <th align="center" rowspan="3">No</th>
      <th  align="center" rowspan="3">NPM</th>
      <th align="center" rowspan="3">Nama</th>
      <th align="center" colspan="6">Nilai</th>
      <th align="center" rowspan="3">Tanda Tangan</th>
    </tr>
    <tr>
        <th rowspan="2">Kehadiran<br>(10&#37;)</th>
        <th rowspan="2">Tugas<br>(15&#37;)</th>
        <th rowspan="2">UTS<br>(25&#37;)</th>
        <th rowspan="2">UAS<br>(50&#37;)</th>
        <th colspan="2">Akhir</th>
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
      <td><?php echo $k['nama_mahasiswa']; ?></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
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
    