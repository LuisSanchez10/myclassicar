

<style>

/* preguntas select datos mobile version */


.edit-preguntas-usuario{
    position: relative;
    margin-left: 1.3rem;
    background-color: #fff !important;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    left: 3%;
    display: none;
}

.edit-preguntas-usuario.vista-on{
    display: block;
}

.publicaciones-title.option-active{
    color: #000;
}

.pregunta-usuario-info{
    width: 92.5%;
    display: flex;
    margin-left: 1rem;
    border-bottom: 1px solid #B3B3B3;
}

.usuario-img{
    width: 70px;
    height: 70px;
    border-radius: 100px;

}

.usuario-pregunta-main{
    flex:1;
}

.usuario-pregunta{
    display: flex;
    padding: 0 1rem;
    justify-content: space-between;
    align-items: center;
}

.select-name{
    font-weight: 300;
}

.preguntas-title{
    padding: 0;
    font-size: .9rem;
}

.preguntas-subtitle{
    margin-top: .5rem;
    font-size: .8rem;
    padding: 0 1rem;
    margin-bottom: 0;
    font-weight: 300;
}

.pregunta-count-body{
    display: flex;
}


.preguntas-count{
    position: relative;
    bottom: .4rem;
    font-weight: 300;
    font-size: .7rem;
    color: #000000;
    border-bottom: 1px solid black;
}

.preguntas-action-main{
    padding: 0 1rem;
}
.preguntas-action{
    margin-right: 1rem;
    font-size: .8rem;
    font-weight: 300;
    color: #999999;
}

.preguntas-action:hover{
    text-decoration: none;
    color: #999999;
}

.formulario_responder_question{
    width: 50%;
    border: 1px solid #999999;
    background: transparent;
    padding: .15rem 0 0 .15rem;
    border-radius: 4px;
}

.formulario_responder_question_botton{
    background: #DE5214;
    padding: .15rem .6rem 0;
    border-radius: 4px;
    border: none;
    color: #fff;
}


.respuesta-question{
    color: #000;
    font-weight: bold;
    margin: 0;
    margin-left: .5rem;
    margin-bottom: .4rem;
}

.respuesta-question:last-child{
    margin-bottom: .8rem;
}


@media (min-width: 768px){
    /* preguntas select datos tablet version */

    .filtros-busqueda{
        display: flex;
        justify-content: space-around;
    }

    .select-main{
        padding: .2rem .6rem;
        display: flex;
       
        border-radius: 3px;
        border: 1px solid #B3B3B3;
        cursor: pointer;
        margin-bottom: 1rem;
    }

    .select-preguntas{
        align-items: center;
        justify-content: space-between;
    }

    .select-name{
        font-family: 'Roboto Condensed', sans-serif;
        font-size: .8rem;
    }

    .select-icon{
        transform: translateY(-15%);
    }

    .preguntas-title{
        padding: 0;
        font-size: 1rem;
    }

    .pregunta-subtitle{
        font-size: .9rem;
    }
}


@media (min-width: 1000px){

    .pregunta-usuario-info{
        margin-left: 2.5rem;
    }

    .publicaciones-datos-acciones{
        padding-right: 2rem;
        font-size: .8rem;
    }

    .publicaciones-datos-acciones:nth-child(2){
        padding-left: 1rem;
    }
}

.preguntas-opciones-box{
    cursor: pointer;
}
</style>






