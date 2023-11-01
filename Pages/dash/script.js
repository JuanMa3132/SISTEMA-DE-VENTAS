
const hamburguesa = document.getElementById("hamburger")
const elementAMostrar = document.getElementById('menu');

hamburguesa.addEventListener('click', function () {
    if (elementAMostrar.style.display === 'none') {
        elementAMostrar.style.display = 'block';
        hamburguesa.style.position= 'fixed'
        hamburguesa.style.left = '90%'
        hamburguesa.style.width = '20px'
        hamburguesa.style.transition = 'all 1s ease-in-out'
    }
    else {
        elementAMostrar.style.display = 'none';
    }
});


function handleResize() {
  const windowWidth = window.innerWidth;

  if (windowWidth >= 706 && elementAMostrar.style.display === 'none') {
    elementAMostrar.style.display = 'block';
  } else if (windowWidth < 706) {
    // Restablecer el estilo si el ancho es mayor a 706 píxeles
    elementAMostrar.style.display = 'none';
  }
}

// Agregar un controlador de eventos al evento 'resize' de la ventana
window.addEventListener('resize', handleResize);

// Llama a la función handleResize para verificar el estado inicial
handleResize();


