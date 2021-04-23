<div id="seccion-ficha">
  <div  class="row align-items-center">
    <div class="col-sm-6 col-12">
    <small class="input-titulo">Kilometraje</small>
    <div class="inputKilimetraje">
      <input id="kilometros" name="kilometros" class="kilometros" type="number" min=0 >
      <input class="unidad text-center" type="text" value='Km'  disabled>
    </div>
  </div>
<div class="col-sm-6 col-12">
    <div class="row">
      <small class="col-auto mr-auto input-titulo">Segmento (tipo de auto)</small>
      <small class="col-auto ml-auto optional"><i>completado por versión</i></small>
    </div>
    <input disabled id="segmento" name="segmento" class="inputFormVender" type="text"  placeholder="Tipo de vehiculo" width="100%" value ="" >
  </div>
</div>
<div class="row align-items-center">
  <div class="col-sm-6 col-12">
    <small class="input-titulo">Combustible</small>
    <select id="combustible" name="combustible" class="inputFormVender" width="100%" placeholder="Selecciona el año">
      <option value="0" selected disabled>Seleccionar</option>
      @foreach ($combustibles as $combustible)
      <option value="{{$combustible->id}}">{{$combustible->fuel}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-sm-6 col-12">
    <small class="input-titulo">Transmisión</small>
    <div class="inputpar">
      <div id="transmision1" class="option-l text-center">Manual</div>
      <div id="transmision2" class="option-r text-center">Automática</div>
      <input type="hidden" id="transmision" name= "transmision">
    </div>
  </div>
</div>
<div class="row align-items-center">
  <div class="col-sm-6 col-12">
    <small class="input-titulo">Color</small>
    <select id="color" name="color" class="inputFormVender" width="100%" placeholder="Selecciona el año">
      <option value="0" selected disabled>Seleccionar</option>
      @foreach ($colores as $color)
      <option value="{{$color->id}}">{{$color->color}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-sm-6 col-12">
    <div class="row p-0">
      <small class="col-auto mr-auto input-titulo">Interior</small>
      <small class="col-auto ml-auto optional"><i>Opcional</i> </small>
    </div>
    
    <select id="interior"  name="interior" class="inputFormVender" width="100%">
      <option value="0" selected disabled>Seleccionar</option>
      @foreach ($interiores as $interior)
      <option value="{{$interior->id}}">{{$interior->car_interior}}</option>
      @endforeach
    </select>
  </div>
</div>
<div class="row align-items-center">
  <div class="col-12">
    <small class="input-titulo">Descripción</small>
    <textarea id="descripcion" name="descripcion" class="textareaFormVender"  width='100%' placeholder="Contanos un poco de tu clásico ..." ></textarea>
  </div>
</div>
<br><br><br>

{{-- <div class="row align-items-center">
  <div class="col-auto">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <rect x="0.5" y="0.5" width="23" height="23" rx="3.5" stroke="#DBDBDB"/>
      <path d="M10.5197 13.5172L15.2616 8.32559L16.7383 9.6744L10.5197 16.4828L7.2616 12.9157L8.73832 11.5669L10.5197 13.5172Z" fill="#0C2849"/>
    </svg>
  </div>
    <div class="col-auto px-0">
      <span class="text-form">Autocompletar características de fábrica</span>
    </div>
  </div> --}}

  <div class="row my-4 py-3">
    <div class="col-sm-auto col-6 mr-out">
      <button id="atras-paso-uno" class="btn btn-atras px-5 py-2" type="button">Atrás</button>
    </div>
    <div class="col-sm-auto col-6 ml-auto">
      <button id="paso-dos" class="btn btn-siguiente px-5 py-2 disabled" type="button" disabled>Siguiente</button>
    </div>
  </div>
</div>
<script>
  $(function(){
    //seleccionar trasmision Manual
    $("#transmision1").on('click', function(){
      $(this).addClass('selected');
      $("#transmision").val('1');
      $("#transmision2").removeClass('selected');
    });
     //seleccionar trasmision Automatica
     $("#transmision2").on('click', function(){
      $(this).addClass('selected');
      $("#transmision").val('2');
      $("#transmision1").removeClass('selected');
    });
    $("#kilometros, #segmento, #combustible, #color, #interior, #descripcion ").on('change', function(){
      validar_campo();
    });
    $("#descripcion").on('keyup', function(){
      validar_campo();
    });

    $("#transmision1, #transmision2").on('click', function(){
      validar_campo();
    })

    //validar que los campos fueron completados
    function validar_campo(){
       //vars 
       var kilometros_void = $('#kilometros').val() === '' ? false: true ;
      var segmento_void = $('#segmento').val() === '' ? false: true ;
      var combustible_void = $('#combustible').val() === null ? false: true ;
      var color_void = $('#color').val() === null ? false: true ;
      var interior_void = $('#interior').val() === null ? false: true ;
      var descripcion_void = $('#descripcion').val() === '' ? false: true ;
      var transmisiones1_void = $("#transmision1").hasClass('selected');
      var transmisiones2_void = $("#transmision2").hasClass('selected');

      // console.log((transmisiones1_void || transmisiones2_void) +' | '+ kilometros_void +' | '+ segmento_void +' | '+ combustible_void +' | '+ color_void +' | '+ interior_void +' | '+ descripcion_void);
      //validaciones  
      var validaciones = (transmisiones1_void || transmisiones2_void) && kilometros_void && segmento_void && combustible_void && color_void && interior_void && descripcion_void;
      if(validaciones){
        $('#paso-dos').removeClass('disabled');
        $('#paso-dos').prop('disabled',false);
      }else{
        $('#paso-dos').addClass('disabled');
        $('#paso-dos').prop('disabled',true);
      }

    }

    $("#paso-dos").on('click', function(){
      //ocultar seccion de vehiculo,
      $("#seccion-ficha").hide();
      $(".form-subtitulo.paso-2").addClass('disabled');
      
      //mostrar seccion de ficha técnica
      $("#seccion-fotos").show();
      $('.form-subtitulo.paso-3').removeClass('disabled');

   });

   $("#atras-paso-uno").on('click', function(){
       //ocultar seccion de ficha,
      $("#seccion-ficha").hide();
      $(".form-subtitulo.paso-2").addClass('disabled');
      
      //mostrar seccion de vehiculo
      $("#seccion-vehiculo").show();
      $('.form-subtitulo.paso-1').removeClass('disabled');
   });

  });
</script>