<!-- Services -->
    <section id="login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
          <form class="form-login" action="<?php echo base_url('Auth/do_login');?>" method="post">
            <h2 class="section-heading text-uppercase">Login</h2>
            <h3 class="section-subheading text-muted">Silahkan Melakukan Login akun</h3> 
                <div>  
                  <input class="col-md-5" type="email" name="email" class="form-control" placeholder="email" required="" value="<?php echo set_value('email');?>" autofocus/>
                  
                </div>
                <br>
                <div>
                  <input class="col-md-5" type="password" name="password" class="form-control" placeholder="Password" required="" />
                
                </div>
                <br>
                <div>
                  <button type="submit" class="btn btn-primary btn-m" >Login</button> 
                </div>
                <!-- <p class="change_link">Belum Memiliki Akun? -->
                  <!-- <a href="<?php echo base_url('Auth/daftar'); ?>" class="to_register"> Buat Akun </a> -->
                <!-- </p> -->

                <br />
                </div>
                </form>
            
          </div>
        </div>
        
    </section>
