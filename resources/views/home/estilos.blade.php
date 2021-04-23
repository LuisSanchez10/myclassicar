<div class="container py-2 mt-5">
  <div class="row justify-content-center py-4 mb-1">
    <h2 class="titleSection">Encontrá tu estilo</h2>
  </div>
  <div class="row d-none d-md-block">
    <div class="owl-carousel owl-theme estilos_carousel" id="estilos">
      @foreach ($estilos as $estilo)
      @include('home.estilo_card')
      @endforeach
    </div>
  </div>
  <!-- Estilos Cel -->
  <div class="row d-md-none mb-3">
    @for ($i=0;$i<=1;$i++) @php {{$estilo=$estilos[$i];}} @endphp 
    <div class="col-6">
      @include('home.estilo_card')
    </div>
    @endfor
  </div>
  <div class="row d-md-none mb-3">
  @for ($h=$i;$h<=($i+1);$h++) @php {{$estilo=$estilos[$h];}} @endphp 
    <div class="col-6">
    @include('home.estilo_card')
    </div>
  @endfor
  </div>
<div class="row d-md-none mt-4">
  <div class="col-6">
    @php
    {{$estilo=$estilos[$h];}}
    @endphp
    @include('home.estilo_card')
  </div>
  <div class="col-6">
    <a class="btn-outline-estilos-home my-2" href="">
      <h3>Ver todos</h3>
    </a>
  </div>
</div>
</div>
<script>
  $('#estilos').owlCarousel({
    loop: false,
    mouseDrag: false,
    margin: 25,
    nav: true,
    slideBy: 4,
    dots: false,
    navText: ['<img src="{{asset('/img/arrow_left.svg')}}"/>', '<img src="{{asset('/img/arrow_right.svg')}}"/>'],
    responsive: {
      0: {
        items: 3
      },
      992: {
        items: 4
      },
      1200: {
        items: 5
      }
    }
  })
</script>