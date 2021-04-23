


<style>



.boton-vender{
    background-color: #DE5214;
    color: #fff;
}

.boton-vender:hover{
    background-color: #DE5214;
    color: #fff;
}

/* Perfil Publicaciones section mobile */



.edit-publicaciones{
    position: relative;
    margin-left: 1.3rem;
    background-color: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    left: 3%;
    display: none;
}


.edit-publicaciones.vista-on{
    display: block;
}

.publicaciones-opciones{
    display: flex;
    justify-content: space-around;
    border-bottom: 1px solid #e0e0e0;
}

.publicaciones-title{
    color: #999999;
    font-size: .9rem;
    position: relative;
}


  /* Seccion activa de las publicaciones */
.publicaciones-title.option-active{
    color: #000;
}

.publicaciones-title.option-active::before{
    position: absolute;
    top: calc(100% + 1.4rem);
    content: '';
    transform: translateX(-50%);
    left: 50%;
    width: 5rem;
    height: 3px;
    background-color: #DE5214;
}

.edit-publicaciones-body{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.publicaciones-body-title{
    font-size: 1rem;
}

.publicaciones-body-subtitle{
    font-size: .8rem;
    font-weight: 300;
    margin-bottom: 3rem;
}

.publicaciones-opciones-box{
    cursor: pointer;
}

    /* publicaciones select filtrados */

.filtros-busqueda{
    border-bottom: 1px solid #B3B3B3;
}

.select-main{
    position: relative;
    padding: .2rem .6rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 3px;
    border: 1px solid #B3B3B3;
    cursor: pointer;
    margin-bottom: 1rem;

}


.select-main-body{
    display: flex;
    justify-content: space-between;
    flex: 1;
    align-items: center;
}

.select-main-option{
    border: 1px solid #B3B3B3;
    top: calc(100% + .3rem);
    width: 239px;
    height: 84px;
    left: -1px;
    right: 0;
    z-index: 10;
    border-radius: 3px;
    background-color: #fff;
    position: absolute;
    overflow-y: scroll;
    display: none;
}

.select-main-option.active{
    display: block;
}

.select-main-option ul{
    margin: 0;
}

.select-options-menu{
    padding: .2rem .6rem;
    list-style: none;
}

.select-name{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: .8rem;
}

.select-icon{
    transform: translateY(-15%);
}

    /* publicaciones datos mobile */

.publicaciones-datos{
    display: flex;
    margin-bottom: 1rem;
    border-bottom: 1px solid #B3B3B3;
}

.publicaciones-body{
    margin-bottom: 1rem;
}

.publicaciones-body-datos{
    display: flex;
    justify-content: space-between;
}


.publicaciones-datos-title{
    font-size: .9rem;
    margin-bottom: .5rem;
}

.publicaciones-datos-price{
    font-size: .8rem;
    font-weight: 300;
    margin-bottom: .4rem;
}

.publicaciones-img{
    width: 90px;
    height: 80px;
    border-radius: 3px;
}

.publicaciones-acciones{
    position: relative;
    bottom: 7px;
}

.publicaciones-datos-acciones{
    font-size: .7rem;
    border-right: 1px solid #979797;
    color: #333;
    font-weight: normal;
    padding-right: .2rem;
}


.desactivada{
    display: none;
}


.publicaciones-datos-acciones.dos{
    border: none;
    padding: none;
}

.publicaciones-datos-acciones:hover{
    color: #333;
    text-decoration: none;
}

.publicaciones-activar-accion, .publicaciones-eliminar-accion{
    font-size: .8rem;
    border-right: 1px solid #979797;
    color: #333;
    font-weight: normal;
    padding-right: .4rem;
}





.publicaciones-activar-accion:hover, .publicaciones-eliminar-accion:hover {
    color: #333;
    text-decoration: none;
}


.publicaciones-datos-caracteristica{
    font-family: 'Roboto Condensed', sans-serif;
    font-size: .8rem;
    padding: .2rem .6rem;

}

.publicaciones-datos-caracteristica:nth-child(1){
    border: 1px solid #000000;
    color: #000000;
}
.publicaciones-datos-caracteristica:nth-child(2){
    border: 1px solid #999999;
    color: #999999;
}


.sin-publicaciones-message{
    color: #DE5214;
}

.publicaciones-body-subtitle{
        margin-bottom: -1rem;
    }

.publicaciones-datos{
    position: relative;
}

.eliminar-publicacion-perfil{
    position: absolute;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background-color: #DE5214;
    opacity: .88;
}

.eliminar-publicacion-perfil.hidden {
    display: none;
}

.modal-eliminar-title{
    color: #fff;
    text-align: center;
    font-size: 1rem;
}
.botones-eliminar-container{
    display: flex;
}
.boton-modal-eliminar{
    cursor: pointer;
    border: 1px solid black;
    font-weight: 300;
    margin: 0 .7rem;
    padding: .4rem 0.5rem;
    border-radius: 4px;
}

@media (min-width: 768px){
     /* Perfil Publicaciones section table */

     .edit-publicaciones{
        left: 0;
    }

    .publicaciones-opciones{
        display: flex;
        justify-content: space-around;
    }

    /* Publicaciones datos Caracteristicas tablet version */

    .publicaciones-body{
        margin: 0;
        margin-bottom: 1.5rem;
    }


    .publicaciones-title{
        font-size: 1.1rem;
    }

    .publicaciones-body-title{
        font-size: 1.2rem;
    }


    .publicaciones-title.active::before{
        width: 8rem;
    }

    .publicaciones-body-subtitle{
        margin-bottom: 1rem;
    }



    .publicaciones-acciones{
        margin-left: 5rem;
    }

    .publicaciones-datos-acciones{
        padding-right: .5rem;
        font-size: .8rem;
    }
    .publicaciones-datos-acciones:nth-child(2){
        padding-left: .2rem;
    }

    /* publicaciones select filtrados */

    .filtros-busqueda{
        display: flex;
        justify-content: space-around;
    }

    .select-main-option{
        width: 90px;
    }

    .eliminar-publicacion-perfil{
        justify-content: center;
    }

}



@media (min-width: 1000px){
     /* Perfil Publicaciones section desktop */

     .publicaciones-title{
        font-size: 1rem;
        
    }

    .publicaciones-title.active::before{
        width: 10rem;
    }
    
    .publicaciones-body-title{
        font-size: 1.3rem;
    }

    .publicaciones-body-subtitle {
        margin-bottom: 1rem;
        font-size: 1rem;
    }

    


/* publicaciones select filtrados */

    .filtros-busqueda{
        padding: 0;
        width: 96.5%;
        margin-left: auto;
        display: flex;
        justify-content: initial;
    }

    .select-main{
        margin-bottom: 3rem;
    }

    .select-main:nth-child(2){
        margin-left: 1rem;
    }

    .select-main:nth-child(3){
        margin-left: auto;
    }

    .select-main-option{
        width: 118px;
    }


    /* Publicaciones datos  desktop version */

    .publicaciones-datos {
        margin: 0 0 0 auto;
        width: 96.5%;
        margin-bottom: 1.4rem;
    }

    .publicaciones-datos-acciones{
        padding-right: 1rem;
        font-size: .8rem;
    }

    .publicaciones-datos-acciones:nth-child(2){
        padding-left: .5rem;
        margin-right: 3.7rem;
    }

    .eliminar-publicacion-perfil{
        flex-direction: row;
    }

    .modal-eliminar-title{
        width: 42%;
        text-align: left;
        font-size: 1.3rem;
    }

    .boton-modal-eliminar{
        font-weight: bold;
        padding: .8rem 1.3rem;
    }
}

.spinner {
  margin: 100px auto;
  width: 50px;
  height: 40px;
  text-align: center;
  font-size: 10px;
}

.spinner > div {
  background-color: #eb5b11;
  height: 100%;
  width: 6px;
  display: inline-block;
  
  -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
  animation: sk-stretchdelay 1.2s infinite ease-in-out;
}

.spinner .rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}

