 <!-- Destacados -->
 <div class="container py-2">
   <div class="row justify-content-center py-4 mb-1">
     <h2 class="titleSection">Publicaciones Destacadas</h2>
   </div>
   <div class="owl-carousel owl-theme d-none d-md-block destacados_carousel" id="destacados">
     @if (count($publicaciones)>0)
      @foreach ($publicaciones->where('status_publication_id', 1)->take(8) as $item)
          <div class="item">
            @include('home.tarjeta_auto')
          </div>
      @endforeach
    @endif
   </div>
   <!-- destacados Cel -->
   <div class="container d-md-none">
    @if (count($publicaciones)>0)
     <div class="row">
      @foreach ($publicaciones->take(4) as $item)
       <div class="col-6 px-0">
         @include('home.tarjeta_auto')
       </div>
       @endforeach
     </div>
     <div class="row mt-3 mb-4">
       <a class="d-md-none btn-outline-destacados mt-4" href="" width="100%">Ofertar</a>
      </div>
    @endif
   </div>
 </div>
 <script>
   $('#destacados').owlCarousel({
     loop: false,
     mouseDrag: false,
     nav: true,
     dots: false,
     navText: ['<img src="{{asset('img/arrow_left.svg')}}"/>', '<img src="{{asset('img/arrow_right.svg')}}"/>'],
     responsive: {
       0: {
         items: 1
       },
       500: {
         items: 2
       },
       992: {
         items: 3
       },
       1200: {
         items: 4
       }
     }
   })
 </script>
 <!-- End Destacados -->