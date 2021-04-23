@extends('layouts.main')

@section('head')
    <title>Perfil usuario</title>
@endsection

<style>
.cuerpo-main{
    background-color: #f2f2f2;
    min-height: 100vh;
}

.bg_footer{
    position: relative;
}

*,*::before,*::after,p,h1,h2,h3,h4,h5{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}



.principal-font{
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: bold;
}

p{
    font-family: 'Roboto Condensed', sans-serif;
    color: inherit;
    margin: 0;
}

.mis-datos-desktop{
    display: none;
}


.imagen-icono{
    background-color: #D8D8D8;
    color: #333;
    border-radius: 100px;
    margin-right: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
}


/***
    Movimiento de las vistas en versión mobile
***/


.desktop-main{
    position: relative;
    top: -7rem;
    transition: all .3s ease;
}


.desktop-main.down{
    top: 0;
}





/***
Estilos a los input forms
***/

.input-form-perfil {
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: 300;
    border-radius: 4px;
    padding: .6rem 1rem;
    border: 1px solid #d1c9c9;
    background-color: #fff;
}

/***
Imagen de perfil y titulo
***/

.name-perfil{
    display: flex;
}

.perfil-title{
    align-self: center;
    font-size: .8rem;
    text-align: start;
}

.perfil-subtitle{
    color: inherit;
    font-weight: 300;
    text-decoration: none;
}

.perfil-subtitle:hover{
    color: inherit;
    text-decoration: none;
}

.perfil-section-name {
    display: none;
    color: #0C2849;
}


.icon-1{
    font-size: .6rem;
    width: 60px;
    height: 60px;
}

/***
mis datos barra opciones version mobile
***/

label h5{
    font-size: .8rem;
}

.form-datos{
    font-size: .9rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: auto;
    width: 90%;
    background-color: #fff;
    
    padding: .6rem 1.2rem;
    border-radius: 7px;
    border: 1px solid #d1c9c9;
}

.icon-form-datos{
    padding-right: 1rem;
    font-weight: bold;
    font-size: 3rem;
}


.datos-title{
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: bold;
    padding: 0;
}

.icono-option{
    display: none;
}

/***
mis datos barra opciones version mobile
***/

label h5{
    font-size: .8rem;
}

.form-datos-perfil{
    font-size: .8rem;
    display:flex;
    align-items: center;
    justify-content: space-between;
    margin: auto;
    width: 90%;
    background-color: #fff;
    padding: .6rem 1.2rem;
    border-radius: 7px;
    border: 1px solid #d1c9c9;
    
}

.form-datos-perfil.movil-actice{
    border-radius: 7px;
    border-bottom: none;
}

.icon-form-datos-perfil{
    color: #212529;
    padding-right: 1rem;
    font-weight: bold;
}

.datos-title-perfil{
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: bold;
    padding: 0;
    margin: 0;
    
}

.main-views-mobile{
    overflow: hidden;
}



.mobile-options-views{
    font-size: .8rem;
    width: 90%;
    margin: auto;
    background-color: #fff;
    border: 1px solid #d1c9c9;
    border-top: none;
    
    transition: all 1s;
}

.mobile-options-views p {
    padding: .6rem 1.2rem;
}

.views-mobile-body {
    transform: translateY(-100%);
    transition: .3s ease;
}


.mobile-options-views:last-child{
    border-radius: 0 0 7px 7px;
}

.views-mobile-body.mobile-active{
    transform: translateY(0);
}


.form-datos-perfil.mobile-active{
    border-radius: 7px 7px 0 0;
}



.logo_perfil_main{
    width: 60px;
    height: 60px;
    border-radius: 100px;
}



/* BreakPoint a vista tablet */

@media (min-width: 768px){

    .desktop-main{
        top: 0;
    }



    .container{
        max-width: 1000px;
    }

    .perfil-section-name {
        display: inline;
    }

    /* Mis datos tablet style */

    .mis-datos-desktop{
        display: block;
    }

    

    .datos-desktop-main{
        background-color: #ffff;
        border-radius: 5px;
        cursor: pointer;
        border: 1px solid #e0e0e0;
    }

    .datos-desktop-body{
        /* width: 95%; */
        padding: .8rem .7rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #e0e0e0;
    }
    .datos-desktop-body:last-child{
        border-bottom: none;
    }

    .datos-desktop-title{
        color: #999999;
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: bold;
        margin-bottom: 0;
    }

    .datos-desktop-title.active{
        color: #000;
        
    }


    .desktop-main{
        margin-top: 3rem;
        display: flex;
    }

    .image-load {
        margin-top: 2rem;
    }

    #navbar-mobile{
        display: none;
    }

    
    
}
.body-main{
    min-height: 100vh;
}
</style>

