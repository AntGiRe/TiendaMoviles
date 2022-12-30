<?php
	session_start();
	if(isset($_SESSION['user']))
	{
		if(isset($_GET['id']))
		{
			include("../utils/csv.php");
			$csv = new csv('../datos_clientes.csv');
			$csvArr = $csv->csvToArray();
			$csvArr[$_GET['id']][2] = $_SESSION['user'];
			$csvArr[$_GET['id']][5] = "Asignado";
			$csv->changeCSV($csvArr);
			header("Location: ../menu.php");
		}
		else
		{
			header("Location: ../menu.php");
		}
	}
	else
	{
		header("Location: ../inicio.php");
	}
?>