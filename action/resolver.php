<?php
	if(isset($_GET['id']))
	{
		include("../utils/csv.php");
		$csv = new csv('../datos_clientes.csv');
		$csvArr = $csv->csvToArray();
		unset($csvArr[$_GET['id']]);
		$csv->arrayToCsv($csvArr);
		header("Location: ../gestion.php");
	}
?>