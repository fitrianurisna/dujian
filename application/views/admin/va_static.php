<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url(); ?>assets/admin/production/images/favicon.ico" type="image/ico" />

    <title>PROTIKA</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/mulse/css/bootstrap-select.css');?>">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
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
                <span>Welcome, 
                  <br><?= $this->session->userdata('nama')?></span>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url('C_admin/uts'); ?>"><i class="fa fa-edit"></i>Pendaftar Susulan UTS </span></a></li>
                  <li><a href="<?php echo base_url('C_uas'); ?>"><i class="fa fa-edit"></i>Pendaftar Susulan UAS </span></a></li>
                  <li><a href="<?php echo base_url('C_prt/prt'); ?>"><i class="fa fa-edit"></i>Pendaftar Remedial Teaching</span></a></li>
                  <li><a href="<?php echo base_url('C_admin/puts'); ?>"><i class="fa fa-credit-card"></i>Pembayaran UTS</span></a></li>
                  <li><a href="<?php echo base_url('C_uas/puas'); ?>"><i class="fa fa-credit-card"></i>Pembayaran UAS</span></a></li>
                  <li><a href="<?php echo base_url('C_prt/brt'); ?>"><i class="fa fa-credit-card"></i>Pembayaran Remedial Teaching</span></a></li>
                  <li><a href="<?php echo base_url('Ca_jadwal'); ?>"><i class="fa fa-archive"></i>Jadwal</span></a></li>
                  <li><a href="<?php echo base_url('Ca_adm'); ?>"><i class="fa fa-archive"></i>Admin</span></a></li>
                  <li><a href="<?php echo base_url('Ca_matkul'); ?>"><i class="fa fa-archive"></i>Mata kuliah</span></a></li>
                  </ul>
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
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url(); ?>assets/admin/production/images/" alt=""><?= $this->session->userdata('nama')?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="<?php echo base_url('Auth/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
          <div class="row" style="display: inline-block;" >
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
    <script type="text/javascript" src="<?php echo base_url('assets/mulse/js/jquery-3.4.1.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/mulse/js/bootstrap-select.js');?>"></script>
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
    <!-- bootstrap-datetimepicker -->    
    <script src="<?php echo base_url(); ?>assets/admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	
  </body>
</html>
