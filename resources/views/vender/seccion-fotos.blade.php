<style>
  .button{
    outline: none !important;
  }


  .box-primaria{
    background: rgba(255, 255, 255, 0.8);
    border: 2px dashed #DBDBDB;
    border-radius: 2px;
    width: 100%;
    height: 252px;
    display: block;
    padding: 35% 0;
    cursor: pointer;
  }
  .camara-principal{
    position: absolute;
    top: 7%;
    right: 8%;
  }

  .text-principal{
    position: absolute;
    bottom: 12%;
    width: 88%;
  }
  .cancelar-principal{
    position: absolute;
    top: 15%;
    left: 15%;
  }

.text-foto{
  font-family: Roboto Condensed;
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  text-align: center;
  color: rgba(0, 0, 0, 0.5);
  }
  .box-secundaria{
    background: rgba(255, 255, 255, 0.8);
    border: 2px dashed #DBDBDB;
    border-radius: 2px;
    display: block;
    width: 100%;
    height: 110px;
    cursor: pointer;
  }

  .cancelar-secundaria{
    position: absolute;
    top: 15%;
    left: 15%;
  }

  .foto-linea{
    position: absolute;
    bottom: -3%;
    left: 40%;
  }

.camara-esquina{
  position: absolute;
  top: 12%;
  right: 11%;
}
.text-esquina{
  position: absolute;
  bottom: 12%;
  width: 75%;
}

.camara-opcional{
  position: absolute;
  top: 27%;
    left: 43%;
}
.text-opcional{
  position: absolute;
  top: 50%;
  left: 37%;
}
.linea-opcional{
  position: absolute;
  bottom: 27%;
  left: 40%;
}


