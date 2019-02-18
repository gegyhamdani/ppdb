<div class="form-group">
 				 <label for="foto">Foto 3x4 (Tidak lebih dari 1mb)</label>
 				 <input  type="file" name="foto" Value="<?php echo "image/".$row['foto']; ?>" required>
			</div>

			if($_POST['biodata']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];
			$fotobaru = date('dmY').$nama;
			$path = "file/".$fotobaru;
			if($ekstensi_diperbolehkan == true){
				if($ukuran < 1044070){	
				move_uploaded_file($file_tmp, $path);