/*script de carga*/
window.addEventListener('load', function(){

  carga();
  function carga(){
    document.getElementById('loader').classList.add('visually-hidden');
    document.getElementById('contenido').classList.remove('visually-hidden');
  }

  /*Script para agregar y eliminar la clase active en el nav*/
  let url = location.href;

  let recorte = url.split("?");
  let local = recorte[0];

  let navbar = document.querySelector('.navbar-nav').querySelectorAll('a');
  let navbarLength = navbar.length;

  for (var i = 0; i < navbar.length; i++) {
    if (navbar[i].href === local) {
      navbar[i].classList.add('active');
    }
  }

  /*Scrip navside admin*/
  let navadmin = document.querySelector('.menu').querySelectorAll('a');
  let navadminLength = navadmin.length;

  for (var x = 0; x < navadmin.length; x++) {
    if (navadmin[x].href === local) {
      navadmin[x].classList.add('select');
    }
  }

  /*Script validar precio y decimal*/
   var input = document.querySelector('.myNum');

   input.onkeydown = (e)=>{
       const currentValue = input.value;
       const regex = /^\d{0,6}(\.\d{1,2})?$/;

       setTimeout(function(){
         const newValue = input.value;
         if(!regex.test(newValue))
           input.value = currentValue;
       }, 0);
   }

   var input2 = document.querySelector('.myNum2');

   input2.onkeydown = (e)=>{
       const currentValue2 = input2.value;
       const regex2 = /^\d{0,6}(\.\d{1,2})?$/;

       setTimeout(function(){
         const newValue2 = input2.value;
         if(!regex2.test(newValue2))
           input2.value = currentValue2;
       }, 0);
   }

});
