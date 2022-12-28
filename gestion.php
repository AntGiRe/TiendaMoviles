<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width= 100%, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>

</head>

<body>

	<header>

		<!--CABECERA DEL LOGO ....-->
	</header>
	<main>
		<div id="tabs" role="tablist">

			<nav>
				<div class="tab " role="tab" aria-controls="tab1-content" aria-label="Primera pestaña para insertar reparaciones de un nuevo cliente" tabindex="0">Insertar Reparación Cliente</div>

				<div class="tab " role="tab" aria-controls="tab2-content" aria-label="Segunda pestaña para asignarse reparaciones por parte del técnico" tabindex="0">Reparar pendientes</div>

				<div class="tab" role="tab" aria-controls="tab3-content" aria-label="Tercera pestaña para gestionar lo referentes a las reparaciones" tabindex="0">Gestión Reparaciones Técnico</div>

				<div class="tab" role="tab" aria-controls="tab4-content" aria-label="Cuarta pestaña para ver la lista de reparaciones del técnico" tabindex="0">Mis reparaciones</div>

				<div class="tab" role="tab" aria-controls="tab5-content" aria-label="Cerrar Sesión" tabindex="0">Mis reparaciones</div>

			</nav>

			<div id="tab1-content" class="tab-content" role="tabpanel" aria-labelledby="tab1" aria-describedby="tab1-description">

				<div id="parte1">
					<?php include 'archivo1.php'; ?>
				</div>

				<p id="tab1-description">Formulario de inscripcion del cliente sobre una nueva reparación</p>
			</div>

			<div id="tab2-content" class="tab-content" role="tabpanel" aria-labelledby="tab2" aria-describedby="tab2-description">

				<div id="parte2">
					<?php include 'archivo2.php'; ?>
				</div>

				<p id="tab2-description">Visualización de las reparaciones para la asignación de una reparación</p>
			</div>

			<div id="tab3-content" class="tab-content" role="tabpanel" aria-labelledby="tab3" aria-describedby="tab3-description">

				<div id="parte3">
					<?php include 'archivo3.php'; ?>
				</div>

				<p id="tab3-description">Modificaciones de lista de reparaciones del técnico logeado</p>
			</div>

			<div id="tab4-content" class="tab-content" role="tabpanel" aria-labelledby="tab4" aria-describedby="tab4-description">

				<div id="parte4">
					<?php include 'archivo4.php'; ?>
				</div>

				<p id="tab4-description">Visualización de lista de reparaciones del técnico logeado</p>
			</div>

			<div id="tab5-content" class="tab-content" role="tabpanel" aria-labelledby="tab5" aria-describedby="tab5-description">

				<div id="parte5">
					<button aria-label="Cerrar sesión" onclick="if (confirm('¿Estás seguro de que quieres cerrar sesión?'))
            /* tras https añadir ruta del login index */
            { window.location.assign('https:login.php'); } else { /* código para mantener al usuario en la página actual es decir nada */ }">
						Cerrar sesión</button>
				</div>

				<p id="tab5-description">Cerrar Sesión</p>
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

				// Mostrar el contenido de la pestaña seleccionada
				const tabContentId = selectedTab.getAttribute('aria-controls');
				const tabContent = tabs.querySelector(`#${tabContentId}`);
				tabContent.style.display = 'block';
			}
		});
	</script>
<script>
		//funcion del intro controlador de eventos keypress
		const tabs_board = document.querySelectorAll('.tab');
const tabContents_board = document.querySelectorAll('.tab-content');

function showTabContent(index) {
  tabContents_board.forEach(tabContent => {
    tabContent_board.classList.remove('active');
  });
  tabContents_board[index].classList.add('active');
}

tabs_board.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    tabs_board.forEach(tab => {
      tab.classList.remove('active');
    });
    tab.classList.add('active');
    showTabContent(index);
  });

  // Add event listener for keydown
  tab.addEventListener('keydown', event => {
    // Check if the Enter key was pressed
    if (event.keyCode === 13) {
      tabs_board.forEach(tab => {
        tab.classList.remove('active');
      });
      tab.classList.add('active');
      showTabContent(index);
    }
  });
});
</script>








</body>

</html>