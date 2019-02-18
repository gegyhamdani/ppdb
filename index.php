<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="logo.gif">

  <title>PPDB SMA MATHLAUL ANWAR</title>

  <link rel="stylesheet" href="data/css/bootstrap.min.css">
  <link href="data/css/font-awesome.min.css" rel="stylesheet">
  <link href="data/css/sticky-footer-navbar.css" rel="stylesheet">
  <link rel="stylesheet" href="data/css/jquery.dataTables.css">
  <link rel="stylesheet" href="data/css/dataTables.bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
</head>

<body onload="startTime()">
  <?php
  array_key_exists('page', $_GET) ? $page = $_GET['page'] : $page = '';
  ?>
  <ul class="topnavv">
    <div class="navkiri">
      <li><a><img src="data/logo.gif" height="120%"></a></li>
      <li><a style="margin-left: -20px;"><b>PPDB SMA Mathlaul Anwar</b></a></li>
    </div>
    <li class="right"><a>Kontak Kami : (022) 5415267</a></li>
  </ul>

  <ul class="topnav">
    <div class="leftnav">
      <li><a href="index.php?">Home</a></li>
      <li><a href="index.php?page=prosedur">Prosedur Pendaftaran</a></li>
      <li><a href="index.php?page=hasil">Hasil Seleksi</a></li>
      <li><a href="#contact">Kontak</a></li>
      <li class="right"><a id="txt"></a></li>
    </div>
  </ul>
  <?php
        if ($page == 'hasil') {
          include 'hasil.php' ;
        } 
        if ($page == 'prosedur') {
          include 'prosedur.php';
        }
  ?>
  <?php if(!$page):?> 
  <div class="content-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/32.jpg" alt="Image">
                <div class="carousel-caption">
                </div>      
              </div>

              <div class="item">
                <img src="img/ppdb.jpg" alt="Image">
                <div class="carousel-caption">
                </div>      
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <h3 style="margin:2% 0 4% 0; color : #006638;">Login</h3>
            <div class="modal-body">
              <div class="text-center">
                <div role="tabpanel" class="login-tab">
                <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
                    <li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Daftar</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active text-center" id="home">
                      &nbsp;&nbsp;
                      <form method='POST' action='act-login.php?op=in'>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i>
                            </div>
                            <input type="type" name='username' class="form-control" placeholder="Masukan Username" required />
                          </div>                    
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-lock"></i>
                            </div>
                            <input type="password"  name='password' class="form-control" placeholder="Password" required />
                          </div>
                          <span class="help-block has-error" id="password-error"></span>                      
                        </div>
                        <input type="submit" id="login_btn" class="btn btn-block bt-login" value="Login">
                        <div class="clearfix"></div>
                        <div class="login-modal-footer">
                          <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                              <i class="fa fa-check"></i>
                              <a href="javascript:;" class="signup-tab"> Daftar </a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="profile">
                    &nbsp;&nbsp;
                      <div class="clearfix"></div>
                      <form  method='POST' action='akun-aksi.php?tipe=tambah' >
                        <div class="form-group has-feedback">
                          <input name="username" type="text" class="form-control" placeholder="Username" required/>
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input name="email" type="email" class="form-control" placeholder="Email" required/>
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input name="password" type="password" class="form-control" placeholder="Password" required/>
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                          <input name="tgl_daftar" type="text" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('m/d/y h:ia');?>"/ readonly hidden>
                        </div>
                        <input type="submit" id="register_btn" class="btn btn-block bt-login" value="Register">
                          <div class="clearfix"></div>
                          <div class="login-modal-footer">
                            <div class="row">
                              <div class="col-xs-4 col-sm-4 col-md-4">
                                <i class="fa fa-check"></i>
                                <a href="javascript:;" class="signin-tab"> Login </a>
                              </div>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
      </div>

      <div class="container text-center">    
        <h2 style="color : #006638;">SMAS Mathlaul Anwar</h3>
        <br>
        <div class="row">
          <div class="col-sm-3">
            <img src="img/1.jpg" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3"> 
            <img src="img/2.jpg" class="img-responsive" style="width:100%" alt="Image">
          </div>
          <div class="col-sm-3">
            <div class="well">
              <p style="font-size: 16px; padding-top: 8px;">Kurikulum : KTSP</p>
            </div>
            <br>
            <div class="well">
              <p style="font-size: 16px; padding-top: 8px;">Waktu Penyelenggaraan : Pagi</p>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="well">
              <p style="font-size: 16px; padding-top: 8px;">Akreditasi : A</p>
            </div>
            <br>
            <div class="well">
              <p style="font-size: 16px; padding-top: 8px;">Berdiri Sejak : 1981</p>
            </div>
          </div>  
        </div>
        <hr>
      </div>

      <div class="container">    
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header text-center" style="color: #4C4448;"><b>PPDB (Penerimaan Peserta Didik Baru)</b> SMA MATHLAUL ANWAR</h3>
            <div class="panel panel-default">
              <div class="panel-heading"><p>SAMBUTAN</p></div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#menu1">PPDB</a></li>
                  <li><a data-toggle="tab" href="#menu2">Syarat - Syarat Pendaftaran</a></li>
                  <li><a data-toggle="tab" href="#menu3">Biaya Pendaftaran</a></li>
                </ul>

                <div class="tab-content">
                  <div id="menu1" class="tab-pane fade in active">
                    <h3>PPDB</h3>
                    <p>PPDB Tahun 2017-2018 SMA Mathlaul Anwar<p>
                  </div>
                  <div id="menu2" class="tab-pane fade">
                    <h3>Syarat - Syarat Pendaftaran</h3>
                    <p>Fotocopy Izasah 2 Lembar, Legalisir</p>
                    <p>Fotocopy SKHUN 2 Lembar, Legalisir</p>
                    <p>Fotocopy Akta Kelahiran 1 Lembar</p>
                    <p>Fotocopy Kartu Keluarga 1 Lembar</p>
                  </div>
                  <div id="menu3" class="tab-pane fade">
                    <h3>Biaya Pendaftaran</h3>
                    <p>Biaya Penerimaan Siswa Baru Rp. 75.000 </p>
                  </div>
                </div>
              </div>
              <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
          </div>
        </div>  
      </div>
      <br>
    </div>
  </div>

  <?php endif; ?>

  <footer class="container-fluid text-center" style="background-color: #FAFAFA; border-top: 1px solid rgba(0,0,0,0.2);">
    <p>&copy; 2017. SMA S Mathlaul Anwar. All Right Reserved.</p>
  </footer>


  <script src="data/js/jquery.min.js"></script>
  <script src="data/js/bootstrap.min.js"></script>
  <script src="data/js/jquery.dataTables.js" type="text/javascript"></script>
  <script>
      $(document).ready(function(){
        $(document).on('click','.signup-tab',function(e){
           e.preventDefault();
           $('#signup-taba').tab('show');
        }); 
  
        $(document).on('click','.signin-tab',function(e){
           e.preventDefault();
           $('#signin-taba').tab('show');
        });
      }
  </script>
  <script>
    $(document).ready(function(){
        $('.siswa').DataTable();
      });

  </script>

  <script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      h + ":" + m + ":" + s;
     var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
  </script>

</body>
</html>
