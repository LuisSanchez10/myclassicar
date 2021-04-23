<!-- navbar pc-->
<style>
    #menuNavbar ul.navbar-nav .nav-item{
    margin: 0 0.5rem!important;
  }
  #menuNavbar ul.navbar-nav .nav-link{
    color:#222!important;
  }
  #menuNavbar ul.navbar-nav .nav-item:last-child{
    display: flex;
    justify-content: center;
    align-items: center;
  }

   .inputSearchNavbar::-webkit-input-placeholder{ /* WebKit, Blink, Edge */
    color: #aaa;
  }
  .inputSearchNavbar:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color: #aaa;
    opacity: 1 /* esto es porque Firefox le reduce la opacidad por defecto */;
  }
  .inputSearchNavbar::-moz-placeholder { /* Mozilla Firefox 19+ */
    color: #aaa;
    opacity:  1;
  }
  .inputSearchNavbar:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #aaa;
  }

  .inputSearch-desktop-container{
    position: relative;
  }

  .inputSearchNavbar{
    color: #555;
    max-width: 60vw;
    height: auto !important;
    border: 0px;
    outline: none;
    opacity: 1;
    transition: opacity 0.5s;
    -webkit-transition: opacity 1.5s;
    -moz-transition: opacity 1.5s;
    -o-transition: opacity 1.5s;
  }

  .nav-search-content{
    top: 100%;
    position: absolute;
    z-index: 10;
    background-color: #fff;
    left: 0;
    padding: 1rem .8rem;
    right: 0;
    display: none;
  }

  .nav-search-content.active{
    display: block;
  }

  .nav-search-title{
    font-family: Roboto Condensed;
    font-weight: bold;
    font-size: .7rem;
  }

 .nav-search-items-main{
    padding: 0;
    margin: 0;
    margin-bottom: 1rem;
  }
  .nav-search-item{
    
    font-size: .9rem;
    font-weight: 300;
    margin-bottom: .8rem;
    padding: 0;
    cursor: pointer;
    font-family: Roboto Condensed;
    list-style: none;
  }

  .nav-search-item a{
    color: #666666;
    text-decoration: none;
  }

  #input_buscador{
    position: relative;
  }
  

  #menu_logo{
    font-family: Roboto Condensed;
  font-style: normal;
  font-weight: bold;
  font-size: 24px;
  line-height: 28px;
  text-align: center;
  z-index: 1000;
  color: #DE5214;
  }

  .menu_opciones{
    font-family: Roboto Condensed;
    font-style: normal;
    font-weight: 300;
    font-size: 14px;
    line-height: 18px;
  /* identical to box height, or 129% */

  align-items: center;
  text-align: center;

  color: #000000;
  }

  .linea-bottom{
    background: #FFFFFF;
    border: 1px solid #DBDBDB;
    margin: 0;
    padding: 0;
  }
 
 #boton_menu_ingresar{
  background: #FFFFFF;
  border: 1px solid #DBDBDB;
  box-sizing: border-box;
  border-radius: 4px;
 }

 .menuNavbar_mo{
  flex-basis: 100%;
  flex-grow: 1;
  // For always expanded or extra full navbars, ensure content aligns itself
  // properly vertically. Can be easily overridden with flex utilities.
  align-items: center;
 }

 .p_nav{
  font-family: Roboto Condensed;
  font-style: normal;
  font-weight: 300;
  font-size: 14px;
  line-height: 18px;
 }

 .buttonUserNavbar{
   font-weight: normal !important; 
   font-size: 12px;
 }

 a.buttonUserNavbar{
  text-decoration: none;
  color:black;
}

 .logo_login_nav{
   width: 25px;
   heigth: 25px;
   border-radius: 100px;
 }


  .input-nav-desktop{
    display: flex;
    align-items: center;
  }

  #formulario_buscar{
    margin: 0;  
  }

