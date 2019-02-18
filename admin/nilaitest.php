		<?php
			$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
			$sql = "SELECT *
					FROM calon
					JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
					JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar
					JOIN nilai ON calon.id_pendaftar = nilai.id_pendaftar where status='Verifikasi'";
			$result = $mydb->query($sql);
		?>

		<section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Input Nilai Ujian</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Data PPDB</li>
						<li><i class="fa fa-file-text-o"></i>Input Nilai</li>
					</ol>
				</div>
			</div>
              <div class="row">
              	<div class="col-lg-12">
              	<div class="kotak">
					<div class="tabel table-responsive">     
						<table class="table table-stripe table-bordered table-hover siswa">
						<thead>
					<tr>
						<th width="120"><center>No Pendaftar</center></th>
						<th width="120"><center>NISN</center></th>
						<th width="120"><center>Nama</center></th>
						<th width="120"><center>Jenis Kelamin</center></th>
						<th width="120"><center>Status</center></th>
						<th width="220"><center>Action</center></th>
					</tr>
				</thead>

				<tbody>
					<?php while ($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $row['id_pendaftar']; ?></td>
						<td><?php echo $row['nisn']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['jeniskel']; ?></td>
						<td><?php echo $row['status']; ?></td>
						<td><center><a class="btn btn-success" style="border-radius: 0px;" href="index.php?page=nilaidetail&id_pendaftar=<?php echo $row['id_pendaftar']?>"><i class="fa fa-check" aria-hidden="true"></i> Input Nilai</a></center></td>
					</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
	</div>
	</section>
	</section>

	<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Input Nilai Ujian</h4>
        </div>
        <div class="modal-body">
           <form action="nilaitestaksi.php?tipe=tambah" method="POST">
           <div class="form-group">
           			<label for="status">No. Pendaftar</label>
           			<input type="text" class="form-control" name="id_pendaftar" value="<?php echo $row['id_pendaftar']?>" readonly>
           		</div>
           	<div class="form-group">
 				 <label for="nama">Bahasa Indonesia</label>
 				 <input type="number" name="indo_ujian" class="form-control"  required >
			</div>
  			<div class="form-group">
 				 <label for="nama">Matematika</label>
 				 <input type="number" name="mtk_ujian" class="form-control" required >
			</div>

			<div class="form-group">
 				 <label for="nama">IPA</label>
 				 <input type="number" name="ipa_ujian" class="form-control" required >
			</div>
			<div class="form-group">
 				 <label for="nama">Bahasa Inggris</label>
 				 <input type="number" name="inggris_ujian" class="form-control" required >
			</div>
                <input name="save" type="submit" class="btn btn-primary" value="Simpan">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>