<style type="text/css">
.modal .modal-dialog {
  width: 448px;
  font-size: 12px;
}
.modal .modal-header {
  background-color : white;
  padding :0px 0px 0px 0px;
  border-bottom : none;
  background-color: black;
 border-radius: 8px 8px 0 0;
}    
    .modal .modal-header .close {
  padding : 0;
  opacity : 1;
  z-index: 1000;
}
.modal .modal-header .close span {
  font-weight : 100;
  font-size : 2.4rem;

  /* margin: -1.0em 0.5em; */
  color : black;
}
.close{
    position: absolute;
    right: -1%;
}
.modal .modal-header .close:hover, .modal .modal-header .close:focus, .modal .modal-header .close:active {
  opacity : 1;
  outline : none;
  box-shadow : none;

}
.equis_1{
display: inline;
}
.equis_2{
display: none;
}

.modal .modal-body {
  padding: 0px ;
  margin-top: -1.7em;
}
#img-pixabay-encabezado {
   height:180px;
   width: 100%;
   border-radius: 4px 0 0 0;
   background-blend-mode: luminosity, normal;
}
.modal .modal-header-title {
    position: absolute;
    top: 90px;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}
.modal .botones-login {
  width: 100%;
  top: 30%;
  z-index: 100;
  position: absolute;
  left: 50%;
  transform: translate(-50%, -50%);
}
.modal .botones-login button, .modal .botones-login button:focus, .modal .botones-login button:hover{
  text-decoration-style: none;
  text-decoration: none;
  box-shadow: none;
  color: white;
  border-radius: 2px;

}

.modal .botones-login button:active  {
  text-decoration-style: none;
  text-decoration: none;
  box-shadow: none;
}

.modal .botones-login h6{
  font-size: 12px;
}
.modal p {

  display: flex;
  flex-direction: row;
  color: #979797;
}
.modal p:before, .modal p:after{
  content: "";
  flex: 0.45 0.45;
  border-bottom: 1px solid #D8D8D8;
  margin: auto;
}

.modal .relief-white, .modal .relief-white:active {
    display: flex;
  justify-content: center;
  align-items: center;
  width: 85%;
  height: 50px;
  background: #FFFFFF;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.16);
  border-radius: 4px;
  text-decoration: none;
}

.modal .relief-white span{
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
color: #666666;
}
.linea-vertical-google{
  position: absolute;
  top:-2px;
  left: 55px;
}
.google_1 {
  display: inline;
}
.google_2 {
  display: none;
}
.modal .relief-facebook, .modal .relief-facebook:active {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 85%;
  height: 50px;
background: #3B5998;
box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.16);
border-radius: 4px;
}
.linea-vertical-facebook{
  position: absolute;
  top:-2px;
  left: 55px;
}
.modal .relief-facebook span{
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
color: #FFFFFF;
}
.facebook_1 {
  display: inline;
}
.facebook_2 {
  display: none;
}

#modal_titulo{
    font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 40px;
line-height: 47px;
color: #FFFFFF;
}
#modal_subtitulo{
  display: inline;
    font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
align-items: center;
color: #FFFFFF;
}

.form-modal{
  padding-left: 10px;
  width: 100%;
  height: 48px;
background: #ffff;
border: 1px solid #DBDBDB;
box-sizing: border-box;
border-radius: 4px;
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
margin: 10px 0;
display: flex;
align-items: center;
color: #666666;
}
.form-modal:focus{
text-decoration: none;
text-decoration-style: none;
background-color: #ffff;
outline: none;
}
.form-modal:placeholder-shown {
  background-color: #F5F5F5;
}
/*.form-modal::-webkit-input-placeholder {
  color: #F5F5F5;
}*/
.modal_a{
  font-family: Roboto Condensed;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 16px;
/* identical to box height, or 133% */

text-decoration-line: underline;
color: #000000;
}

.modal_text_plano{
  font-family: Roboto Condensed;
font-style: normal;
font-weight: normal;
font-size: 12px;
line-height: 16px;
margin: 20px 0;
/* identical to box height, or 133% */
color: #999999;
}

.on_text_modal{
  font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: 24px;
/* identical to box height, or 150% */

text-align: center;

color: #FFFFFF;
}
.off_text_modal{
  font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 16px;
line-height: 24px;
/* identical to box height, or 150% */
text-align: center;
color: #FFFFFF;
mix-blend-mode: normal;
opacity: 0.5;
}
.boton-ininiar-sesion{
  width: 100%;
  height: 48px;
background: #DBDBDB;
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
text-align: center;
outline: none;
color: #FFFFFF;
}
 .boton-ininiar-sesion:hover, .boton-ininiar-sesion:focus{
  background: #DE5214;
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
box-shadow: none;
text-align: center;
outline: none;
color: #FFFFFF;

}
.boton-registrarse{
    width: 100%;
  height: 48px;
  background: #DBDBDB;
  font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
outline: none;
text-align: center;
color: #FFFFFF;
}
.boton-registrarse:hover, .boton-registrarse:focus{
  background: #DE5214;
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
box-shadow: none;
text-align: center;
outline: none;
color: #FFFFFF;
}

