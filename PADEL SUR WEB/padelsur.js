$(window).scroll(function() {
    if ($("#menugrande").offset().top < 100) {
        $("#menugrande").addClass("navbarpadel");
    } else {
        $("#menugrande").removeClass("navbarpadel");
     
}
}) 





// selector
var menu = document.querySelector('.hamburger');





// method
function toggleMenu (event) {
  this.classList.toggle('is-active');
  document.querySelector( ".menuppal" ).classList.toggle("is_active");
  event.preventDefault();
}

// event
menu.addEventListener('click', toggleMenu, false);

//Solución con jQUery
/*$(document).ready(function(){
	$('.hamburger').click(function() {
		$('.hamburger').toggleClass('is-active');
		$('.menuresponsive').toggleClass('is-active');
		return false;
	});
});*/


// COMPARAR CONTRASEÑAS y ADMITIR ADMINISTRADOR

//Defino el usuario y contraseña que se va a admitir



//Comparar contraseñas y permitir ingreso
let btn1 = document.querySelector('#btn1')
//addEventListener -> escucha el evento del objeto seleccionado. (evento,funcion anonima a ejecutar -> callback)
btn1.addEventListener("click",

function(){
    var usuario = 'Admin1';
    var contrasenia = 221193;
    let usuario1 = document.querySelector('#usuario').value
    let contrasenia1 = document.querySelector('#contraseña').value
    let resp = document.querySelector('#respuesta')
        // or -> || (doble pipe)
        // and -> &&
        if(usuario1 === usuario){

            if(contrasenia1 === contrasenia){
                resp.innerHTML="Bienvenido al Panel de Administrador"
                usuario1.style.background="green"
                contrasenia1.style.background="green"
            }else{
                resp.innerHTML="El usuario o contraseña no coinciden. :("
                usuario1.style.background="red"
                contrasenia1.style.background="red"
            }
        }else{
            
            resp.innerHTML="Alguno de los datos esta vacío..."
			}
		
		
    }//cierra function()

);


//SCROLL BARRA NAV -//