.spinner .rect3 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

.spinner .rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

.spinner .rect5 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}

@-webkit-keyframes sk-stretchdelay {
  0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
  20% { -webkit-transform: scaleY(1.0) }
}

@keyframes sk-stretchdelay {
  0%, 40%, 100% { 
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }  20% { 
    transform: scaleY(1.0);
    -webkit-transform: scaleY(1.0);
  }
}

</style>


<div class="edit-publicaciones  mt-4 col-10 col-md-7 col-xl-8 mt-3" id="publicaciones-vista">

    <div class="row mb-4">
        <div class="publicaciones-opciones py-3 col-12" id="publicaciones_opciones_main">
            <div class="en-curso publicaciones-opciones-box">
                <h2 class="publicaciones-title publicacion-vista-opciones principal-font  option-active" >En Curso</h2>
            </div>
            <div class="inactivas publicaciones-opciones-box">
                <h2 class="publicaciones-title publicacion-vista-opciones principal-font" >Inactivas</h2>
            </div>
            <div class="pendientes publicaciones-opciones-box">
                <h2 class="publicaciones-title publicacion-vista-opciones principal-font" >Pendientes</h2>
            </div>
        </div>
    </div>

    
    <!-- Perfil publicaciones datos  -->
    <div id="En_curso" class="publicacion-options-vistas-content">
        <div class="spinner" style="display: none;" id="spinner_container_perfil">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
        </div>
        <div class="row" id="container_publicaciones">

            @if(isset($marcas))
            <!-- Perfil publicaciones filtrado activas  -->
            <div class="edit-publicaciones-activas col-12 mb-3" >
                <div class="filtros-busqueda col-12">


                    <div class="select-main col-12 col-md-3 col-xl-2">
                        <div class="select-main-body">
                            <span class="select-name" id="marca_name">Marca</span >
                            <i class="select-icon">
                                <svg width="10" height="10" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.0249 4.47485L4.5249 7.97485L1.0249 4.47485" stroke="black"/>
                                </svg>  
                            </i> 
                        </div>
                        <div class="select-main-option">
                        @foreach($marcas as $marca)
                            <ul class="options-main">
                                <li class="select-options-menu publicacion-selects marca-selects select-name" id="{{ $marca->id }}">{{ $marca->brand }}</li>
                            </ul>
                        @endforeach
                        </div>                                      
                    </div>
        
                    <div class="select-main col-12 col-md-3 col-xl-2">
                            <div class="select-main-body">
                                <span class="select-name" id="modelo_name">Modelo</span >
                                <i class="select-icon">
                                    <svg width="10" height="10" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.0249 4.47485L4.5249 7.97485L1.0249 4.47485" stroke="black"/>
                                    </svg>  
                                </i>
                            </div>
                            <div class="select-main-option" id="selectModelos">
                            @foreach($modelos as $modelo)
                                <ul class="options-main">
                                    <li class="select-options-menu publicacion-selects model-selects select-name" id="{{ $modelo->id }}">{{$modelo->model}}</li>
                                </ul>
                            @endforeach
                            </div>                                           
                    </div>


                    <div class="select-main col-12 col-md-3 col-xl-4" style="visibility:  hidden;">
                        <div class="select-main-body">
                            <span class="select-name">Reciente</span>
                            <i class="select-icon">
                                <svg width="10" height="10" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.0249 4.47485L4.5249 7.97485L1.0249 4.47485" stroke="black"/>
                                </svg>  
                            </i>   
                        </div>                                       
                    </div>
                </div>
            </div>
           @endif

            <div class="publicaciones-datos-main col-12" id="publicaciones_activadas">

            </div>
            
        </div>        
        <!-- Si no hay publicaciones aparece esta sección  -->
   </div>

