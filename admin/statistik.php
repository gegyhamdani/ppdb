<?php
	$mydb = new mysqli('localhost', 'root', '' , 'pkl-ppdb');
	$agama = "SELECT count(agama) as jumlah, agama FROM biodata group by agama";
	$jeniskel = "SELECT count(jeniskel) as jumlah, jeniskel FROM biodata group by jeniskel";
	$pndkk_ayah = "SELECT count(pndkk_ayah) as jumlah, pndkk_ayah FROM biodata group by pndkk_ayah";
	$pndkk_ibu = "SELECT count(pndkk_ibu) as jumlah, pndkk_ibu FROM biodata group by pndkk_ibu";
	$pkrjn_ayah = "SELECT count(pkrjn_ayah) as jumlah, pkrjn_ayah FROM biodata group by pkrjn_ayah";
	$pkrjn_ibu = "SELECT count(pkrjn_ibu) as jumlah, pkrjn_ibu FROM biodata group by pkrjn_ibu";
	$sekolah_asal = "SELECT count(nama_sekolah) as jumlah, nama_sekolah FROM sekolah_asal group by nama_sekolah";
	$result = $mydb->query($agama);
	$result2 = $mydb->query($jeniskel);
	$result3 = $mydb->query($pndkk_ayah);
	$result4 = $mydb->query($pndkk_ibu);
	$result5 = $mydb->query($pkrjn_ayah);
	$result6 = $mydb->query($pkrjn_ibu);
	$result7 = $mydb->query($sekolah_asal);
?>
<section id="main-content">
	<section class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> Statistik</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
					<li><i class="icon_document_alt"></i>Laporan</li>
					<li><i class="fa fa-file-text-o"></i>Statistik</li>
				</ol>
			</div>
		</div>
    	<div class="row">
            <div class="col-lg-12">
              	<section class="panel">
                    <header class="panel-heading tab-bg-primary ">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#agama">Agama</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#jk">Jenis Kelamin</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#pendidikan-ayah">Pendidikan Ayah</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#pendidikan-ibu">Pendidikan Ibu</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#pekerjaan-ayah">Pekerjaan Ayah</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#pekerjaan-ibu	">Pekerjaan Ibu</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#asal-sekolah">Asal Sekolah</a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="agama" class="tab-pane active">
                                <div class="tabel table-responsive">     
									<table class="table table-stripe table-bordered table-hover siswa">
										<thead>
											<tr>
												<th width="120"><center>No</center></th>
												<th width="120"><center>Item</center></th>
												<th width="120"><center>Jumlah</center></th>
											</tr>
										</thead>

										<tbody>
											<?php 
												$i = 1; 
												while ($row = $result->fetch_assoc()):
											?>
											<tr>
												<td><?php echo $i++;?></td>
												<td><?php echo $row['agama']; ?></td>
												<td><?php echo $row['jumlah']; ?></td>
											</tr>
											<?php endwhile; ?>
										</tbody>
									</table>
									<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_agama.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
								</div>
                            </div>
                            <div id="jk" class="tab-pane">
                                <div class="tabel table-responsive">     
									<table class="table table-stripe table-bordered table-hover siswa">
										<thead>
											<tr>
												<th width="120"><center>No</center></th>
												<th width="120"><center>Item</center></th>
												<th width="120"><center>Jumlah</center></th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$i = 1; 
												while ($row2 = $result2->fetch_assoc()):
											?>
											<tr>
												<td><?php echo $i++;?></td>
												<td><?php echo $row2['jeniskel']; ?></td>
												<td><?php echo $row2['jumlah']; ?></td>
											</tr>
											<?php endwhile; ?>
										</tbody>
									</table>
									<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_jeniskel.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
								</div>	 
                            </div>
                                <div id="pendidikan-ayah" class="tab-pane">
                                	<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
											<thead>
												<tr>
													<th width="120"><center>No</center></th>
													<th width="120"><center>Item</center></th>
													<th width="120"><center>Jumlah</center></th>
												</tr>
											</thead>

											<tbody>
												<?php 
													$i = 1; 
													while ($row3 = $result3->fetch_assoc()):
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $row3['pndkk_ayah']; ?></td>
													<td><?php echo $row3['jumlah']; ?></td>
												</tr>
												<?php endwhile; ?>
											</tbody>
										</table>
										<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_pndkk_ayah.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
									</div>	 
                                </div>
                                <div id="pendidikan-ibu" class="tab-pane">
                                	<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
											<thead>
												<tr>
													<th width="120"><center>No</center></th>
													<th width="120"><center>Item</center></th>
													<th width="120"><center>Jumlah</center></th>
												</tr>
											</thead>

											<tbody>
												<?php 
													$i = 1; 
													while ($row4 = $result4->fetch_assoc()):
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $row4['pndkk_ibu']; ?></td>
													<td><?php echo $row4['jumlah']; ?></td>
												</tr>
												<?php endwhile; ?>
											</tbody>
										</table>
										<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_pndkk_ibu.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
									</div>	 
                                </div>
                                <div id="pekerjaan-ayah" class="tab-pane">
                                	<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
											<thead>
												<tr>
													<th width="120"><center>No</center></th>
													<th width="120"><center>Item</center></th>
													<th width="120"><center>Jumlah</center></th>
												</tr>
											</thead>

											<tbody>
												<?php 
													$i = 1; 
													while ($row5 = $result5->fetch_assoc()):
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $row5['pkrjn_ayah']; ?></td>
													<td><?php echo $row5['jumlah']; ?></td>
												</tr>
												<?php endwhile; ?>
											</tbody>
										</table>
										<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_pkrjn_ayah.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
									</div>	 
                                </div>
                                <div id="pekerjaan-ibu" class="tab-pane">
                                	<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
											<thead>
												<tr>
													<th width="120"><center>No</center></th>
													<th width="120"><center>Item</center></th>
													<th width="120"><center>Jumlah</center></th>
												</tr>
											</thead>

											<tbody>
												<?php 
													$i = 1; 
													while ($row6 = $result6->fetch_assoc()):
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $row6['pkrjn_ibu']; ?></td>
													<td><?php echo $row6['jumlah']; ?></td>
												</tr>
												<?php endwhile; ?>
											</tbody>
										</table>
										<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_pkrjn_ibu.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
									</div>	 
                                </div>
                                <div id="asal-sekolah" class="tab-pane">
                                	<div class="tabel table-responsive">     
										<table class="table table-stripe table-bordered table-hover siswa">
											<thead>
												<tr>
													<th width="120"><center>No</center></th>
													<th width="120"><center>Item</center></th>
													<th width="120"><center>Jumlah</center></th>
												</tr>
											</thead>

											<tbody>
												<?php 
													$i = 1; 
													while ($row7 = $result7->fetch_assoc()):
												?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $row7['nama_sekolah']; ?></td>
													<td><?php echo $row7['jumlah']; ?></td>
												</tr>
												<?php endwhile; ?>
											</tbody>
										</table>
										<center><a class="btn btn-success" style="border-radius: 0px;" href="cetak/cetak_asal_sekolah.php?cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak</a></center>
									</div>	 
                                </div>
                            </div>
                        </div>
                    </section>
				</div>
	</section>
</section>