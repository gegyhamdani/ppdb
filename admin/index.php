<?php
session_start();
//cek apakah user sudah login
if($_SESSION['status'] !="login"){
    header("location:../index.php");
}
//cek level user
if($_SESSION['hak_akses']!="Admin"){
    die("Anda bukan admin");//jika bukan admin jangan lanjut
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="icon" href="../logo.gif">

    <title>PPDB SMA MATHLAUL ANWAR</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <!-- owl carousel -->
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <?php
    array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = '';
  ?>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">PPDB <span class="lite">SMA MATHLAUL ANWAR</span></a>
            <!--logo end-->
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo $_SESSION['username'];?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="../act-logout.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu ">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_profile "></i>
                          <span>Data PPDB</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <!--<li><a class="" href="form_component.html">Tambah Siswa</a></li>-->                          
                          <li><a class="" href="index.php?page=data">Data Pendaftar</a></li>
                          <li><a class="" href="index.php?page=diterima">Diterima</a></li>
                          <li><a class="" href="index.php?page=ditolak">Ditolak</a></li>
                          <li><a class="" href="index.php?page=verivikasi">Verifikasi Calon Siswa</a></li>
                          <li><a class="" href="index.php?page=sudahvertif">Cetak Kartu Ujian</a></li>
                          <li><a class="" href="index.php?page=nilaitest">Input Nilai Test</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt   "></i>
                          <span>Laporan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="index.php?page=statistik">Statistik</a></li>
                          <li><a class="" href="index.php?page=pendaftar">Pendaftar</a></li>
                          <li><a class="" href="index.php?page=biaya">Biaya Pendaftaran</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt   "></i>
                          <span>Follow Up</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="index.php?page=keluar">Kotak Keluar</a></li>
                          <li><a class="" href="index.php?page=terkirim">Kotak Terkirim</a></li>
                      </ul>
                  </li>
                  <!--<li                   <!--<li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_floppy  "></i>
                          <span>Data Master</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="index.php?page=pendidikan">Pendidikan</a></li>                          
                          <li><a class="" href="index.php?page=pekerjaan">Pekerjaan</a></li>
                          <li><a class="" href="index.php?page=peminatan">Peminatan</a></li>
                          <li><a class="" href="index.php?page=agama">Agama</a></li>
                      </ul>
                  </li>-->
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tools  "></i>
                          <span>Pengaturan</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="index.php?page=akun">Akun</a></li>
                          <li><a class="" href="index.php?page=tanggal">Tanggal</a></li>
                      </ul>
                  </li>
                  
                   

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <?php
        if ($page == 'data') {
          include 'data.php' ;
        }
        if ($page == 'editdata') {
          include 'editdata.php' ;
        }
        if ($page == 'tanggaledit') {
          include 'tanggaledit.php' ;
        }
        if ($page == 'diterima') {
          include 'diterima.php' ;
        }
        if ($page == 'ditolak') {
          include 'ditolak.php' ;
        }
        if ($page == 'verivikasi') {
          include 'verifikasi.php' ;
        }
        if ($page == 'nilaitest') {
          include 'nilaitest.php' ;
        }
        if ($page == 'pendidikan') {
          include 'pendidikan.php' ;
        }
        if ($page == 'pekerjaan') {
          include 'pekerjaan.php' ;
        }
        if ($page == 'peminatan') {
          include 'peminatan.php' ;
        }
        if ($page == 'agama') {
          include 'agama.php' ;
        }
        if ($page == 'akun') {
          include 'akun.php' ;
        }
        if ($page == 'tanggal') {
          include 'tanggal.php' ;
        }
        if ($page == 'statistik') {
          include 'statistik.php' ;
        }
        if ($page == 'pendaftar') {
          include 'pendaftar.php' ;
        }
        if ($page == 'biaya') {
          include 'biaya.php';
        }
        if ($page == 'verifdetail') {
          include 'verifdetail.php' ;
        }
        if ($page == 'nilaidetail') {
          include 'nilaitestdetail.php' ;
        } 
        if ($page == 'sudahvertif') {
          include 'sudahvertif.php' ;
        }
         if ($page == 'keluar') {
          include 'keluar.php' ;
        }
         if ($page == 'terkirim') {
          include 'terkirim.php' ;
        }
      ?>
      <?php if(!$page):?> 
      <!--main content start-->
      <?php 
      $mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
      $pendaftar = "SELECT count(*) as jumlah FROM calon";
      $verif = "SELECT count(*) as jumlah FROM calon WHERE status='Proses'";
      $result = $mydb->query($pendaftar);
      $result2 = $mydb->query($verif);
      $row = $result->fetch_assoc();
      $row2 = $result2->fetch_assoc();
      ?>
      <section id="main-content">
          <section class="wrapper">            
            <!--overview start-->
		        <div class="row">
				      <div class="col-lg-12">
					     <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					     <ol class="breadcrumb">
						    <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						    <li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					     </ol>
				      </div>
			       </div>

             <div class="row">
              <div class="col-lg-12">
                <div class="kol">
                  <img src="../data/logo.gif" width="20%">
                </div>
              </div>
            </div>

            <hr>
              
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">     
              </div><!--/.col-->
				      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="index.php?page=data" class="">
					       <div class="info-box blue-bg">
						       <i class="fa fa-user"></i>
						       <h3>Pendaftar</h3>
                   <h3 class="text-center"><?php echo $row['jumlah']; ?></h3>				
					       </div><!--/.info-box-->		
                </a>	
				      </div><!--/.col-->
				
				      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <a href="index.php?page=verivikasi" class="">
					       <div class="info-box brown-bg">
						      <i class="fa fa-users"></i>
                  <h3>Belum Verifikasi</h3>
                  <h3 class="text-center"><?php echo $row2['jumlah']; ?></h3>			
				          </div><!--/.info-box-->		
                </a>	
				      </div><!--/.col-->
            <?php endif; ?>
          <div class="text-right">
          <div class="credits">

                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->
  

    <!-- javascripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="js/jquery.dataTables.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="chart/Chart.bundle.js"></script>
    <script>
    $(document).ready(function(){
        $('.siswa').DataTable();
      });

    </script>
  </body>
</html>
