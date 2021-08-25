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

// var input = document.querySelector('.myNum');
// input.addEventListener('input',function(){
//   if (this.value.length > 6)
//      this.value = this.value.slice(0,6);
// })
