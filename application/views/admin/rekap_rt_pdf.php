<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Rekap Remedial Teaching</title>
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
  <!-- <img src="assets/img/ft.jpg" style="position: absolute; width: 100px; height: auto;"> -->
  <table style="width: 100%;">
    <tr>
      <td align="center" colspan="4">
        <span style="line-height: 1.6; font-weight: bold;">
          <br>Daftar Peserta Remedial Teaching 
          <br> Semester <?php echo $a['semester']; ?> tahun <?php echo $c['tahun']; ?>
        </span>
      </td>
    </tr>
  </table>
  <br><br>

  <table border="1" width="100%">
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Nama</th>
      <th rowspan="2">NPM</th>
      <th rowspan="2">Kelas</th>
      <th rowspan="2">Mata Kuliah</th>
      <th rowspan="2">SKS</th>
      <th colspan="2">Dosen Penguji</th>
      <th colspan="2">Nilai</th>
      <th rowspan="2">Total</th>
      <th rowspan="2">No Hp</th>
    </tr>
    <tr>
      <th>Dosen Sebelumnya</th>
      <th>Penguji</th>
      <th>Awal</th>
      <th>Perbaikan</th>
    </tr>
    <?php 
      $no=1;
      foreach ($d as $d ) {
     ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td> <?php echo $d['nama']; ?></td>
        <td><?php echo $d['npm']; ?></td>
        <td></td>
        <td><?php echo $d['nama_matkul']; ?></td>
        <td><?php echo $d['sks']; ?></td>
        <td><?php echo $d['nama_dosen']; ?></td>
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
    