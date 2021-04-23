<section id="form_vender" class="container" >
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 my-sm-5 my-2 p-5 contenedorFormVender">
        <form id="form-vender" action="{{route('update.publicacion', $publicacion->id )}}" method="POST" enctype="multipart/form-data" >
          @csrf
          @method('PUT')
          <input type="hidden" id="usuario_id" name="usuario_id" value='{{Auth::user()->id}}'>
        <div class="row">
          <h1 class="col-sm-auto col-8  form_titulo">Edita la venta de tu auto clásico</h1>
          {{-- <span id="reiniciar" class="col-sm-auto col-4  ml-auto form-reinicio text-center" style="cursor:pointer">Reiniciar</span> --}}
        </div>
        <div class="row mt-4 pt-3">
          <strong class="col-12 form-subtitulo paso-1">1.Vehiculo</strong>
        </div>
        <hr>
        {{-- incluir seccion de vehiculo --}}
        @include('vender_editar.seccion-vehiculo')
        <div class="row">
          <strong class="col-12 form-subtitulo   paso-2">2.Ficha Técnica</strong>
        </div>
        <hr>
        {{-- incluir seccion de ficha_tenica --}}
        @include('vender_editar.seccion-ficha')
        <div class="row">
          <strong class="col-12  form-subtitulo  paso-3">3.Fotos</strong>
        </div>
        <hr>
          {{-- incluir seccion de ficha_tenica --}}
          @include('vender_editar.seccion-fotos')
        <div class="row">
          <strong class="col-12 form-subtitulo  paso-4">4.Datos de venta</strong>
        </div>
        <hr>
        {{-- incluir seccion de ficha_tenica --}}
        @include('vender_editar.seccion-datos_venta')
        </form>
      </div>
    </div>
  </section>
  {{-- spinner para la espera --}}
  <section id="loading" class="d-none">
    <div class="container"  >
      <div class="row" style="min-height:85vh">
        <div class="col-12 my-auto text-center">
          <div class=" col-12 spinner-grow" role="status" style="color:#DE5214">
            <span class="sr-only">Loading...</span>
          </div> 
        </div>
      </div>
      </div>
  </section>

  <script>
    $(function(){
      //reiniciar
      $('#reiniciar').on('click', function(){
        //toma el usuario_id 
        var usuario_id = $('#usuario_id').val(); 
        //reiniciar input 
        $('input[type=text]').val('');
        $('input[type=number]').val('');
        $('input[type=hidden]').val('');
        $('textarea[type=text]').val('');
        $('select').val('0');
        $('#descripcion').val('')  ;
        $("#transmision1").removeClass('selected'); //manual
        $("#transmision2").removeClass('selected'); //automatico
        $("#transmision").val('');
        $("#moneda1").removeClass('selected');
        $("#moneda2").removeClass('selected');
        $("#moneda").val('');
        //agrego el usuario_id 
        $('#usuario_id').val(usuario_id); 

        //quitar las imagenes del carro
        $("input[type=file]").val('');
        $(".box-primaria").css('background-image', 'none');
        $(".box-secundaria").css('background-image', 'none');
        $(".camara").show();
        $(".cancelar").addClass('d-none');
        //ocultar todas las secciones
        $("#seccion-ficha").hide();
        $("#seccion-fotos").hide();
        $("#seccion-datos_venta").hide();
        $(".form-subtitulo.paso-2").addClass('disabled');
        $(".form-subtitulo.paso-3").addClass('disabled');
        $('.form-subtitulo.paso-4').addClass('disabled');
        //mostrar la seccion 1 
        $("#seccion-vehiculo").show();
        
        $(".form-subtitulo.paso-1").removeClass('disabled');
      });

        $("#seccion-ficha").show();
        $("#seccion-fotos").show();
        $("#seccion-datos_venta").show();

      // $('#paso-cuatro').on('click', function(){
      //   //ocultar formulario de vender
      //   $("#form_vender").hide();
      //   //activar spinner
      //   $("#loading").show();
      //   //vars - seccion 1
      //   var vin =$('#vin').val();
      //   var year =$('#year').val();
      //   var marca =  $('#marcas').val();
      //   var modelo = $('#modelos').val()  ;
      //   var version = $('#versiones').val() ;
      //    //vars - seccion 2
      //   var kilometros = $('#kilometros').val();
      //   var segmento = $('#segmento').val() ;
      //   var combustible = $('#combustible').val();
      //   var color = $('#color').val();
      //   var interior = $('#interior').val()  ;
      //   var descripcion = $('#descripcion').val()  ;
      //   var transmisiones1_void = $("#transmision1").hasClass('selected'); //manual
      //   var transmisiones2_void = $("#transmision2").hasClass('selected'); //automatico
      //   var transmision='';
      //   if(transmisiones1_void){
      //     transmision='1'; //manual
      //   }else if(transmisiones2_void){
      //     transmision='2'; //automatico
      //   }
      //   // vars - seccion 3
      //   var foto_frente = $('#foto-frente').val();
      //   var clases_de_vehiculo = $('#clases_de_vehiculos').val() ;
      //    //vars - seccion 4 
      //   var precio = $('#precio').val();
      //   var ubicacion =  $('#ubicaciones').val();
      //   var ciudad = $('#ciudades').val() ;
      //   var moneda1_void = $("#moneda1").hasClass('selected');
      //   var moneda2_void = $("#moneda2").hasClass('selected');
      //   var moneda='';
      //   if(moneda1_void){
      //     moneda='1'; //ARS
      //   }else if(moneda2_void){
      //     moneda='2'; //USD
      //   }
      //   let msg =precio+'..'+ubicacion+'..'+ciudad+'..'+moneda+'..'+interior+'..'+descripcion+'..'+foto_frente+'..';          
      //   alert('Seccion1: '+msg);
        
      // });
    });
  </script>
