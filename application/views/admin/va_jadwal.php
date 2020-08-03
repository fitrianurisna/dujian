<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>JADWAL UJIAN SUSULAN &REMEDIAL TEACHING</h2>
      <br><br>
      <div class="col-md-4">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewjadwal">Tambah Jadwal</button>
      </div>
      <ul class="nav navbar-center panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-center"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>

    <div class="x_content">
      <div class="table-responsive">
        <form action="" method="post">
          <table class="table table-striped jambo_table bulk_action">
            <thead>
              <tr>
                <th>Nomer</th>
                <th>Tahun Ajaran</th>
                <th>Nama Mata kuliah</th>
                <th>Dosen Pengajar</th>
                <th>Hari/Tanggal</th>
                <th>Pukul</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <?php $no = 1;
                foreach ($jadwal as $j) { ?>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $j->ta_id; ?></td>
                  <td><?php echo $j->matkul; ?></td>
                  <td><?php echo $j->dosen; ?></td>
                  <td></td>
                  <td></td>
                  <td><button type="button" class="btn btn-primary">Edit</button> <button type="button" class="btn btn-danger">Hapus</button> </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<form action="<?php echo base_url('Ca_jadwal/add'); ?>" method="post">
  <div class="modal fade" id="addNewjadwal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Jadwal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Jadwal</label>
            <div class="col-md-9 col-sm-9 ">
              <select class="form-control" class="custom-select" name="tipe">
                <option selected>Option</option>
                <?php foreach ($tb_durt as $row) : ?>
                  <option value="<?php echo $row->id_durt; ?>"><?php echo $row->nama_durt; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Tahun Ajaran</label>
            <div class="col-md-9 col-sm-9 ">
              <select class="form-control" class="custom-select" name="ta_id">
                <option selected>Option</option>
                <?php foreach ($ta as $row) : ?>
                  <option value="<?php echo $row->id_ta; ?>"><?php echo $row->tahun; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div id="field">
            <div id="container-cl">
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
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Tanggal</label>
                  <input type='text' id='tanggalaja' name="tanggal" class="form-control" />
                  <div class="invalid-feedback">
                  </div>
                </div>

                <!-- date -->
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
<!-- <script>
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
</script> -->