</style>
@php
$c=0;
@endphp
<div id="seccion-fotos">
  <div class="row" style="background: #F5F5F5">
    <div class="col-xl-4 py-3" style="background-position: center; background-image: url('{{asset('img/carro_de_foto/foto_frente.png')}}'); background-repeat: no-repeat;">
          @php
              $c++;
              $class_camara ="camara-principal";
              $class_cancelar = 'cancelar-principal';
              $text_foto = "Foto Frente";
              $id_foto="foto-frente";
          @endphp
        <div id="foto-frente" class="box-primaria img-{{$c}}" >
          @include('vender.camara')
          <input id="input-foto-frente" name="foto-frente" accept="image/png, image/jpeg" type="file" onchange="cambiar_imagen(this, 'foto-frente',{{$c}})" hidden>
        </div>
        @include('vender.cancelar_icon')
    </div>
    <div class="col-xl-8">
      <div class="row">
          <div class="col-6 col-sm-4 p-3" style="background-position: center; background-image: url('{{asset('img/carro_de_foto/foto_detras.png')}}'); background-repeat: no-repeat;">
              @php
              $c++;
              $class_camara ="camara-esquina";
              $class_cancelar ="cancelar-secundaria";
              $text_foto = "Foto Detras";
              $id_foto="foto-detras";
              @endphp
            <div id="foto-detras" class="box-secundaria img-{{$c}}" >
              @include('vender.camara')
              <input id="input-foto-detras" name="foto-detras" accept="image/png, image/jpeg" type="file" onchange="cambiar_imagen(this, '{{$id_foto}}',{{$c}})" hidden>
            </div>
            @include('vender.cancelar_icon')
          </div>
          <div class="col-6 col-sm-4 p-3" style="background-position: center; background-image: url('{{asset('img/carro_de_foto/foto_lado_izq.png')}}'); background-repeat: no-repeat;">
              @php
              $c++;
              $class_camara ="camara-esquina";
              $class_cancelar ="cancelar-secundaria";
              $text_foto = "Foto Lado Izq";
              $id_foto="foto-lado-izq";
              @endphp
            <div id="foto-lado-izq" class="box-secundaria img-{{$c}}" >
              @include('vender.camara')
              <input id="input-foto-lado-izq" name="foto-lado-izq" accept="image/png, image/jpeg" type="file" onchange="cambiar_imagen(this,'{{$id_foto}}',{{$c}})" hidden>
            </div>
            @include('vender.cancelar_icon')
          </div>
          <div class="col-6 col-sm-4 p-3" style=" background-position: center; background-image: url('{{asset('img/carro_de_foto/foto_lado_der.png')}}'); background-repeat: no-repeat;">
              @php
              $c++;
              $class_camara ="camara-esquina";
              $class_cancelar ="cancelar-secundaria";
              $text_foto = "Foto Lado Der";
              $id_foto="foto-lado-der";
              @endphp
            <div id="foto-lado-der" class="box-secundaria img-{{$c}}" >
              @include('vender.camara')
              <input id="input-foto-lado-der" name="foto-lado-der" accept="image/png, image/jpeg" type="file" onchange="cambiar_imagen(this, '{{$id_foto}}',{{$c}})" hidden>
            </div>
            @include('vender.cancelar_icon')
          </div>
  
        <div class="col-6 col-sm-4 p-3" style="background-position: center; background-image: url('{{asset('img/carro_de_foto/interior.png')}}'); background-repeat: no-repeat;">
            @php
            $c++;
            $class_camara ="camara-esquina";
            $class_cancelar ="cancelar-secundaria";
            $text_foto = "Interior";
            $id_foto="foto-interior";
            @endphp
          <div id="foto-interior" class="box-secundaria img-{{$c}}" >
            @include('vender.camara')
            <input id="input-foto-interior" name="foto-interior" accept="image/png, image/jpeg" type="file" onchange="cambiar_imagen(this,'{{$id_foto}}',{{$c}})" hidden>
          </div>
          @include('vender.cancelar_icon')
        </div>
        <div class="col-6 col-sm-4 p-3" style="background-position: center; background-image: url('{{asset('img/carro_de_foto/motor.png')}}'); background-repeat: no-repeat;">
            @php
                $c++;
                $class_camara ="camara-esquina";
                $class_cancelar ="cancelar-secundaria";
                $text_foto = "Motor";
                $id_foto="foto-motor";
  
            @endphp
          <div id="foto-motor" class="box-secundaria img-{{$c}}" >
            @include('vender.camara')
            <input id="input-foto-motor" name="foto-motor" accept="image/png, image/jpeg" type="file" onchange="cambiar_imagen(this, '{{$id_foto}}',{{$c}})" hidden>
          </div>
          @include('vender.cancelar_icon')
        </div>
        <div class="col-6 col-sm-4 p-3" style="background-position: center; background-repeat: no-repeat;background-size: cover;">
            @php
                $c++;
                $class_camara ="camara-opcional";
                $class_cancelar ="cancelar-secundaria";
                $id_foto="foto-opcional";
            @endphp 
          <div id="foto-opcional" class="box-secundaria img-{{$c}}"  >
            @include('vender.camara')
            <input id="input-foto-opcional" name="foto-opcional" accept="image/png, image/jpeg" type="file" onchange="cambiar_imagen(this ,'{{$id_foto}}',{{$c}})" hidden>
          </div>
          @include('vender.cancelar_icon')
        </div>
       </div>
    </div>
  </div> 
  
  <div class="row my-4 py-3">
    <div class="col-sm-4 col-12 mr-auto">
     <h6 class="input-titulo">¿Cómo cargar las imágenes?</h6>
     <p class="text-form">Arrastra tu imagen hacia el area de subida 
      arriba o bien usa el botón de “subir” en cada 
      item. Podés cambiar el orden arrastrando y 
      soltando donde querés ver cada foto.</p>
    </div>
    <div class="col-sm-6 col-12 ml-auto">
      <small class="input-titulo">Clase de Vehiculo</small>
      <select id="clases_de_vehiculos" name="estilo_vehiculo" class="inputFormVender" width="100%">
        <option value="0" selected disabled>Seleccionar</option>
        @foreach ($estilos_de_vehiculo as $estilo_vehiculo)
          <option value="{{$estilo_vehiculo->id}}" >{{$estilo_vehiculo->vehicle_style}}</option>
        @endforeach
      </select>
    </div>
  </div>
  
  
  <div class="row my-4 py-3">
    <div class="col-sm-auto col-6 mr-out">
      <button id="atras-paso-dos" class="btn btn-atras px-5 py-2" type="button">Atrás</button>
    </div>
    <div class="col-sm-auto col-6 ml-auto">
      <button id="paso-tres" class="btn btn-siguiente px-5 py-2 disabled" type="button" disabled>Siguiente</button>
    </div>
  </div>
