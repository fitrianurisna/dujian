<div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mata kuliah</h2>
                    <ul class="nav navbar-center panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-center"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-4">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewmatkul">Tambah Matkul</button>
                  </div>
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
        <tr>
          <th>Nomer</th>
          <th>Kode matakuliah</th>
          <th>Nama Matakuliah</th>
          <th>SKS</th>
          <th>Semester</th>
          <th>action</th>
          
        </tr>
      </thead>
      <tbody>
       
        <tr>
        <?php 
          $no = 1;
          foreach ($matkul as $m) { ?>
          <td><?php echo $no++ ?></td>
          <td><?php echo $m->kode_matkul; ?></td>
          <td><?php echo $m->nama_matkul; ?></td>
          <td><?php echo $m->sks; ?></td>
          <td><?php echo $m->semester; ?></td>
          <td><a type="button" class="btn btn-danger" href="<?= base_url() ?>Ca_matkul/delete/<?= $m->id_matkul ?>">Hapus</a></td>
        </tr>
        <?php } ?>
      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<form action="<?php echo base_url('Ca_matkul/add'); ?>" method="post" enctype="multipart/form-data">
<div class="modal fade" id="addNewmatkul" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DOSEN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="role_id" class="form-control" value="1">
            <input type="hidden" name="aktif" class="form-control" value="1">
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Kode Mata Kuliah</label>
            <div class="col-md-9 col-sm-9 ">
              <input class="form-control" type="text" name="kode_matkul" placeholder="Kode Mata Kuliah">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Nama Mata Kuliah</label>
            <div class="col-md-9 col-sm-9 ">
              <input class="form-control" type="text" name="nama_matkul" placeholder="Nama Mata Kuliah">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 ">Semester</label>
            <div class="col-md-9 col-sm-9 ">
              <input class="form-control" type="text" name="semester" placeholder="Semester">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-12 mb-12">                  
            <label >sks</label>
            <select class="custom-select" name="sks">
                    <option selected>sks</option>
                    <?php $sks = $this->db->get('sks');
                    foreach ($sks->result() as $row) {
                    ?>
                      <option value="<?php echo $row->sks; ?>">
                        <?php echo $row->sks; ?>
                      </option><?php } ?>
                  </select>
                  <div class="invalid-feedback">
                  </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success btn-sm">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


