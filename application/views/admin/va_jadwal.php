<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>JADWAL UJIAN TENGAH SEMESTER SUSULAN </h2>
      <br><br>
      <div class="col-md-4">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewjadwal">Tambah Jadwal</button>
        <button type="button" class="btn btn-round btn-info"  data-toggle="modal" data-target="#addNewrekap">Cetak Rekap</button>
        <button type="button" class="btn btn-round btn-info"  data-toggle="modal" data-target="#addjadwal">Cetak Jadwal</button>
        
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
                <th>Daftar Hadir</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <?php $no = 1;
                foreach ($jadwal as $j) { ?>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $j->tahun; ?></td>
                  <td><?php echo $j->nama_matkul; ?></td>
                  <td><?php echo $j->nama_dosen; ?></td>
                  <td><?php echo $j->Hari; ?>,<?php echo $j->Tanggal; ?></td>
                  <td><?php echo $j->Pukul; ?></td>
                  <td><a href="<?= base_url() ?>Ca_jadwal/dh_uts_pdf/<?= $j->id ?>" target="_blank" class="fa fa-download">Cetak Daftar</a></td> 
                  <td> <a type="button" href="<?= base_url() ?>Ca_jadwal/delete/<?= $j->id ?>" class="btn btn-danger">Hapus</a> </td>
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
          <input type="hidden" name="tipe" class="form-control" value="1">
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
                    <option selected>Mata Kuliah</option>
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
                    <option selected>Dosen Pengajar</option>
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
                <!-- <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Dosen Penguji</label>
                  <select class="custom-select" name="dosen_penguji">
                    <option selected>Dosen Penguji</option>
                    <?php
                    foreach ($dosen as $row) {
                    ?>
                      <option value="<?php echo $row->id_dosen; ?>">
                        <?php echo $row->nama_dosen; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div> -->
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Hari</label>
                  <input type='text' id='' name="Hari" class="form-control" placeholder="Senin" />
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">Tanggal</label>
                  <input type='text' id='tanggalaja' name="tanggal" class="form-control" />
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3 mb-3">
                  <label for="inputdosen1">WAKTU</label>
                  <input type='text' id='pukul' name="pukul" class="form-control" placeholder="07:30" />
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
<form action="<?php echo base_url('Ca_jadwal/rekap_uts_pdf'); ?>" method="post">
  <div class="modal fade" id="addNewrekap" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cetak Rekap</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="tipe" class="form-control" value="1">
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Tahun Ajaran</label>
            <div class="col-md-9 col-sm-9 ">
              <select class="form-control" class="custom-select" name="ta_id">
                <option selected disabled>Option</option>
                <?php foreach ($ta as $row) : ?>
                  <option value="<?php echo $row->id_ta; ?>"><?php echo $row->tahun; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <button  type="submit"  target="_blank" class="btn btn-round btn-info">Cetak Rekap</button>

              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <!--   <button type="submit" class="btn btn-success btn-sm">Save</button> -->
        </div>
            </div>
          </div>
          </div>
      </div>
    </div>
  </div>
</form>
<form action="<?php echo base_url('Ca_jadwal/jadwal_uts_pdf'); ?>" method="post">
  <div class="modal fade" id="addjadwal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cetak Jadwal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="tipe" class="form-control" value="1">
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Tahun Ajaran</label>
            <div class="col-md-9 col-sm-9 ">
              <select class="form-control" class="custom-select" name="ta_id">
                <option selected disabled>Option</option>
                <?php foreach ($ta as $row) : ?>
                  <option value="<?php echo $row->id_ta; ?>"><?php echo $row->tahun; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <button  type="submit"  target="_blank" class="btn btn-round btn-info">Cetak Jadwal</button>

              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
          <!--   <button type="submit" class="btn btn-success btn-sm">Save</button> -->
        </div>
            </div>
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