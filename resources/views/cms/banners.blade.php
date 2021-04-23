<!DOCTYPE html>
<html lang="es">

<head>
	@include('common.head')
	<title>CMS</title>
	<style type="text/css">
		.slider_x {
			font-family: Roboto;
			font-style: normal;
			font-weight: bold;
			font-size: 19px;
			line-height: 22px;
			padding: 5px 0 10px 30px;
			color: #000000;
		}

		.editar_texto {
			position: absolute;
			top: 20%;
			left: -20%;
			cursor: pointer;
			z-index: 100;
		}

		.editar_foto {
			position: absolute;
			top: 18%;
			right: -58%;
			cursor: pointer;
			z-index: 100;
		}

		.editar_fondo {
			position: absolute;
			top: 2%;
			right: -115%;
			cursor: pointer;
			z-index: 100;
		}

		.btn_guardar {
			position: absolute;
			bottom: 5%;
			right: -120%;
			cursor: pointer;
			z-index: 100;
		}

		.input_editar_texto {
			margin-top: 10px;
			border: 0;
			background: none;
			outline: none;
			height: 100px;
			width: 480px;

		}

		.boton_carousel_cms {
			font-family: Roboto Condensed;
			font-style: normal;
			font-weight: bold;
			font-size: 12px;
			line-height: 18px;
			/* identical to box height, or 129% */
			background: #0C2849;
			text-align: center;
			color: #FFFFFF;
			outline: none !important;
			border-radius: 3px;
			border: 0px;
		}

		.carousel_titulo_cms {
			resize: none;
			border: none;
			overflow: hidden;
			width: 100%;
			background-color: inherit;
			font-family: Roboto Condensed;
			font-style: normal;
			font-weight: bold;
			font-size: 2rem;
			line-height: 2.7rem;
			color: #FFFFFF;
		}

		.carousel_subtitulo_cms {
			resize: none;
			border: none;
			overflow: hidden;
			width: 100%;
			background-color: inherit;
			font-family: Roboto Condensed;
			font-style: normal;
			font-weight: 300;
			font-size: 18px;
			line-height: 24px;
			/* or 133% */
			display: flex;
			align-items: center;
			color: #FFFFFF;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			@include('cms.common.navbar_cms')
			<div class="cms-container col-10 px-0">
				<div class="row mx-0" id="contenedorSlidersCms">
					@foreach ($sliders as $slider)
					<div class="col-12 px-0 mb-5">
						<div class="row px-0 mx-0 mt-2">
							<h1 class="slider_x col-auto">Slider {{$slider->order}}</h1>
							<form action="/slidershidden/{{$slider->id}}" method="post" class="col-auto ml-auto">
								@csrf
								<input type="hidden" name="_method" value="PUT">
								@if ( $slider->status )
								<input type="hidden" name="band" value="0">
								<button class="btn btn-primary px-3" onclick="mostrarOcultar(this)" value="{{$slider->id}}">Ocultar Slider</button>
								@else
								<input type="hidden" name="band" value="1">
								<button class="btn btn-secondary px-3" onclick="mostrarOcultar(this)" value="{{$slider->id}}">Mostrar Slider</button>
								@endif
							</form>
						</div>
						@include('cms.slider_cms')
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<form hidden action="" method="post" enctype="multipart/form-data" id="formCargarSlider">
		@csrf
		<textarea name="titulo" id="tituloForm" hidden></textarea>
		<textarea name="subtitulo" id="subtituloForm" hidden></textarea>
		<input type="text" name="color1Form" hidden id="color1Form">
		<input type="text" name="color2Form" hidden id="color2Form">
		<input type="hidden" name="_method" value="PUT">
	</form>

	<!-- Modal Colores Fondo -->
	<div class="modal fade Modalfondo" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header" id="headerModal">
					<h5></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modalCloseButton">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Se realizara un gradiente(cambio) desde la parte superior del banner hasta su parte inferior</p>
					<div>
						<span>Selecciona el color superior</span>
						<input name="color1" type="color" value="#FF824B" />
					</div>
					<div class="mt-3">
						<span>Selecciona el color inferior</span>
						<input name="color2" type="color" value="#D04102" />
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="button" class="btn btn-primary" onclick="cambiarFondo(this)">Aceptar</button>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function editarTexto(element) {
			var titulo = element.parentNode.getElementsByClassName("carousel_titulo_cms").item(0)
			console.log(titulo)
			if (titulo.disabled) {
				titulo.disabled = false
				titulo.style.backgroundColor = "#FF824B"
				var subtitulo = element.parentNode.getElementsByClassName("carousel_subtitulo_cms").item(0)
				subtitulo.disabled = false
				subtitulo.style.backgroundColor = "#FF824B"
			} else {
				titulo.disabled = true
				titulo.style.backgroundColor = "inherit"
				var subtitulo = element.parentNode.getElementsByClassName("carousel_subtitulo_cms").item(0)
				subtitulo.disabled = true
				subtitulo.style.backgroundColor = "inherit"
			}
		}

		function clickFile(element) {
			let divSuperior = element.parentNode;
			divSuperior.getElementsByTagName("input").item(0).click();
		}

		function cambioFoto(element) {
			//obtengo el elemento padre 
			let divPadre = element.parentNode.parentNode.parentNode;
			//obtengo las imagenes que se eligieron
			const imagenes = element.files;
			const primeraImagen = imagenes[0];
			const objectURL = URL.createObjectURL(primeraImagen);

			let divPadreImagenes = divPadre.getElementsByClassName("container_carros_banner");
			divPadreImagenes.item(0).innerHTML = "<img class='carrousel_carro1' src='" + objectURL + "'/><img class='carrousel_carro2' src='" + objectURL + "'/><img class='carrousel_carro3' src='" + objectURL + "'/>";
		}

		function clickFondo(element) {
			//obtengo el elemento padre 
			let divPadre = element.parentNode.parentNode.parentNode.parentNode.parentNode
			//obtengo el tecto del titulo del slider (ej. Slider 4)
			let sliderName = divPadre.firstElementChild.firstElementChild.textContent
			//creo el elemento h5
			var titleNew = document.createElement("h5")
			// crear algún contenido para el nuevo elemento
			var sp1_content = document.createTextNode(sliderName)
			// aplicar dicho contenido al nuevo elemento
			titleNew.appendChild(sp1_content)
			// construir una referencia al nodo existente que va a ser reemplazado
			var divHeaderModal = document.getElementById("headerModal")
			var titleOld = divHeaderModal.firstElementChild
			// reemplazar el nodo sp2 existente con el nuevo elemento span sp1
			divHeaderModal.replaceChild(titleNew, titleOld)
		}

		function cambiarFondo(element) {
			var color1 = document.getElementsByName("color1").item(0).value
			var color2 = document.getElementsByName("color2").item(0).value
			//Ahora busco el slider q se le esta cambiando el color
			//primero obtengo el texto del titulo del modal, lo q me indicara cual es el slider
			var title = document.getElementById("headerModal").firstElementChild.textContent
			//Paso a entero el numero del slider
			var key = parseInt(title.substr(7, 1), 10)
			//busco el contenedor princiapl, q contiene todos los sliders
			var contenedor = document.getElementById("contenedorSlidersCms")
			//busco el slider especifico
			var sliderTarget = contenedor.children.item(key - 1)
			//Busco el carosuel
			var aux = sliderTarget.lastElementChild
			//aplico los colores
			aux.style.background = "linear-gradient(" + color1 + "," + color2 + ")"
			//agrego los colores a los inputs para luego agregarlos al formulario
			color1Input = sliderTarget.getElementsByClassName("color1").item(0).value = color1
			color2Input = sliderTarget.getElementsByClassName("color2").item(0).value = color2
			//cierro el modal
			document.getElementById("modalCloseButton").click()
		}

		function guardarSlider(element) {
			var form = document.getElementById("formCargarSlider")
			var div = element.parentNode.parentNode.parentNode.parentNode.parentNode
			var titulo = div.lastElementChild.getElementsByClassName("carousel_titulo_cms").item(0).value
			var subtitulo = div.lastElementChild.getElementsByClassName("carousel_subtitulo_cms").item(0).value
			var id = div.getElementsByClassName("id_slider").item(0).value
			var color1 = div.getElementsByClassName("color1").item(0).value
			var color2 = div.getElementsByClassName("color2").item(0).value
			var fotoCar = div.lastElementChild.getElementsByClassName("fotoCarInput").item(0)
			//agrego los campos al form
			document.getElementById("tituloForm").innerHTML = titulo
			document.getElementById("subtituloForm").innerHTML = subtitulo
			document.getElementById("color1Form").value = color1
			document.getElementById("color2Form").value = color2
			form.appendChild(fotoCar)
			//ahora agrego el id al atributo action del form
			form.setAttribute('action', '/editsliderscms/' + id)
			form.submit();
		}
	</script>
	@include('common.footer_scripts')
</body>

</html>