<?php
	require('../../pdf/fpdf.php');	
	ob_start();
	
	
	$cetak = $_GET['cetak'];
	$mydb = new mysqli('localhost','root','','pkl-ppdb');
	
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
	$pdf->Cell(26.5,0.5,"LAPORAN ASAL SEKOLAH",0,10,'C');
	$pdf->ln(1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(5,0.7,"Dicetak Pada : ". Date("d/m/Y"),0,0,'L');
	$pdf->ln();
	$pdf->ln();
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(4.5,0.5,"Catatan : Laporan Total per Asal Sekolah dari Pendaftar Calon Siswa .",0,10,'L');
	$pdf->ln();
	$pdf->ln();
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
	$pdf->Cell(10, 0.8, 'Agama', 1, 0, 'C');
	$pdf->Cell(3, 0.8, 'Jumlah', 1, 0, 'C');
	$pdf->ln();	
	$pdf->SetFont('Arial','',10);
	
	
	$sql2 = "SELECT count(nama_sekolah) as jumlah, nama_sekolah FROM sekolah_asal group by nama_sekolah";
	$result2 = $mydb->query($sql2);
	$no=1;
	while ($lihat = $result2->fetch_assoc()):
		$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
		$pdf->Cell(10, 0.8, $lihat['nama_sekolah'],1, 0, 'C');
		$pdf->Cell(3, 0.8, $lihat['jumlah'], 1, 0,'C');
		$pdf->ln();
		$no++;
	endwhile;
	$pdf->Output("Laporan Asal Sekolah.pdf","I");
?>


