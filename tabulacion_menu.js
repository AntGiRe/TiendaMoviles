const tabs = document.querySelector('#tabs');
const tabButtons = tabs.querySelectorAll('.tab');
const tabContents = tabs.querySelectorAll('.tab-content');

console.log(tabs + 'tabs');
console.log(tabButtons + 'tabButtons');
console.log(tabContents + 'tabContents');


function handleTabClick(event) {
  // Ocultar todos los contenidos de las pestañas
  tabContents.forEach(tabContent => {
    tabContent.style.display = 'none';
  });

  // Quitar la clase "active" de todas las pestañas
  tabButtons.forEach(tabButton => {
    tabButton.classList.remove('active');
  });

  // Mostrar el contenido de la pestaña seleccionada
  const clickedTab = event.currentTarget;
  const tabContentId = clickedTab.getAttribute('aria-controls');
  const tabContent = tabs.querySelector(`#${tabContentId}`);

    console.log(clickedTab + 'clickedTab');
    console.log(tabContentId + 'tabContentId');
    console.log(tabContent + 'tabContent');

  tabContent.style.display = 'block';

  // Añadir la clase "active" a la pestaña seleccionada
  clickedTab.classList.add('active');
}

tabButtons.forEach(tabButton => {
  tabButton.addEventListener('click', handleTabClick);
});

// Mostrar el contenido de la primera pestaña por defecto
tabButtons[0].click();


