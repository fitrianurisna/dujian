<div class="container">
  <h1>Riwayat Pendaftaran</h1>
  <h2>Silahkan melakukan pendaftaran dengan memilih pilihan ujian susulan dibawah ini</h2>

  <div class="col-md-4">
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewuts">Tambah UTS</button>
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewuas">Tambah UAS</button><br />
  </div>
  <div class="col-md-6">
    <select onchange="ganti(this.value)" class="form-control" style="width: 20%;margin-bottom:10px" class="custom-select" name="tahun_ajaran">
      <option value="1">UTS</option>
      <option value="2">UAS</option>

    </select>
  </div>
  <table class="table table-striped jambo_table bulk_action uts">
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
      $this->db->select('*')->from('susulan_uts');
      $this->db->where('npm', $npm);

      $verifikasi = $this->db->get()->result();

      foreach ($verifikasi as $v) {
        $this->db->select('count(*) AS jumlah')->from('d_package');
        $this->db->where('susulan_id', $v->id);
        $this->db->where('tipe', 1);
        $this->db->group_by('susulan_id');
      ?>
        <tr>
          <td><?= $No++; ?></td>
          <td><?= $v->nama_mahasiswa; ?></td>
          <td><?= $v->npm; ?></td>
          <td><?= $this->db->get()->row_array()['jumlah'] ?></td>
          <td><?= $v->matkul; ?></td>
          <td><?= $v->tahun_ajaran; ?></td>
          <td><?= $v->createdAt ?></td>
          <td><a href="<?= base_url() ?>C_package/invoice_pdf/<?= $v->id ?>/uts" target="_blank" class="fa fa-download">Cetak Invoice</a></td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
  <table class="table table-striped jambo_table bulk_action uas">
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
      // $verifikasi = $this->db->get_where('susulan_uas', array('npm' => $npm))->result();
      $this->db->select('*')->from('susulan_uas');
      $this->db->where('npm', $npm);
      $verifikasis = $this->db->get()->result();
      foreach ($verifikasis as $f) {
        $this->db->select('count(*) AS jumlah')->from('d_package');
        $this->db->where('susulan_id', $f->id);
        $this->db->where('tipe', 2);
        $this->db->group_by('susulan_id');
      ?>
        <tr>
          <td><?= $No++; ?></td>
          <td><?= $f->nama_mahasiswa; ?></td>
          <td><?= $f->npm; ?></td>
          <td><?= $this->db->get()->row_array()['jumlah'] ?></td>
          <td><?= $f->matkul; ?></td>
          <td><?= $f->tahun_ajaran; ?></td>
          <td><?= $f->createdAt ?></td>
          <td><a href="<?= base_url() ?>C_package/invoice_pdf/<?= $f->id ?>/uas" target="_blank" class="fa fa-download">Cetak Invoice</a></td>
        </tr>
      <?php } ?>
    </tbody>

  </table>
</div>

<!-- Modal Add New UTS-->
<form action="<?php echo base_url('C_uts/add'); ?>" method="post">
  <div class="modal fade" id="addNewuts" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pendaftaran UTS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" name="nama_mahasiswa" class="form-control" value="<?= $this->session->userdata('nama') ?>">
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
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Tahun Ajaran</label>
            <div class="col-md-9 col-sm-9 ">
              <select class="form-control" class="custom-select" name="tahun_ajaran">
                <option selected>Option</option>
                <?php foreach ($ta as $row) : ?>
                  <option value="<?php echo $row->tahun; ?>"><?php echo $row->tahun; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div id="field">
            <div id="container-cl">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="inputmatkul1">Mata Kuliah</label>
                  <select class="custom-select" name="matkul[]">
                    <option selected>Pilihan</option>
                    <?php
                    foreach ($matkul as $row) { ?>
                      <option value="<?php echo $row->id_matkul; ?>">
                        <?php echo $row->nama_matkul; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Dosen Pengajar</label>
                  <select class="custom-select" name="dosen[]">
                    <option selected>Pilihan</option>
                    <?php
                    foreach ($dosen as $row) {
                    ?>
                      <option value="<?php echo $row->id_dosen; ?>">
                        <?php echo $row->nama_dosen; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <button type="button" style="margin-top: 28px;" id="add-uts" name="add-more" class="btn btn-success btn-sm">+</button>
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

<!-- Modal Add New UAS-->
<form action="<?php echo base_url('C_uas/add'); ?>" method="post">
  <div class="modal fade" id="addNewuas" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pendaftaran UAS</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <input type="hidden" name="nama_mahasiswa" class="form-control" value="<?= $this->session->userdata('nama') ?>">
            <input type="hidden" name="npm" class="form-control" value="<?= $this->session->userdata('npm') ?>">
            <input type="hidden" name="program_studi" class="form-control" value="Teknik Informatika">
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
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Tahun Ajaran</label>
            <div class="col-md-9 col-sm-9 ">
              <select class="form-control" class="custom-select" name="tahun_ajaran">
                <option selected>Option</option>
                <?php foreach ($ta as $row) : ?>
                  <option value="<?php echo $row->tahun; ?>"><?php echo $row->tahun; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-3 mb-3">


            </div>
          </div>

          <div id="field">
            <div id="container-clone">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="inputmatkul1">Mata Kuliah</label>
                  <select class="custom-select" name="matkul">
                    <option selected>Pilihan</option>
                    <?php
                    foreach ($matkul as $row) { ?>
                      <option value="<?php echo $row->id_matkul; ?>">
                        <?php echo $row->nama_matkul; ?>
                      </option><?php } ?>
                  </select>

                  <div class="invalid-feedback">

                  </div>
                </div>

                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Dosen Pengajar</label>
                  <select class="custom-select" name="dosen">
                    <option selected>Pilihan</option>
                    <?php
                    foreach ($dosen as $row) {
                    ?>
                      <option value="<?php echo $row->id_dosen; ?>">
                        <?php echo $row->nama_dosen; ?>
                      </option><?php } ?>
                  </select>
                  <input type="hidden" name="verivikasi" class="form-control" value="0">
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-1 mb-3">
                  <button type="button" style="margin-top:28px" id="add-more" name="add-more" class="btn btn-success btn-sm">+</button>
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
    $('#add-more').click(function() {
      // var table = document.getElementById('#coba');
      var isi = `<div class="form-uas${i}">
                  <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="inputmatkul1">Mata Kuliah</label>
                        <select class="custom-select" name="matkul[]">
                          <option selected>Pilihan</option>
                          <?php
                          foreach ($matkul as $row) { ?>
                      <option value="<?php echo $row->id_matkul; ?>">
                        <?php echo $row->nama_matkul; ?>
                      </option><?php } ?>
                        </select>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputdosen1" >Dosen Pengajar</label>
                        <select class="custom-select" name="dosen[]">
                          <option selected>Pilihanlah sesuai</option>
                          <?php
                          foreach ($dosen as $row) {
                          ?>
                      <option value="<?php echo $row->id_dosen; ?>">
                        <?php echo $row->nama_dosen; ?>
                      </option><?php } ?>
                        </select>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="col-md-3 mt-4 remove">
                        <button type="button" data-id='${i}' name="remove" class="btn btn-danger btn-sm">-</button>
                      </div>
                    </div>
                </div>`;
      $('#container-clone').append(isi);
      console.log('ahay deuh');
    });
    $('#container-clone').on('click', '.remove', function() {
      console.log("ok");
      $(this).parent().remove();
    });


    //MODAL_UTS
    $('#add-uts').click(function() {
      // var table = document.getElementById('#coba');
      var isi = `<div class="form-uts${i}">
                  <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="inputmatkul1">Mata Kuliah</label>
                        <select class="custom-select" name="matkul[]">
                          <option selected>Pilihan</option>
                          <?php
                          foreach ($matkul as $row) { ?>
                      <option value="<?php echo $row->id_matkul; ?>">
                        <?php echo $row->nama_matkul; ?>
                      </option><?php } ?>
                        </select>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputdosen1" >Dosen Pengajar</label>
                        <select class="custom-select" name="dosen[]">
                          <option selected>Pilihanlah sesuai</option>
                          <?php
                          foreach ($dosen as $row) {
                          ?>
                      <option value="<?php echo $row->id_dosen; ?>">
                        <?php echo $row->nama_dosen; ?>
                      </option><?php } ?>
                        </select>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="col-md-3 mt-4 remove">
                        <button type="button" data-id='${i}' name="remove" class="btn btn-danger btn-sm">-</button>
                      </div>
                    </div>
                </div>`;
      $('#container-cl').append(isi);
      console.log('ahay deuh');
    });

    $('#container-cl').on('click', '.remove', function() {
      console.log("ok");
      $(this).parent().remove();
    });

    //modal Remeedial Teaching
    $('#add-rt').click(function() {

      // var table = document.getElementById('#coba');
      var isi = `<div class="form-rt${i}">
                  <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="inputmatkul1">Mata Kuliah</label>
                        <select class="custom-select" name="matkul_id[]">
                          <option selected>Pilihan</option>

                        </select>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="inputdosen1" >Dosen Pengajar</label>
                        <select class="custom-select" name="dosen_id[]">
                          <option selected>Pilihanlah sesuai</option>

                        </select>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                            <label for="inputdosen1" >sks</label>
                            <select class="custom-select" name="sks">
                            <option selected>Pilihanlah sesuai</option>

                          </select>
                            <div class="invalid-feedback">
                            </div>
                    <div class="col-md-3 mb-3">
                            <label for="inputdosen1"  >nilai</label>
                            <input type="" name="nilai" class="form-control">
                            <div class="invalid-feedback">
                            </div>
                          </div>
                      <div class="col-md-3 mt-4 remove">
                        <button type="button" data-id='${i}' name="remove" class="btn btn-danger btn-sm">-</button>
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