<?php	
	include 'verifclass.php';
	session_start();
	$verif = new verifclass(); //--->Inisialisasi Object//--->Pengaksesan Method
	
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET['tipe']);
	if($tipe =='tambah'){
		$sql = $verif->save();
	}else if($tipe =='edit'){
		$sql = $verif->update($_SESSION['id_pendaftar']);
		$ca = $verif->tanggal($_SESSION['id_pendaftar']);
	}else if($tipe =='delete'){
		$verif->setNrp($_GET[username]);
		$sql = $verif->delete();
	}
	
	if ($mydb->query($sql) == TRUE) {
		$mydb->query($ca);
		echo "<meta http-equiv='refresh' content='0.1 url=index.php'>";
	} else {
		echo "Terjadi kesalahan, silahkan periksa kembali data, atau panggil bagian teknisi";
	}

	$mydb->close();

?>