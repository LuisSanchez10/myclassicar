@extends('layouts.main')

@section('head')
    <title>Publicacion Producto</title>
@endsection

<style type="text/css">
	
	.principal-font{
	    padding: 0;
	    margin: 0;
	    font-family: 'Roboto Condensed', sans-serif;
	    font-size: 1rem;
	}

	.nav-opciones{
		padding-right: 0;
		padding-left: 0;
	}

</style>

@section('content')
	<input type="hidden" name="" value="{{$producto->id}}" id="input_value">
	@include('vista_publicacion.vista_publicacion_mobile')
	@include('vista_publicacion.vista_publicacion_desktop')

<script type="text/javascript">
	const mobile = document.querySelector('#mobile_publicacion')
	const desktop = document.querySelector('#desktop_publicacion')


	$(document).ready(function(){
	  $('.slider-main-mobile').slick({
	    autoplay: true,
	    mobileFirst: true,
	    arrows: false,
	    touchMove: true,
	    prevArrow: `<div class="slider-click-mobile slider-left" id="slider-letf">
			            	<img src="{{ asset('img/iconos/left.png') }}">
			        </div>`,
		nextArrow: `<div class="right-mobile" id="slider-letf">
			            	<img src="{{ asset('img/iconos/left.png') }}">
			        </div>`
	  });
	});

	$(document).ready(function(){
	  $('.slider-main-dos-desktop').slick({
	    autoplay: false,
	    arrows: true,
	    touchMove: true,
	    prevArrow: `
	    	<span class=" slider-left slider-block">
	    		<img src="{{ asset('img/iconos/left.png') }}">
	    	</span>
	    `,
	    nextArrow:`
	    	<span class="slider-right slider-block" >
	    		<img src="{{ asset('img/iconos/left.png') }}">
	    	</span>
	    `
	  });
	});


	document.addEventListener('DOMContentLoaded', () => {
		rezise_change()
	});

	window.addEventListener('resize', () => {
		rezise_change()
	})


	function rezise_change(){
		if(screen.width <= 950){
			mobile.style.display = 'block'
			desktop.style.display = 'none'
		}

		if (screen.width >= 1000) {
			mobile.style.display = 'none'
			desktop.style.display = 'block'
		}
	}
</script>

<script src="{{ asset('js/publicacion-slider.js') }}"></script>
@include('vista_publicacion.js_publicacion')

@endsection