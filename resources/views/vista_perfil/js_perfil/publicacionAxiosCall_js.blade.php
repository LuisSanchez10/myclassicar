

<script type="text/javascript">

 const publicacionesActivas = document.querySelector('#publicaciones_activadas');
 
 // array de publicaciones
 let publicaciones_array = [];
 

 //parametro para filtrar vista de En curso, inactiva o pendiente
 let publicacion_parametro = {
 	id: 1,
 }





function loaderElements(){
	publicaciones_array = [];
	publicacionesActivas.innerHTML = `
		<div class="spinner">
		  <div class="rect1"></div>
		  <div class="rect2"></div>
		  <div class="rect3"></div>
		  <div class="rect4"></div>
		  <div class="rect5"></div>
		</div>
	`;
}

function ActivePause(){
	let container = document.getElementById('container_publicaciones');
	let spinner = document.getElementById('spinner_container_perfil');

	container.style.display = 'none';
	spinner.style.display = 'block';

	setTimeout( () => {
		container.style.display = 'block';
		spinner.style.display = 'none';
	}, 1800)

}


//agregar publicaciones cuando se ingrese a publicaciones 
function mostrarPublicaciones(){

	loaderElements();

	getPublicaciones();
}



// renderiza las publicaciones del array en la vista
function llenarPublicaciones(){
	publicacionesActivas.innerHTML ="";

	let parametro_vista = publicacion_parametro.id;


	if(publicaciones_array.length > 0){

		publicaciones_array.forEach( element => {
			let contenedor = document.createElement('div')
			contenedor.classList.add('publicaciones-datos')
			let publicacion = `
				<img class="publicaciones-img" src="{{ asset('storage/${element.photo.car_photo}') }}" alt="">
				<div class="publicaciones-body col-9 col-md-10 col-xl-11">
				        <div class="publicaciones-body-datos">
				            <div>
				                <h2 class="publicaciones-datos-title principal-font">${element.modelo}</h2>
				                <p class="publicaciones-datos-price principal-font">${element.publicacion.price}</p>
				            </div>

				            <div class="publicaciones-acciones">
				                <a href="/perfil/pausa/${element.publicacion.id}" class="publicaciones-datos-acciones  botones-pausar ${parametro_vista == 1 ? 'activada' : 'desactivada'} principal-font" id="${element.publicacion.id}" style="padding-right: .4rem;">Pausar</a>

				                <a href="/perfil/active/${element.publicacion.id}" class="principal-font publicaciones-activar-accion boton-activar ${parametro_vista == 0 ? 'activada' : 'desactivada'}" id="${element.publicacion.id}">Activar</a>

				                <a href="#" class="publicaciones-eliminar-accion boton-eliminar principal-font">Eliminar</a>

				                <a href="/editar/${element.publicacion.id}" class="publicaciones-datos-acciones dos principal-font">Editar</a>
				            </div>
				        </div>
				        <div>
				            <span class="publicaciones-datos-caracteristica">${element.year}</span>
				            <span class="publicaciones-datos-caracteristica">${element.publicacion.kilometres} km</span>
				        </div>
				    </div>
				    <div class="eliminar-publicacion-perfil hidden">
				    	<h3 class="principal-font modal-eliminar-title">¿Seguro que quiere eliminar la publicación?</h3>
				    	<div class="botones-eliminar-container">
				    		<div class="boton-modal-eliminar principal-font boton-modal-accion-eliminar" id="${element.publicacion.id}">
				    			Eliminar
				    		</div>
				    		<div class="boton-modal-eliminar principal-font boton-modal-accion-cancelar">
				    			Cancelar
				    		</div>
				    	</div>
				    </div>
				    `
			contenedor.innerHTML += publicacion;

			publicacionesActivas.appendChild(contenedor);
		});

		eventosParaBotones()
	} else {
		publicacionesActivas.innerHTML = `
		<div class="row mb-3">
          <div class="edit-publicaciones-body my-5 col-12">
              <h2 class="publicaciones-body-title principal-font mb-4">Nada por aquí</h2>
              <p class="publicaciones-body-subtitle  principal-font col-10 col-md-6 col-xl-5 text-center">Aun no tienes nada publicado, pero
                  podes empezar a vender tu auto
                  ahora mismo.
              </p>
              <button class="btn boton-vender mb-5">Vender</button>
          </div>
    	</div>`
	}

}



//-----------------------------------------LLAMADAS AL SERVIDOR CON AXIOS-----------------------------------------



//obtener publicaciones
function getPublicaciones(){

	axios.get('/perfil/publicaciones', {
    // Asignamos el valor de userInfo a params
    	params: {
    		id: publicacion_parametro.id
    	}
  	}).then(response => {

		publicaciones_array = response.data;
		setTimeout( () => {
			llenarPublicaciones()
		}, 2000);
	})
	.catch(response => {

	});

}


 // pausar publicaciones 
function pausePublicaciones(id, element){

	let elemento = element;
	axios.post(`/perfil/pausa/${id}`)
		.then(response => {
			let contenedor = document.getElementById('publicaciones_activadas')
			elemento.remove();
			if(contenedor.childElementCount == 0){
				ActivePause()
				publicaciones_array = [];
				setTimeout( () => {
					llenarPublicaciones()
				}, 1800)
			} else {
				ActivePause()
			}
		})	
		.catch(error => {
			console.log(error)
		});
}

