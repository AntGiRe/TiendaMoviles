<?php
	session_start();
	include("../utils/csv.php");
	if(!isset($_SESSION['admin'])){
		header("Location: ../inicio.php");
	}
	$csv = new csv('../tecnicos_pass.csv');
	$csvArr = $csv->csvToArray();

	if(isset($_GET['nombre']) && isset($_GET['pass'])){
		$nombre = $_GET['nombre'];
		$pass = $_GET['pass'];
		$found = false;
		foreach ($csvArr as $key => $value) {
			if($value[0] == $nombre){
				$found = true;
				break;
			}
		}
		if($found){
			$_SESSION['error'] = "El usuario ya existe";
			header("Location: ../admin.php");
		}else{
			$usuario = array($nombre, base64_encode($pass.'tecnicos'));
			$csv->addArray($usuario);
			header("Location: ../admin.php");
		}
	}

?>