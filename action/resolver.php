<?php
	if(isset($_GET['id']))
	{
		include("../utils/csv.php");
		$csv = new csv('../datos_clientes.csv');
		$csvArr = $csv->csvToArray();
		$csvArr[$_GET['id']][5] = "Resuelto";
		$csv->changeCSV($csvArr);
		header("Location: ../menu.php");
	}
?>