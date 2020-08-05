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
          DAFTAR PESERTA DAN NILAI AKHIR (DPNA) 
          <br>UJIAN TENGAH SEMESTER (UTS) SUSULAN Ganjil/Genap <?php echo $jadwal['ta_id'];?>
        </span>
      </td>
    </tr>
    <tr align="left">
      <td>
        kode Matakuliah
        <br>MataKuliah
        <br>Dosen Penguji
      </td>
      <td>:test
        <br>:<br>:</td>
      <td>
        Dosen Pengampu
        <br>Semester
        <br>Hari/Tanggal
      </td>
      <td>:test
        <br>:<br>:</td>
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
    <tr>
      <!-- <?php $no=1; { ?>
      <td><?php echo $no++; ?></td>
      <td><?php echo $rt['matkul'];?></td>
      <td><?php echo $rt['dosen'];?></td> -->
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
          <br>83 < A £ 100
          <br>76 < AB £ 83
          <br>69 < B £ 76
          <br>62 < BC £ 69
          <br>55 < C £ 62
          <br>48 < CD £ 55
          <br>41 < D £ 48
          <br>E £ 41
        </td>
        <td></td>
        <td>Bogor,.........................
        <br>Dosen Penguji
        <br><br><br>(_____________________)
        </td>
      
  </table>

</body>
</html>
    