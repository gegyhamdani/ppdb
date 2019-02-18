<?php	
	include 'tanggalclass.php';

	$tanggal = new tanggal(); //--->Inisialisasi Object
	$tanggal->setNo($_POST['no']); //--->Pengaksesan Method
	$tanggal->setNamatanggal($_POST['nama_tanggal']);
	$tanggal->setTanggal($_POST['tanggal']);
	$tanggal->setTanggalsms($_POST['tanggal_sms']);
	
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET['tipe']);
	if($tipe=='tambah'){
		$sql = $tanggal->save();	
	}else if($tipe=='edit'){
		$tanggal->setNo($_GET['no']);
		$sql = $tanggal->update();
	}else if($tipe=='delete'){
		$tanggal->setNo($_GET['no']);
		$sql = $tanggal->delete();	
	}
	
	
	if ($mydb->query($sql) == TRUE) {
		header("Location: index.php?page=tanggal");
	} else {
		echo "Terjadi kesalahan, silahkan periksa kembali data, atau panggil bagian teknisi";

	}

	$mydb->close();

?>

<br>