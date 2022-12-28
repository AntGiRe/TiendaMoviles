<?php
	include("../utils/csv.php");
	$csv = new csv('../tecnicos_pass.csv');
	$csvArr = $csv->csvToArray();
	session_start();

	if(isset($_GET['user']) && isset($_GET['pass'])){
		$user = $_GET['user'];
		$pass = $_GET['pass'];
		$found = false;
		foreach ($csvArr as $key => $value) {
			if($value[0] == $user && $value[1] == base64_encode($pass.'tecnicos')){
				$found = true;
				break;
			}
		}
		if($found){
			if($user == "admin")
			{
				$_SESSION['admin'] = true;
				header("Location: ../admin.php");
			}
			else
			{
				$_SESSION['user'] = $user;
				header("Location: ../menu.php");
			}
		}else{
			$_SESSION['error'] = "Usuario o contraseña incorrectos";
			header("Location: ../inicio.php");
		}
	}
?>