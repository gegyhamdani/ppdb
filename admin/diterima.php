		<?php
			$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
			$sql = "SELECT *
					FROM calon
					JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
					JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar
					JOIN nilai ON calon.id_pendaftar = nilai.id_pendaftar where status='Diterima'";
			$result = $mydb->query($sql);
		?>

	<section id="main-content">
        <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Data Siswa Diterima</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Data PPDB</li>
						<li><i class="fa fa-file-text-o"></i>Data Siswa Diterima</li>
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
										<th width="120"><center>NIS</center></th>
										<th width="120"><center>Nama</center></th>
										<th width="120"><center>Jenis Kelamin</center></th>
										<th width="120"><center>Status</center></th>
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
									</tr>
									<?php endwhile; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>