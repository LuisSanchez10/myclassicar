<div id="seccion-datos_venta">
  <div class="row align-items-center">
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Precio de venta</small>
      <input id="precio" name= "precio" class="inputFormVender" value="{{(int)$publicacion->price}}" type="number" placeholder="Precio" width="100%">
      </select>
    </div>
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Moneda</small>
      <div class="inputpar">
        <div id="moneda1" class="option-l text-center @if ($publicacion->currency_id == 1)
            selected
        @endif">Peso</div>
        <div id="moneda2" class="option-r text-center @if ($publicacion->currency_id == 2)
            selected
        @endif" >Dólar</div>
        <input type="hidden" id="moneda" name= "moneda" value="{{$publicacion->currency->id}}" >
      </div>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Elegir ubicación</small>
      <select id="ubicaciones" name="ubicacion" class="inputFormVender" width="100%" placeholder="Selecciona el año">
        @foreach ($ubicaciones as $ubicacion)
          <option value="{{$ubicacion->id}}" @if ($publicacion->ubication->id == $ubicacion->id)
              selected
          @endif>{{$ubicacion->ubication}}</option>
          @endforeach
      </select>
    </div>
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Ciudad</small>
      <select id="ciudades"  name="ciudad" class="inputFormVender" width="100%">
        @foreach ($publicacion->ubication->cities as $city)
            <option value="{{$city->id}}" @if ($publicacion->city->id == $city->id )
              select
          @endif>{{$city->city}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="row my-4 py-3">
    <div class="col-sm-auto col-6 mr-auto" style="display: none;">
      <button id="atras-paso-tres" class="btn btn-atras px-5 py-2" type="button">Atrás</button>
    </div>
    <div class="col-sm-auto col-6 ml-auto">
      <button id="paso-cuatro" class="btn btn-siguiente px-5 py-2" type="button">Editar</button>
    </div>
  </div>
</div>

<script>
  $(function(){
    $("#ubicaciones").on('change', function(){
      var id_ubication = $("#ubicaciones").val() ;
      axios.get('/ciudades/'+id_ubication).then( function(response){

        //Limpiar selec
        $("#ciudades >").remove();
        let $option_null = "<option value='0' selected disabled>Seleccionar</option>";
        $('#ciudades').append($option_null);
        
        var ciudades = response.data;
        for (let index = 0; index < ciudades.length; index++) {
          const ciudad = ciudades[index];
          let $option = "<option value="+ciudad.id+">"+ciudad.city+"</option>";
          $('#ciudades').append($option);
        }
        
      });
    });

    //seleccionar moneda ARS
    $("#moneda1").on('click', function(){
      $(this).addClass('selected');
      $('#moneda').val('1');
      $("#moneda2").removeClass('selected');
      validar_campo();
    });

    //seleccionar moneda USD
    $("#moneda2").on('click', function(){
      $(this).addClass('selected');
      $('#moneda').val('2');
      $("#moneda1").removeClass('selected');
      validar_campo();
    });

    $("#precio, #ubicaciones, #ciudades").on('change', function(){
        validar_campo();
    });

  

 //validar que los campos fueron completados
 function validar_campo(){
       //vars 
    var precio_void = $('#precio').val() === '' ? false: true ;
    var ubicacion_void =  $('#ubicaciones').val()  === null ? false: true ;
    var ciudad_void = $('#ciudades').val()  === null ? false: true ;
    var moneda1_void = $("#moneda1").hasClass('selected');
    var moneda2_void = $("#moneda2").hasClass('selected');
      //validaciones  
      var validaciones = (moneda1_void || moneda2_void) && precio_void && ubicacion_void && ciudad_void;
    if(validaciones){
      $('#paso-cuatro').removeClass('disabled');
      $('#paso-cuatro').prop('disabled',false);
    }else{
      $('#paso-cuatro').addClass('disabled');
      $('#paso-cuatro').prop('disabled',true);
    }
  }
   
   $("#atras-paso-tres").on('click', function(){
       //ocultar seccion de fotos,
       $("#seccion-datos_venta").hide();
      $(".form-subtitulo.paso-4").addClass('disabled');
      
      //mostrar seccion de ficha
      $("#seccion-fotos").show();
      $('.form-subtitulo.paso-3').removeClass('disabled');
   });

   $("#paso-cuatro").on('click', function(){
      //ocultar formulario de vender
      $("#form_vender").hide();
        //activar spinner
        $("#loading").removeClass('d-none');
        $("#form-vender").submit();
        // setTimeout(function(){
        //   //Desactivar spinner
        //   $("#loading").addClass('d-none');
        //   //hacer summit
        // },2000);
   });
  });
     
</script>