<div class="edit-preguntas-usuario mt-4 col-10 col-md-7 mt-3" id="preguntas-vista">
    <div class="row mb-4">
        <div class="publicaciones-opciones py-3 col-12" id="preguntas_opciones_main">
            <div class="en-curso preguntas-opciones-box">
                <h2 class="publicaciones-title preguntas-vista-opciones principal-font option-active">Enviadas</h2>
            </div>
            <div class="inactivas preguntas-opciones-box">
                <h2 class="publicaciones-title preguntas-vista-opciones principal-font">Recibidas</h2>
            </div>
        </div>
    </div>
    
    <!-- filtro preguntas -->
    <div class="row mb-3">
        <!-- Perfil publicaciones filtrado activas  -->
        <div class="edit-publicaciones-activas col-12"  >
            <div class="filtros-busqueda select-preguntas-main col-12">
                <div class="select-main select-preguntas  col-12 col-md-3" style="visibility: hidden;">
                    <span class="select-name principal-font">Reciente</span>
                    <i class="select-icon">
                        <svg width="10" height="10" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.0249 4.47485L4.5249 7.97485L1.0249 4.47485" stroke="black"/>
                        </svg>  
                    </i>                                          
                </div>
            </div>
        </div>
    </div>

    <!--  preguntas Datos -->
  <div>
      @forelse($preguntasEnviadas->sortByDesc('id') as $pregunta)
        <div class="row" id="{{$pregunta->id}}">
            <div class="pregunta-usuario-info preguntas-opcion-vista mb-4" id="preguntas-enviadas">
                <div>
                    <img class="usuario-img" src="{{ asset('/storage/'. $pregunta->publication->car_photos->first->car_photo->car_photo) }}" alt="">
                </div>
                <div class="usuario-pregunta-main mb-3">
                    <div class="usuario-pregunta">
                        <h2 class="preguntas-title principal-font">
                            {{$pregunta->publication->vehicle->model->model}}

                        </h2>
                        <div class="pregunta-count-body">
                            @if($pregunta->answers)
                                <p class="preguntas-count principal-font">
                                    ({{ $pregunta->answers->count() }}) repuestas                             
                                </p>
                            @else
                                <p class="preguntas-count principal-font">
                                    (0) repuestas)                             
                                </p>
                            @endif
                        </div>
                    </div>
                    <p class="preguntas-subtitle principal-font mb-2">“{{$pregunta->question}}”</p>
                        <div class="">
                            @foreach($pregunta->answers->sortByDesc('id') as $respuesta)
                                <p class="preguntas-subtitle principal-font respuesta-question">“{{$respuesta->answer}}”</p>
                            @endforeach
                        </div>
                    <div class="preguntas-action-main">
                        {{-- <a class="preguntas-action principal-font" href="#" id="botonDelete">Borrar</a> --}}
                        <span class="preguntas-action principal-font"> {{ $pregunta->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
      @empty 
        <div class="row" >
            <div class="pregunta-usuario-info preguntas-opcion-vista mb-4" id="preguntas-enviadas">
                <h2 class="sin-publicaciones-message w-100 principal-font text-center my-5">Sin Preguntas</h2>
            </div>
        </div>
      @endforelse
  </div>

  <div>
      @forelse($preguntasRecibidas as $pregunta)
        <div class="row" style="display: none;" id="{{$pregunta->id}}" >
            <div class="pregunta-usuario-info  preguntas-opcion-vista mb-4" id="preguntas-recibidas" >
                <div>
                    <img class="usuario-img" src="{{ asset('/storage/'. $pregunta->publication->car_photos->first->car_photo->car_photo) }}" alt="">
                </div>
                <div class="usuario-pregunta-main mb-3">
                    <div class="usuario-pregunta">
                        <h2 class="preguntas-title principal-font">
                            {{$pregunta->publication->vehicle->model->model}}
                        </h2>
                        <div class="pregunta-count-body">
                            @if($pregunta->answers)
                                <p class="preguntas-count principal-font count-{{$pregunta->id}}" id="count_preguntas">
                                    ({{ $pregunta->answers->count() }}) repuestas                             
                                </p>
                            @else
                                <p class="preguntas-count principal-font count-{{$pregunta->id}}">
                                    (0) repuestas)                             
                                </p>
                            @endif
                        </div>
                    </div>
                    <p class="preguntas-subtitle principal-font">“{{$pregunta->question}}”</p>
                    <div class="respuestas-preguntas-{{$pregunta->id}}">
                        @foreach($pregunta->answers->sortByDesc('id') as $respuesta)
                            <p class="preguntas-subtitle principal-font respuesta-question">“{{$respuesta->answer}}”</p>
                        @endforeach
                    </div>
                    <form class="formulario_respuestas_preguntas" id="{{ $pregunta->id }}">
                        <input type="text" class="formulario_responder_question" name="awnser_question" id="respuesta_pregunta">
                        <input type="submit" class="formulario_responder_question_botton principal-font" value="enviar">
                    </form>
                    <div id="elemento_vacio"></div>
                    <div class="preguntas-action-main">
                        {{-- <a class="preguntas-action principal-font" href="#" id="botonDelete">Borrar</a> --}}
                        <span class="preguntas-action principal-font"> {{ $pregunta->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
      @empty
        <div class="row" style="display: none;" >
            <div class="pregunta-usuario-info  preguntas-opcion-vista mb-4" id="preguntas-recibidas" >
                <h2 class="sin-publicaciones-message w-100 principal-font text-center my-5">Sin Preguntas</h2>
            </div>
        </div>
      @endforelse
  </div>
</div>

<script>
    let opciones_preguntas_main = document.getElementById('preguntas_opciones_main');

    const formulario_respuesta = document.querySelectorAll('.formulario_respuestas_preguntas');


    const botones_borrar = document.querySelectorAll('#botonDelete');


//borrando preguntas
    if(botones_borrar){
        botones_borrar.forEach(boton =>{
            boton.addEventListener('click', (e) => {
                e.preventDefault();
                let padre = e.target.parentNode.parentNode.parentNode.parentNode;
                let padrote = padre.parentNode;

                axios.post(`/perfil/question/delete/${padre.id}`)
                    .then(response => {
                        if(response.data === 'success'){


                            padre.remove();


                            if(padrote.childElementCount === 0){
                                padrote.innerHTML = `
                                    <div class="pregunta-usuario-info  preguntas-opcion-vista mb-4" id="preguntas-recibidas" >
                                        <h2 class="sin-publicaciones-message w-100 principal-font text-center my-5">Sin Preguntas</h2>
                                    </div>
                                `
                            }

                        }
                    })
                    .catch(err => {
                        console.log(err);
                    });
            });
        });
    }

//envio de respuesta
    if(formulario_respuesta){
        formulario_respuesta.forEach(element => {

            element.addEventListener('submit', (e) => {

                let vacio = e.target.nextElementSibling;
                
                e.preventDefault()
                axios.post(`/perfil/answer`, {question: e.target.id, answer: element.firstElementChild.value })
                    .then(response => {
                        vacio.textContent = response.data.message;
                        setTimeout( () =>{
                            vacio.innerHTML = '';
                        },2500 )
                        element.reset();
                        contadorRespuestas(response.data.count, e.target.id)
                        agregandoRespuesta(response.data.respuesta, e.target.id)

                    })
                    .catch(err => {
                        console.log(err)
                    });
            });
        });
    }


    opciones_preguntas_main.addEventListener('click', (e) => {
        if(e.target.classList.contains('preguntas-opciones-box')){
            compareAndChangePreguntas(e.target.firstElementChild)

        }else if(e.target.classList.contains('publicaciones-title')) {

            compareAndChangePreguntas(e.target)
        }
    });

    function contadorRespuestas(count, id){
        let contador = document.querySelector(`.count-${id}`)
        contador.textContent = `(${count}) repuestas`
    }

    function agregandoRespuesta(message, id){
        //obtenemos el elemento padre
        let elemento = document.querySelector(`.respuestas-preguntas-${id}`)
        
        //creamos el elemento de la respuesta
        let respuesta = document.createElement('p')
        respuesta.innerHTML = `“${message}”`
        respuesta.classList.add('preguntas-subtitle', 'principal-font', 'respuesta-question');

        //inyectamos la respuesta dependiendo de si el padre tiene elementos o no
        if(elemento.childElementCount == 0){
            elemento.appendChild(respuesta)
        } else {
            elemento.insertBefore(respuesta, elemento.firstElementChild)
        }
    }

    function compareAndChangePreguntas(target){

        cleaningPreguntasOptions()

        switch (target.innerText) {
            case 'Enviadas':
                target.classList.add('option-active');
                activeViewPreguntas('preguntas-enviadas');
                break;
            case 'Recibidas':
                target.classList.add('option-active');
                activeViewPreguntas('preguntas-recibidas');
                break;
        
            default:
                break;
        }
        
    }

    function cleaningPreguntasOptions(){
        const opciones = document.querySelectorAll('.preguntas-vista-opciones');

        opciones.forEach( opciones => {
            opciones.classList.remove('option-active');
        });
    }

    function activeViewPreguntas(id){
        const contenido = document.querySelectorAll('.preguntas-opcion-vista');
        contenido.forEach( vista => {
            if(vista.id === id){
                vista.parentNode.style.display = 'block';
            } else {
                vista.parentNode.style.display = 'none';
            }
        });
    }
  </script>