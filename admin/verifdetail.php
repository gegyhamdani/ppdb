        <?php
            $id = $_GET['id_pendaftar'];
            $mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
            $sql = "SELECT * FROM calon where id_pendaftar='{$id}'";
            $result = $mydb->query($sql);
            $row = $result->fetch_assoc();
            $result->close();
            $mydb->close();
        ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
            <div class="kotak">
            <form action="verifaksi.php?tipe=edit&=<?php echo $id?>" method="POST">
           		<div class="form-group">
           			<label for="status">No. Pendaftar</label>
           			<input type="text" class="form-control" name="id_pendaftar" value="<?php echo $row['id_pendaftar']?>" readonly>
           		</div>
                <div class="form-group">
                    <label for="status">Izasah</label>
                    </br>
                    <input type="radio" class="form-radio" name="izasah" value="Ada" <?php if($row['skhun']=="Ada") echo 'checked'?>>Ada
                    &nbsp;&nbsp;&nbsp;&nbsp;				
					<input type="radio" class="form-radio" name="izasah" value="Tidak Ada" <?php if($row['skhun']=="Belum Ada") echo 'checked'?> >Tidak Ada
                </div>
                <div class="form-group">
                    <label for="status">SKHUN</label>
                    </br>
                    <input type="radio" class="form-radio" name="skhun" value="Ada" <?php if($row['skhun']=="Ada") echo 'checked'?>>Ada
                    &nbsp;&nbsp;&nbsp;&nbsp;				
					<input type="radio" class="form-radio" name="skhun" value="Tidak Ada" <?php if($row['skhun']=="Belum Ada") echo 'checked'?> >Tidak Ada
                </div>
                <div class="form-group">
                    <label for="status">Akte</label>
                    </br>
                    <input type="radio" class="form-radio" name="akte" value="Ada" <?php if($row['akte']=="Ada") echo 'checked'?>>Ada
                    &nbsp;&nbsp;&nbsp;&nbsp;				
					<input type="radio" class="form-radio" name="akte" value="Tidak Ada" <?php if($row['akte']=="Belum Ada") echo 'checked'?> >Tidak Ada
                </div>
                <div class="form-group">
                    <label for="status">Kartu Keluarga</label>
                    </br>
                    <input type="radio" class="form-radio" name="kartu_keluarga" value="Ada" <?php if($row['kartu_keluarga']=="Ada") echo 'checked'?>>Ada
                    &nbsp;&nbsp;&nbsp;&nbsp;                
                    <input type="radio" class="form-radio" name="kartu_keluarga" value="Tidak Ada" <?php if($row['kartu_keluarga']=="Belum Ada") echo 'checked'?> >Tidak Ada
                </div>
                <div class="form-group">
                    <label for="status">Biaya</label>
                    <input name="biaya" type="number" class="form-control" value="75000" readonly="">
                </div>
                <div class="form-group">
                    <label for="status">Jam Vertifikasi</label>
                    </br>
                    <input type="text" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('m/d/y h:i');?>" readonly>
                </div>
               <input name="save" type="submit" class="btn btn-primary" value="Simpan">
            </form>
           
            </div>
            </div>
        </div>
     </section>
</section>