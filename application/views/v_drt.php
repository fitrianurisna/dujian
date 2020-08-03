<div class="container">
  <h1>Riwayat Pendaftaran</h1>
  <h2>Silahkan melakukan pendaftaran Remedial Teaching</h2>
  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewrt">Remedial teaching</button>
  <table class="table table-striped jambo_table bulk_action">
    <thead>
      <tr>
        <th>Nomer</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jumlah Mata Kuliah</th>
        <th>Detail Mata Kuliah</th>
        <th>Tahun Ajaran</th>
        <th>Created At</th>
        <th>Cetak Invoice</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $No = 1;
      $npm = $this->session->userdata('npm');
      // $verifikasi = $this->db->get_where('rt', array('npm' => $npm))->result();
      $this->db->select('*, count(*) as jumlah')->from('rt');
      $this->db->where('npm', $npm);
      $this->db->group_by('npm');
      $verifikasis = $this->db->get()->result();
      foreach ($verifikasis as $v) { ?>
        <tr>
          <td><?= $No++; ?></td>
          <td><?= $v->nama; ?></td>
          <td><?= $v->npm; ?></td>
          <td><?= $v->jumlah ?></td>
          <td><?= $v->matkul; ?></td>
          <td><?= $v->ta; ?></td>

          <td>
            <!-- <?= $v->createdAt ?> -->
          </td>
          <td><a href="<?= base_url() ?>C_prt/invoice_rt/<?= $v->id ?>" class="fa fa-download">Cetak Invoice</a></td>

          <td></td>
        </tr>
      <?php } ?>

    </tbody>

  </table>
</div>

<!-- Modal Add remedial teaching-->
<?php
if (isset($error)) {
  echo "ERROR UPLOAD : <br/>";
  print_r($error);
  echo "<hr/>";
} ?>
<form action="<?php echo base_url('C_prt/add'); ?>" method="post" enctype="multipart/form-data">
  <div class="modal fade" id="addNewrt" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Remedial teaching</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" name="nama" class="form-control" value="<?= $this->session->userdata('nama') ?>">
            <input type="hidden" name="npm" class="form-control" value="<?= $this->session->userdata('npm') ?>">
            <input type="hidden" name="program_studi" class="form-control" value="Teknik Informatika">
            <input type="hidden" name="verivikasi" class="form-control" value="0">
          </div>
          <div class="form-group row">
            <label class="col-md-3 col-sm-3  control-label">Semester
              <br>
            </label>

            <div class="col-md-9 col-sm-9 ">
              <div class="radio">
                <label>
                  <input type="radio" class="flat" checked name="semester" value="genap"> Genap
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" class="flat" name="semester" value="ganjil"> Ganjil
                </label>
              </div>
            </div>
          </div>
          <!-- <?php print_r($ta); ?> -->
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3">Tahun Ajaran</label>
            <div class="col-md-9 col-sm-9 ">
              <select class="form-control" name="ta">
                <option>Option</option>
                <?php foreach ($ta as $row) : ?>
                  <option value="<?php echo $row->id_ta; ?>"><?php echo $row->tahun; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-7 col-sm-7" for="ControlFile1">Lampirkan Bukti Kartu Hasil Studi (KHS):</label>
            <input type="file" name="khs" class="form-control-file" id="ControlFile1">
            <label>max:2MB</label>
          </div>
          <div>

          </div>


          <div id="field">
            <div id="container-rt">
              <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="inputmatkul1">Mata Kuliah</label>
                  <select class="custom-select" name="matkul[]">
                    <option selected>Pilihan</option>
                    <?php $matkul = $this->db->get('matkul');
                    foreach ($matkul->result() as $row) { ?>
                      <option value="<?php echo $row->nama_matkul; ?>">
                        <?php echo $row->nama_matkul; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Dosen Pengajar</label>
                  <select class="custom-select" name="dosen[]">
                    <option selected>Pilihanlah sesuai</option>
                    <?php $dosen = $this->db->get('dosen');
                    foreach ($dosen->result() as $row) { ?>
                      <option value="<?php echo $row->nama_dosen; ?>">
                        <?php echo $row->nama_dosen; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">sks</label>
                  <select class="custom-select" name="sks[]">
                    <option selected>Pilihanlah sesuai</option>
                    <?php $sks = $this->db->get('sks');
                    foreach ($sks->result() as $row) {
                    ?>
                      <option value="<?php echo $row->id; ?>">
                        <?php echo $row->sks; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-2 mb-3">
                  <label for="inputdosen1">nilai</label>
                  <input type="" name="nilai[]" class="form-control">
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-1 mb-3">

                  <button type="button" style="margin-top: 30px;" id="add-rt" class="btn btn-success btn-sm">+</button>

                </div>
              </div>

            </div>
          </div>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success btn-sm">Save</button>
        </div>
      </div>
    </div>
  </div>
  </div>
</form>
<script type="text/javascript" src="<?php echo base_url('assets/mulse/js/jquery-3.4.1.min.js'); ?>"></script>
<script>
  $(document).ready(function() {
    let i = 1;
    //MODAL_UAS



    //MODAL_UTS


    //modal Remeedial Teaching
    $('#add-rt').click(function() {

      // var table = document.getElementById('#coba');
      var isi = `<div class="form-rt${i}">
      <div class="form-row">
                <div class="col-md-3 mb-3">
                  <label for="inputmatkul1">Mata Kuliah</label>
                  <select class="custom-select" name="matkul[]">
                    <option selected>Pilihan</option>
                    <?php $matkul = $this->db->get('matkul');
                    foreach ($matkul->result() as $row) { ?>
                      <option value="<?php echo $row->nama_matkul; ?>">
                        <?php echo $row->nama_matkul; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Dosen Pengajar</label>
                  <select class="custom-select" name="dosen[]">
                    <option selected>Pilihanlah sesuai</option>
                    <?php $dosen = $this->db->get('dosen');
                    foreach ($dosen->result() as $row) { ?>
                      <option value="<?php echo $row->nama_dosen; ?>">
                        <?php echo $row->nama_dosen; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">sks</label>
                  <select class="custom-select" name="sks[]">
                    <option selected>Pilihanlah sesuai</option>
                    <?php $sks = $this->db->get('sks');
                    foreach ($sks->result() as $row) {
                    ?>
                      <option value="<?php echo $row->id; ?>">
                        <?php echo $row->sks; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-2 mb-3">
                  <label for="inputdosen1">nilai</label>
                  <input type="" name="nilai[]" class="form-control">
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-1 mb-3 remove">

                  <button type="button" style="margin-top: 30px;" id="add-rt" class="btn btn-danger btn-sm">-</button>

                </div>
              </div>
                </div>`;
      $('#container-rt').append(isi);
      console.log('ahay deuh');
    });

    $('#container-rt').on('click', '.remove', function() {
      console.log("ok");
      $(this).parent().remove();
    });
  });
</script>