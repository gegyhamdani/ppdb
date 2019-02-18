<?php
$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
$sql = "SELECT * FROM tanggal";
$result = $mydb->query($sql);
?>
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Tanggal</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
					<li><i class="icon_document_alt"></i>Pengaturan</li>
					<li><i class="fa fa-file-text-o"></i>Tanggal</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading tab-bg-primary ">
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#home">Tanggal</a>
							</li>
						</ul>
					</header>
					<div class="panel-body">
						<div class="tab-content">
							<div id="home" class="tab-pane active">
								<div class="tabel table-responsive">     
									<table class="table table-stripe table-bordered table-hover siswa">
										<thead>
											<tr>
												<th width="20"><center>No</center></th>
												<th width="100"><center>Nama</center></th>
												<th width="120"><center>Tanggal Penetapan</center></th>
												<th width="120"><center>Tanggal Kirim</center></th>
												<th width="120"><center>Action</center></th>
											</tr>
										</thead>

										<tbody>
											<?php 
											$i = 1; 
											while ($row = $result->fetch_assoc()):
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $row['nama_tanggal']; ?></td>
													<td><?php echo $row['tanggal']; ?></td>
													<td><?php echo $row['tanggal_sms']; ?></td>
													<td><center><a class="btn btn-info" style="border-radius: 0px;" href="index.php?page=tanggaledit&no=<?php echo $row['no']?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> | <button type="button" class="btn btn-danger" style="border-radius: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></center></td>
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
		</section>
	</section>