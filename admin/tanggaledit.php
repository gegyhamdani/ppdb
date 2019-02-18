<?php
$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');

$no= $_GET['no'];

$sql = "SELECT * FROM `tanggal` where no='$no'";
$result = $mydb->query($sql);
$row = $result->fetch_assoc();

$result->close();
$mydb->close();
?>
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Edit Tanggal</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
					<li><i class="icon_document_alt"></i>Pengaturan</li>
					<li><i class="icon_document_alt"></i><a href="index.php?page=verivikasi">Tanggal</a></li>
					<li><i class="fa fa-file-text-o"></i>Edit Tanggal</li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading tab-bg-primary ">
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#biodata">Tanggal</a>
							</li>
						</ul>
					</header>
					<div class="panel-body">
						<div class="tab-content">
							<form method="post" action="tanggalaksi.php?tipe=edit&no=<?php echo $no ?>" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nama">No</label>
									<input type="text" class="form-control" name="no" value="<?php echo $row['no']?>" readonly>
								</div><div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" class="form-control" name="nama_tanggal" value="<?php echo $row['nama_tanggal']?>">
								</div>
								<div class="form-group">
									<label for="nama">Tanggal Penetapan</label>
									<input type="date" class="form-control" name="tanggal" Value="<?php echo $row['tanggal']; ?>">
								</div>
								<div class="form-group">
									<label for="nama">Tanggal SMS</label>
									<input type="date" class="form-control" name="tanggal_sms" Value="<?php echo $row['tanggal_sms']; ?>">
								</div>
								<input type="submit" class="btn btn-success" value="Edit">
							</form>
						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
</section>