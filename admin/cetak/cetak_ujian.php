<?php
	require('../../pdf/fpdf.php');	
	ob_start();
	
	
	$cetak1 = $_GET['cetak'];
	$mydb = new mysqli('localhost','root','','pkl-ppdb');
	
	$sql ="SELECT * FROM biodata WHERE id_pendaftar = '{$cetak1}'";
	$result = $mydb->query($sql);
	$row = $result->fetch_assoc();
	$sql2 ="SELECT * FROM sekolah_asal WHERE id_pendaftar = '{$cetak1}'";
	$result2 = $mydb->query($sql2);
	$row2 = $result2->fetch_assoc();
	
	
	$pdf = new FPDF("L","cm","A4");

	$pdf->SetMargins(2,1,1);
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',11);
	$pdf->Image('../../data/logo.gif',1,1,2.6,2);
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
	$pdf->ln(1);
	$pdf->SetFont('Arial','B',14);
	$pdf->ln(1);
	$pdf->Cell(26.5,0.5,"KARTU UJIAN",0,10,'C');
	$pdf->ln(1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(5,0.7,"Tanggal : ". Date("d/m/Y"),0,0,'L');
	$pdf->ln();
	$pdf->ln(1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(4.6,0.7,"No. Pendaftar	: ".$row['id_pendaftar'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"Nama	: ".$row['nama'],0,0,'L');	
	$pdf->ln();
	$pdf->Cell(4.6,0.7,"NISN	: ".$row['nisn'],0,0,'L');	
	$pdf->ln();
	$pdf->Cell(15,0.7,"Jenis Kelamin : ".$row['jeniskel'],0,0,'L');
	$pdf->ln();
	$pdf->Cell(5,0.7,"Asal Sekolah : ".$row2['nama_sekolah'],0,0,'L');
	$pdf->ln();
	$pdf->ln(2);
	$pdf->Cell(5,0.7,"*Harap Membawa Kartu Ujian Ini Ketika Melakukan Ujian",0,0,'L');
	$pdf->ln();
	$pdf->Cell(5,0.7,"*Tempelkan Foto 3x4 Pada Pojok Kanan Bawah",0,0,'L');
	$pdf->ln();
	$pdf->Cell(5,0.7,"*Harap Membawa Kartu Identitas (Kartu Pelajar SMP) atau Identitas Lainnya saat Melakukan Ujian",0,0,'L');
	$pdf->ln();
	$pdf->Cell(5,0.7,"*Ruang Ujian Peserta dapat dilihat di depan Ruang Administrasi",0,0,'L');
	$pdf->ln(2);
	
	$pdf->SetFont('Arial','',10);

	$pdf->Output("Kartu Ujian $row[id_pendaftar].pdf","I");
?>

