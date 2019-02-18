		<?php
			$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
			$sql = "SELECT *
					FROM calon
					JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
					JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar
					JOIN nilai ON calon.id_pendaftar = nilai.id_pendaftar
					JOIN ujian ON calon.id_pendaftar = ujian.id_pendaftar where status IN ('Diterima' AND 'Ditolak') order by 'id_pendaftar' ASC ";
			$result = $mydb->query($sql);
		?>

	<section id="main-content">
            <div class="container">
              	<div class="row">
              		<div class="box-table" style="margin-top: 2%;">
						<div class="tabel table-responsive">     
							<table class="table table-stripe table-bordered table-hover siswa">
								<thead>
									<tr>
										<th width="120"><center>No Pendaftar</center></th>
										<th width="120"><center>NIS</center></th>
										<th width="120"><center>Nama</center></th>
										<th width="120"><center>Jenis Kelamin</center></th>
										<th width="120"><center>Status</center></th>
										<th width="120"><center>Nilai Rata-Rata Hasil Ujian</center></th>
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
										<td><?php echo $row['rata']; ?></td>
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