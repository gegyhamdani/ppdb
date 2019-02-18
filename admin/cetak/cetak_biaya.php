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
	$pdf->Cell(26.5,0.5,"LAPORAN TOTAL BIAYA",0,10,'C');
	$pdf->ln(1);
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(5,0.7,"Dicetak Pada : ". Date("d/m/Y"),0,0,'L');
	$pdf->ln();
	$pdf->ln();

	$sql = "SELECT sum(biaya) as jumlah FROM calon group by biaya";
	$result = $mydb->query($sql);
	
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(4.5,0.5,"Catatan : Laporan Biaya yang masuk dari Calon Pendaftar.",0,10,'L');
	$pdf->ln();
	$pdf->ln();
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(4,0.7,"Jumlah Biaya Masuk : Rp.",0,0,'L');	
	while ($lihat = $result->fetch_assoc()):
		$pdf->Cell(0.4,0.7,$lihat['jumlah'],0,0,'L');
	endwhile;
	$pdf->ln();	
	$pdf->SetFont('Arial','',10);
	
	$sql2 ="SELECT *
			FROM calon
			JOIN biodata ON calon.id_pendaftar = biodata.id_pendaftar";
	$result2 = $mydb->query($sql2);
	$no=1;

	$pdf->ln();	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
	$pdf->Cell(3, 0.8, 'No Pendaftar', 1, 0, 'C');
	$pdf->Cell(4, 0.8, 'NISN', 1, 0, 'C');
	$pdf->Cell(7, 0.8, 'Nama', 1, 0, 'C');
	$pdf->Cell(3, 0.8, 'Jenis Kelamin', 1, 0, 'C');
	$pdf->Cell(3, 0.8, 'Status', 1, 0, 'C');
	$pdf->Cell(3, 0.8, 'Biaya', 1, 0, 'C');
	$pdf->ln();	
	$pdf->SetFont('Arial','',10);
	
	while ($lihat2 = $result2->fetch_assoc()):
		$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
		$pdf->Cell(3, 0.8, $lihat2['id_pendaftar'], 1, 0,'C');
		$pdf->Cell(4, 0.8, $lihat2['nisn'], 1, 0,'C');
		$pdf->Cell(7, 0.8, $lihat2['nama'], 1, 0,'C');
		$pdf->Cell(3, 0.8, $lihat2['jeniskel'], 1, 0,'C');
		$pdf->Cell(3, 0.8, $lihat2['status'], 1, 0,'C');
		$pdf->Cell(3, 0.8, $lihat2['biaya'], 1, 0,'C');
		$pdf->ln();
		$no++;
	endwhile;

	$pdf->Output("Laporan Total Biaya.pdf","I");
?>


