<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
	$id= $_SESSION['id_pendaftar'];
	$sql = "SELECT * FROM `sekolah_asal` where id_pendaftar='$id'";
	$result = $mydb->query($sql);
	$row = $result->fetch_assoc();
	$sql2 = "SELECT * FROM `calon` where id_pendaftar='$id'";
	$result2 = $mydb->query($sql2);
	$row2 = $result2->fetch_assoc();
?>

	<div class="box-isi">
		<h3>Sekolah Asal</h3>
		</br>
		<form method="post" action="asalaksi.php?tipe=tambah" >
 			<div class="form-group">
 				 <label for="nama">Nama Asal Sekolah</label>
 				 <input type="text" class="form-control" name="nama_sekolah" Value="<?php echo $row['nama_sekolah']; ?>" required>
			</div>
			<div class="form-group">
                <label for="status">Status Asal Sekolah</label>
                <select class="form-control" name="status_sekolah" required>
					<option <?php if($row['status_sekolah']=="Negeri") echo 'selected'?> >Negeri</option>
    				<option <?php if($row['status_sekolah']=="Swasta") echo 'selected'?> >Swasta</option>
			 	</select>
            </div>
			<div class="form-group">
 				 <label for="alamat">Alamat Sekolah</label>
 				 <input type="text" class="form-control" name="alamat_sekolah" Value="<?php echo $row['alamat_sekolah']; ?>" required>
			</div>
			<div class="form-group">
 				 <label for="nama">Tahun Lulus</label>
 				 <input type="number" class="form-control" name="tahun_lulus" Value="<?php echo $row['tahun_lulus']; ?>" required max="2025" >
			</div>
			<div class="form-group">
 				 <label for="nama">No. Izasah</label>
 				 <input type="number" class="form-control" name="no_izasah" Value="<?php echo $row['no_izasah']; ?>" required>
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
