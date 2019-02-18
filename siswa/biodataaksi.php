<?php	
	include 'biodataclass.php';
	session_start();
	$bio = new biodataclass(); //--->Inisialisasi Object
	$bio->setBiodata($_SESSION['id_pendaftar'], $_POST['nisn'], $_POST['nama'],  $_POST['jeniskel'], $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['agama'], $_POST['alamat'], $_POST['anak_ke'], $_POST['jumlah_saudara'], $_POST['no_hp'], $_POST['nama_ayah'], $_POST['pndkk_ayah'], $_POST['pkrjn_ayah'], $_POST['pnghsln_ayah'], $_POST['nama_ibu'], $_POST['pndkk_ibu'], $_POST['pkrjn_ibu'], $_POST['pnghsln_ibu'], $_POST['no_hportu'], $_POST['nama_wali'], $_POST['pkrjn_wali'], $_POST['alamat_wali']); //--->Pengaksesan Method
	
	$mydb = new mysqli('localhost', 'root','','pkl-ppdb');
	
	$tipe = ($_GET['tipe']);
	if($tipe =='tambah'){
		$sql = $bio->save();
	}else if($tipe =='edit'){
		$sql = $bio->update();
	}else if($tipe =='delete'){
		$bio->setNrp($_GET[username]);
		$sql = $bio->delete();
	}
	
	if ($mydb->query($sql) == TRUE) {
		header("Location: index.php");
	} else {
		echo "Terjadi kesalahan, silahkan periksa kembali data, atau panggil bagian teknisi";
	}

	$mydb->close();

?>

<br>
<a href="index.php" class="btn btn-primary">Kembali</a>