</style>
<nav class="navbar contenedor_navbar navbar-expand-lg navbar-white bg-white p-0">
  <div class="container-fluid py-3 d-lg-none">
    {{-- boton de desplegar buscador --}}
    <button id="desplegar_buscador" class="navbar-toggler  collapse show buscador_movil" type="button" data-toggle="collapse" data-target=".buscador_movil" aria-controls="buscador_movil" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0627 13.4769C9.71946 15.1468 6.44538 14.9307 4.34315 12.8284C2 10.4853 2 6.68629 4.34315 4.34315C6.6863 2 10.4853 2 12.8284 4.34315C15.1716 6.68629 15.1716 10.4853 12.8284 12.8284L16.364 16.364L15.6569 17.0711L12.0627 13.4769ZM12.1213 12.1213C14.0739 10.1687 14.0739 7.00287 12.1213 5.05025C10.1687 3.09763 7.00288 3.09763 5.05026 5.05025C3.09764 7.00287 3.09764 10.1687 5.05026 12.1213C7.00288 14.0739 10.1687 14.0739 12.1213 12.1213Z" fill="black"/>
        </svg>
      </span>
    </button>

    {{-- boton de buscar  --}}
    <button id="btn_buscar" class="navbar-toggler buscador_movil collapse" type="button" data-toggle="collapse" data-target="#buscador_movil" aria-controls="buscador_movil" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0627 13.4769C9.71946 15.1468 6.44538 14.9307 4.34315 12.8284C2 10.4853 2 6.68629 4.34315 4.34315C6.6863 2 10.4853 2 12.8284 4.34315C15.1716 6.68629 15.1716 10.4853 12.8284 12.8284L16.364 16.364L15.6569 17.0711L12.0627 13.4769ZM12.1213 12.1213C14.0739 10.1687 14.0739 7.00287 12.1213 5.05025C10.1687 3.09763 7.00288 3.09763 5.05026 5.05025C3.09764 7.00287 3.09764 10.1687 5.05026 12.1213C7.00288 14.0739 10.1687 14.0739 12.1213 12.1213Z" fill="black"/>
        </svg>
      </span>
    </button>

    {{-- buscador--}}
    <form action="/comprar/search" method="GET" id="formulario_buscar_mobile">
      <input id='input_buscador' name="busqueda"  type="text" class="inputSearchNavbar buscador_movil collapse buscador_on p_nav" placeholder="Buscar por marca, modelo ...">
      <div class="nav-search-content" id="navBarSearchingMobile">
          <h3 class="nav-search-title" id="marcaMobileTile">Marca</h3>
          <ul class="nav-search-items-main" id="main_marcas_mobile">
          </ul>

          <h3 class="nav-search-title" id="modelMobileTitle">Modelo</h3>
          <ul class="nav-search-items-main" id="main_modelos_mobile">

          </ul>
      </div>
    </form>

    {{-- logo de classicar --}}
    <a class="navbar-brand buscador_movil collapse show" href="/" id="menu_logo">
        Classicar
    </a>

    {{-- boton de desplegar    --}}
    <button id="desplegar_menu" class="navbar-toggler buscador_movil collapse show" type="button" data-toggle="collapse" data-target=".menuNavbar_mo" aria-controls="menuNavbar_mo" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.5V0.5H16V1.5H0ZM0 6.5V5.5H16V6.5H0ZM0 10.5V11.5H16V10.5H0Z" fill="black"/>
          </svg>
      </span>
    </button>

    {{-- boton de cerrar menu --}}
    <button style="display:none" id="cerrar_menu" class="navbar-toggler" type="button" data-toggle="collapse" data-target=".menuNavbar_mo" aria-controls="menuNavbar_mo" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.35355 0.646454L0.646446 1.35356L7.29289 8.00001L0.646446 14.6465L1.35355 15.3536L8 8.70711L14.6464 15.3536L15.3536 14.6465L8.70711 8.00001L15.3536 1.35356L14.6464 0.646454L8 7.2929L1.35355 0.646454ZM8 7.2929L7.29289 8.00001L8 8.70711L8.70711 8.00001L8 7.2929Z" fill="black"/>
          </svg>
      </span>
    </button>
     {{-- boton de cerrar buscador --}}
     <button style="display: none" id="cerrar_buscador" class="navbar-toggler" type="button" data-toggle="collapse" data-target=".buscador_movil" aria-controls="menuNavbar" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.35355 0.646454L0.646446 1.35356L7.29289 8.00001L0.646446 14.6465L1.35355 15.3536L8 8.70711L14.6464 15.3536L15.3536 14.6465L8.70711 8.00001L15.3536 1.35356L14.6464 0.646454L8 7.2929L1.35355 0.646454ZM8 7.2929L7.29289 8.00001L8 8.70711L8.70711 8.00001L8 7.2929Z" fill="black"/>
          </svg>
      </span>
    </button>
  </div>
{{-- menu para telefonos --}}
<div class="collapse p-0 menuNavbar_mo">
  <div class="navbar-nav">
      <div  class="nav-item active d-block d-md-none linea-bottom">
        <a class="nav-link menu_opciones p-3" href="/">Home</a>
      </div>
      <div  class="nav-item linea-bottom">
        <a class="nav-link menu_opciones p-3" href="/comprar">Comprar</a>
      </div>
      <div  class="nav-item linea-bottom">
        <a class="nav-link menu_opciones p-3" href="/vender">Vender</a>
      </div>
      <div  class="nav-item linea-bottom">
        <a class="nav-link menu_opciones p-3" href="/ayuda">Ayuda</a>
      </div>
      <div  class="nav-item linea-bottom p-4 text-center">
        @guest
        <button id="boton_menu_ingresar" class="buttonUserNavbar  btn-block p-3" type="button" name="button" data-toggle="modal" data-target="#modal_login" data-whatever="@mdo">
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="black"/>
            <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
            <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="white"/>
            </mask>
            <g mask="url(#mask0)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11 11.5C9.61929 11.5 8.5 10.3807 8.5 9C8.5 7.61929 9.61929 6.5 11 6.5C12.3807 6.5 13.5 7.61929 13.5 9C13.5 10.3807 12.3807 11.5 11 11.5ZM11 12.5C12.933 12.5 14.5 10.933 14.5 9C14.5 7.067 12.933 5.5 11 5.5C9.067 5.5 7.5 7.067 7.5 9C7.5 10.933 9.067 12.5 11 12.5ZM17 20H16C16 17.2386 13.7614 15 11 15C8.23858 15 6 17.2386 6 20H5C5 16.6863 7.68629 14 11 14C14.3137 14 17 16.6863 17 20Z" fill="black"/>
            </g>
            </svg>&nbsp;&nbsp;Ingresar
        </button>
        @else
        <a href="/perfil" id="boton_menu_ingresar" class="buttonUserNavbar  btn-block p-3" type="submit" name="button" >
          @if(substr(Auth::user()->imagen_logo, 0, 4) === 'http')
              <img src="{{ Auth::user()->imagen_logo }}" class="logo_login_nav" alt="">
          @elseif(Auth::user()->imagen_logo)
              <img src="{{ asset('perfil_logos/'. Auth::user()->imagen_logo) }}"  class="logo_login_nav" alt="">
          @else
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="black"/>
              <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
              <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="white"/>
              </mask>
              <g mask="url(#mask0)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M11 11.5C9.61929 11.5 8.5 10.3807 8.5 9C8.5 7.61929 9.61929 6.5 11 6.5C12.3807 6.5 13.5 7.61929 13.5 9C13.5 10.3807 12.3807 11.5 11 11.5ZM11 12.5C12.933 12.5 14.5 10.933 14.5 9C14.5 7.067 12.933 5.5 11 5.5C9.067 5.5 7.5 7.067 7.5 9C7.5 10.933 9.067 12.5 11 12.5ZM17 20H16C16 17.2386 13.7614 15 11 15C8.23858 15 6 17.2386 6 20H5C5 16.6863 7.68629 14 11 14C14.3137 14 17 16.6863 17 20Z" fill="black"/>
              </g>
              </svg>
           @endif
               &nbsp;&nbsp;{{Auth::user()->name}}
        </a>
        <button id="boton_menu_ingresar" class="buttonUserNavbar  btn-block p-3" href="{{ route('logout') }}"  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 2C3.26522 2 3.51957 1.89464 3.70711 1.70711C3.89464 1.51957 4 1.26522 4 1C4 0.734784 3.89464 0.48043 3.70711 0.292893C3.51957 0.105357 3.26522 0 3 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V15C0 15.2652 0.105357 15.5196 0.292893 15.7071C0.48043 15.8946 0.734784 16 1 16H3C3.26522 16 3.51957 15.8946 3.70711 15.7071C3.89464 15.5196 4 15.2652 4 15C4 14.7348 3.89464 14.4804 3.70711 14.2929C3.51957 14.1054 3.26522 14 3 14H2V2H3Z" fill="#231F20"/>
            <path d="M16.82 7.41995L14 3.41995C13.8471 3.20436 13.615 3.05809 13.3545 3.01312C13.0941 2.96815 12.8264 3.02813 12.61 3.17995C12.5018 3.25574 12.4098 3.35219 12.3391 3.46376C12.2684 3.57532 12.2206 3.69977 12.1982 3.82994C12.1759 3.9601 12.1796 4.09339 12.2091 4.22212C12.2386 4.35085 12.2933 4.47247 12.37 4.57995L14.09 6.99995H14H6C5.73478 6.99995 5.48043 7.10531 5.29289 7.29284C5.10536 7.48038 5 7.73473 5 7.99995C5 8.26517 5.10536 8.51952 5.29289 8.70706C5.48043 8.89459 5.73478 8.99995 6 8.99995H14L12.2 11.4C12.1212 11.505 12.0639 11.6246 12.0313 11.7518C11.9987 11.879 11.9915 12.0114 12.01 12.1414C12.0286 12.2714 12.0726 12.3964 12.1395 12.5094C12.2064 12.6224 12.2949 12.7212 12.4 12.7999C12.5731 12.9298 12.7836 13 13 13C13.1552 13 13.3084 12.9638 13.4472 12.8944C13.5861 12.8249 13.7069 12.7241 13.8 12.6L16.8 8.59995C16.9281 8.43082 16.999 8.22534 17.0026 8.01322C17.0062 7.80109 16.9423 7.59333 16.82 7.41995Z" fill="#231F20"/>
            </svg>
          &nbsp;&nbsp;Salir
        </button>
       
        @endguest
      </div>
  </div>
 </div>
