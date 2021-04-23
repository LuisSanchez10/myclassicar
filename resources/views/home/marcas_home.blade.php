    <!-- Marcas -->
    <div class="container py-2">
      <div class="row justify-content-center py-4 mb-3">
        <h2 class="titleSection">Marcas Populares</h2>
      </div>
      <!-- Marcas Pc -->
      <div class="owl-carousel owl-theme d-none d-md-block" id="marcas">
        @foreach ($marcas as $marca)
        <div class="item my-2 ml-1">
          @include('home.marca_card')
        </div>
        @endforeach
      </div>
      <!-- Marcas Cel -->
      <div class="row d-md-none">
        @for ($i=0; $i<=1;$i++) 
        @php {{$marca = $marcas[$i];}} @endphp
        <div class="col-6">
          @include('home.marca_card')
        </div>
        @endfor
    </div>
    <div class="row mt-4 d-md-none">
      @for ($i=2; $i<=3;$i++) 
        @php {{$marca = $marcas[$i];}} @endphp
        <div class="col-6">
          @include('home.marca_card')
        </div>
        @endfor
    </div>
    <div class="container d-md-none">
      <div class="row mt-4">
        <a class="d-md-none btn-outline-destacados mt-4" href="" width="100%">Ofertar</a>
      </div>
    </div>
    </div>
    <script>
      $('#marcas').owlCarousel({
        loop: false,
        mouseDrag: false,
        margin: 20,
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
    <!-- End Marcas -->