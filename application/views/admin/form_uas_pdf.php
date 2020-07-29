<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>From UTS</title>
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
  <img src="assets/img/ft-uika.png" style="position: absolute; width: 700px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          <br> <br><br><br><br>
          <img src="assets/img/nomor.jpg" style="position: absolute; width: 100px; height: auto;">
          <br>
        </span>
      </td>
    </tr>
  </table>

  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          SURAT IZIN MENEMPUH UJIAN SUSULAN
          <br>
        </span>
      </td>
    </tr>
    <tr>
      <td>
        Bismillaahirrahmaanirrohiim
        <br>Assalaamu’alaikum wr. wb.
        <br>
        <br>Setelah mempertimbangkan alasan/keterangan yang diajukan mahasiswa:
      </td>
    </tr>
       <tr>
         <td>  <br>Nama      : <?php echo $susulan_uas['nama_mahasiswa'];?>
        <br>NPM       : <?php echo $susulan_uas['npm'];?>
        <br>Program Studi   : <?php echo $susulan_uas['program_studi'];?>
        <br>Kelas     : <?php echo $susulan_uas['kelas'];?>
      </td>
       </tr>
       <tr>
       <td> 
        <br>Kepada mahasiswa tersebut di atas diberikan izin untuk melaksanakan UTS/UAS*) susulan di Semester <?php echo $susulan_uas['semester'];?> TA. <?php echo $susulan_uas['tahun_ajaran'];?> dengan rincian  sebagai berikut:
       </td>  
       </tr> 
  </table>

  <table class="table table-bordered">
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Mata Kuliah</th>
      <th rowspan="2">Dosen</th>
      <th colspan="2">Jadwal</th>
    </tr>
    <tr>
        <th>Hari,Tanggal</th>
        <th>Pukul (WIB)</th>
    </tr>
    <tr>
      <?php $no=1; { ?>
      <td><?php echo $no++; ?></td>
      <td><?php echo $susulan_uas['matkul'];?></td>
      <td><?php echo $susulan_uas['dosen'];?></td>
      <td></td>
      <td></td>
    </tr>
  <?php } ?>
  </table>
  <table style="width: 100%;">
      <tr>
        <td>
        Untuk kegiatan Ujian Susulan dimaksud, mahasiswa telah memenuhi kewajiban administrasi tambahan yang dibebankan terhadapnya.
        <br>Demikian surat izin kegiatan ujian susulan ini diterbitkan, untuk dipergunakan sebagaimana mestinya.

        <br><br>Wassalaamu’alaikum wr.wb.

        </td>
      </tr> 
  </table>
  <table style="width: 100%;">
      <tr>
        <td></td>
        <td></td>
        <td>Bogor,(tgl)
        <br>Ketua Program Studi Teknik Informatika
        </td>
      <tr>
        <td>Fitrah Satrya Fajar
          <br>NIK:410 100 569</td>
      </tr> 
      <tr>
        <td>
          Tembusan
            <br>1.  Ykh. Wakil Dekan Bidang Akademik
            <br>2.  Ykh. Wakil Dekan Bidang Pengelolaan Sumberdaya
            <br>3.  Dosen/Tenaga Pengajar Mata Kuliah
            <br>4.  Pertinggal

        </td>
      </tr>
  </table>

</body>
</html>
    