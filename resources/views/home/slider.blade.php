<!-- Carousel Pc-->
<div class="carousel_banner" style="background: linear-gradient({{$slider->color1}}, {{$slider->color2}});">
  @include('home.lineas_curvas')
  <div class="container">
    <div class="row">
      <div class="d-md-none">
        <h1 class="carousel_titulo text-center px-5">
        {{$slider->title}}
        </h1>
      </div>
      <div class="col-6 d-none d-md-block p-5">
        <div class="row py-2">
          <h1 class="carousel_titulo">
          {{$slider->title}}
          </h1>
        </div>
        <div class="row py-2">
          <h5 class="carousel_subtitulo">
          {{$slider->subtitle}}
          </h5>
        </div>
        <div class="row py-2">
          <button type="button" class="carousel_button px-5 py-3 mr-5 mb-3" data-toggle="modal" data-target="#modal_login" data-whatever="@mdo">Unite ahora</button>
          <span class="carousel_numero_autos">
            <b>1400+</b> autos clásicos publicados
          </span>
        </div>
      </div>
      <div class="col-md-6">
      @include('home.carro')
      </div>
      <div class="d-md-none">
        <h5 class="carousel_subtitulo px-5 text-center">
        {{$slider->subtitle}}
        </h5>
      </div>
      <button type="button" class="carousel_button py-3 d-md-none mx-3" data-toggle="modal" data-target="#modal_login" data-whatever="@mdo">Unite ahora</button>
    </div>
  </div>
</div>
<!-- End Carousel -->