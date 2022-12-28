<?php
    include("../utils/csv.php");
	if(isset($_GET['nombre']) && isset($_GET['email']) && isset($_GET['problema']) && isset($_GET['fecha'])) {
        $array = array ($_GET['nombre'], $_GET['email'], "Sin asignar", $_GET['problema'], $_GET['fecha'], "Pendiente");
        $csv = new csv('../datos_clientes.csv');
        $csvArr = $csv->addArray($array);
    }
?>
