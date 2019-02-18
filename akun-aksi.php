<?php	
	include 'akun.php';
	error_reporting(0);
	ini_set('display_errors', 0);

	$akun = new akun(); //--->Inisialisasi Object
	$akun->setAkun($_POST['username'], $_POST['email'], $_POST['password'], $_POST['hak'], $_POST['tgl_daftar']); //--->Pengaksesan Method
	
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET['tipe']);
	if($tipe =='tambah'){
		$sql = $akun->save();
		$ca = $akun->savecalon();
	}
	
	if ($mydb->query($sql) == TRUE) {
		$mydb->query($ca);
		echo "<script>alert('Berhasil Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='0.1 url=index.php'>";
	} else {
		//print_r($mydb->error);
		//die();
		echo "<script>alert('Gagal Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='0.1 url=index.php'>";
	}

	$mydb->close();

?>

<br>