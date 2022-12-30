<?php
	session_start();
	if (!isset($_SESSION['admin']))
	{
		header("Location: inicio.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin | Panel</title>
</head>
<body>
	<form method="get" action="action/nuevoUsuario.php">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="pass" placeholder="Contraseña">
		<input type="submit" value="Crear">
	</form>
	<table>
		<?php
			//MUESTRA TABLA CON NOMBRES USUARIOS
			include("utils/csv.php");
			$csv = new csv('tecnicos_pass.csv');
			$csvArr = $csv->csvToArray();
			foreach ($csvArr as $key => $value) {
				echo "<tr>";
				if ($key == 0) {
					echo "<th>Nombre</th>";
					echo "<th>Acciones</th>";
				}
				else
				{
					foreach ($value as $key2 => $value2) {
						if($key2 != 1)
							echo "<td>".$value2."</td>";
					}
					echo "<td><a href='action/eliminarUsuario.php?id=".$key."'>Eliminar</a></td>";
					echo "</tr>";
				}
			}
		?>
	</table>
</body>
</html>