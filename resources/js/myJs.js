/*Script para agregar y eliminar la clase active en el nav*/
let local = location.href;
let navbar = document.querySelector('.navbar-nav').querySelectorAll('a');
let navbarLength = navbar.length;

for (var i = 0; i < navbar.length; i++) {
  if (navbar[i].href === local) {
    navbar[i].classList.add('active');
  }
}