</div>
<script>
    // fotos frente
    $("#foto-frente").on('click',function(){
      $("#input-foto-frente").click();
      valida_seccion_fotos();
    });
    //foto detras
    $("#foto-detras").on('click',function(){
      $("#input-foto-detras").click();
      valida_seccion_fotos();
    });
    //foto lado izquierdo
    $("#foto-lado-izq").on('click',function(){
      $("#input-foto-lado-izq").click();
      valida_seccion_fotos();
    });
    //foto lado derecho
    $("#foto-lado-der").on('click',function(){
      $("#input-foto-lado-der").click();
      valida_seccion_fotos();
    });
    //foto interior
    $("#foto-interior").on('click',function(){
      $("#input-foto-interior").click();
      valida_seccion_fotos();
    });
    //foto motor
    $("#foto-motor").on('click',function(){
      $("#input-foto-motor").click();
      valida_seccion_fotos();
    });
    //foto opcional
    $("#foto-opcional").on('click',function(){
      $("#input-foto-opcional").click();
      valida_seccion_fotos();
    });
    
    $("#input-foto-opcional,  #input-foto-motor, #input-foto-interior, #input-foto-lado-der, #input-foto-lado-izq, #input-foto-detras, #input-foto-frente").on('change', function(){
      valida_seccion_fotos();
    });

    function cambiar_imagen(element, div_imagen, counter ){
      //obtengo las imagenes que se eligieron
			const imagenes = element.files;
    
      if (!imagenes || !imagenes.length) {
        $("#"+div_imagen).scr = "";
        return;
      }
			const primeraImagen = imagenes[0];
      const objectURL = URL.createObjectURL(primeraImagen);
      //modifico la imagen 
      $("#"+div_imagen).css('background-image', 'url('+objectURL+')');
      $("#"+div_imagen).css('background-size','cover');
      //escondo el titulo y la camara 
      $("#"+div_imagen + " .camara").hide();
      //mostrar boton de eliminar
      $("#cancelar-"+counter).removeClass('d-none');
    }

    $(".cancelar").on('click', function(){
      var counter = $(this).data('id');
      var div_imagen = $(this).data('div');
       //modifico la imagen 
       $("#"+div_imagen).css('background-image', 'none');
      $("#"+div_imagen).css('background-size','cover');
      //escondo el titulo y la camara 
      $("#"+div_imagen + " .camara").show();
      //vaciar input
      $("#input-"+div_imagen).val('');
       //mostrar boton de eliminar
       $("#cancelar-"+counter).addClass('d-none');
       valida_seccion_fotos();
    });

    $("#clases_de_vehiculos").on('change', function(){
        valida_seccion_fotos();
    } );

    function valida_seccion_fotos(){
      //vars
      var clases_de_vehiculos_void = $('#clases_de_vehiculos').val() === null ? false: true ;
      var contador_fotos = 0;
      // fotos frente
      var foto1_void = $("#input-foto-frente").val();
      if(foto1_void!=='') contador_fotos++;
      //foto detras
      var foto2_void = $("#input-foto-detras").val();
      if(foto2_void!=='') contador_fotos++;
      //foto lado izquierdo
      var foto3_void = $("#input-foto-lado-izq").val();
      if(foto3_void!=='') contador_fotos++;
      //foto lado derecho
      var foto4_void = $("#input-foto-lado-der").val();
      if(foto4_void!=='') contador_fotos++;
      //foto interior
      var foto5_void = $("#input-foto-interior").val();
      if(foto5_void!=='') contador_fotos++;
      //foto motor
      var foto6_void =$("#input-foto-motor").val();
      if(foto6_void!=='') contador_fotos++;
      //foto opcional
      var foto7_void =$("#input-foto-opcional").val();
      if(foto7_void!=='') contador_fotos++;
      var fotos_void = false;
      if (contador_fotos>=3){
        fotos_void =true;
      }


      

      if(clases_de_vehiculos_void && fotos_void){
        $('#paso-tres').removeClass('disabled');
        $('#paso-tres').prop('disabled',false);
      }else{
        $('#paso-tres').addClass('disabled');
        $('#paso-tres').prop('disabled',true);
      }
    }

    $("#paso-tres").on('click', function(){
      //ocultar seccion de vehiculo,
      $("#seccion-fotos").hide();
      $(".form-subtitulo.paso-3").addClass('disabled');
      
      //mostrar seccion de ficha tecnica
      $("#seccion-datos_venta").show();
      $('.form-subtitulo.paso-4').removeClass('disabled');

   } );

   $("#atras-paso-dos").on('click', function(){
       //ocultar seccion de fotos,
       $("#seccion-fotos").hide();
      $(".form-subtitulo.paso-3").addClass('disabled');
      
      //mostrar seccion de ficha
      $("#seccion-ficha").show();
      $('.form-subtitulo.paso-2').removeClass('disabled');
   });

</script>