</div>
{{-- contenedor de menu para pantalla grandes(Ipad, PC) --}}
<div class="container-fluid px-3 py-2 d-none d-lg-block">
  <div class="row">
    <div class="col-1">
        {{-- logo de classicar --}}
        <a class="navbar-brand" href="/" id="menu_logo">
          Classicar
      </a>
    </div>
    <div class="col-5 input-nav-desktop">
      {{-- buscador para pc --}}
      <div class="" id="buscador_pc">
        <div class="input-group">
          <div class="input-group-prepend">
            <button class="btn_search" id="buscador_icon" type="submit">
              <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0627 13.4769C9.71946 15.1468 6.44538 14.9307 4.34315 12.8284C2 10.4853 2 6.68629 4.34315 4.34315C6.6863 2 10.4853 2 12.8284 4.34315C15.1716 6.68629 15.1716 10.4853 12.8284 12.8284L16.364 16.364L15.6569 17.0711L12.0627 13.4769ZM12.1213 12.1213C14.0739 10.1687 14.0739 7.00287 12.1213 5.05025C10.1687 3.09763 7.00288 3.09763 5.05026 5.05025C3.09764 7.00287 3.09764 10.1687 5.05026 12.1213C7.00288 14.0739 10.1687 14.0739 12.1213 12.1213Z" fill="black"/>
                </svg>
            </button>

            <div class="input-desktop-container">
              <form action="/comprar/search" method="GET" id="formulario_buscar">
                <input type="text" class="inputSearchNavbar p_nav" name="busqueda" id="navbarMain" placeholder="Buscar por marca, modelo ..." aria-label="Input group example" aria-describedby="btnGroupAddon">
              </form>
              <!-- Barra busqueda -->
              <div class="nav-search-content" id="navBarSearching">
                  <h3 class="nav-search-title" id="title_marca_desktop">Marca</h3>
                  <ul class="nav-search-items-main" id="main_marcas_desktop">
   
                  </ul>

                  <h3 class="nav-search-title" id="title_modelo_desktop">Modelo</h3>
                  <ul class="nav-search-items-main" id="main_modelos_desktop">

                  </ul>
              </div>
            </div>
          </div>

      </div>
      </div>
    </div>
    <div class="col-6">
      {{-- menu para pc --}}
      <div class="d-md-flex" id="menuNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link menu_opciones" href="/comprar">Comprar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu_opciones" href="/vender">Vender</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu_opciones" href="/ayuda">Ayuda</a>
          </li>
          <li class="nav-item">
          @guest
            <button class="buttonUserNavbar ml-4 py-1 px-2" type="button" name="button" data-toggle="modal" data-target="#modal_login" data-whatever="@mdo">

              <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="black"/>
                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="white"/>
                </mask>
                <g mask="url(#mask0)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 11.5C9.61929 11.5 8.5 10.3807 8.5 9C8.5 7.61929 9.61929 6.5 11 6.5C12.3807 6.5 13.5 7.61929 13.5 9C13.5 10.3807 12.3807 11.5 11 11.5ZM11 12.5C12.933 12.5 14.5 10.933 14.5 9C14.5 7.067 12.933 5.5 11 5.5C9.067 5.5 7.5 7.067 7.5 9C7.5 10.933 9.067 12.5 11 12.5ZM17 20H16C16 17.2386 13.7614 15 11 15C8.23858 15 6 17.2386 6 20H5C5 16.6863 7.68629 14 11 14C14.3137 14 17 16.6863 17 20Z" fill="black"/>
                </g>
                </svg>&nbsp;Ingresar
            </button>
          @else
            <a href="/perfil" class="btn buttonUserNavbar ml-4 py-1 px-2" type="submit">
                @if(substr(Auth::user()->imagen_logo, 0, 4) === 'http')
                    <img src="{{ Auth::user()->imagen_logo }}" class="logo_login_nav" alt="">
                @elseif(Auth::user()->imagen_logo)
                    <img src="{{ asset('perfil_logos/'. Auth::user()->imagen_logo) }}"  class="logo_login_nav" alt="">
                @else
                  <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="black"/>
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="22" height="22">
                    <path d="M11 21.5C16.799 21.5 21.5 16.799 21.5 11C21.5 5.20101 16.799 0.5 11 0.5C5.20101 0.5 0.5 5.20101 0.5 11C0.5 16.799 5.20101 21.5 11 21.5Z" fill="white" stroke="white"/>
                    </mask>
                    <g mask="url(#mask0)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11 11.5C9.61929 11.5 8.5 10.3807 8.5 9C8.5 7.61929 9.61929 6.5 11 6.5C12.3807 6.5 13.5 7.61929 13.5 9C13.5 10.3807 12.3807 11.5 11 11.5ZM11 12.5C12.933 12.5 14.5 10.933 14.5 9C14.5 7.067 12.933 5.5 11 5.5C9.067 5.5 7.5 7.067 7.5 9C7.5 10.933 9.067 12.5 11 12.5ZM17 20H16C16 17.2386 13.7614 15 11 15C8.23858 15 6 17.2386 6 20H5C5 16.6863 7.68629 14 11 14C14.3137 14 17 16.6863 17 20Z" fill="black"/>
                    </g>
                  </svg>
                @endif
                
                 &nbsp; {{ Auth::user()->name }}
              </a>
              <a class="btn" href="{{ route('logout') }}"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                
                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 2C3.26522 2 3.51957 1.89464 3.70711 1.70711C3.89464 1.51957 4 1.26522 4 1C4 0.734784 3.89464 0.48043 3.70711 0.292893C3.51957 0.105357 3.26522 0 3 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V15C0 15.2652 0.105357 15.5196 0.292893 15.7071C0.48043 15.8946 0.734784 16 1 16H3C3.26522 16 3.51957 15.8946 3.70711 15.7071C3.89464 15.5196 4 15.2652 4 15C4 14.7348 3.89464 14.4804 3.70711 14.2929C3.51957 14.1054 3.26522 14 3 14H2V2H3Z" fill="#231F20"/>
                  <path d="M16.82 7.41995L14 3.41995C13.8471 3.20436 13.615 3.05809 13.3545 3.01312C13.0941 2.96815 12.8264 3.02813 12.61 3.17995C12.5018 3.25574 12.4098 3.35219 12.3391 3.46376C12.2684 3.57532 12.2206 3.69977 12.1982 3.82994C12.1759 3.9601 12.1796 4.09339 12.2091 4.22212C12.2386 4.35085 12.2933 4.47247 12.37 4.57995L14.09 6.99995H14H6C5.73478 6.99995 5.48043 7.10531 5.29289 7.29284C5.10536 7.48038 5 7.73473 5 7.99995C5 8.26517 5.10536 8.51952 5.29289 8.70706C5.48043 8.89459 5.73478 8.99995 6 8.99995H14L12.2 11.4C12.1212 11.505 12.0639 11.6246 12.0313 11.7518C11.9987 11.879 11.9915 12.0114 12.01 12.1414C12.0286 12.2714 12.0726 12.3964 12.1395 12.5094C12.2064 12.6224 12.2949 12.7212 12.4 12.7999C12.5731 12.9298 12.7836 13 13 13C13.1552 13 13.3084 12.9638 13.4472 12.8944C13.5861 12.8249 13.7069 12.7241 13.8 12.6L16.8 8.59995C16.9281 8.43082 16.999 8.22534 17.0026 8.01322C17.0062 7.80109 16.9423 7.59333 16.82 7.41995Z" fill="#231F20"/>
                  </svg>
                  
              </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          @endguest
          </li>
        </ul>
      </div>
    </div>
  </div>
{{-- listo --}}
</div>

  </nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
