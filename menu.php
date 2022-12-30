<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="inc/style.css">
	<link rel="stylesheet" href="inc/style_accesibilidad.css">
	<title>Técnico | Panel</title>
</head>

<body>

	<header>
		<?php
			session_start();
			if(isset($_SESSION['user'])){
				echo "Bienvenido ".$_SESSION['user'];
			}else{
				header("Location: inicio.php");
			}
		?>
		<a href="action/logout.php">Cerrar Sesión</a>
	</header>
	<main>
		<div id="tabs" role="tablist">


			<nav>
				<fieldset>
					<a href="#tab1-content"   class="tab " role="tab" aria-controls="tab1-content" aria-label="Primera pestaña para insertar reparaciones de un nuevo cliente" tabindex="0"  aria-selected="true">Insertar Reparación Cliente</a>

					<a href="#tab2-content" class="tab " role="tab" aria-controls="tab2-content" aria-label="Segunda pestaña para asignarse reparaciones por parte del técnico" tabindex="0" aria-selected="false">Reparar pendientes</a>

					<a href="#tab3-content" class="tab" role="tab" aria-controls="tab3-content" aria-label="Tercera pestaña para gestionar lo referentes a las reparaciones" tabindex="0" aria-selected="false">Gestión Reparaciones Técnico</a>

					<a href="#tab4-content" class="tab" role="tab" aria-controls="tab4-content" aria-label="Cuarta pestaña para ver la lista de reparaciones del técnico" tabindex="0" aria-selected="false">Mis reparaciones</a>
				</fieldset>
			</nav>

			<div id="tab1-content" class="tab-content" role="tabpanel" aria-labelledby="tab1" aria-describedby="tab1-description">

				<div id="parte1">
					<?php include 'views/formRep.php'; ?>
				</div>

				<p id="tab1-description">Formulario de inscripcion del cliente sobre una nueva reparación</p>
			</div>

			<div id="tab2-content" class="tab-content" role="tabpanel" aria-labelledby="tab2" aria-describedby="tab2-description">

				<div id="parte2">
					<?php include 'views/mostrarRep.php'; ?>
				</div>

				<p id="tab2-description">Visualización de las reparaciones para la asignación de una reparación</p>
			</div>

			<div id="tab3-content" class="tab-content" role="tabpanel" aria-labelledby="tab3" aria-describedby="tab3-description">

				<div id="parte3">
					<?php include 'views/modRep.php'; ?>
				</div>

				<p id="tab3-description">Modificaciones de lista de reparaciones del técnico logeado</p>
			</div>

			<div id="tab4-content" class="tab-content" role="tabpanel" aria-labelledby="tab4" aria-describedby="tab4-description">

				<div id="parte4">
					<?php include 'views/modRep.php'; ?>
				</div>

				<p id="tab4-description">Visualización de lista de reparaciones del técnico logeado</p>
			</div>

		</div>

	</main>

	<footer>

	</footer>
	<!--Escrito al final para asegurarme que se carga -->
	<script src="tabulacion_menu.js"></script>
<script>
		//funcione el intro
		document.addEventListener('keydown', event => {
			if (event.key === 'Enter') {
				// Obtener la pestaña seleccionada
				const selectedTab = tabs.querySelector('.tab[aria-selected="true"]');

        console.log('--------');
        console.log(selectedTab + 'selectedTab');
				// Mostrar el contenido de la pestaña seleccionada
		const tabContentId = selectedTab.getAttribute('aria-controls');
		const tabContent = tabs.querySelector(`#${tabContentId}`);
        console.log(tabContentId + 'tabContentId');
        console.log(tabContent + 'tabContent');

				tabContent.style.display = 'block';
			}
		});	</script>
</body>

</html>