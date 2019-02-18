<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
	$admin = "SELECT * FROM users WHERE hak_akses = 'Admin'";
	$siswa = "SELECT * from users where hak_akses = 'Siswa'";
	$result = $mydb->query($admin);
	$result2 = $mydb->query($siswa);
?>
	<section id="main-content">
        <section class="wrapper">
		  	<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Akun</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Pengaturan</li>
						<li><i class="fa fa-file-text-o"></i>Akun</li>
					</ol>
				</div>
			</div>
              <div class="row">
              	<div class="col-lg-12">
              		<section class="panel">
                        <header class="panel-heading tab-bg-primary ">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#home">Admin</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" href="#about">Calon Siswa</a>
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
													<th width="100"><center>Username</center></th>
													<th width="120"><center>Email</center></th>
													<th width="120"><center>Password</center></th>
													<th width="80"><center>Level</center></th>
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
													<td><?php echo $row['username']; ?></td>
													<td><?php echo $row['email']; ?></td>
													<td><?php echo $row['password']; ?></td>
													<td><?php echo $row['hak_akses']; ?></td>
													<td><center><button type="button" class="btn btn-primary" style="width:90px; border-radius: 0px;"><i class="fa fa-wrench" aria-hidden="true"></i> Edit</button> | <button type="button" class="btn btn-danger" style="border-radius: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></center></td>
												</tr>
												<?php endwhile; ?>
											</tbody>
										</table>
									</div>
                                </div>
                                <div id="about" class="tab-pane">
                                	<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
											<thead>
												<tr>
													<th width="20"><center>No</center></th>
													<th width="100"><center>Username</center></th>
													<th width="120"><center>Email</center></th>
													<th width="120"><center>Password</center></th>
													<th width="80"><center>Level</center></th>
													<!--<th width="120"><center>Action</center></th>-->
												</tr>
											</thead>

											<tbody>
												<?php 
													$i = 1; 
													while ($row2 = $result2->fetch_assoc()):
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $row2['username']; ?></td>
													<td><?php echo $row2['email']; ?></td>
													<td><?php echo $row2['password']; ?></td>
													<td><?php echo $row2['hak_akses']; ?></td>
													<!--<td><center><button type="button" class="btn btn-primary" style="width:90px; border-radius: 0px;"><i class="fa fa-wrench" aria-hidden="true"></i> Edit</button> | <button type="button" class="btn btn-danger" style="border-radius: 0px;"><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button></center></td>-->
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