<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>pengguanaan php spreadsheet</h3>
	<?php 
		require 'libary/vendor/autoload.php';

		use PhpOffice\PhpSpreadsheet\Spreadsheet;
		use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

		$spreadsheet = new spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellvalue('A1', 'Hello ansori!');

		$writer = new Xlsx($spreadsheet);
		$writer->save('hello world.xlsx');


	 ?>
</body>
</html>