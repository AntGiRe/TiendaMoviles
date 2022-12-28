<!DOCTYPE html>
<?php
	session_start();
	if(isset($_SESSION['user'])){
		header("Location: gestion.php");
	}
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="inc/style.css">
	<title>Técnico | Inicio Sesión</title>
</head>
<body>
	<div class="area" >
            <ul class="circles">
				<li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
			<div class="login">
				<h1>Inicia sesión</h1>
				<form method="get" action="action/login.php">
			<div class="form">
				<input type="text" name="user" autocomplete="off" required />
				<label for="text" class="label-name">
					<span class="content-name">
					Usuario
					</span>
				</label>
</div><br>
<div class="form">
				<input type="password" name="pass" autocomplete="off" required />
				<label for="text" class="label-name">
					<span class="content-name">
					Contraseña
					</span>
				</label>
			</div><br>
			<input type="submit" value="Entrar">
			</form>
			</div>
    </div >
</body>
</html>