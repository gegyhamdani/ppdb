<?php
session_start();
//cek apakah user sudah login
if($_SESSION['status'] !="login"){
    header("location:../index.php");
}
//cek level user
if($_SESSION['hak_akses']!="Siswa"){
    die("Anda bukan calon Siswa");//jika bukan admin jangan lanjut
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
  <link rel="icon" href="../logo.gif">

  <title>PPDB SMA MATHLAUL ANWAR</title>

  <link rel="stylesheet" href="../data/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <?php
  array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = '';
  ?>
  <ul class="topnavv">
    <div class="navkiri">
      <li><a><img src="../data/logo.gif" height="120%"></a></li>
      <li><a style="margin-left: -20px;"><b>PPDB SMA Mathlaul Anwar</b></a></li>
    </div>
    <li class="right"><a>Kontak Kami : (022) 5415267</a></li>
  </ul>

  <ul class="topnav">
    <div class="leftnav">
      <li><a style="text-transform: uppercase;">Hallo <?php echo $_SESSION['username'];?></a></li>
      <li class="right"><a href="../act-logout.php"><i class="icon_key_alt"></i> Log Out</a></li>
    </div>
  </ul>
  <div class="content-main">
    <div class="container">
      <div class="box-body">
        <h3>Data Calon Siswa</h3>
        </br>
        <a href="index.php?page=biodata" role="button" class="btn btn-primary buton"><span class="glyphicon glyphicon-user gi-2x" aria-hidden="true"></span><br>Biodata</a>
        <a href="index.php?page=asal" role="button" class="btn btn-info buton"><span class="glyphicon glyphicon-education gi-2x" aria-hidden="true"></span><br>Sekolah Asal</a>
        <a href="index.php?page=nilai" role="button" class="btn btn-warning buton"><span class="glyphicon glyphicon-signal gi-2x" aria-hidden="true"></span><br>Nilai UN</a>
        <a href="index.php?page=vertifikasi" role="button" class="btn btn-success buton"><span class="glyphicon glyphicon-check gi-2x" aria-hidden="true"></span><br>Verifikasi</a>
      </div>
      </br>
      <?php
        if ($page == 'biodata') {
          include 'biodata.php' ;
        }
        if ($page == 'asal') {
          include 'asal.php' ;
        }
        if ($page == 'nilai') {
          include 'nilai.php' ;
        }
        if ($page == 'vertifikasi') {
          include 'vertifikasi.php' ;
        }
      ?>
      <?php if(!$page):?>
      <?php endif; ?>
      </br>
    </div>
  </div>
  <footer class="container-fluid text-center" style="background-color: #FAFAFA; border-top: 1px solid rgba(0,0,0,0.2);">
    <p>&copy; 2017. SMA S Mathlaul Anwar. All Right Reserved.</p>
  </footer>


  <script src="../data/js/jquery.min.js"></script>
  <script src="../data/js/bootstrap.min.js"></script>

</body>
</html>
