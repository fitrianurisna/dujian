<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url(); ?>assets/admin/production/images/favicon.ico" type="image/ico" />

  <title>PRODI TEKNIK INFORMATIKA</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/mulse/css/bootstrap-select.css'); ?>">
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url(); ?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="<?php echo base_url(); ?>assets/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <!-- option by ketik -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" />

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
  <style type="text/css">
  </style>
</head>

<body class="nav-md footer_fixed">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col menu_fixed">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>PROTIKA</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="<?php echo base_url(); ?>assets/admin/production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?= $this->session->userdata('nama') ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a href="<?php echo base_url('C_package'); ?>"><i class="fa fa-edit"></i>Pendaftaran susulan UTS & UAS</span></a></li>
                <!-- <li><a href="<?php echo base_url(''); ?>"><i class="fa fa-edit"></i>Pendaftaran Remedial teaching</span></a></li> -->
                <li><a href="<?php echo base_url('C_prt'); ?>"><i class="fa fa-edit"></i>Pendaftaran Remedial teaching</span></a></li>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">

          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo base_url(); ?>assets/admin/production/images/" alt=""><?= $this->session->userdata('nama') ?>
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="javascript:;"> Profile</a>
                  <a class="dropdown-item" href="<?php echo base_url('Auth/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
          <div class="tile_count">
            <?php echo $contents; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    <footer>
      <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
      </div>
      <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
  </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/mulse/js/jquery-3.4.1.min.js'); ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/mulse/js/bootstrap-select.js'); ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/Flot/jquery.flot.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/Flot/jquery.flot.time.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/DateJS/<?php echo base_url(); ?>assets/admin/build/date.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="<?php echo base_url(); ?>assets/admin/vendors/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url(); ?>assets/admin/build/js/custom.min.js"></script>

  <!-- JS option by ketik 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
	  <script type="text/javascript">
      $(document).ready(function () {
        $('select').select2();
      });
  </script>-->
  <script type="text/javascript">
    $('.uas').hide();

    function ganti(id = 1) {
      if (id == 1) {
        $('.uts').show();
        $('.uas').hide();
      } else if (id == 2) {
        $('.uas').show();
        $('.uts').hide();
      }
    }
    $(document).ready(function() {
      let i = 1;
      //MODAL_UAS
      $('#add-more').click(function() {
        // var table = document.getElementById('#coba');
        var isi = `<div class="form-uas${i}">
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
</body>

</html>