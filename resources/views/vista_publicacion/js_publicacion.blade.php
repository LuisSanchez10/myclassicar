<script type="text/javascript">


	// id del producto
	const productId = document.getElementById('input_value');

	//contenedor de preguntas
	const contenedorMain = document.getElementById('preguntas_container');


	//enviar preguntas
	const botonEnviar = document.getElementById('enviarPregunta');

	const formulario = document.getElementById('form_preguntar')


	//array de preguntas
	let questions = []

	document.addEventListener('DOMContentLoaded', () => {
		GetQuestionWithAwnsers(productId.value)
	});

	if(botonEnviar){
		botonEnviar.addEventListener('click', (e) =>{
			
			e.preventDefault()
			
			enviarPregunta(productId.value, formulario.firstElementChild.value)

			formulario.reset()
		});
	}


	formulario.addEventListener('submit', (e) => {
		e.preventDefault();
		enviarPregunta(productId.value, formulario.firstElementChild.value)
		formulario.reset()
	});
	




function llenandoPreguntas(){
	
	if(questions != []){
		questions.forEach(element => {
			if(element.pregunta){
				let contenedorSub = document.createElement('div');
				contenedorSub.classList.add('preguntas-body-main');


				let dudas = `
						<p  class=" preguntas-body-pregunta principal-font">${element.pregunta.question}</p>
				`
				contenedorSub.innerHTML += dudas;

				if(element.respuesta){
					let respuesta = `
							<p  class="preguntas-body-respuesta principal-font">${element.respuesta.answer}</p>
					`
					contenedorSub.innerHTML += respuesta;
				}

				
				contenedorMain.appendChild(contenedorSub);

			}
		});
	} else {
		contenedorMain.innerHTML = `<p class="producto-preguntas-none principal-font ">Aún no hay preguntas...¡Se el primero! </p>`
	}
}


function agregarPreguntaCreada(element){
	let pregunta = `
		<div class="preguntas-body-main">
			<p  class=" preguntas-body-pregunta principal-font">${element.question}</p>
		</div>
	`

	contenedorMain.innerHTML += pregunta;
}
//llamada axios para traer preguntas

function enviarPregunta(id, pregunta){
		axios.post('/publicacion/enviar', {
	    // Asignamos el valor de userInfo a params
	    		question: pregunta,
	    		producto: id

	  	}).then(response => {
	  		agregarPreguntaCreada(response.data)
		})
		.catch(err => {
			console.log(err)
		});
}


function GetQuestionWithAwnsers(id){
	axios.get(`/publicacion/question/${id}`, {
    // Asignamos el valor de userInfo a params
    	params: {
    		id: 1
    	}
  	}).then(response => {
  		questions = response.data;
  		llenandoPreguntas();
	})
	.catch(response => {
		contenedorMain.innerHTML = `<p class="producto-preguntas-none principal-font ">Vaya parece que algo ha salido mal! </p>`
	});
}
</script>