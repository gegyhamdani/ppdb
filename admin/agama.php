<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Data Agama</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
					<li><i class="icon_document_alt"></i>Data Master</li>
					<li><i class="fa fa-file-text-o"></i>Data Agama</li>
				</ol>
			</div>
		</div>
    	<div class="row">
        	<div class="col-lg-12">
            	<div class="kotak">
					<form method="post" action="proses.php?aksi=tambah">
 						<div class="form-group">
 				 			<label for="nama">Nama Agama</label>
 				 			<input type="text" name="agama" class="form-control" required>
						</div>
						<input type="submit" class="btn btn-success" value="Tambah">
					</form>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
              	<div class="col-lg-12">
              		<div class="kotak">
						<div class="tabel table-responsive">     
							<table class="table table-bordered table-hover siswa">
								<thead>
									<tr>
										<th width="120"><center>ID</center></th>
										<th width="120"><center>Nama</center></th>
										<th width="120"><center>Action</center></th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>000001</td>
										<td>123456</td>
										<td><center><button type="button" class="btn btn-primary" style="width:90px; border-radius: 0px;"><i class="fa fa-print" aria-hidden="true"></i> Edit</button> | <button type="button" class="btn btn-danger" style="border-radius: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></center></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</section>
</section>