@section('content')
      <div class="container body-main">
        <div class="row ">
            <div class="name-perfil text-center col-12 pt-3">
                <div class="imagen-icono icon-1">
                    <span>
                            @if(substr($user->imagen_logo, 0, 4) === 'http')
                                <img src="{{ $user->imagen_logo }}" class="logo_perfil_main" alt="">
                            @elseif($user->imagen_logo)
                                 <img src="{{ asset('perfil_logos/'. $user->imagen_logo) }}" class="logo_perfil_main" class="logo_perfil" alt="">
                            @else
                                <svg width="30" height="30" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 12C13 15.866 16.134 19 20 19C23.866 19 27 15.866 27 12C27 8.13401 23.866 5 20 5C16.134 5 13 8.13401 13 12ZM25 12C25 14.7614 22.7614 17 20 17C17.2386 17 15 14.7614 15 12C15 9.23858 17.2386 7 20 7C22.7614 7 25 9.23858 25 12ZM32 34H30C30 28.4772 25.5228 24 20 24C14.4772 24 10 28.4772 10 34H8C8 27.3726 13.3726 22 20 22C26.6274 22 32 27.3726 32 34Z" fill="black"/>
                                </svg>
                            @endif
                    </span>
                </div>
               <div class="perfil-title">
                    <h5 class="principal-font">{{$user->name}}<span class="perfil-section-name" id="perfil-section"> / Mis Datos</span> </h5>
                    <a href="#" class="perfil-subtitle principal-font">Gestiona tu perfil</a>
               </div>
            </div>
        </div>

        <div class="row my-4 formulario-mobil form-datos-mobile" id="navbar-mobile">
            <div class="form-datos-perfil" id="views-options-mobile">
                <p class="datos-title-perfil" id="main-text-mobile">Mis Datos</p>
                <span class="icon-form-datos "> <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.81066 7.92893L8.45711 14.5754L7.75 15.2825L0.396447 7.92893L7.75 0.575378L8.45711 1.28249L1.81066 7.92893Z" fill="black"/>
                    </svg>
                </span>
            </div>
            <div class="w-100 main-views-mobile">
               <div class="views-mobile-body">
                    <div class="mobile-options-views" id="mis-datos-option">
                        <p class="datos-title-perfil mobile-option" >Mis Datos</p>
                    </div>
                    <div class="mobile-options-views" id="mi-contraseña-option">
                        <p class="datos-title-perfil mobile-option" >Contraseña</p>
                    </div>
                    <div class="mobile-options-views" id="mis-publicaciones-option">
                        <p class="datos-title-perfil mobile-option" >publicaciones</p>
                    </div>
                    <div class="mobile-options-views" id="mis-preguntas-option" >
                        <p class="datos-title-perfil mobile-option" >preguntas</p>
                    </div>
                    <div class="mobile-options-views" id="mi-plan-option" >
                        <p class="datos-title-perfil mobile-option" >Plan</p>
                    </div>
               </div>
            </div>
        </div>
        <!-- Mis Datos Opciones desktop version -->
        <div class="row desktop-main lol mb-5" id="desktop-main">
            <div class="mis-datos-desktop col-md-4 col-xl-3">
                <div class="datos-desktop-main" id="datos-navbar">
                    <div class="datos-desktop-body" id="mis-datos-option">
                        <p class="datos-desktop-title active">Mis Datos</p>
                        <span style="display: block"  class="icon-form-datos icono-option"> <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.81066 7.92893L8.45711 14.5754L7.75 15.2825L0.396447 7.92893L7.75 0.575378L8.45711 1.28249L1.81066 7.92893Z" fill="black"/>
                            </svg>
                        </span>
                    </div>
                    <div class="datos-desktop-body" id="mi-contraseña-option">
                        <p class="datos-desktop-title ">Contraseña</p>
                        <span  class="icon-form-datos icono-option"> <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.81066 7.92893L8.45711 14.5754L7.75 15.2825L0.396447 7.92893L7.75 0.575378L8.45711 1.28249L1.81066 7.92893Z" fill="black"/>
                            </svg>
                        </span>
                    </div>
                    <div class="datos-desktop-body" id="mis-publicaciones-option">
                        <p class="datos-desktop-title ">Publicaciones</p>
                        <span  class="icon-form-datos icono-option"> <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.81066 7.92893L8.45711 14.5754L7.75 15.2825L0.396447 7.92893L7.75 0.575378L8.45711 1.28249L1.81066 7.92893Z" fill="black"/>
                            </svg>
                        </span>
                    </div>
                    <div class="datos-desktop-body" id="mis-preguntas-option">
                        <p class="datos-desktop-title ">Preguntas</p>
                        <span  class="icon-form-datos icono-option"> <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.81066 7.92893L8.45711 14.5754L7.75 15.2825L0.396447 7.92893L7.75 0.575378L8.45711 1.28249L1.81066 7.92893Z" fill="black"/>
                            </svg>
                        </span>
                    </div>
                    <div class="datos-desktop-body" id="mi-plan-option">
                        <p class="datos-desktop-title">Plan</p>
                        <span  class="icon-form-datos icono-option"> <svg width="15" height="15" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.81066 7.92893L8.45711 14.5754L7.75 15.2825L0.396447 7.92893L7.75 0.575378L8.45711 1.28249L1.81066 7.92893Z" fill="black"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- Agregar la clase "vista-on" en el div principal de cada vista para visualizar -->
                @include('vista_perfil.mis_datos') 
                @include('vista_perfil.cambio_contraseña')
                @include('vista_perfil.cambio_contraseña')
                @include('vista_perfil.publicaciones_producto')
                @include('vista_perfil.preguntas_producto')
                @include('vista_perfil.plan_actual')   
        </div>
   </div>
<script type="text/javascript">
//eventos
    document.getElementById('inputGuardarContraseña').addEventListener('click', (e) => {
        e.preventDefault();
        modalOpen();
    });
</script>
@include('vista_perfil.js_perfil.changeViews_js')
@include('vista_perfil.js_perfil.publicacionSelects_js')

@isset($seccion)
@if ($seccion=='2')
    <script>
        $(function (){
            $('#mi-contraseña-option').click();
        });
    </script>
    @endif
    @if ($seccion=='3')
        <script>
            $(function (){
                $('#mis-publicaciones-option').click();
            });
        </script>
    @endif    
    @if ($seccion=='4')
    <script>
        $(function (){
            $('#mis-preguntas-option').click();
        });
    </script>
    @endif
    @if ($seccion=='5')
        <script>
            $(function (){
                $('#mi-plan-option').click();
            });
        </script>
    @endif
@endisset

@endsection