@media (max-width:576px) and (min-width:1px) {
.modal{
padding: 60px 0px 0px 70px;
}
.close{
    position: absolute;
    top:10px;
    right:25px;
    background: rgba(0, 0, 0, 0);
}
.equis_1{
display: none;
}
.equis_2{
display: inline;
}
#modal_subtitulo{
  display: none
}
.facebook_1 {
  display: none;
}
.facebook_2 {
  display: inline;
}
.google_1 {
  display: none;
}
.google_2 {
  display: inline;
}
 .modal .modal-dialog {
  width:80%;
  height: 572px;
}
  #modal_titulo{
font-size: 30px;
}
#modal_subtitulo{
font-size: 12px;
}
.form-modal{
  width: 100%;
  height: 28px;
font-size: 12px;
margin: 5px 0;
}
.on_text_modal{
font-size: 12px;
}
.off_text_modal{
font-size: 12px;
}
/*Olvidastes tu contraseña*/
.modal_a{
font-size: 10px;
}
.boton-ininiar-sesion{
  width: 100%;
  height: 28px;
font-size: 12px;
}
 .boton-ininiar-sesion:hover, .boton-ininiar-sesion:focus{
font-size: 12px;
}
.boton-registrarse{
    width: 100%;
  height: 28px;
font-size: 12px;
}
.boton-registrarse:hover, .boton-registrarse:focus{
font-size: 12px;
}
/*<<----------o ingresa con-------->*/
.modal_text_plano{
font-size: 10px;
margin: 10px 0;
}
.modal .relief-white, .modal .relief-white:active {
  width: 92%;
  height: 40px;
  margin-bottom: 5px;
}
.relief-white .col-4{
  text-align: left;
}
.relief-white .col-8{
  text-align: left;
  padding-left: 0;
}
.modal .relief-white span{
font-size: 12px;
line-height: 18px;
}
.linea-vertical-google{
  position: absolute;
  top:-4px;
  left: 55px;
}
.modal .relief-facebook, .modal .relief-facebook:active {
width: 92%;
height: 40px;
background: #3B5998;
}
.relief-facebook .col-4{
  text-align: left;
}
.relief-facebook .col-8{
  text-align: left;
}
.linea-vertical-facebook{
  position: absolute;
  top:-4px;
  left: 55px;
}
.modal .relief-facebook span{
font-size: 12px;
}
}
@media (max-width:576px) and (min-width:370px) {
 .modal .modal-dialog {
 width:90%;
 height: 572px;
} 
.modal{
padding: 60px 0px 0px 30px;
}
}
@media (max-width:370px) and (min-width:1px) {
 .modal .modal-dialog {
 width:95%;
 height: 572px;
} 
.modal{
padding: 60px 0px 0px 5px;
}
}
</style>
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="border-radius:9px;">
          <!-- begin: boton equis (x) -->
        <div class="modal-header">
          <button type="button"  class="close" data-dismiss="modal" aria-label="Close">
            <svg  class="equis_1" width="48" height="52" viewBox="0 0 48 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_d)">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M28 40C39.0457 40 48 31.0457 48 20C48 8.9543 39.0457 0 28 0C16.9543 0 8 8.9543 8 20C8 31.0457 16.9543 40 28 40Z" fill="white"/>
                </g>
                <path d="M28.7072 20L35.3536 26.6464L34.6465 27.3536L27.293 20L34.6465 12.6464L35.3536 13.3536L28.7072 20Z" fill="black"/>
                <path d="M20.6465 13.3536L21.3536 12.6464L28.7071 20L21.3536 27.3536L20.6465 26.6464L27.2929 20L20.6465 13.3536Z" fill="black"/>
                <defs>
                <filter id="filter0_d" x="0" y="-4" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="4"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.24 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
                </defs>
                </svg>
                <svg class="equis_2"width="20" height="36" viewBox="0 0 20 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.35359 18.6465L2.64648 19.3536L9.29293 26L2.64648 32.6465L3.35359 33.3536L10 26.7071L16.6465 33.3536L17.3536 32.6465L10.7071 26L17.3536 19.3536L16.6465 18.6465L10 25.2929L3.35359 18.6465ZM10 25.2929L9.29293 26L10 26.7071L10.7071 26L10 25.2929Z" fill="black"/>
                  </svg>

          </button>   
          <div id="img-pixabay-encabezado" style="border-radius:8px 8px 0 0; background: url({{asset('img/autos/a1.jpg')}}), #0C2849; background-blend-mode: luminosity, normal;">

          </div>
          {{-- <img id="img-pixabay-encabezado" src="{{asset('img/autos/a2.jpg')}}"   > --}}
          <div class="modal-header-title text-center">
            <h1 id="modal_titulo">Classicar</h1>
            <h2 id="modal_subtitulo">Encontrá tu clásico</h2>
          </div>

        </div>
        <!-- end: boton equis (x) -->
        
        <!-- Begin: header modal -->
        <div class="encabezado">
          <div class="modal-body">
                      <!-- Begin: Botones de inicio de sesion y Registro -->
          <div class="botones-login">
            <div class="row text-center">
              <div class="col-12 btn-group">
                <button href="#" class=" btn btn-default  ml-3 on_text_modal" id="boton-inciarsesion" onclick="iniciarsesion()" style="border-bottom: 4.6px solid #DE5214;">Iniciar Sesión</button>   
               <button href="#" class=" btn  btn-default mr-3 off_text_modal" id="boton-registro" onclick="registrarse()"  style="border-bottom:4.6px solid rgba(0, 0, 0, 0)">Registrarse</button>
              </div>
            </div>
          </div>
          <!-- end: Botones de inicio de sesion y Registro -->
          </div>
        </div>
    <!-- end: header modal -->
  
            <!-- Begin: Cuerpo del Modal  -->
        <div class="card" style="border-radius: 0 0 8px 8px;">
            <div class="card-content">
                <div class="card-body px-5">
                    <!-- Begin: Formulario de Registro  -->
                    <form action="{{ route('register') }}" method="POST" class="form-registro" id="registro-id" style="display: none;">
                        <div class="form-body">
                          @csrf
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="form-label-group position-relative has-icon-left">
                                        <input type="text" id="full-name" class="form-modal @error('name') is-invalid @enderror" name="fname" placeholder="Nombre Completo" value="{{ old('name') }}">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-control-position">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-label-group position-relative has-icon-left">
                                        <input type="email" id="email-id" class="form-modal @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-label-group position-relative has-icon-left">
                                        <input type="password" id="password-id" class="form-modal @error('password') is-invalid @enderror" name="password" placeholder="Contraseña">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="form-control-position">
                                            <i class="feather icon-smartphone"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-label-group position-relative has-icon-left">
                                        <input type="password" id="repeat-password-id" class="form-modal" name="password_confirmation" placeholder="Repetir Contraseña">
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>  
                                    </div>
                                </div>
                                <div class="col-12 pt-3 ">
                                    <button type="submit" class="btn btn-block boton-registrarse">Registrarse</button>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                          <div class="col-12">
                            <p class="modal_text_plano">O ingresar con</p>
                          </div>
                        </div>
                    </form>
                  <!-- end: Formulario de Registro  -->  
  
                  <!-- Begin: Formulario de Inicio de Sesion  -->
                    <form method="POST" action="{{ route('login') }}" class="form-iniciarsesion" id="iniciarsesion-id">
                      @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12 pt-2 ">
                                    <div class="form-label-group position-relative has-icon-left">
                                        <input type="email" id="email_id" class="form-modal @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email">

                                            <span>
                                                <strong id="error_email"></strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="col-12 pt-2">
                                    <div class="form-label-group position-relative has-icon-left">
                                        <input type="password" id="password_id" class="form-modal @error('password') is-invalid @enderror" name="password" placeholder="Contraseña">
                                    </div>
                                    <span>
                                        <strong id="error_password"></strong>
                                    </span>
                                </div>
                                
                                  <div class="col-12 text-center pt-2">
                                    <a href=""><span class="modal_a">¿Olvidastes tu Contraseña?</span></a>
                                  </div>
                                
                                <div class="col-12 pt-3 ">
                                    <button type="submit" id="iniciar_sesion_button" class="btn btn-block boton-ininiar-sesion" id="boton-iniciarsesion">Iniciar sesión</button>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                          <div class="col-12">
                            <p class="modal_text_plano">O ingresar con</p>
                          </div>
                        </div>
                    </form>
                  <!-- End: Formulario de Inicio de Sesion  -->  
  
                  <!-- integracion google y facebook -->
                    <div class="row text-center ml-1">  
                        <div class="col-12 col-sm-6"> 
                            <div class="row" >
                              <a href="/auth/facebook" class="relief-facebook" >
                              <div class="col-4" style="position: relative;" >
                                  <div>
                                <svg class="icono-facebook" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.0053 3H3.99474C3.44536 3 3 3.44536 3 3.99474V20.0053C3 20.5546 3.44536 21 3.99474 21H12.6158V14.0526H10.2632V11.3147H12.6032V9.31579C12.6032 6.98842 14.0211 5.72211 16.0958 5.72211C16.8006 5.7242 17.5048 5.76426 18.2053 5.84211V8.27053H16.7716C15.6442 8.27053 15.4263 8.80421 15.4263 9.59053V11.3274H18.1263L17.7758 14.0526H15.4263V21H20.0053C20.5546 21 21 20.5546 21 20.0053V3.99474C21 3.44536 20.5546 3 20.0053 3Z" fill="white"/>
                                    </svg>
                                    <!-- LINEA VERTICAL -->
                                    <svg class="linea-vertical-facebook" width="1" height="32" viewBox="0 0 1 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" width="1" height="32" fill="white"/>
                                    </svg>

  
                                </div>
                              </div>
                            
                              <div class="col-8 col-sm-8 mx-0 px-0 ">
                                <span class="facebook_1" >Facebook</span>
                                <span class="facebook_2">Continuar con Facebook</span>
                              </div> 
                              </a> 
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 mt-3 mt-sm-0"> 
                            <div class="row" style="position: relative;">
                              <a href="/auth/google" class="relief-white" >
                              <div class="col-4 ">
                                  <div>
                                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                      </mask>
                                      <g mask="url(#mask0)">
                                      <path d="M2.1626 17.3182V6.68182L9.27888 12L2.1626 17.3182Z" fill="#FBBC05"/>
                                      </g>
                                      <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                      </mask>
                                      <g mask="url(#mask1)">
                                      <path d="M2.1626 6.68182L9.27888 12L12.2091 9.50455L22.2556 7.9091V2.18182H2.1626V6.68182Z" fill="#EA4335"/>
                                      </g>
                                      <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                      </mask>
                                      <g mask="url(#mask2)">
                                      <path d="M2.1626 17.3182L14.7207 7.9091L18.0277 8.31819L22.2556 2.18182V21.8182H2.1626V17.3182Z" fill="#34A853"/>
                                      </g>
                                      <mask id="mask3" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                      </mask>
                                      <g mask="url(#mask3)">
                                      <path d="M22.2557 21.8182L9.27891 12L7.60449 10.7727L22.2557 6.68182V21.8182Z" fill="#4285F4"/>
                                      </g>
                                      </svg>
                                      <!-- LINEA VERTICAL -->
                                      <svg class="linea-vertical-google" width="1" height="32" viewBox="0 0 1 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <rect opacity="0.3" width="1" height="32" fill="#666666"/>
                                      </svg>
 
                                </div>
                              </div>
                            
                              <div class="col-8 ">
                                <span class="google_1" >Google</span>
                                <span class="google_2" >Continuar con Google</span>
                              </div> 
                              </a> 
                            </div>
                        </div>             
                    </div>
                  <!-- end integracion google y facebook -->  
                </div>
              </div>
        </div>
        <!-- end: Cuerpo del Modal  -->
    </div>
   </div>
  </div>
  <!-- end: Contentido -->
  
