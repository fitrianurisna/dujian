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
	<form action="<?php echo base_url('C_package/create'); ?>" method="post">
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

				<div class="form-group row">
                        <label class="col-md-3 col-sm-3  control-label">Semester
                          <br>
                        </label>

                        <div class="col-md-9 col-sm-9 ">
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="semester" value="0"> Genap
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="semester" value="1"> Ganjil
                            </label>
                          </div>
                      </div>
                      </div>
                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Tahun Ajaran</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" class="custom-select" name="ta_id">
                            <option selected >Option</option>
                            <?php foreach ($ta->result() as $row):?>
                            	<option value="<?php echo $row->id_ta;?>"><?php echo $row->tahun;?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                          <input type="hidden" name="durt_id" value="1"> 
                      </div>

                      <div id="field">
                      <div id="field0">
                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="inputmatkul1">Mata Kuliah</label>
                            <select class="custom-select" name="matkul_id">
                            <option selected>Pilihan</option>
                           
                          </select>
                            <div class="invalid-feedback">
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputdosen1" >Dosen Pengajar</label>
                            <select class="custom-select" name="dosen_id">
                            <option selected>Pilihanlah sesuai</option>
                            
                          </select>
                            <div class="invalid-feedback">
                            </div>
                          </div>
                      </div>
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

<!-- Modal Add New UAS-->
	<form action="" method="post">
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
                            <?php foreach ($ta->result() as $row):?>
                            	<option value="<?php echo $row->id_ta;?>"><?php echo $row->tahun;?></option>
                            <?php endforeach; ?>
                          </select>
                        </div>
                          <input type="hidden" name="durt_id" value="2"> 
                      </div>

                      <div id="field">
                      <div id="field0">
                      <div class="form-row">
                          <div class="col-md-6 mb-3">
                            <label for="inputmatkul1">Mata Kuliah</label>
                            <select class="custom-select" name="matkul_id">
                            <option selected>Pilihan</option>
                           
                          </select>
                            <div class="invalid-feedback">
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="inputdosen1" >Dosen Pengajar</label>
                            <select class="custom-select" name="dosen_id">
                            <option selected>Pilihanlah sesuai</option>
                            
                          </select>
                            <div class="invalid-feedback">
                            </div>
                          </div>
                      </div>
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


  <script type="text/javascript">
  $(document).ready(function () {
    //@naresh action dynamic childs
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<div id="field'+ next +'">'+
          '<div id="field'+ next +'">'+
            '<div class="form-row">'+
              '<div class="col-md-6 mb-3">'+
              '<label for="inputmatkul1">Mata Kuliah</label>'+  
              '<select class="custom-select" name="matkul_id">'+
                '<option selected>Pilihan</option>'+
              '</select>'+
            '<div class="invalid-feedback">'+
            '</div>'+
            '</div>'+
            '<div class="col-md-3 mb-3">'+
            '<label for="inputdosen1" >Dosen Pengajar</label>'+
              '<select class="custom-select" name="dosen_id">'+  
              '<option selected>Pilihanlah sesuai</option>'+
                '</select>'+
              '<div class="invalid-feedback">'+
            '</div>'+
          '</div>'+
          '</div>'+
        '<div id="field">';
        
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    // ' <div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group row"> <label class="col-sm-3 col-form-label" for="action_id">Action Id</label> <div class="col-md-5"> <input id="action_id" name="action_id" type="text" placeholder="" class="form-control input-md"> </div></div><br><br> <!-- Text input--><div class="form-group"> <label class="col-md-4 control-label" for="action_name">Action Name</label> <div class="col-md-5"> <input id="action_name" name="action_name" type="text" placeholder="" class="form-control input-md"> </div></div><br><br><!-- File Button --> <div class="form-group"> <label class="col-md-4 control-label" for="action_json">Action JSON File</label> <div class="col-md-4"> <input id="action_json" name="action_json" class="input-file" type="file"> </div></div></div><div id="field">'
});
</script>