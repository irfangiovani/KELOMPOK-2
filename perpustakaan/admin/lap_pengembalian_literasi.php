<?php
include 'functions.php';
require('assets/pdf/fpdf.php');

if (isset($_POST['tampilkan'])) {
	$cek = $_POST['cek'];
	$tgl_awal = $_POST['tgl_awal'];
	$tgl_akhir = $_POST['tgl_akhir'];

	if ($cek == 1) {
	$query1= "SELECT  tb_pelanggan.nama_pelanggan, trans_jual.kd_jual, trans_jual.tgl, detail_jual.jumlah, detail_jual.harga_normal, detail_jual.diskon, detail_jual.kd_jual, detail_jual.total_harga, detail_jual.kd_barang FROM trans_jual  LEFT JOIN detail_jual on detail_jual.kd_jual = trans_jual.kd_jual  LEFT JOIN tb_pelanggan on tb_pelanggan.kd_pelanggan = trans_jual.kd_pelanggan";
		$total = "SELECT sum(total_harga) as total_harga, sum(jumlah) as jumlah, sum(diskon) as diskon  FROM detail_jual";
		// $query2 = "SELECT tb_pelanggan.nama_toko, trans_jual.kd_jual, trans_jual.tgl_jual FROM trans_jual LEFT JOIN tb_pelanggan on tb_pelanggan.kd_pelanggan = trans_jual.kd_pelanggan WHERE kd_jual ='$kd_jual'";
	}
	if($cek==2){
		$query1= "SELECT  tb_pelanggan.nama_pelanggan, trans_jual.kd_jual, trans_jual.tgl, detail_jual.jumlah, detail_jual.harga_normal, detail_jual.diskon, detail_jual.kd_jual, detail_jual.total_harga, detail_jual.kd_barang FROM trans_jual  LEFT JOIN detail_jual on detail_jual.kd_jual = trans_jual.kd_jual LEFT JOIN tb_pelanggan on tb_pelanggan.kd_pelanggan = trans_jual.kd_pelanggan WHERE tgl>='$tgl_awal' AND tgl <='$tgl_akhir'";
		$total = "SELECT sum(total_harga) as total_harga, sum(jumlah) as jumlah, sum(diskon) as diskon FROM detail_jual INNER JOIN trans_jual ON trans_jual.kd_jual = detail_jual.kd_jual WHERE trans_jual.tgl>='$tgl_awal' AND trans_jual.tgl <='$tgl_akhir' ORDER BY tgl asc";
	}
}


$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('logo/malasngoding.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'BKAD',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 0038XXXXXXX',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'JL. KIOS MALASNGODING',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website : www.malasngoding.com email : malasngoding@gmail.com',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"Laporan Data Transaksi Penjualan",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'No Transaksi', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Nama Pelanggan', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Nama Barang', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Jumlah', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Harga', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Diskon', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Harga Total', 1, 1, 'C');
$pdf->SetFont('Arial','',10);
$no=1;
$query=mysqli_query($conn, $query1);
$totale = mysqli_query($conn, $total);
$hasil = mysqli_fetch_array($totale);
while($lihat=mysqli_fetch_array($query)){
	$kd_barang = $lihat['kd_barang'];
	$sala = "SELECT * FROM tb_barang WHERE kd_barang='$kd_barang'";
	$sele = mysqli_query($conn, $sala);
	$hasilnya = mysqli_fetch_array($sele);
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['tgl'] , 1, 0, 'C');
	$pdf->Cell(4, 0.8, $lihat['kd_jual'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['nama_pelanggan'], 1, 0,'C');
	$pdf->Cell(3, 0.8, $hasilnya['nama_barang'],1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['jumlah'], 1, 0,'R');
	$pdf->Cell(3, 0.8, "Rp. ".number_format($lihat['harga_normal']).",-", 1, 0, 'R');
	$pdf->Cell(3, 0.8, "Rp. ".number_format($lihat['diskon']).",-", 1, 0, 'R');
	$pdf->Cell(3, 0.8, "Rp. ".number_format($lihat['total_harga']).",-", 1, 1,'R');

	$no++;
}
$pdf->SetFont('Arial','B',10);
$pdf->Cell(13, 0.8, "TOTAL", 1, 0,'R');
$pdf->Cell(2, 0.8, $hasil['jumlah'], 1, 0,'R');
$pdf->Cell(6, 0.8, "Rp. ".number_format($hasil['diskon']).",-",1, 0,'R');
$pdf->Cell(3, 0.8, "Rp. ".number_format($hasil['total_harga']).",-",1, 1,'R');

# footer
$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->SetX(19.5);
$pdf->MultiCell(19,0.5,"Bondowoso".date('d/M/Y')."",0,'L');
$pdf->SetX(19.5);
$pdf->MultiCell(19,0.5, '',0,'C');
$pdf->SetX(19.5);
$pdf->MultiCell(19,0.5, '',0,'C');
$pdf->SetX(19.5);
$pdf->MultiCell(19,0.5, '',0,'L');
$pdf->SetX(19.5);
$pdf->MultiCell(19,0.5, '_________________________',0,'L');
$pdf->SetX(19.5);
$pdf->MultiCell(19,0.5, 'N0 : ',0,'L');
$pdf->Output("laporan_transaksi_penjualan.pdf","I");

?>

