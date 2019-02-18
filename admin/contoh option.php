<div class="modal-body">
           <form role="form">
                <div class="form-group">
                    <label for="status">Izasah</label>
                    <select class="form-control" name="izasah" required>
						<option <?php if($row['skhun']=="Ada") echo 'selected'?> >Ada</option>
    					<option <?php if($row['skhun']=="Belum Ada") echo 'selected'?> >Tidak Ada</option>
				 	</select>
                </div>
                <div class="form-group">
                    <label for="status">SKHUN</label>
                    <select class="form-control" name="skhun" required>
						<option <?php if($row['skhun']=="Ada") echo 'selected'?> >Ada</option>
    					<option <?php if($row['skhun']=="Ada") echo 'selected'?> >Tidak Ada</option>
					</select>
                </div>
                <div class="form-group">
                    <label for="status">Rapot</label>
                    <select class="form-control" name="rapot" required>
						<option <?php if($row['skhun']=="Ada") echo 'selected'?> >Ada</option>
    					<option <?php if($row['skhun']=="Ada") echo 'selected'?> >Tidak Ada</option>
				 	</select>
                </div>
                <div class="form-group">
                    <label for="status">Biaya</label>
                    <input type="number" class="form-control" placeholder="75000" disabled>
                </div>
                <input type="Simpan" class="btn btn-primary" value="Simpan">
            </form>
        </div>