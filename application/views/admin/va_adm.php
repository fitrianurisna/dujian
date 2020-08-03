<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2>Staff Tata Usaha</h2>
      <br><br>
      <div class="col-md-4">
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewadm">Tambah Admin</button>
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
                <th>Nama</th>
                <th>E-mail</th>
                <th>NIK</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <?php
                $no = 1;
                foreach ($user as $u) { ?>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->nama; ?></td>
                  <td><?php echo $u->email; ?></td>
                  <td><?php echo $u->nik; ?></td>
                  <td><button type="button" class="btn btn-danger"><?php echo anchor('Ca_adm/delete/' . $u->id_user, 'Hapus'); ?></button></td>

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
<?php
if (isset($error)) {
  echo "ERROR UPLOAD : <br/>";
  print_r($error);
  echo "<hr/>";
} ?>

<div class="modal fade" id="addNewadm" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pendaftaran UTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('Ca_adm/add'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="role_id" class="form-control" value="1">
            <input type="hidden" name="aktif" class="form-control" value="1">
          </div>
          <div class="col-md-12 mb-12">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="nama">
          </div>
          <div class="col-md-12 mb-12">
            <label>Email</label>
            <input type="text" name="email" placeholder="email">
          </div>
          <div class="col-md-12 mb-12">
            <label>NIK</label>
            <input type="text" name="nik" placeholder="nik">
          </div>
          <div class="col-md-12 mb-12">
            <label>Password</label>
            <input type="password" name="password" placeholder="password">
          </div>
          <div class="form-group row">
            <label class="control-label col-md-10 col-sm-10" for="ControlFile1">Upload Tanda Tangan:</label>
            <br>
            <div id="tandatangan"></div>

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