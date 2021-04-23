@extends('layouts.main')

@section('head')
<!-- iconos feather-icons -->
<script src="https://unpkg.com/feather-icons"></script>

<style type="text/css">
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: rgb(233, 233, 233);

  }

  
  .lista-de-carros {
      font-size: 0px;
      min-height: 90vh;
    }
  
    .link-publicacion:hover{
      text-decoration: none;
    }
    
  /* COmprar */
    /*CARD*/
    .card-carro {
      height: 10em;
    }
  
    .card-img-top {
      height: 14em;
      background-size: cover;
      background-position: center;
    }
  
    .card-text {
      font-family: Roboto Condensed;
      font-style: normal;
      font-weight: bold;
      font-size: 10px;
      line-height: 12px;
      color: #000000;
    }
  
    .buttonAnioCard {
      border-radius: 2px;
      border: solid 1px #000;
      background-color: #fff;
      padding: 0.1rem 0.5rem;
      color: #000;
      margin-left: 0rem;
      outline: none !important;
    }
  
    .buttonAnioCardDisabled {
      border-radius: 2px;
      border: solid 1px #999999;
      background-color: #fff;
      padding: 0.1rem 0.5rem;
      color: #999999;
      margin-left: 0.2rem;
      outline: none;
    }
  
    .precio {
      font-family: Roboto Condensed;
      font-style: normal;
      font-weight: bold;
      font-size: 11px;
      line-height: 13px;
      text-align: right;
  
      color: #000000;
    }
  
    .text-font {
      font-size: 10px;
    }
  
    .pointer {
      cursor: pointer;
    }
  
  
    .publicaciones {
      color: rgb(155, 155, 155);
  
    }
  
    .filtro {
      width: 100%;
      height: 35px;
      background-color: black;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  
    #icon-filtro {
      /*  display: none;*/
    }
  
    header .icon-menu {
      cursor: pointer;
    }
  
    .lista-de-carros {
      font-size: 0px;
    }
  
    .contenedor {
      display: inline-block;
      position: relative;
      width: 16.6666%;
      height: 20%;
      padding-right: 0;
    }
  
    .contenedor-filtro-activo {
      display: inline-block;
      position: relative;
      width: 20%;
      height: 20%;
      padding-right: 0;
    }
  
    .card-list {
      position: relative;
      padding: 0;
      margin: 0;
      font-size: 10px;
    }
  
    .titulo-filtros {
      font-family: Roboto Condensed;
      font-style: normal;
      font-weight: 300;
      font-size: 14px;
      line-height: 18px;
      /* identical to box height, or 129% */
      color: #666666;
    }
  
    .menu-filtro .nivel_1 {
      cursor: pointer;
      display: block;
      margin-right: 0;
      margin-left: 0;
      height: 47px;
      padding-top: 22px;
      text-decoration: none;
      border-bottom: 1px solid #000;
      font-family: Roboto Condensed;
      font-style: normal;
      font-weight: bold;
      font-size: 14px;
      line-height: 18px;
      /* identical to box height, or 129% */
      color: #000000;
    }
  
    .menu-filtro .nivel_1-2 {
      cursor: pointer;
      display: block;
      margin-right: 0;
      margin-left: 0;
      height: 47px;
      padding-top: 22px;
      text-decoration: none;
      font-family: Roboto Condensed;
      font-style: normal;
      font-weight: bold;
      font-size: 13px;
      line-height: 18px;
      color: #000000;
    }
  
    .menu-filtro .nivel_2 {
      cursor: pointer;
      display: block;
      margin-right: 0;
      margin-left: 0;
      height: 20px;
      text-decoration: none;
      font-family: Roboto Condensed;
      font-style: normal;
      font-weight: 300;
      font-size: 14px;
      line-height: 18px;
      /* identical to box height, or 129% */
      display: flex;
      align-items: center;
      color: #666666;
      cursor: pointer;
    }

    .marca_opcion a{
      color: #666666;
    }
    .nivel_2 a:hover{
      text-decoration: none;
      color: #666666;
    }
  
    .ver-todas-buttom {
      cursor: pointer;
      font-family: Roboto Condensed;
      font-style: normal;
      font-weight: 300;
      font-size: 11px;
      line-height: 13px;
      /* identical to box height */
      display: flex;
      align-items: center;
      color: #000000;
    }
  
    .menu-filtro {
      top: 0;
      left: 0;
      width: 100%;
      height: all;
      background: white;
      display: inline-block;
    }
  
    .etiquetas-dinamicas {
      border-radius: 2px;
      border: solid 0.5px #000;
      background-color: #fff;
      padding: 3px 5px;
      color: #000;
      outline: none !important;
    }

    .input_price{
        display: flex;
      }

    .input_price input{
      width: 50px;
      margin-right: .6rem;
      border-radius: none;
      height: 25px;
      border: 1px solid #333;
      border-radius: 5px;
    }

    .input_price .input_hasta{
      margin: 0 0 0 .6rem;
    }

    .limpiar-filtro{
      color: #000;
    }

    .limpiar-filtro{
        position: relative;
        right: 0%;
      }

    @media (min-width: 992px) and (max-width: 1200px) {
      .card-img-top {
        height: 18em;
      }
  
      .contenedor {
        display: inline-block;
        position: relative;
        width: 25%;
        height: 20%;
        padding-right: 0;
      }
  
      .contenedor-filtro-activo {
        display: inline-block;
        position: relative;
        width: 33.333333%;
        height: 20%;
        padding-right: 0;
      }

      

    }
  
    @media (min-width: 767px) and (max-width: 992px) {
      .card-img-top {
        height: 20em;
      }
  
      .contenedor {
        display: inline-block;
        position: relative;
        width: 33.3333333%;
        height: 20%;
        padding-right: 0;
      }
  
      .contenedor-filtro-activo {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 20%;
        padding-right: 0;
      }

      .limpiar-filtro{
        position: relative;
        right: 25%;
      }
    }
  
    @media (min-width: 415px) and (max-width: 767px) {
      .card-img-top {
        height: 14em;
      }
  
      .contenedor {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 20%;
        padding-right: 0;
      }
  
      .contenedor-filtro-activo {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 0%;
        padding-right: 0;
      }

      
    }
  
    @media (min-width: 361px) and (max-width:415px) {
      .card-img-top {
        height: 14em;
      }
  
      .contenedor {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 20%;
        padding-right: 0;
      }
  
      .contenedor-filtro-activo {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 0%;
        padding-right: 0;
      }
  
      .buttonAnioCard {
        border-radius: 2px;
        border: solid 1px #000;
        background-color: #fff;
        padding: 0.1rem 0.1rem;
        color: #000;
        margin-left: 0rem;
        outline: none !important;
      }
  
      .buttonAnioCardDisabled {
        border-radius: 2px;
        border: solid 1px #999999;
        background-color: #fff;
        padding: 0.1rem 0.1rem;
        color: #999999;
        margin-left: 0.1rem;
        outline: none;
      }
    }
  
    @media (min-width: 1px) and (max-width:361px) {
      .card-img-top {
        height: 12em;
      }
  
      .contenedor {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 20%;
        padding-right: 0;
      }
  
      .contenedor-filtro-activo {
        display: inline-block;
        position: relative;
        width: 50%;
        height: 0%;
        padding-right: 0;
      }

      .text-card{
        text-align: center;
        font-weight: 300;
      }

      .text-card strong{
        font-weight: bold;
      }
  
      .buttonAnioCard {
        border-radius: 2px;
        border: solid 1px #000;
        background-color: #fff;
        padding: 0.1rem 0.1rem;
        color: #000;
        margin-left: 0rem;
        outline: none !important;
      }
  
      .buttonAnioCardDisabled {
        border-radius: 2px;
        border: solid 1px #999999;
        background-color: #fff;
        padding: 0.1rem 0.1rem;
        color: #999999;
        margin-left: 0.1rem;
        outline: none;
        display: none;
      }

      .limpiar-filtro{
        position: relative;
        right: 21%;
      }

    }

    .nav-vista-comprar{
        display: flex;
        flex-direction: row;
      }