</div>


  @include('vista_perfil.js_perfil.publicacionAxiosCall_js')  
  <script>
    let opciones_main = document.getElementById('publicaciones_opciones_main');
    opciones_main.addEventListener('click', (e) => {
        if(e.target.classList.contains('publicaciones-opciones-box')){

            compareAndChange(e.target.firstElementChild)

        }else if(e.target.classList.contains('publicaciones-title')) {

           compareAndChange(e.target)
        }
    });

    function compareAndChange(target){

        cleaningOptions()

        switch (target.innerText) {
            case 'En Curso':
                resetNameSelect();
                target.classList.add('option-active');
                publicacionesEnCurso()
                break;
            case 'Inactivas':
                //reseteo nombre selectores
                resetNameSelect();
                target.classList.add('option-active');
                publicacionesInactivas();
                break;
            case 'Pendientes':
                resetNameSelect();
                target.classList.add('option-active');
                publicacionesPendientes();
                break;
        
            default:
                break;
        }
        
    }

    function cleaningOptions(){
        const opciones = document.querySelectorAll('.publicacion-vista-opciones');

        opciones.forEach( opciones => {
            opciones.classList.remove('option-active');
        });
    }

    function activeViewPublicaciones(id){
        const contenido = document.querySelectorAll('.publicacion-options-vistas-content');
        
        contenido.forEach( vista => {
            if(vista.id === id){
                vista.style.display = 'block';
            } else {
                vista.style.display = 'none';
            }
        });
    }
  </script>