//activar publicaciones
function ativePublicacion(id, element){

	let elemento = element;
	axios.post(`/perfil/active/${id}`)
		.then(response => {
			let contenedor = document.getElementById('publicaciones_activadas')
			elemento.remove();
			if(contenedor.childElementCount == 0){
				ActivePause()
				publicaciones_array = [];
				setTimeout( () => {
					llenarPublicaciones()
				}, 1800)
			} else {
				ActivePause()
			}
		})	
		.catch(error => {
			console.log(error)
		});
}

//eliminar publicaciones
function deletePublicacion(id){

	axios.post(`/perfil/publication/delete/${id}`)
		.then(response => {
			console.log(response.data);
			mostrarPublicaciones();
		})
		.catch(error => {
			console.log(error)
		});
}

//----------------------------------------- FILTROS -----------------------------------------

//filtrando por marca
function getFilterBrand(id){

	axios.get(`/perfil/publicaciones/${id}`, {
    // Asignamos el valor de userInfo a params
    	params: {
    		id: publicacion_parametro.id
    	}
  	}).then(response => {
  		loaderElements();

  		console.log(response.data);
  		llenadoModelosSelector(response.data.modelos);
  		selectorPublicaciones(response.data.publicaciones);

	})


	.catch(response => {

	});
}

// filtrando por modelo
function getFilterModel(model){
		axios.get(`/perfil/publicaciones/model/${model}`, {
	    // Asignamos el valor de userInfo a params
	    	params: {
	    		id: publicacion_parametro.id
	    	}
	  	}).then(response => {
	  		loaderElements();
	  		console.log(response.data);
	  		selectorPublicaciones(response.data);

		})


		.catch(response => {
			
		});
}


//----------------------------------------- LLENADO DE SELECTORES Y FOR EACH PARA PUBLICACIONES -----------------------------------------



//llenado de modelos
function llenadoModelosSelector(target){
	const modeloSelect = document.getElementById('selectModelos');
	let modeloPlantilla = ''

	modeloSelect.innerHTML = '';

	target.forEach( element =>{
		modeloPlantilla = `
			<ul class="options-main">
			    <li class="select-options-menu publicacion-selects model-selects select-name" id="${element.id}">${element.model}</li>
			</ul>	
		`
		modeloSelect.innerHTML += modeloPlantilla;
	});
	llenandoEvento()
	return
}


// llenado array de publicaciones
function selectorPublicaciones(target){


	target.forEach( element => {
		publicaciones_array.push(element);
	});

	setTimeout( () => {
		//rederizar
		llenarPublicaciones()
	}, 1300);
}

//eventos de acciones para los botones de cada publicacion 

function eventosParaBotones(){
	let BotonesPausar = document.querySelectorAll('.botones-pausar');
	let BotonesActivar = document.querySelectorAll('.boton-activar');
	let BotonesEliminar = document.querySelectorAll('.boton-eliminar');
	let BotonesModalEliminar = document.querySelectorAll('.boton-modal-accion-eliminar');
	let BotonesModalCancelar = document.querySelectorAll('.boton-modal-accion-cancelar');



	BotonesPausar.forEach(boton => {
		boton.addEventListener('click', (e) => {
			e.preventDefault();
			let elemento = e.target.parentNode.parentNode.parentNode.parentNode


			pausePublicaciones(e.target.id, elemento);
		})
	});

	BotonesActivar.forEach(boton => {
		boton.addEventListener('click', (e) => {
			e.preventDefault();
			let elemento = e.target.parentNode.parentNode.parentNode.parentNode
			ativePublicacion(e.target.id, elemento)
		})
	});

	BotonesEliminar.forEach(boton => {
		boton.addEventListener('click', (e) => {
			e.preventDefault();
			let elemento = e.target.parentNode.parentNode.parentNode.parentNode
			elemento.children[2].classList.remove('hidden');
		})
	});

	BotonesModalEliminar.forEach(boton => {
		boton.addEventListener('click', (e) => {
			e.preventDefault();
			deletePublicacion(e.target.id);
		})
	});

	BotonesModalCancelar.forEach(boton => {
		boton.addEventListener('click', (e) => {
			e.target.parentNode.parentNode.classList.add('hidden');
		})
	});
}


////----------------------------------------- CAMBIOS DE LA VISTA -----------------------------------------

function publicacionesEnCurso(){
	publicacion_parametro.id = 1;
	mostrarPublicaciones();
}	

function publicacionesInactivas(){
	publicacion_parametro.id = 0;
	mostrarPublicaciones();
}

function publicacionesPendientes(){
	publicacion_parametro.id = 3;
	mostrarPublicaciones();
}

// llenando evento de los modelos llamados
function llenandoEvento(){
	const modelosEvents = document.querySelectorAll('.model-selects')
	
	modelosEvents.forEach( selects =>{
	    selects.addEventListener('click', (e) =>{
	        publicacionSelectChange(e.target)
	        getFilterModel(e.target.id)
	    });
	});
}

</script>