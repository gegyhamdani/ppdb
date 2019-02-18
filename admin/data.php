	<?php
			$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');

			$sql = "SELECT *
					FROM calon
					left JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar
					left JOIN sekolah_asal ON calon.id_pendaftar = sekolah_asal.id_pendaftar where status='Belum Konfrimasi'";
			$result = $mydb->query($sql);

			$sql2 = "SELECT * FROM calon";
			$result2 = $mydb->query($sql2);
	?>

	<section id="main-content">
        <section class="wrapper">
		    <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Data Pendaftar</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Data PPDB</li>
						<li><i class="fa fa-file-text-o"></i>Data Pendaftar</li>
					</ol>
				</div>
			</div>
            <div class="row">
              	<div class="col-lg-12">
              		<section class="panel">
                    	<header class="panel-heading tab-bg-primary ">
                        	<ul class="nav nav-tabs">
                            	<li class="active">
                                	<a data-toggle="tab" href="#total">Total</a>
                            	</li>
                            	<li class="">
                                	<a data-toggle="tab" href="#proses">Proses (Calon Siswa Belum Melakukan Konfrimasi)</a>
                            	</li>
                        	</ul>
                    	</header>
                    	<div class="panel-body">
                        	<div class="tab-content">
                            	<div id="total" class="tab-pane active">
									<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
											<thead>
												<tr>
													<th width="120"><center>No Pendaftar</center></th>
													<th width="120"><center>Nama</center></th>
													<th width="120"><center>Status</center></th>
													<th width="220"><center>Action</center></th>
												</tr>
											</thead>

											<tbody>
												<?php while ($row2 = $result2->fetch_assoc()): ?>
												<tr>
													<td><?php echo $row2['id_pendaftar'] ?></td>
													<td><?php echo $row2['username']; ?></td>
													<td><?php echo $row2['status']; ?></td>
													<td><?php if ($row2['status'] == "Belum Konfrimasi") { 
														echo '<center><button type="button" class="btn btn-danger" style="border-radius: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></center>';
														}?> </td>
												</tr>
												<?php endwhile; ?>
											</tbody>
										</table>
									</div>
								</div>
								<div id="proses" class="tab-pane">
									<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
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
												<?php while ($row = $result->fetch_assoc()): ?>
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
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>
	</section>