<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
	$id= $_SESSION['id_pendaftar'];
	$sql = "SELECT * FROM `biodata` where id_pendaftar='$id'";
	$result = $mydb->query($sql);
	$row = $result->fetch_assoc();
	$sql2 = "SELECT * FROM `calon` where id_pendaftar='$id'";
	$result2 = $mydb->query($sql2);
	$row2 = $result2->fetch_assoc();
?>

	<div class="box-isi">
		<h3>Data Pribadi</h3>
		</br>
		<form method="post" action="biodataaksi.php?tipe=tambah" enctype="multipart/form-data">
 			<div class="form-group">
 				 <label for="nama">NISN</label>
 				 <input type="text" class="form-control" name="nisn" Value="<?php echo $row['nisn']; ?>" required 
				placeholder="Masukan NISN">
			</div>
  			<div class="form-group">
 				 <label for="nama">Nama Peserta Didik (Lengkap)</label>
 				 <input type="text" class="form-control" name="nama" Value="<?php echo $row['nama']; ?>" required minlength="4" maxlength="30" placeholder="Masukan Nama">
			</div>
			<div class="form-group">
                <label for="nama">Jenis Kelamin</label>
                <select class="form-control" name="jeniskel" required>
					<option <?php if($row['jeniskel']=="Laki-Laki") echo 'selected'?> >Laki-Laki</option>
    				<option <?php if($row['jeniskel']=="Perempuan") echo 'selected'?> >Perempuan</option>
			 	</select>
            </div>
			<div class="form-group">
 				 <label for="nama">Tempat Lahir</label>
 				 <input type="text" class="form-control" name="tempat_lahir" Value="<?php echo $row['tempat_lahir']; ?>" required 
				placeholder="Masukan Tempat Lahir">
			</div>
			<div class="form-group">
 				 <label for="nama">Tanggal Lahir</label>
 				 <input type="date" class="form-control" name="tanggal_lahir" Value="<?php echo $row['tanggal_lahir']; ?>" required>
			</div>
			<div class="form-group">
                <label for="nama">Agama</label>
                <select class="form-control" name="agama" required>
					<option <?php if($row['agama']=="Islam") echo 'selected'?> >Islam</option>
    				<option <?php if($row['agama']=="Kristen Katolik") echo 'selected'?> >Kristen Katolik</option>
    				<option <?php if($row['agama']=="Kristen Protestan") echo 'selected'?> >Kristen Protestan</option>
    				<option <?php if($row['agama']=="Hindu") echo 'selected'?> >Hindu</option>
    				<option <?php if($row['agama']=="Budha") echo 'selected'?> >Budha</option>
    				<option <?php if($row['agama']=="Konghucu") echo 'selected'?> >Konghucu</option>
			 	</select>
            </div>
			<div class="form-group">
 				 <label for="alamat">Alamat Rumah Peserta Didik</label>
 				 <textarea class="form-control" rows="4" cols="50" name="alamat" required maxlength="50" placeholder="Masukan Alamat"><?php echo $row['alamat']; ?></textarea>
			</div>
			<div class="form-group">
 				 <label for="alamat">Anak ke</label>
 				 <input type="number" class="form-control" name="anak_ke" Value="<?php echo $row['anak_ke']; ?>" required placeholder="Anak Ke" min="1" max="12">
			</div>
			<div class="form-group">
 				 <label for="alamat">Jumlah Saudara</label>
 				 <input type="number" class="form-control" name="jumlah_saudara" Value="<?php echo $row['jumlah_saudara']; ?>" placeholder="Jumlah Saudara" required min="0" max="12">
			</div>
			<div class="form-group">
 				 <label for="alamat">No. Handphone Peserta Didik</label>
 				 <input type="number" class="form-control" name="no_hp" Value="<?php echo $row['no_hp']; ?>" placeholder="No Handphone"   min="1" max="99999999999999" required>
			</div>
			</br>
			<h3>Data Orang Tua</h3>
			</br>
 			<div class="form-group">
 				 <label for="nama">Nama Ayah</label>
 				 <input type="text" class="form-control" name="nama_ayah" Value="<?php echo $row['nama_ayah']; ?>" required minlength="4" maxlength="30" placeholder="Masukan Nama Ayah">
			</div>
			<div class="form-group">
                <label for="nama">Pendidikan Ayah</label>
                <select class="form-control" name="pndkk_ayah" required>
					<option <?php if($row['pndkk_ayah']=="SD") echo 'selected'?> >SD</option>
    				<option <?php if($row['pndkk_ayah']=="SMP") echo 'selected'?> >SMP</option>
    				<option <?php if($row['pndkk_ayah']=="SMA") echo 'selected'?> >SMA</option>
    				<option <?php if($row['pndkk_ayah']=="SMK") echo 'selected'?> >SMK</option>
    				<option <?php if($row['pndkk_ayah']=="D3") echo 'selected'?> >D3</option>
    				<option <?php if($row['pndkk_ayah']=="D4") echo 'selected'?> >D4</option>
    				<option <?php if($row['pndkk_ayah']=="S1") echo 'selected'?> >S1</option>
    				<option <?php if($row['pndkk_ayah']=="S2") echo 'selected'?> >S2</option>
    				<option <?php if($row['pndkk_ayah']=="S3") echo 'selected'?> >S3</option>
			 	</select>
            </div>
            <div class="form-group">
                <label for="nama">Pekerjaan Ayah</label>
                <select class="form-control" name="pkrjn_ayah" required>
					<option <?php if($row['pkrjn_ayah']=="PNS") echo 'selected'?> >PNS</option>
    				<option <?php if($row['pkrjn_ayah']=="Wirausaha") echo 'selected'?> >Wirausaha</option>
    				<option <?php if($row['pkrjn_ayah']=="TNI/Polri") echo 'selected'?> >TNI/Polri</option>
    				<option <?php if($row['pkrjn_ayah']=="Karyawan Swasta") echo 'selected'?> >Karyawan Swasta</option>
    				<option <?php if($row['pkrjn_ayah']=="Buruh") echo 'selected'?> >Buruh</option>
    				<option <?php if($row['pkrjn_ayah']=="Tani") echo 'selected'?> >Tani</option>
    				<option <?php if($row['pkrjn_ayah']=="Nelayan") echo 'selected'?> >Nelayan</option>
    				<option <?php if($row['pkrjn_ayah']=="Lain-Lain") echo 'selected'?> >Lain-Lain</option>
			 	</select>
            </div>
			<div class="form-group">
 				 <label for="nama">Penghasilan Ayah</label>
 				 <input type="number" class="form-control" name="pnghsln_ayah" Value="<?php echo $row['pnghsln_ayah']; ?>" required>
			</div>
			<div class="form-group">
 				 <label for="nama">Nama Ibu</label>
 				 <input type="text" class="form-control" name="nama_ibu" Value="<?php echo $row['nama_ibu']; ?>" required minlength="4" maxlength="30" placeholder="Masukan Nama Ibu">
			</div>
			<div class="form-group">
                <label for="nama">Pendidikan Ibu</label>
                <select class="form-control" name="pndkk_ibu" required>
					<option <?php if($row['pndkk_ibu']=="SD") echo 'selected'?> >SD</option>
    				<option <?php if($row['pndkk_ibu']=="SMP") echo 'selected'?> >SMP</option>
    				<option <?php if($row['pndkk_ibu']=="SMA") echo 'selected'?> >SMA</option>
    				<option <?php if($row['pndkk_ibu']=="SMK") echo 'selected'?> >SMK</option>
    				<option <?php if($row['pndkk_ibu']=="D3") echo 'selected'?> >D3</option>
    				<option <?php if($row['pndkk_ibu']=="D4") echo 'selected'?> >D4</option>
    				<option <?php if($row['pndkk_ibu']=="S1") echo 'selected'?> >S1</option>
    				<option <?php if($row['pndkk_ibu']=="S2") echo 'selected'?> >S2</option>
    				<option <?php if($row['pndkk_ibu']=="S3") echo 'selected'?> >S3</option>
			 	</select>
            </div>
            <div class="form-group">
                <label for="nama">Pekerjaan Ibu</label>
                <select class="form-control" name="pkrjn_ibu" required>
					<option <?php if($row['pkrjn_ibu']=="PNS") echo 'selected'?> >PNS</option>
    				<option <?php if($row['pkrjn_ibu']=="Wirausaha") echo 'selected'?> >Wirausaha</option>
    				<option <?php if($row['pkrjn_ibu']=="TNI/Polri") echo 'selected'?> >TNI/Polri</option>
    				<option <?php if($row['pkrjn_ibu']=="Karyawan Swasta") echo 'selected'?> >Karyawan Swasta</option>
    				<option <?php if($row['pkrjn_ibu']=="Buruh") echo 'selected'?> >Buruh</option>
    				<option <?php if($row['pkrjn_ibu']=="Tani") echo 'selected'?> >Tani</option>
    				<option <?php if($row['pkrjn_ibu']=="Nelayan") echo 'selected'?> >Nelayan</option>
    				<option <?php if($row['pkrjn_ibu']=="Ibu Rumah Tangga") echo 'selected'?> >Ibu Rumah Tangga</option>
    				<option <?php if($row['pkrjn_ibu']=="Lain-Lain") echo 'selected'?> >Lain-Lain</option>
			 	</select>
            </div>
			<div class="form-group">
 				 <label for="nama">Penghasilan Ibu</label>
 				 <input type="number" class="form-control" name="pnghsln_ibu" Value="<?php echo $row['pnghsln_ibu']; ?>">
			</div>
			<div class="form-group">
 				 <label for="nama">No Handphone Orang Tua (Salah Satu)</label>
 				 <input type="number" class="form-control" name="no_hportu" Value="<?php echo $row['no_hportu']; ?>" required placeholder="No Handphone Orang Tua">
			</div>
			</br>
			<h3>Data Wali</h3>
			</br>
			<div class="form-group">
 				 <label for="nama">Nama Wali</label>
 				 <input type="text" class="form-control" name="nama_wali" Value="<?php echo $row['nama_wali']; ?>" minlength="4" maxlength="30" placeholder="Masukan Nama Wali">
			</div>
            <div class="form-group">
                <label for="nama">Pekerjaan Wali</label>
                <select class="form-control" name="pkrjn_wali">
                	<option <?php if($row['pkrjn_ayah']=="---") echo 'selected'?> >---</option>
					<option <?php if($row['pkrjn_ayah']=="PNS") echo 'selected'?> >PNS</option>
    				<option <?php if($row['pkrjn_ayah']=="Wirausaha") echo 'selected'?> >Wirausaha</option>
    				<option <?php if($row['pkrjn_ayah']=="TNI/Polri") echo 'selected'?> >TNI/Polri</option>
    				<option <?php if($row['pkrjn_ayah']=="Karyawan Swasta") echo 'selected'?> >Karyawan Swasta</option>
    				<option <?php if($row['pkrjn_ayah']=="Buruh") echo 'selected'?> >Buruh</option>
    				<option <?php if($row['pkrjn_ayah']=="Tani") echo 'selected'?> >Tani</option>
    				<option <?php if($row['pkrjn_ayah']=="Nelayan") echo 'selected'?> >Nelayan</option>
    				<option <?php if($row['pkrjn_ayah']=="Lain-Lain") echo 'selected'?> >Lain-Lain</option>
			 	</select>
            </div>
            <div class="form-group">
 				 <label for="alamat">Alamat Wali</label>
 				 <textarea class="form-control" rows="4" cols="50" name="alamat_wali" maxlength="50" placeholder="Masukan Alamat Wali"><?php echo $row['alamat']; ?></textarea>
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
