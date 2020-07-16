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
          <th>Pendaftaran</th>
          <th>Jumlah Mata Kuliah</th>
          <th>Detail Mata Kuliah</th>
          <th>Created At</th>
          <th>Cetak Invoice</th>
        </tr>
      </thead>
      <tbody>  
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
      </tbody>
      
    </table>
  </div>

  <!-- Modal Add New UTS-->
  <form action="" method="post">
    <div class="modal fade" id="addNewrt" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Remedial teaching</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

        <div class="form-group row">
                        <label class="col-md-3 col-sm-3  control-label">Semester
                          <br>
                        </label>

                        <div class="col-md-9 col-sm-9 ">
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="iCheck"> Genap
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> Ganjil
                            </label>
                          </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Tahun Ajaran</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control">
                            <option>Option</option>
                            <option>2016/2017</option>
                            <option>2018/2019</option>
                            <option>2020/2021</option>
                          </select>
                        </div>
                      </div>

                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="inputmatkul1">Mata Kuliah</label>
                            <select class="custom-select" name="matkul">
                            <option selected>Pilihan</option>
                              
                          </select>
                            <div class="invalid-feedback">
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputdosen1" >Dosen Pengajar</label>
                            <select class="custom-select" name="dosen">
                            <option selected>Pilihanlah sesuai</option>
                          </select>
                            
                            <div class="invalid-feedback">
                            </div>
                          </div>
                        </div>
                          <div class="col-md-3 mb-3">
                        <button id="add-more" type="submit" class="btn btn-success btn-sm">+</button>
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