<script>


//  Mostrar y Quitar Barra de busqueda
  const barraBusqueda = document.getElementById('navbarMain')
  const barraBusquedaMobile = document.getElementById('input_buscador')

  const buscadorDesktop = document.getElementById('navBarSearching');

  let marcas =[]
  let modelos = []

  let clickDesktop = false; 


//Eventos Barra de Busqueda Mobile
  barraBusquedaMobile.addEventListener('input', () => {
    const buscador = document.getElementById('navBarSearchingMobile')
    buscador.classList.add('active')

  });

  //iniciano busqueda en mobile
  barraBusquedaMobile.addEventListener('keyup', () =>{
   getSearchMobile(barraBusquedaMobile.value)

  });


  barraBusquedaMobile.addEventListener('focus', () => {
    const buscador = document.getElementById('navBarSearchingMobile')
    buscador.classList.remove('active')
  });


  // icono barra mobile
  document.getElementById('btn_buscar').addEventListener('click', () => {
    document.getElementById('formulario_buscar_mobile').submit()
  });


//Eventos Barra de busqueda Desktop
  barraBusqueda.addEventListener('focus', () => {
    mostrarQuitarBuscador()

    getSearchDesktop(barraBusqueda.value)
  });



  //iniciando busqueda en desktop
  barraBusqueda.addEventListener('keyup', (e) => {
    getSearchDesktop(barraBusqueda.value);
  });

  barraBusqueda.addEventListener('blur', () => {
    mostrarQuitarBuscador()
  });

  buscadorDesktop.addEventListener('mouseenter', () => {
    clickDesktop = true;
  })

  buscadorDesktop.addEventListener('mouseleave', () => {
    clickDesktop = false;
  });

  document.getElementById('buscador_icon').addEventListener('click', () => {
    document.getElementById('formulario_buscar').submit();
  });