<script type="text/javascript">


  //funcion que se utiliza en la llamda axios que está en el archivo layouts/main
  function pushError(error){
    const passErrorInfo = document.getElementById('error_password');
    const emailErrorInfo = document.getElementById('error_email');

    if(error.email){
      emailErrorInfo.textContent = error.email[0];
    }

    if(error.password){
      passErrorInfo.textContent = error.password[0];
    }
  }

  function iniciarsesion() {
    document.getElementById('registro-id').style.display = 'none';
    document.getElementById('iniciarsesion-id').style.display = 'inline'; 
    document.getElementById('boton-inciarsesion').style.borderBottom = "4.6px solid #DE5214";
    document.getElementById('boton-registro').style.borderBottom = "4.6px solid rgba(0, 0, 0, 0)";
    document.getElementById('boton-registro').style.opacity = "0.5"; 
    document.getElementById('boton-inciarsesion').style.opacity = "1";        
  }
    function registrarse() {
    document.getElementById('iniciarsesion-id').style.display = 'none';
    document.getElementById('registro-id').style.display = 'inline'; 
    document.getElementById('boton-inciarsesion').style.borderBottom = "4.6px solid rgba(0, 0, 0, 0)"; 
    document.getElementById('boton-inciarsesion').style.opacity = "0.5"; 
    document.getElementById('boton-registro').style.opacity = "1"; 
    document.getElementById('boton-registro').style.borderBottom = "4.6px solid #DE5214"; 
  }
</script>