</style>
<title>Comprar</title>
@endsection
@section('content')
<div class="container-fluid p-0">
  <div class="row p-0 m-0">
    <!-- BEGIN: Main Menu-->
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-2 p-0 m-0 menu-filtro" id="menu-filtro-id" style="display: none;">
      <div class="container text-font">
        <div class="navbar-header pt-2">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
              <label class="mt-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4 7.5H12.55C12.7816 6.35888 13.7905 5.5 15 5.5C16.2104 5.5 17.2198 6.36012 17.4505 7.50246V7.5H20V8.5H17.4505V8.49754C17.2198 9.63988 16.2104 10.5 15 10.5C13.7905 10.5 12.7816 9.64112 12.55 8.5H4V7.5ZM16.5 8C16.5 8.82843 15.8284 9.5 15 9.5C14.1716 9.5 13.5 8.82843 13.5 8C13.5 7.17157 14.1716 6.5 15 6.5C15.8284 6.5 16.5 7.17157 16.5 8ZM4 16.5V15.5H7.55001C7.78164 14.3589 8.79052 13.5 10 13.5C11.2095 13.5 12.2184 14.3589 12.45 15.5H20V16.5H12.45C12.2184 17.6411 11.2095 18.5 10 18.5C8.79052 18.5 7.78164 17.6411 7.55001 16.5H4ZM10 17.5C10.8284 17.5 11.5 16.8284 11.5 16C11.5 15.1716 10.8284 14.5 10 14.5C9.17157 14.5 8.5 15.1716 8.5 16C8.5 16.8284 9.17157 17.5 10 17.5Z" fill="black" />
                </svg>
                <span class="titulo-filtros">Filtros</span></label>
            </li>

            <li><a class="nav-link pointer" onclick="filtros()"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 13.5L10 10L6.5 6.5" stroke="black" />
                  <path d="M13.5 13.5L10 10L13.5 6.5" stroke="black" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <ul class="px-4 m-0">
        <li class="nivel_1" onclick="collapse_marcas()" data-toggle="collapse" href="#marcas" role="button" aria-expanded="true" aria-controls="marcas">
          <div class="row">
            <div class="col-auto">
              <strong>Marcas</strong>
            </div>
            <div class="col-auto ml-auto">
              <!-- collapse cerrado -->
              <a id="collapse-marcas-cerrado" class="icon-close"><svg id="marcas_svg" width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 10L1.73698e-07 5L5 8.6849e-08V10Z" fill="#999999" />
                </svg>
              </a>
              <!-- collapse abierto o despleago-->
              <a id="collapse-marcas-abierto" class="icon-open"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 5L5 10L8.6849e-08 5H10Z" fill="#999999" />
                </svg>
              </a>
            </div>
          </div>
        </li>
        <div class="collapse" id="marcas">
          <ul class="p-0 m-0">
            <li class="nivel_1-2"> <a>Todas
               {{-- ({{ $marcas->count() }}) --}}
              </a></li>
            @php($marcaContador = 0)
            @foreach($marcas as $marca)  
              @if($marcaContador < 4)

                <li class="nivel_2 marca_opcion"> <a href="/comprar?marca={{$marca->id}}">{{$marca->brand}} 
                  {{-- ({{$marca->vehicles->count()}}) --}}
                </a></li>
              
              @endif

              @if($marcaContador >= 4 )
                <li class="nivel_2 marca_opcion marca_ver_mas" style="display: none;"> <a href="/comprar?marca={{$marca->id}}">{{$marca->brand}}
                   {{-- ({{$marca->vehicles->count()}}) --}}
                  </a></li>
              @endif

              @php($marcaContador++)

            @endforeach

          </ul>
          <div class="mt-2">
            <a class="ver-todas-buttom" id="marcaVerMas">Ver todas</a>
          </div>
        </div>

        <li class="nivel_1" onclick="collapse_tipo_de_auto()" data-toggle="collapse" href="#tipo-de-auto" role="button" aria-expanded="true" aria-controls="tipo-de-auto">
          <div class="row">
            <div class="col-auto">
              <strong>Tipo de auto</strong>
            </div>
            <div class="col-auto ml-auto">
              <!-- collapse cerrado -->
              <a id="collapse-tipo-de-auto-cerrado" class="icon-close"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 10L1.73698e-07 5L5 8.6849e-08V10Z" fill="#999999" />
                </svg>
              </a>
              <!-- collapse abierto o despleago-->
              <a id="collapse-tipo-de-auto-abierto"  class="icon-open"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 5L5 10L8.6849e-08 5H10Z" fill="#999999" />
                </svg>
              </a>
            </div>
          </div>
        </li>
        <div class="collapse" id="tipo-de-auto">
          <ul class="p-0 m-0">
            <li class="nivel_1-2"> <a>Todas
               {{-- ({{ $tipos->count() }}) --}}
              </a></li>
            @php($tipoContador = 0)

            @foreach($tipos as $tipo)
             @if($tipoContador < 4)
                <li class="nivel_2 marca_opcion"> <a href="/comprar?tipo={{$tipo->id}}">{{ $tipo->vehicle_style }}</a></li>
             @endif

             @if($tipoContador >= 4)
                <li class="nivel_2 marca_opcion tipo_ver_mas" style="display: none;"> <a href="/comprar?tipo={{$tipo->id}}">{{ $tipo->vehicle_style }}</a></li>
             @endif

             @php($tipoContador++)
            @endforeach
          </ul>
          <div class="mt-2">
            <a class="ver-todas-buttom" id="tipoVerMas">Ver todas</a>
          </div>
        </div>
        <li class="nivel_1" onclick="collapse_año()" data-toggle="collapse" href="#año" role="button" aria-expanded="true" aria-controls="año">
          <div class="row">
            <div class="col-auto">
              <strong>Año</strong>
            </div>
            <div class="col-auto ml-auto">
              <!-- collapse cerrado -->
              <a id="collapse-año-cerrado" class="icon-close"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 10L1.73698e-07 5L5 8.6849e-08V10Z" fill="#999999" />
                </svg>
              </a>
              <!-- collapse abierto o despleago-->
              <a id="collapse-año-abierto" class="icon-open"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 5L5 10L8.6849e-08 5H10Z" fill="#999999" />
                </svg>

              </a>
            </div>
          </div>
        </li>
        <div class="collapse" id="año">
          <ul class="p-0 m-0">
            @php($yearContador = 0)
            @for ($i = 2020; $i >= 1980; $i--)
                @if($yearContador < 8)
                  <li class="nivel_2 marca_opcion"> <a href="/comprar/year?time={{$i}}">{{$i}}</a></li>
                @endif

                @if($yearContador >= 5)
                  <li class="nivel_2 marca_opcion year_ver_mas" style="display: none;"> <a href="/comprar/year?time={{$i}}">{{$i}}</a></li>
                @endif
                @php($yearContador++)
            @endfor
          </ul>
          <div class="mt-2">
            <a class="ver-todas-buttom" id="yearVerMas">Ver todas</a>
          </div>
        </div>

        <li class="nivel_1" onclick="collapse_precio()" data-toggle="collapse" href="#precio" role="button" aria-expanded="true" aria-controls="precio">
          <div class="row">
            <div class="col-auto">
              <strong>Precios</strong>
            </div>
            <div class="col-auto ml-auto">
              <!-- collapse cerrado -->
              <a id="collapse-precio-cerrado" class="icon-close"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 10L1.73698e-07 5L5 8.6849e-08V10Z" fill="#999999" />
                </svg>
              </a>
              <!-- collapse abierto o despleago-->
              <a id="collapse-precio-abierto" class="icon-open"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 5L5 10L8.6849e-08 5H10Z" fill="#999999" />
                </svg>
              </a>
            </div>
          </div>
        </li>
        <div class="collapse" id="precio">
          <ul class="p-0 m-0 mt-2">
            <li class="nivel_2 marca_opcion"> <a href="/comprar/price?maximo=15000">hasta ARG$15.000</a></li>
            <li class="nivel_2 marca_opcion"> <a href="/comprar/price?desde=15000&hasta=25000">ARG$15.000 a ARG$25.000</a></li>
            <li class="nivel_2 marca_opcion"> <a href="/comprar/price?masde=25000">Más de ARG$25.000</a></li>
          </ul>
          <form action="/comprar/price" class="mt-2 input_price" >
            <input type="text" name="desde">
            <p>-</p>
            <input class="input_hasta" type="text" name="hasta">

            <input type="submit" value="enviar">
          </form>
        </div>
        <li class="nivel_1" onclick="collapse_kilometro()" data-toggle="collapse" href="#kilometro" role="button" aria-expanded="true" aria-controls="kilometro">
          <div class="row">
            <div class="col-auto">
              <strong>kilometro</strong>
            </div>
            <div class="col-auto ml-auto">
              <!-- collapse cerrado -->
              <a id="collapse-kilometro-cerrado" class="icon-close"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5 10L1.73698e-07 5L5 8.6849e-08V10Z" fill="#999999" />
                </svg>
              </a>
              <!-- collapse abierto o despleago-->
              <a id="collapse-kilometro-abierto" class="icon-open"><svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10 5L5 10L8.6849e-08 5H10Z" fill="#999999" />
                </svg>
              </a>
            </div>
          </div>
        </li>
        <div class="collapse" id="kilometro">
          <ul class="p-0 m-0">
            <li class="nivel_2 marca_opcion"> <a href="/comprar/km?maximo=35000">35.000 km o menos</a></li>
            <li class="nivel_2 marca_opcion"> <a href="/comprar/km?desde=35000&hasta=55000">35.000 a 50.0000 km</a></li>
            <li class="nivel_2 marca_opcion"> <a href="/comprar/km?desde=55000&hasta=70000">55.000 a 70.000 km</a></li>
            <li class="nivel_2 marca_opcion"> <a href="/comprar/km?desde=70000&hasta=100000">70.000 a 100.000 km</a></li>
          </ul>
          <div class="mt-2">
          </div>
        </div>


      </ul>
    </div>
    <!-- END: Main Menu-->
    <div class="col-12 px-0" id="cambiarcolumas">
      <div class="container-fluid p-0">
        <div class="lista-de-carros">
          <nav class="navbar navbar-expand-lg navbar-light bg-light text-font">
            <a class="pointer" onclick="filtros()" id="nav-texto-filtro"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 7.5H12.55C12.7816 6.35888 13.7905 5.5 15 5.5C16.2104 5.5 17.2198 6.36012 17.4505 7.50246V7.5H20V8.5H17.4505V8.49754C17.2198 9.63988 16.2104 10.5 15 10.5C13.7905 10.5 12.7816 9.64112 12.55 8.5H4V7.5ZM16.5 8C16.5 8.82843 15.8284 9.5 15 9.5C14.1716 9.5 13.5 8.82843 13.5 8C13.5 7.17157 14.1716 6.5 15 6.5C15.8284 6.5 16.5 7.17157 16.5 8ZM4 16.5V15.5H7.55001C7.78164 14.3589 8.79052 13.5 10 13.5C11.2095 13.5 12.2184 14.3589 12.45 15.5H20V16.5H12.45C12.2184 17.6411 11.2095 18.5 10 18.5C8.79052 18.5 7.78164 17.6411 7.55001 16.5H4ZM10 17.5C10.8284 17.5 11.5 16.8284 11.5 16C11.5 15.1716 10.8284 14.5 10 14.5C9.17157 14.5 8.5 15.1716 8.5 16C8.5 16.8284 9.17157 17.5 10 17.5Z" fill="black" />
              </svg>
              <span class="titulo-filtros">Filtros</span></a>
            <div class="navbar-nav px-4" style="display: none;" id="etiquetas-dinamica-ford">
              <a class="nav-item nav-link "><span class="etiquetas-dinamicas">Ford <svg onclick="ford_etiqueta_none()" class="pointer" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 13.5L10 10L6.5 6.5" stroke="black" />
                    <path d="M13.5 13.5L10 10L13.5 6.5" stroke="black" />
                  </svg></span>
              </a>
            </div>
            <div class="navbar-nav px- nav-vista-comprar">
              @if($filtros)
                <a class="nav-item nav-link titulo-filtros" href="/comprar"><span class="limpiar-filtro">Limpiar filtros</span></a>
              @endif
              @if($count)
                <a class="nav-item nav-link disabled"><span class="titulo-filtros"> ({{$count}}) Publicaciones</span></a>
              @else
                <a class="nav-item nav-link disabled"><span class="titulo-filtros"> (0) Publicaciones</span></a>
              @endif
            </div>
          </nav>
          @foreach($publicaciones as $publicacion)
            <div class="contenedor">
              <a class="link-publicacion" href="{{'/publicacion/'.$publicacion->id}}">
                <div class="card card-list">
                  @foreach($publicacion->car_photos->take(1) as $photo)
                      <div style="background-image: url('{{asset('storage/'.$photo->car_photo)}}')"  class="card-img-top"></div>
                  @endforeach
                    <div class="card-body card-carro">
                        <div class="row">
                            <div class="col-12 px-2">
                                <p class="card-text text-card"><strong>{{$publicacion->vehicle->brand->brand}} {{$publicacion->vehicle->model->model}} </strong> {{$publicacion->vehicle->version->vehicle_type}}</p>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-7 col-sm-8 px-2">
                                <button class="buttonAnioCard card-text" type="button">{{$publicacion->vehicle->version->year}}</button>
                                <button class="buttonAnioCardDisabled card-text" type="button" disabled>{{$publicacion->kilometres}} km</button>
                            </div>
                            <div class="col-4 px-1 text-right">
                                <strong class="precio card-text">{{$publicacion->currency->id == 1 ? 'AR$' : 'US$'}} {{number_format($publicacion->price, 0, ',', '.')}}</strong>
                            </div>
                        </div>
                    </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
        {{$publicaciones->links()}}
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">

  const marcaVerMas = document.getElementById('marcaVerMas');
  const tipoVerMas = document.getElementById('tipoVerMas');
  const yearVerMas = document.getElementById('yearVerMas');

  marcaVerMas.addEventListener('click', () => {
    let abrir = document.querySelectorAll('.marca_ver_mas');
    
    abrir.forEach(marca => {
      marca.style.display = 'block';
    });
  });

  tipoVerMas.addEventListener('click', () => {
    let abrir = document.querySelectorAll('.tipo_ver_mas')

    abrir.forEach(tipo => {
      tipo.style.display = 'block';
    });
  });

  yearVerMas.addEventListener('click', () => {
    let abrir = document.querySelectorAll('.year_ver_mas')

    abrir.forEach(abrir => {
      abrir.style.display= 'block';
    });
  });

  //Funcion para ejecutar evento cada vez que se hace un cambio de dimensionamiento de pantalla
  var waitForFinalEvent = (function() {
    var timers = {};
    return function(callback, ms, uniqueId) {
      if (!uniqueId) {
        uniqueId = "Don't call this twice without a uniqueId";
      }
      if (timers[uniqueId]) {
        clearTimeout(timers[uniqueId]);
      }
      timers[uniqueId] = setTimeout(callback, ms);
    };
  })();
  $(window).resize(function() {
    waitForFinalEvent(function() {
      //evento a ejecutar
      var anchoVentana = window.innerWidth
      let valor = document.getElementById("menu-filtro-id").style.display;
      if (valor == 'inline-block') {
        $('#cambiarcolumas').removeClass('col-12');
        $('#cambiarcolumas').removeClass('col-10');
        $('#cambiarcolumas').removeClass('col-9');
        $('#cambiarcolumas').removeClass('col-8');
        if (anchoVentana > 1200) {
          $('#cambiarcolumas').addClass('col-10');
        } else if (anchoVentana > 992 && anchoVentana < 1200) {
          $('#cambiarcolumas').addClass('col-8');
        } else if (anchoVentana > 768 && anchoVentana < 992) {
          $('#cambiarcolumas').addClass('col-6');
        } else if (anchoVentana > 1 && anchoVentana < 800) {
          $('#cambiarcolumas').removeClass('col-12');
        }
      }


    });
  });
  // End: funcion de dimensionamiento de pantalla

  function filtros() {
    var anchoVentana = window.innerWidth;
    let valor = document.getElementById("menu-filtro-id").style.display;
    if (valor == 'inline-block') {
      document.getElementById("menu-filtro-id").style.display = 'none';
      document.getElementById("nav-texto-filtro").style.display = 'inline';
      if (anchoVentana > 1200) {
        $('#cambiarcolumas').removeClass('col-10');
        $('#cambiarcolumas').addClass('col-12');
      } else if (anchoVentana > 992 && anchoVentana < 1200) {
        $('#cambiarcolumas').removeClass('col-9');
        $('#cambiarcolumas').addClass('col-12');
      } else if (anchoVentana > 767 && anchoVentana < 992) {
        $('#cambiarcolumas').removeClass('col-8');
        $('#cambiarcolumas').addClass('col-12');
      } else if (anchoVentana > 1 && anchoVentana < 767) {

      }

      const contenedor = document.querySelectorAll('.contenedor-filtro-activo');
      contenedor.forEach(element => {
        element.classList.remove('contenedor-filtro-activo')
        element.classList.add('contenedor');
      });
    } else {
      document.getElementById("menu-filtro-id").style.display = 'inline-block';
      document.getElementById("nav-texto-filtro").style.display = 'none';
      if (anchoVentana > 1200) {
        $('#cambiarcolumas').removeClass('col-12');
        $('#cambiarcolumas').addClass('col-10');
      } else if (anchoVentana > 992 && anchoVentana < 1200) {
        $('#cambiarcolumas').removeClass('col-12');
        $('#cambiarcolumas').addClass('col-9');
      } else if (anchoVentana > 767 && anchoVentana < 992) {
        $('#cambiarcolumas').removeClass('col-12');
        $('#cambiarcolumas').addClass('col-8');
      } else if (anchoVentana > 1 && anchoVentana < 767) {}
      const contenedor = document.querySelectorAll('.contenedor');
      contenedor.forEach(element => {
        element.classList.remove('contenedor')
        element.classList.add('contenedor-filtro-activo');
      });
    }

  }

  function collapse_marcas() {
    let iconClose = document.getElementById('collapse-marcas-cerrado');
    let iconOpen = document.getElementById('collapse-marcas-abierto');

    iconOpen.classList.toggle('active');
    iconClose.classList.toggle('active');

    let cerrar = document.querySelectorAll('.marca_ver_mas')

    cerrar.forEach( cerrar => {
      cerrar.style.display = 'none';
    })

    $('#marcas').on('shown.bs.collapse', function() {
      console.log('abierto')
      document.getElementById("collapse-marcas-cerrado").style.display = 'none';
      document.getElementById("collapse-marcas-abierto").style.display = 'inline';
    });

    $('#marcas').on('hidden.bs.collapse', function() {
      console.log('cerrado');
      document.getElementById("collapse-marcas-abierto").style.display = 'none';
      document.getElementById("collapse-marcas-cerrado").style.display = 'inline';
    });

  }

  function collapse_tipo_de_auto() {
    let iconClose = document.getElementById('collapse-tipo-de-auto-cerrado')
    let iconOpen = document.getElementById('collapse-tipo-de-auto-abierto')

    iconClose.classList.toggle('active')
    iconOpen.classList.toggle('active')

    let cerrar = document.querySelectorAll('.tipo_ver_mas')

    cerrar.forEach( cerrar => {
      cerrar.style.display = 'none';
    })

    $('#tipo-de-auto').on('shown.bs.collapse', function() {
      document.getElementById("collapse-tipo-de-auto-cerrado").style.display = 'none';
      document.getElementById("collapse-tipo-de-auto-abierto").style.display = 'inline';
    });

    $('#tipo-de-auto').on('hidden.bs.collapse', function() {
      document.getElementById("collapse-tipo-de-auto-abierto").style.display = 'none';
      document.getElementById("collapse-tipo-de-auto-cerrado").style.display = 'inline';
    });

  }

  function collapse_año() {

    let iconClose = document.getElementById('collapse-año-cerrado')
    let iconOpen = document.getElementById('collapse-año-abierto')

    iconClose.classList.toggle('active')
    iconOpen.classList.toggle('active')

    let cerrar = document.querySelectorAll('.year_ver_mas')

    cerrar.forEach( cerrar => {
      cerrar.style.display = 'none';
    })

    $('#año').on('shown.bs.collapse', function() {
      document.getElementById("collapse-año-cerrado").style.display = 'none';
      document.getElementById("collapse-año-abierto").style.display = 'inline';
    });

    $('#año').on('hidden.bs.collapse', function() {
      document.getElementById("collapse-año-abierto").style.display = 'none';
      document.getElementById("collapse-año-cerrado").style.display = 'inline';
    });

  }

  function collapse_precio() {
    let iconClose = document.getElementById('collapse-precio-cerrado')
    let iconOpen = document.getElementById('collapse-precio-abierto')

    iconClose.classList.toggle('active')
    iconOpen.classList.toggle('active')

    $('#precio').on('shown.bs.collapse', function() {
      document.getElementById("collapse-precio-cerrado").style.display = 'none';
      document.getElementById("collapse-precio-abierto").style.display = 'inline';
    });

    $('#precio').on('hidden.bs.collapse', function() {
      document.getElementById("collapse-precio-abierto").style.display = 'none';
      document.getElementById("collapse-precio-cerrado").style.display = 'inline';
    });

  }

  function collapse_kilometro() {

    let iconClose = document.getElementById('collapse-kilometro-cerrado')
    let iconOpen = document.getElementById('collapse-kilometro-abierto')

    iconClose.classList.toggle('active')
    iconOpen.classList.toggle('active')

    $('#kilometro').on('shown.bs.collapse', function() {
      document.getElementById("collapse-kilometro-cerrado").style.display = 'none';
      document.getElementById("collapse-kilometro-abierto").style.display = 'inline';
    });

    $('#kilometro').on('hidden.bs.collapse', function() {
      document.getElementById("collapse-kilometro-abierto").style.display = 'none';
      document.getElementById("collapse-kilometro-cerrado").style.display = 'inline';
    });

  }

  function ford_etiqueta_inline() {
    document.getElementById("etiquetas-dinamica-ford").style.display = 'inline';
  }

  function ford_etiqueta_none() {
    document.getElementById("etiquetas-dinamica-ford").style.display = 'none';
  }
</script>

<!-- Iconos feather -->
<script>
  feather.replace()
</script>

{{-- modal_login --}}
@include('modales.modal_login_registro')

@endsection