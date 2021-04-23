
<!-- Carousel Banners Sliders-->
<div class="owl-carousel" id="carousel_banner_principal">
  @foreach ($sliders as $slider)
  <div class="item">
    @include('home.slider')
  </div>
  @endforeach
</div>
<script>
  $('#carousel_banner_principal').owlCarousel({
    loop: false,
    mouseDrag: false,
    nav: true,
    margin: 0,
    dots: false,
    navText: ['<img src="{{asset('img/arrow_left.svg')}}"/>', '<img src="{{asset('img/arrow_right.svg')}}"/>'],
    responsive: {
      0: {
        items: 1
      }
    }
  })
</script>
<!-- End Carousel Banners Sliders-->