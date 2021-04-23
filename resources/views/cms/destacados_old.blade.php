<!DOCTYPE html>
<html lang="es">

<head>
	@include('common.head')
	<title>CMS</title>
	<style type="text/css">
		.divisor_destacados_cms {
			height: 5px;
			width: 100%;
			background-color: rgb(12, 40, 73);
		}

		.close_destacados_cms {
			position: absolute;
			top: 2%;
			right: 5%;
			cursor: pointer;
			color: #ffffff;
			font-size: 22px;
			font-family: Courier, serif;
			font-weight: bold;
		}

		.img_check_destacados_cms {
			position: absolute;
			top: 4%;
			left: 5%;
			cursor: pointer;
			width: 25px !important;
		}

		.circle_addon {
			height: 100px;
			width: 100px;
			border-radius: 50%;
			border: 4px #000000 solid;
			cursor: pointer;
		}

		.centrar_div {
			text-align: center;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.contanedor_card_cms .contenedor {
			width: 100% !important;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			@include('cms.common.navbar_cms')
			<div class="cms-container col-10 px-0">
				<div class="divisor_destacados_cms"></div>
				<div class="row mx-0 px-4">
					<!-- Destacados 1 -->
					<div class="container">
						<div class="row justify-content-center py-4 mb-1">
							<h2 class="titleSection">Slider 1 Publicaciones Destacadas</h2>
						</div>
						<div class="owl-carousel owl-theme d-none d-md-block destacados_carousel" id="destacados_1">
							<div class="item">
								@include('home.tarjeta_auto')
								<span class="close_destacados_cms">X</span>
								<img class="img_check_destacados_cms" src="/img/check_circle.svg">
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
								<span class="close_destacados_cms">X</span>
								<img class="img_check_destacados_cms" src="/img/check_circle.svg">
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
								<span class="close_destacados_cms">X</span>
								<img class="img_check_destacados_cms" src="/img/check_circle.svg">
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
								<span class="close_destacados_cms">X</span>
								<img class="img_check_destacados_cms" src="/img/check_circle.svg">
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
								<span class="close_destacados_cms">X</span>
								<img class="img_check_destacados_cms" src="/img/check_circle.svg">
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
								<span class="close_destacados_cms">X</span>
								<img class="img_check_destacados_cms" src="/img/check_circle.svg">
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
								<span class="close_destacados_cms">X</span>
								<img class="img_check_destacados_cms" src="/img/check_circle.svg">
							</div>
						</div>
					</div>
				</div>
				<!-- End Destacados 1-->
				<div class="divisor_destacados_cms my-4"></div>
				<div class="row mx-0 px-4">
					<!-- Destacados 2 -->
					<div class="container">
						<div class="row justify-content-center py-4 mb-1">
							<h2 class="titleSection">Slider 2 Publicaciones Destacadas</h2>
						</div>
						<div class="owl-carousel owl-theme d-none d-md-block destacados_carousel" id="destacados_2">
							<div class="item">
								@include('home.tarjeta_auto')
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
							</div>
							<div class="item">
								@include('home.tarjeta_auto')
							</div>
						</div>
					</div>
					<!-- End Destacados 2 -->
				</div>
				<div class="divisor_destacados_cms my-4"></div>
				<div class="row justify-content-center px-4">
					<div class="col-6 col-md-4 col-lg-3 contanedor_card_cms mt-4">
						@include('comprar.card_car')
					</div>
					<div class="col-6 col-md-4 col-lg-3 contanedor_card_cms mt-4">
						@include('comprar.card_car')
					</div>
					<div class="col-6 col-md-4 col-lg-3 contanedor_card_cms mt-4">
						@include('comprar.card_car')
					</div>
					<div class="col-6 col-md-4 col-lg-3 contanedor_card_cms mt-4">
						@include('comprar.card_car')
					</div>
					<div class="col-6 col-md-4 col-lg-3 contanedor_card_cms mt-4">
						@include('comprar.card_car')
					</div>
					<div class="col-6 col-md-4 col-lg-3 contanedor_card_cms mt-4">
						@include('comprar.card_car')
					</div>
					<div class="col-6 col-md-4 col-lg-3 contanedor_card_cms centrar_div mt-4">
						<div class="circle_addon centrar_div">
							<svg width="50%" height="50%" viewBox="0 0 79 74" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M44.3998 0.609375H34.5998V32.5704H0.299805V41.7022H34.5998V73.6632H44.3998V41.7022H78.6998V32.5704H44.3998V0.609375Z" fill="black" />
							</svg>
						</div>
					</div>
				</div>
				<div class="row my-4 ml-3">
					<strong class="col-12">
						Nota: Las Publicacion destacadas por pagos PREMIUN estan fichadas con el simbolo en la Parte Superior Izquierda.
					</strong>
					<strong class="col-12 mt-2">
						Nota: Si se desea cambiar una publicacion Gratis a PREMIUN, Solo arrastrar al Slider que desee.
					</strong>
					<strong class="col-12 mt-2">
						Nota: Si se desea agregar otra publicacion, Click es el simbolo y Seleccione la publicacion que agregara desde “Listado Inicial”
					</strong>
				</div>
			</div>
		</div>
	</div>
	<!-- Carousel 1 -->
	<script>
		$('#destacados_1').owlCarousel({
			loop: false,
			mouseDrag: false,
			nav: true,
			dots: false,
			navText: ['<img src="/img/arrow_left.svg"/>', '<img src="/img/arrow_right.svg"/>'],
			responsive: {
				0: {
					items: 1
				},
				500: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		})
		$('#destacados_2').owlCarousel({
			loop: false,
			mouseDrag: false,
			nav: true,
			dots: false,
			navText: ['<img src="/img/arrow_left.svg"/>', '<img src="/img/arrow_right.svg"/>'],
			responsive: {
				0: {
					items: 1
				},
				500: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		})
	</script>
	@include('common.footer_scripts')
</body>

</html>
