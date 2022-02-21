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



// Data Picker Initialization
$( function() {
	$( "#datepicker1" ).datepicker();
  } );
  
	$( function() {
	  $( "#datepicker2" ).datepicker();
	} );


// MENU SCROLL //

$(window).scroll(function() {
    if ($("#menugrande").offset().top > 200) {
        $("#menugrande").addClass("navbarpadel");
    } else {
        $("#menugrande").removeClass("navbarpadel");
     
}
}) ;


/// determina si un elemento comienza a ser visible
function isElementVisible(elem){
	let viewScrollTop = $(window).scrollTop(); // distancia de scroll superior
	let viewBottom = viewScrollTop + $(window).height(); // distancia de scroll + el alto actual de window (lo no visible por scroll + lo visible)
	let topElemD = $(elem).offset().top; // distancia desde el elemento hasta el tope superior del viewport
	return (topElemD < viewBottom);
 }
 
 
  // invoco una función anónima en el evento scroll sobre window
 $(window).on("scroll" ,function() {
	let elem = $('#historia'); // obtengo el elemento por id
	isElementVisible(elem) ? elem.addClass('animate__backInLeft') : elem.removeClass('animate__backInLeft'); // si es visible agrego la class, de lo contrario la remuevo
 });



 $(window).on("scroll" ,function() {
	let elem = $('#animarubicacion'); // obtengo el elemento por id
	isElementVisible(elem) ? elem.addClass('animate__backInLeft') : elem.removeClass('animate__backInLeft'); // si es visible agrego la class, de lo contrario la remuevo
 });



 
 
