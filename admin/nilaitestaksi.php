<?php	
	include 'nilaitestclass.php';
	$nilai = new nilaitestclass(); //--->Inisialisasi Object
	$nilai->setNilaitest($_POST['id_pendaftar'], $_POST['indo_ujian'], $_POST['mtk_ujian'], $_POST['ipa_ujian'], $_POST['inggris_ujian']); //--->Pengaksesan Method
	$nilai->setRata();
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET[tipe]);
	if($tipe =='tambah'){
		$sql = $nilai->save();
		$ganti = $nilai->status();
		$sms = $nilai->sms();
	}else if($tipe =='edit'){
		$nilai->setnilai($_POST[username]);
		$sql = $nilai->update();
	}else if($tipe =='delete'){
		$nilai->setNrp($_GET[username]);
		$sql = $nilai->delete();
	}
	
	if ($mydb->query($sql) == TRUE) {
		$mydb->query($ganti);
		$mydb->query($sms);
		header("Location: index.php?page=nilaitest");
	} else {
		echo "Terjadi kesalahan, silahkan periksa kembali data, atau panggil bagian teknisi";
	}

	$mydb->close();

?>

<br>
<a href="index.php" class="btn btn-primary">Kembali</a>