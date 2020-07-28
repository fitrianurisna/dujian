<div class="container">
		<h1>Riwayat Pendaftaran</h1>
		<h2>Silahkan melakukan pendaftaran dengan memilih pilihan ujian susulan dibawah ini</h2>
		<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewuts">UTS</button>
		<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addNewuas">UAS</button><br/>
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
				<?php 
        $No = 1;
        foreach ($susulan_uts as $s){ ?>
        <tr>
          <td><?=$No++; ?></td>
          <td><?=$s->nama_mahasiswa; ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
				<?php }?>
			</tbody>
			
		</table>
	</div>

	<!-- Modal Add New UTS-->
	<form action="<?php echo base_url('C_uts/add'); ?>" method="post">
		<div class="modal fade" id="addNewuts" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Pendaftaran UTS</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

            <div class="form-group">
                <input type="hidden" name="nama_mahasiswa" class="form-control" value="<?= $this->session->userdata('nama')?>">
                <input type="hidden" name="npm" class="form-control" value="<?= $this->session->userdata('npm')?>">
                <input type="hidden" name="program_studi" class="form-control" value="Teknik Informatika"  >
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
                            <option selected >Option</option>
                            <?php foreach ($ta->result() as $row):?>
                            	<option value="<?php echo $row->tahun;?>"><?php echo $row->tahun;?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                          <!-- <input type="hidden" name="durt_id" value="1"> --> 
                      </div>
                      <div id="field">
                      <div id="field1">
                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="inputmatkul1">Mata Kuliah</label>
                            <select class="custom-select" name="matkul">
                            <option selected>Pilihan</option>
                              <?php $matkul = $this->db->get('matkul'); 
                              foreach ($matkul->result() as $row) {
                ?>
                              <option value="<?php echo $row->nama_matkul;?>">
                              <?php echo $row->nama_matkul;?>
                            </option><?php } ?>
                          </select>
                            <div class="invalid-feedback">
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputdosen1" >Dosen Pengajar</label>
                            <select class="custom-select" name="dosen">
                            <option selected>Pilihan</option>
                              <?php $dosen = $this->db->get('dosen'); 
                              foreach ($dosen->result() as $row) {
                                ?>
                              <option value="<?php echo $row->nama_dosen;?>">
                              <?php echo $row->nama_dosen;?>
                              </option><?php } ?>
                          </select>
                            <input type="hidden" name="verivikasi" class="form-control" value="0" >
                            <div class="invalid-feedback">
                            </div>
                          </div>
                      </div>
                            <!-- <div class="form-group row" id="coba"></div>
                                </div> -->
                      </div>  
                      </div>
                      <div class="form-group row">
                          <div class="col-md-3 mb-3">
                		  	<button type="button" id="#add-more" name="add-more" class="btn btn-success btn-sm">+</button>
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
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Pendaftaran UAS</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">

				<div class="form-group">
                <input type="hidden" name="nama_mahasiswa" class="form-control" value="<?= $this->session->userdata('nama')?>">
                <input type="hidden" name="npm" class="form-control" value="<?= $this->session->userdata('npm')?>">
                <input type="hidden" name="program_studi" class="form-control" value="Teknik Informatika"  >
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
                            <option selected >Option</option>
                            <?php foreach ($ta->result() as $row):?>
                              <option value="<?php echo $row->tahun;?>"><?php echo $row->tahun;?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                          <!-- <input type="hidden" name="durt_id" value="1"> --> 
                      </div>

                      <div id="field">
                      <div id="field1">
                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="inputmatkul1">Mata Kuliah</label>
                            <select class="custom-select" name="matkul">
                            <option selected>Pilihan</option>
                              <?php $matkul = $this->db->get('matkul'); 
                              foreach ($matkul->result() as $row) {
                ?>
                              <option value="<?php echo $row->nama_matkul;?>">
                              <?php echo $row->nama_matkul;?>
                            </option><?php } ?>
                          </select>
                            <div class="invalid-feedback">
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputdosen1" >Dosen Pengajar</label>
                            <select class="custom-select" name="dosen">
                            <option selected>Pilihan</option>
                              <?php $dosen = $this->db->get('dosen'); 
                              foreach ($dosen->result() as $row) {
                                ?>
                              <option value="<?php echo $row->nama_dosen;?>">
                              <?php echo $row->nama_dosen;?>
                              </option><?php } ?>
                          </select>
                            <input type="hidden" name="verivikasi" class="form-control" value="0" >
                            <div class="invalid-feedback">
                            </div>
                          </div>
                      </div>
                            <!-- <div class="form-group row" id="coba"></div>
                                </div> -->
                      </div>  
                      </div>
                          <div class="form-group row">
                            <div class="col-md-3 mb-3">
                              <button type="button" id="add-more" name="add-more" class="btn btn-success btn-sm">+</button>
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


