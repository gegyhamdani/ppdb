<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="logo.gif">

    <title>Administrasi Pembayaran</title>

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    <link href="style.css" rel="stylesheet">

  </head>

  <?php
    array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = '';
    if ($page == 'daftar') {
          include 'daftarsiswa.php' ;
    }
    if ($page == 'data') {
          include 'datasiswa.php' ;
    }
  ?>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top navcolor">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#" style="color: white;"><b>ADMINISTRASI PEMBAYARAN</b> Sekolah Menengah Pertama</a>
          <img src="logo.gif" width="4%" style="display: inline-block;">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a style="color:white;">Akun</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar nav-side-color">
          <ul class="nav navv nav-sidebar">
            <li><a href="index.php?"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
          </ul>
          <ul class="nav navv nav-sidebar">
            <li><a><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span>  Pendataan</a></li>
          </ul>
          <ul class="nav navv nav-side">
            <li><a href="index.php?page=daftar"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Daftar Siswa</a></li>
            <li><a href="index.php?page=data"><span class="glyphicon glyphicon-education" aria-hidden="true"></span> Data Siswa</a></li>
          </ul>
          <ul class="nav navv nav-sidebar">
            <li><a><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>  Data Master</a></li>
          </ul>
          <ul class="nav nav-side">
            <li><a href="#"><span class="fa fa-calculator" aria-hidden="true"></span> Jenis Pembayaran</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Periode</a></li>
            <li><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Kelas</a></li>
          </ul>
          <ul class="nav navv nav-sidebar">
            <li><a><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>  Laporan</a></li>
          </ul>
          <ul class="nav nav-side">
            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Laporan SPP</a></li>
            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Laporan PSB</a></li>
          </ul>
          <ul class="nav navv nav-sidebar">
            <li><a href="#"><i class="fa fa-cogs"></i> Pengaturan</a></li>
          </ul>
          <ul class="nav navv nav-sidebar">
            <li><a href="#"> <i class="fa fa-power-off"></i> Logout</a></li>
          </ul> 
        </div>
        <?php if(!$page):?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main con">
          <div class="col">
            <img src="logo.gif" width="20%">
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.siswa').DataTable();
      });
    </script>
  </body>
</html>