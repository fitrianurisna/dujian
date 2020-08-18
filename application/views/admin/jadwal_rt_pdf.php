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
  <!-- <img src="assets/img/nomor2.jpg" style="position: absolute; width: 100px; height: auto;"> -->
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
          <br>JADWAL UJIAN TENGAH SEMESTER (UTS) SUSULAN   
          <br>SEMESTER <?php echo $e['semester']; ?> <?php echo $e['tahun'];?><br>
          <br>
        </span>
      </td>
    </tr>
  </table>

  <table border="1" width="100%">
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Mata Kuliah</th>
      <th rowspan="2">Nama dosen</th>
      <th colspan="2">Jadwal</th>
    </tr>
    <tr>
        <th>Hari</th>
        <th>Tanggal</th>
    </tr>
      <?php
      $no = 1; 
      foreach ($c as $k) { ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $k->nama_matkul; ?></td>
      <td><?php echo $k->nama_dosen; ?></td>
      <td><?php echo $k->Hari; ?></td>
      <td><?php echo $k->Tanggal; ?></td>
    </tr>
    <?php } ?>
  
  </table>
  <table style="width: 100%;">
      <tr>
        <td></td>
        <td align="right">Bogor,..................................
        <br>Dosen Penguji,                             
        <br><br><br>(_____________________)
        </td>
      </tr>
      
  </table>

</body>
</html>
    