//llamada a axios
  function getSearchDesktop(value){
    axios.get(`/search?buscar=${value}`)
      .then( response =>{
          let marcas = response.data.marcas;
          let modelos = response.data.modelos;
          llenarBarra(marcas, modelos);

          return response.data;

      });
  }

  function getSearchMobile(value){
    axios.get(`/search?buscar=${value}`)
      .then( response =>{
          let marcas = response.data.marcas;
          let modelos = response.data.modelos;
          llenarBarraMobile(marcas, modelos);
      }); 
}


// llenamos los ul del buscador mobile
function llenarBarraMobile(marcas, modelos){
  const marcaMain = document.getElementById('main_marcas_mobile')
  const modeloMain = document.getElementById('main_modelos_mobile')

  marcaMain.innerHTML = '';
  modeloMain.innerHTML = '';

  if(marcas.length > 0){
    document.getElementById('marcaMobileTile').style.display = 'block';
    marcas.forEach( marca => {
      let template = `
        <li class="nav-search-item">
          <a href="/comprar?marca=${marca.id}">${marca.brand}</a>
        </li>
      `
      marcaMain.innerHTML += template;
    });
  } else {
    document.getElementById('marcaMobileTile').style.display = 'none';
  }

  if(modelos.length > 0){
    document.getElementById('modelMobileTitle').style.display = 'block';
    modelos.forEach( modelo => {
      let template = `
        <li class="nav-search-item">
          <a href="/comprar?modelo=${modelo.id}">${modelo.model}</a>
        </li>
      `

      modeloMain.innerHTML += template;
    });
  } else {
    document.getElementById('modelMobileTitle').style.display = 'none';
  }


}

