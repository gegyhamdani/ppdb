<?php	
	include 'asalclass.php';
	session_start();
	$asal = new asalclass(); //--->Inisialisasi Object
	$asal->setAsal($_SESSION['id_pendaftar'], $_POST['nama_sekolah'], $_POST['status_sekolah'], $_POST['alamat_sekolah'], $_POST['tahun_lulus'], $_POST['no_izasah']); //--->Pengaksesan Method
	
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET['tipe']);
	if($tipe =='tambah'){
		$sql = $asal->save();
	}else if($tipe =='edit'){
		$asal->setasal($_POST[username]);
		$sql = $asal->update();
	}else if($tipe =='delete'){
		$asal->setNrp($_GET[username]);
		$sql = $asal->delete();
	}
	
	if ($mydb->query($sql) == TRUE) {
		header("Location: index.php");
	} else {
		echo "Terjadi kesalahan, silahkan periksa kembali data, atau panggil bagian teknisi";
	}

	$mydb->close();

?>

<br>
<a href="../index.php" class="btn btn-primary">Kembali</a>