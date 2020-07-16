<!-- Services -->
    <section id="">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
          <form class="form-login" action="<?php echo base_url('Auth/dakun');?>" method="post">
            <h2 class="section-heading text-uppercase">Daftar Akun</h2>
            <h3 class="section-subheading text-muted">Silahkan Melakukan Pendaftaran akun</h3> 
                <div>
                  <input class="col-md-5" type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo set_value('nama'); ?>" required="" />
                  <?php echo form_error('nama','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <br>
                <div>  
                  <input class="col-md-5" type="email" name="email" class="form-control" placeholder="email" required="" value="<?php echo set_value('email'); ?>"autofocus/>
                  <?php echo form_error('email','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <br>
                <div>
                  <input class="col-md-5" type="text" name="npm" class="form-control" placeholder="NPM" required="" value="<?php echo set_value('npm'); ?>" />
                  <?php echo form_error('npm','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <br>
                <div>
                  <input class="col-md-5" type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone" required="" />
                </div>
                <br>
                <div>
                  <input class="col-md-5" type="password" name="password" class="form-control" placeholder="Password" required="" />
                  <?php echo form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <br>
                <div>
                  <input class="col-md-5" type="password" name="password1" class="form-control" placeholder="Password" required="" />
                </div>
                <br>
                <div>
                  <input class="col-md-5" type="hidden" name="prodi" class="form-control" value="Teknik Informatika" required="" />
                </div>
                <br>
                <div class="form-group row">

                        <div class="col-md-8 col-sm-8 ">
                        <label class="col-md-8 col-sm-8 control-label">Kelas</label>
                          <div class="radio">
                            <label>
                              <input type="radio" checked name="kelas" value="0">Reguler 
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="kelas" value="1"> Karyawan
                            </label>
                          </div>
                      </div>
                      </div>
                <br>
                <div>
                  <button type="submit" class="btn btn-primary btn-m">Daftar</button> 
                </div>
                 <div class="registration">
                 Sudah Punya Akun?
                <a class="" href="<?php echo base_url('Auth/in'); ?>">
                   Masuk.
                  </a>

                <br />
                </div>
                </form>
            
          </div>
        </div>
        
    </section>
