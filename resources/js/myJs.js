/*script de carga*/
window.addEventListener('load', function(){

  carga();
  // setTimeout(carga,4000);

  function carga(){
    document.getElementById('loader').classList.add('visually-hidden');
    document.getElementById('contenido').classList.remove('visually-hidden');
  }
});

/*Script para agregar y eliminar la clase active en el nav*/
let local = location.href;
let navbar = document.querySelector('.navbar-nav').querySelectorAll('a');
let navbarLength = navbar.length;

for (var i = 0; i < navbar.length; i++) {
  if (navbar[i].href === local) {
    navbar[i].classList.add('active');
  }
}

/*Script para logo en pantallas menores 768px*/
