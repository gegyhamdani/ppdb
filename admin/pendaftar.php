<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');	

	$sql = "SELECT *
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
			JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar";
	$result = $mydb->query($sql);
	$sqll = "SELECT count(*) as jumlah 
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
			JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar";
	$resultt = $mydb->query($sqll);
	$roww = $resultt->fetch_assoc();

	$sql2 = "SELECT *
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
			JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar
			JOIN nilai ON calon.id_pendaftar = nilai.id_pendaftar WHERE status='Diterima'";
	$result2 = $mydb->query($sql2);
	$sqll2 = "SELECT count(*) as jumlah 
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
			JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar WHERE status='Diterima'";
	$resultt2 = $mydb->query($sqll2);
	$roww2 = $resultt2->fetch_assoc();

	$sql3 = "SELECT *
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
			JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar
			JOIN nilai ON calon.id_pendaftar = nilai.id_pendaftar WHERE status='Ditolak'";
	$result3 = $mydb->query($sql2);
	$sqll3 = "SELECT count(*) as jumlah 
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
			JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar WHERE status='Ditolak'";
	$resultt3 = $mydb->query($sqll3);
	$roww3 = $resultt3->fetch_assoc();
?>
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Pendaftar</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
					<li><i class="icon_document_alt"></i>Laporan</li>
					<li><i class="fa fa-file-text-o"></i>Pendaftar</li>
				</ol>
			</div>
		</div>
    	<div class="row">
            <div class="col-lg-12">
              	<section class="panel">
                    <header class="panel-heading tab-bg-primary ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#total">Total Pendaftar</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#diterima">Diterima</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#ditolak">Ditolak</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="total" class="tab-pane active">
                                <div class="tabel table-responsive">     
									<table class="table table-stripe table-bordered table-hover siswa">
										<center><h2><b>Total pendaftar : <?php echo $roww['jumlah'] ?> </b></h2></center>
										<thead>
											<tr>
												<th width="120"><center>No Pendaftar</center></th>
												<th width="120"><center>NISN</center></th>
												<th width="120"><center>Nama</center></th>
												<th width="120"><center>Jenis Kelamin</center></th>
												<th width="120"><center>Status</center></th>
											</tr>
										</thead>

										<tbody>
											<?php  
												while ($row = $result->fetch_assoc()):
											?>
											<tr>
												<td><?php echo $row['id_pendaftar'] ?></td>
												<td><?php echo $row['nisn']; ?></td>
												<td><?php echo $row['nama']; ?></td>
												<td><?php echo $row['jeniskel']; ?></td>
												<td><?php echo $row['status']; ?></td>
											</tr>
											<?php endwhile; ?>
										</tbody>
									</table>
									<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_total_pendaftar.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
								</div>
                            </div>
                            <div id="diterima" class="tab-pane">
                                <div class="tabel table-responsive">     
									<table class="table table-stripe table-bordered table-hover siswa">
										<center><h2><b>Total diterima : <?php echo $roww2['jumlah'] ?> </b></h2></center>
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
											<?php while ($row2 = $result2->fetch_assoc()): ?>
											<tr>
												<td><?php echo $row2['id_pendaftar']; ?></td>
												<td><?php echo $row2['nisn']; ?></td>
												<td><?php echo $row2['nama']; ?></td>
												<td><?php echo $row2['jeniskel']; ?></td>
												<td><?php echo $row2['status']; ?></td>
											</tr>
											<?php endwhile; ?>
										</tbody>
									</table>
									<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_diterima.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
								</div>	 
                            </div>
                            <div id="ditolak" class="tab-pane">
                               	<div class="tabel table-responsive">     
									<table class="table table-stripe table-bordered table-hover siswa">
										<center><h2><b>Total ditolak : <?php echo $roww3['jumlah'] ?> </b></h2></center>
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
											<?php while ($row2 = $result2->fetch_assoc()): ?>
											<tr>
												<td><?php echo $row2['id_pendaftar']; ?></td>
												<td><?php echo $row2['nisn']; ?></td>
												<td><?php echo $row2['nama']; ?></td>
												<td><?php echo $row2['jeniskel']; ?></td>
												<td><?php echo $row2['status']; ?></td>
											</tr>
											<?php endwhile; ?>
										</tbody>
									</table>
									<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_ditolak.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
								</div>	 
                           </div>
                        </div>
                   </div>
                </section>
			</div>
	</section>
</section>