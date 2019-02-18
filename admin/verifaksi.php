<?php	
	include 'verifclass.php';
	session_start();
	$verif = new verifclass(); //--->Inisialisasi Object//--->Pengaksesan Method
	$verif->setVerif($_POST['id_pendaftar'], $_POST['username'], $_POST['izasah'], $_POST['skhun'], $_POST['akte'], $_POST['kartu_keluarga'], $_POST['biaya'], $_POST['status']); //--->Pengaksesan Method
	
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET[tipe]);
	if($tipe =='tambah'){
		$sql = $verif->save();
	}else if($tipe =='edit'){
		$sql = $verif->update();
		$ca = $verif->tanggal();
	}else if($tipe =='delete'){
		$verif->setNrp($_GET[username]);
		$sql = $verif->delete();
	}
	
	if ($mydb->query($sql) == TRUE) {
		$mydb->query($ca);
		header("Location: index.php?page=verivikasi");
	} else {
		echo "Terjadi kesalahan, silahkan periksa kembali data, atau panggil bagian teknisi";
	}

	$mydb->close();

?>

<br>
<a href="index.php" class="btn btn-primary">Kembali</a>