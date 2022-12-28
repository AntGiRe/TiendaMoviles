<?php
    include("utils/csv.php");
	if(isset($_GET['nombre']) && isset($_GET['email']) && isset($_GET['problema']) && isset($_GET['fecha'])) {
        $array = array ($_GET['nombre'], $_GET['email'], $_GET['problema'], $_GET['fecha']);
        $csv = new csv('datos_clientes.csv');
        $csvArr = $csv->arrayToCsv($array);
  }
