
// principal image 
const productImage = document.querySelector('.slider-main-desktop')


//desaparecer imagenes principales
productImage.addEventListener('click', () =>  {
	ocultarImagenes()
});


function ocultarImagenes(){
	let galeria = document.querySelector('.galeria-desktop')
	let sliderPrincipal = document.querySelector('.slider-main-dos-desktop')
	let datosActive = document.querySelector('.publicacion-desktop-slider-active')
	
	productImage.classList.add('hidden')
	galeria.classList.add('hidden')

	sliderPrincipal.classList.add('active')
	datosActive.classList.add('on')
}