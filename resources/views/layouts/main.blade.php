<!DOCTYPE html>
<html lang="es">
  <head>
    @include('common.head')
    @yield('head')
  </head>

  <body class="cuerpo-main">

	@include('common.nav')
 
        @yield('content')

  {{-- modal_login --}}
  @include('modales.modal_login_registro')
  @include('modales.modal_cambio_contraseña')
  @include('common.footer')
	
  @include('common.footer_scripts')



  <script type="text/javascript">
    document.getElementById('iniciar_sesion_button').addEventListener('click', (e) => {
      e.preventDefault();
      iniciarSesion();
    });

    //llamada axios
    function iniciarSesion(){
      let email = document.getElementById('email_id');
      let contraseña = document.getElementById('password_id')

      axios.post('/login', {

        email: email.value,
        password: contraseña.value,


      }).then( response =>{
        window.location.replace("{{ route('perfil')}}");

      }).catch(error => {
        console.log(error.response.data.errors)
        pushError(error.response.data.errors)
      });
    }

  </script>

 
  </body>
</html>