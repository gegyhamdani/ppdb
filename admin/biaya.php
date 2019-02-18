<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');	

	$sql = "SELECT *
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar";
	$result = $mydb->query($sql);
	$sqll = "SELECT sum(biaya) as jumlah FROM calon group by biaya";
	$resultt = $mydb->query($sqll);
	$roww = $resultt->fetch_assoc();

?>
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Biaya Pendaftaran</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
					<li><i class="icon_document_alt"></i>Laporan</li>
					<li><i class="fa fa-file-text-o"></i>Biaya Pendaftara</li>
				</ol>
			</div>
		</div>
    	<div class="row">
            <div class="col-lg-12">
              	<div class="kotak">
					<div class="tabel table-responsive">     
						<table class="table table-stripe table-bordered table-hover">
							<thead>
								<tr>
									<th><center>Jumlah Uang Masuk</center></th>
								</tr>
							</thead>

							<tbody>
								<?php while ($roww = $resultt->fetch_assoc()): ?>
								<tr>
									<th><center>Rp. <?php echo $roww['jumlah']; ?></center></th>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
					<div class="tabel table-responsive">     
						<table class="table table-stripe table-bordered table-hover siswa">
							<thead>
								<tr>
									<th width="120"><center>No Pendaftar</center></th>
									<th width="120"><center>NIS</center></th>
									<th width="120"><center>Nama</center></th>
									<th width="120"><center>Jenis Kelamin</center></th>
									<th width="120"><center>Status</center></th>
									<th width="120"><center>Biaya</center></th>
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
									<td><?php echo $row['biaya']; ?></td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
						<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_biaya.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>