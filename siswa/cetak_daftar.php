<?php
	require('../pdf/fpdf.php');	
	ob_start();
	
	
	$cetak1 = $_GET['cetak'];
	$mydb = new mysqli('localhost','root','','pkl-ppdb');
	
	$sql ="SELECT * FROM biodata WHERE id_pendaftar = '{$cetak1}'";
	$result = $mydb->query($sql);
	$row = $result->fetch_assoc();

	$sql2 ="SELECT * FROM sekolah_asal WHERE id_pendaftar = '{$cetak1}'";
	$result2 = $mydb->query($sql2);
	$row2 = $result2->fetch_assoc();

	$sql3 ="SELECT * FROM tanggal WHERE nama_tanggal = 'Vertifikasi'";
	$result3 = $mydb->query($sql3);
	$row3 = $result3->fetch_assoc();
	
	
	$pdf = new FPDF("L","cm","A4");

	$pdf->SetMargins(2,1,1);
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',11);
	$pdf->Image('../data/logo.gif',1,1,2.6,2);
	$pdf->SetX(4);
	$pdf->SetX(4); 
	$pdf->MultiCell(19.5,0.5,'SMA Mathlaul Anwar','L');
	$pdf->SetX(4); 
	$pdf->MultiCell(19.5,0.5,'Alamat :Jl. Terusan Kopo No.302, Margahayu Sel., Margahayu, Bandung, Jawa Barat 40226, Indonesia',0,'L'); 
	$pdf->SetFont('Arial','B',10);
	$pdf->SetX(4);
	$pdf->MultiCell(19.5,0.5,'Telepon : (022) 5415267','L');
	$pdf->SetX(4);
	$pdf->SetX(4);
	$pdf->Line(1,3.1,28.5,3.1);
	$pdf->SetLineWidth(0.1);      
	$pdf->Line(1,3.2,28.5,3.2);   
	$pdf->SetLineWidth(0);
	$pdf->SetFont('Arial','B',14);
	$pdf->ln(1);
	$pdf->ln(1);
	$pdf->Cell(26.5,0.5,"KARTU PENDAFTARAN",0,10,'C');
	$pdf->ln(1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(26.5,0.5,"Tanggal Vertifikasi	: ".$row3['tanggal'],0,15,'R');
	$pdf->Cell(4.6,0.7,"Id Pendaftar	: ".$row['id_pendaftar'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"NISN	: ".$row['nisn'],0,0,'L');	
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Nama	: ".$row['nama'],0,0,'L');	
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Jenis Kelamin : ".$row['jeniskel'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Tempat & Tanggal Lahir : ".$row['tempat_lahir'] .", " .$row['tanggal_lahir'] ,0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Alamat : ".$row['alamat'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Nama Ayah : ".$row['nama_ayah'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Pekerjaan Ayah : ".$row['pkrjn_ayah'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Nama Ibu : ".$row['nama_ibu'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Pekerjaan Ibu : ".$row['pkrjn_ibu'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Asal Sekolah : ".$row2['nama_sekolah'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Tahun Lulus : ".$row2['tahun_lulus'],0,0,'L');
	$pdf->ln(2);
	$pdf->Cell(5,0.7,"*Serahkan Bukti Pendaftaran dan Lampiran pada Panitia PPDB di Ruang TU SMA Mathlaul Anwar untuk di Vertifikasi",0,0,'L');
	$pdf->ln();
	$pdf->Cell(5,0.7,"*Lampirkan Fotocopy Fotocopy Izasah 2 Lembar, Legalisir, Fotocopy SKHUN 2 Lembar, Legalisir Fotocopy Akta Kelahiran 1 Lembar, ",0,0,'P');
	$pdf->ln();
	$pdf->Cell(5,0.7," Fotocopy Kartu Keluarga 1 Lembar, dan Foto 3x4 Formal",0,0,'P');
	$pdf->ln(2);
	
	$pdf->SetFont('Arial','',10);

	$pdf->Output("Kartu Pendaftaran $row[id_pendaftar].pdf","I");
?>

