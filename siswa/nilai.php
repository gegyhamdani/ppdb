<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
	$id= $_SESSION['id_pendaftar'];
	$sql = "SELECT * FROM `nilai` where id_pendaftar='$id'";
	$result = $mydb->query($sql);
	$row = $result->fetch_assoc();
	$sql2 = "SELECT * FROM `calon` where id_pendaftar='$id'";
	$result2 = $mydb->query($sql2);
	$row2 = $result2->fetch_assoc();
?>
		<div class="box-isi">	
			<h3>Data Nilai UN & Pilihan Peminatan</h3>
			</br>
			<form method="post" action="nilaiaksi.php?tipe=tambah" >
 			<div class="form-group">
 				 <label for="nama">Bahasa Indonesia</label>
 				 <input type="number" name="indo" class="form-control"  Value="<?php echo $row['indo']; ?>" required min="0" max="100">
			</div>
  			<div class="form-group">
 				 <label for="nama">Matematika</label>
 				 <input type="number" name="mtk" class="form-control"  Value="<?php echo $row['mtk']; ?>" required min="0" max="100">
			</div>
			<div class="form-group">
 				 <label for="nama">Bahasa Inggris</label>
 				 <input type="number" name="inggris" class="form-control"  Value="<?php echo $row['inggris']; ?>" required min="0" max="100">
			</div>
			<div class="form-group">
 				 <label for="nama">IPA</label>
 				 <input type="number" name="ipa" class="form-control"  Value="<?php echo $row['ipa']; ?>" required min="0" max="100">
			</div>
			<?php
			if ($row['id_pendaftar'] == TRUE ) {
				echo '<a href="" class="btn btn-warning disabled">Data Tersimpan</a>';
			} else if ($row2['status'] == "Belum Konfrimasi") {
				echo '<input name="save" type="submit" class="btn btn-success" value="Simpan">';
			} else if ($row2['status']== "Proses") {
	 			echo '<a href="" class="btn btn-warning disabled">Data sedang di proses</a>';
	 		} else if ($row2['status']== "Verifikasi") {
		 			echo '<a href="" class="btn btn-warning disabled">Data Sudah Di Verifikasi</a>';
		 	} else if ($row2['status']== "Diterima") {
		 			echo '<a href="" class="btn btn-warning disabled">Silahkan Lihat Hasil</a>';
		 	} else if ($row2['status']== "Ditolak") {
		 			echo '<a href="" class="btn btn-warning disabled">Silahkan Lihat Hasil</a>';
		 	}
	 		?> 
		</form>
	</div>
