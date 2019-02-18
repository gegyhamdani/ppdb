<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
	$id= $_SESSION['id_pendaftar'];
	$status = "SELECT * from `calon` where id_pendaftar='$id'";
	$sql = "SELECT * FROM `biodata` where id_pendaftar='$id'";
	$sql2 = "SELECT * FROM `sekolah_asal` where id_pendaftar='$id'";
	$sql3 = "SELECT * FROM `nilai` where id_pendaftar='$id'";
	$result = $mydb->query($sql);
	$row = $result->fetch_assoc();
	$result2 = $mydb->query($sql2);
	$row2 = $result2->fetch_assoc();
	$result3 = $mydb->query($sql3);
	$row3 = $result3->fetch_assoc();
	$result4 = $mydb->query($status);
	$row4 = $result4->fetch_assoc();
?>

<div class="kotak">
<div class="box-isi2">
	<div class="tabel table-responsive">     
		<table class="table table-hover">
		<h2>Biodata Calon Siswa</h2>
		<tr>
			<td>ID Pendaftaran</td>
			<td><?php echo $row['id_pendaftar']; ?><td>
		</tr>
		<tr>
			<td>Nisn</td>
			<td><?php echo $row['nisn']; ?><td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><?php echo $row['nama']; ?><td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?php echo $row['jeniskel']; ?><td>
		</tr>
		<tr>
			<td>Tempat Lahir</td>
			<td><?php echo $row['tempat_lahir']; ?><td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td>
			<td><?php echo $row['tanggal_lahir']; ?><td>
		</tr>
		<tr>
			<td>Agama</td>
			<td><?php echo $row['agama']; ?><td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><?php echo $row['alamat']; ?><td>
		</tr>
		<tr>
			<td>Anak-Ke</td>
			<td><?php echo $row['anak_ke']; ?><td>
		</tr>
		<tr>
			<td>Jumlah Saudara</td>
			<td><?php echo $row['jumlah_saudara']; ?><td>
		</tr>
		<tr>
			<td>No. Telepon Calon Siswa</td>
			<td><?php echo $row['no_hp']; ?><td>
		</tr>
		<tr>
			<td>Nama Ayah</td>
			<td><?php echo $row['nama_ayah']; ?><td>
		</tr>
		<tr>
			<td>Pendidikan Ayah	</td>
			<td><?php echo $row['pndkk_ayah']; ?><td>
		</tr>
		<tr>
			<td>Pekerjaan Ayah</td>
			<td><?php echo $row['pkrjn_ayah']; ?><td>
		</tr>
		<tr>
			<td>Penghasilan Ayah</td>
			<td><?php echo $row['pnghsln_ayah']; ?><td>
		</tr>
		<tr>
			<td>Nama Ibu</td>
			<td><?php echo $row['nama_ibu']; ?><td>
		</tr>
		<tr>
			<td>Pendidikan Ibu</td>
			<td><?php echo $row['pndkk_ibu']; ?><td>
		</tr>
		<tr>
			<td>Pekerjaan Ibu</td>
			<td><?php echo $row['pkrjn_ibu']; ?><td>
		</tr>
		<tr>
			<td>Penghasilan Ibu</td>
			<td><?php echo $row['pnghsln_ibu']; ?><td>
		</tr>
		<tr>
			<td>No Handphone Orang Tua</td>
			<td><?php echo $row['no_hportu']; ?><td>
		</tr>
	</table>
	</div>
	</div>
	<div class="box-isi2" style="margin-left: 2%;">
	<div class="tabel table-responsive">     
		<table class="table table-hover">
		<h2>Sekolah Asal & Nilai</h2>
		<tr>
			<td>Asal Sekolah</td>
			<td><?php echo $row2['nama_sekolah']; ?><td>
		</tr>
		<tr>
			<td>Status Sekolah</td>
			<td><?php echo $row2['status_sekolah']; ?><td>
		</tr>
		<tr>
			<td>Alamat Sekolah</td>
			<td><?php echo $row2['alamat_sekolah']; ?><td>
		</tr>
		<tr>
			<td>Tahun Lulus</td>
			<td><?php echo $row2['tahun_lulus']; ?><td>
		</tr>
		<tr>
			<td>No Izasah</td>
			<td><?php echo $row2['no_izasah']; ?><td>
		</tr>
		<tr>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Nilai Indonesia</td>
			<td><?php echo $row3['indo']; ?><td>
		</tr>
		<tr>
			<td>Nilai Matematika</td>
			<td><?php echo $row3['mtk']; ?><td>
		</tr>
		<tr>
			<td>Nilai Inggris</td>
			<td><?php echo $row3['inggris']; ?><td>
		</tr>
		<tr>
			<td>Nilai Ipa</td>
			<td><?php echo $row3['ipa']; ?><td>
		</tr>
	</table>
	</div>
	<script type="text/javascript">
		function komfrimasi() {
  		return confirm('Apakah anda yakin akan Konfrimasi Data ini?');
	}
	</script>
	<?php 
		if($row['id_pendaftar'] == FALSE || $row2['id_pendaftar'] == FALSE || $row3['id_pendaftar'] == FALSE || $row4['id_pendaftar'] == FALSE){
			echo '<a class="btn btn-warning disabled">Silahkan Isi Semua Data Terlebih Dahulu !</a>';
		} else if ($row4['status'] == "Belum Konfrimasi") {
			echo '<a href="verifaksi.php?tipe=edit" class="btn btn-primary" onclick="return komfrimasi()" >Konfrimasi</a>';
		} else if ($row4['status']== "Proses") {
	 		echo '<a class="btn btn-warning disabled">Data sedang di proses</a>';
	 		echo " ";
	 		?><a href="cetak_daftar.php?cetak=<?php echo $row['id_pendaftar'];?>" class="btn btn-default">Cetak Bukti Pendaftaran</a>
	 	<?php 
	 	} else if ($row4['status']== "Verifikasi") {
	 			echo '<a href="" class="btn btn-warning disabled">Data Sudah Di Verifikasi</a>';
	 	} else if ($row4['status']== "Diterima") {
	 			echo '<a href="" class="btn btn-warning disabled">Silahkan Lihat Hasil</a>';
	 	} else if ($row4['status']== "Ditolak") {
	 			echo '<a href="" class="btn btn-warning disabled">Silahkan Lihat Hasil</a>';
	 	}
	 ?>
	</div>
	</div>