<?php
	session_start();
	if(isset($_SESSION['user'])){
		echo "Bienvenido ".$_SESSION['user'];
	}else{
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Técnico | Panel</title>
</head>
<body>
	<a href="action/logout.php">Cerrar Sesión</a>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Técnico</th>
			<th>Problema</th>
			<th>Fecha</th>
			<th>Estado</th>
			<th>Acciones</th>
		</tr>
		<?php
			include("utils/csv.php");
			$csv = new csv('datos_clientes.csv');
			$csvArr = $csv->csvToArray();
			foreach ($csvArr as $key => $value) {
				echo "<tr>";
				foreach ($value as $key2 => $value2) {
					echo "<td>".$value2."</td>";
				}
				echo "<td><a href='action/eliminarOrden.php?id=".$key."'>Eliminar</a></td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>