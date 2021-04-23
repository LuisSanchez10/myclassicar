<div id="seccion-vehiculo">
  <div  class="row mt-4 pt-2 mb-2">
    <div class="col-sm-6 col-12">
      <div class="row">
        <small class="col-auto input-titulo">Número Identificador de Vehiculo(VIN)</small>
        <small class="col-auto ml-auto optional"><i>Opcional</i> </small>
      </div>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-sm-6 col-12">
      <input id="vin" name="vin" class="inputFormVender" type="text" placeholder="Número VIN" width="100%">
    </div>
    <div class="col-sm-6 col-12"> 
      {{-- incluir el modal --}}
      @include('modales.modal_que_es_vin')
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Año</small>
      <select id="year" name="year"  class="inputFormVender" width="100%" placeholder="Selecciona el año">
        <option value="0" selected disabled>Seleccionar</option>
      
        @for ($i = date('Y') ; $i >= 1884; $i--)
        <option value="{{$i}}" >{{$i}}</option>
        @endfor
      </select>
            
    </div>
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Marca</small>
      <select id="marcas" name="marca"  class="inputFormVender" width="100%">
        <option value="0" selected disabled>Seleccionar</option>
        @foreach ($marcas as $marca)
        <option value="{{$marca->id}}">{{$marca->brand}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Modelo</small>
      <select id="modelos" name="modelo" class="inputFormVender" width="100%">
        <option value="0" selected disabled>Seleccionar</option>
      </select>
    </div>
    <div class="col-sm-6 col-12">
      <small class="input-titulo">Versión</small>
      <select id="versiones" name="version" class="inputFormVender" width="100%">
        <option value="0" selected>Seleccionar</option>
      </select>
    </div>
  </div>
  
  <div class="row my-4 py-3">
    <div class="col-auto mr-auto">
      <button id="paso-uno" class="btn btn-siguiente disabled px-5 py-2" type="button" disabled>Siguiente</button>
    </div>
  </div>
</div>

  <script>
$(function(){
  $("#marcas").on('change', function(){
      var id = $("#marcas").val() ;
      axios.get('/model/'+id).then( function(response){
        //bloquer boton
        $('#paso-uno').addClass('disabled');
        $('#paso-uno').prop('disabled',true);
        //Limpiar selec
        $("#modelos >").remove();
        $("#versiones >").remove();
        let $option_null = "<option value='0' selected disabled>Seleccionar</option>";
        $('#modelos').append($option_null);
        $('#versiones').append($option_null);
        
        var modelos = response.data;
        for (let index = 0; index < modelos.length; index++) {
          const modelo = modelos[index];
          
          let $option = "<option value="+modelo.id+">"+modelo.model+"</option>";
          $('#modelos').append($option);
       
        }
        
      });
    });

   $("#modelos, #year").on('change',function(){
    var id = $("#modelos").val();
    var year = $("#year").val();
    // console.log(id);
    // console.log(year);
      axios.get('/version/'+year+'/'+id).then( function(response){
        //bloquer boton
        $('#paso-uno').addClass('disabled');
        $('#paso-uno').prop('disabled',true);
        //Limpiar select
        $("#versiones >").remove()
        let $option_null = "<option value='0' selected disabled>Seleccionar</option>";
        $('#versiones').append($option_null);
        
        var versiones = response.data;
        console.log(versiones);
        for (let index = 0; index < versiones.length; index++) {
          const version = versiones[index];

          let $option = "<option value="+version.id+">"+version.version+"</option>";
          $('#versiones').append($option);
        }
     });
   });

   $("#year, #marcas, #modelos, #versiones").on('change', function(){
    //vars
    var year_void = $('#year').val() === null ? false: true ;
    var marcas_void =  $('#marcas').val()  === null ? false: true ;
    var modelos_void = $('#modelos').val()  === null ? false: true ;
    var versiones_void = $('#versiones').val()  === null ? false: true ;
    //habilitar o desahabilitar boton de siguiente
    if(year_void && marcas_void && modelos_void && versiones_void){
      $('#paso-uno').removeClass('disabled');
      $('#paso-uno').prop('disabled',false);
    }else{
      $('#paso-uno').addClass('disabled');
      $('#paso-uno').prop('disabled',true);
    }
   });



   $("#paso-uno").on('click', function(){
      //ocultar seccion de vehiculo,
      $("#seccion-vehiculo").hide();
      $(".form-subtitulo.paso-1").addClass('disabled');
      
      //mostrar seccion de ficha tecnica
      $("#seccion-ficha").show();
      $('.form-subtitulo.paso-2').removeClass('disabled');

      //cargar el segmento de carro dependiendo de la version del carro seleccionado
      var id_version_selected = $("#versiones").val();
      console.log(id_version_selected);
      axios.get('/segmento/'+ id_version_selected).then(function(res){
        var tipo_vehiculo = res.data;
        console.log(tipo_vehiculo);
        $('#segmento').val(tipo_vehiculo);
      });

   } );

});
</script>
  