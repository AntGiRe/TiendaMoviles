<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="inc/style.css">
	<title>Mostrar reparaciones</title>
</head>
<body>
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
			$csvArr = $csv->csvToArray();
			foreach ($csvArr as $key => $value) {
				echo "<tr>";
				if($value[2] == 'Sin asignar')
				{
					foreach ($value as $key2 => $value2) {
						echo "<td>".$value2."</td>";
					}
					echo "<td><a href='action/asignar.php?id=".$key."'>Te elijo a ti</a></td>";
					echo "</tr>";
				}
			}
		?>
	</table>
</body>
</html>