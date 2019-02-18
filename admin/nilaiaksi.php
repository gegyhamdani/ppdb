<?php	
	include 'nilaiclass.php';
	session_start();
	$nilai = new nilaiclass(); //--->Inisialisasi Object
	$nilai->setIdpendaftar($_GET['id_pendaftar']);
	$nilai->setNilai($_POST['indo'], $_POST['mtk'], $_POST['inggris'], $_POST['ipa']); //--->Pengaksesan Method
	
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET[tipe]);
	if($tipe =='tambah'){
		$sql = $nilai->save();
	}else if($tipe =='edit'){
		$sql = $nilai->update();
	}else if($tipe =='delete'){
		$nilai->setNrp($_GET[username]);
		$sql = $nilai->delete();
	}
	
	if ($mydb->query($sql) == TRUE) {
		header("Location: index.php?page=verivikasi");
	} else {
		echo "Terjadi kesalahan, silahkan periksa kembali data, atau panggil bagian teknisi";
	}

	$mydb->close();

?>

<br>
<a href="../index.php" class="btn btn-primary">Kembali</a>