// llenamos los ul del buscador desktop
function llenarBarra(marcas, modelos){

    const marcaMain = document.getElementById('main_marcas_desktop')
    const modeloMain = document.getElementById('main_modelos_desktop')

    const titleModelo = document.getElementById('title_modelo_desktop');
    const titleMarca = document.getElementById('title_marca_desktop');

    marcaMain.innerHTML = '';
    modeloMain.innerHTML = '';


    if(marcas.length > 0){
      titleMarca.style.display = 'block';
      marcas.forEach( marca => {
        let template = `
          <li class="nav-search-item">
            <a href="/comprar?marca=${marca.id}">${marca.brand}</a>
          </li>
        `

        marcaMain.innerHTML += template;
      });
    } else {
      titleMarca.style.display = 'none';
    }

    if(modelos.length > 0){
      titleModelo.style.display = 'block';
      modelos.forEach( modelo => {
        let template = `
          <li class="nav-search-item">
            <a href="/comprar?modelo=${modelo.id}">${modelo.model}</a>
          </li>
        `

        modeloMain.innerHTML += template;
      });
    } else {
      titleModelo.style.display = 'none';
    }
}

//funcion para colocar/quitar active class
  function mostrarQuitarBuscador() {
    const buscador = document.getElementById('navBarSearching');
    if(!clickDesktop){
      buscador.classList.toggle('active')
    }
  }

 $('.menuNavbar_mo').on('hide.bs.collapse', function () {
  $('#desplegar_menu').show();
  $('#cerrar_menu').hide();

  $('#desplegar_buscador').prop('disabled', false);

});
$('.menuNavbar_mo').on('show.bs.collapse', function () {
    $('#cerrar_menu').show();
    $('#desplegar_menu').hide();
    $('#desplegar_buscador').prop('disabled', true);
});
$('.buscador_movil').on('show.bs.collapse', function () {
  $('.buscador_on').show();
  $('#cerrar_buscador').hide();
  $('#input_buscador').hide();
  $('#desplegar_buscador').show();
  $('#btn_buscar').hide();
  $('#menu_logo').show();
  $('#desplegar_menu').show();
  
});
$('.buscador_movil').on('hide.bs.collapse', function () {
  $('.buscador_on').hide();
  $('#cerrar_buscador').show();
  $('#desplegar_buscador').hide();
  $('#btn_buscar').show();
  $('#input_buscador').show();
  $('#menu_logo').hide();
  $('#desplegar_menu').hide();
  $('#input_buscador').focus();
  
});


</script>
