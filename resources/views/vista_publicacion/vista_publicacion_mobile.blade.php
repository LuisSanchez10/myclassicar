    @include('vista_publicacion.css_publicacion_mobile')


<div class="product-publicacion-container" style="display: none;" id="mobile_publicacion">
    <div class="product-publicacion-information">
        <div class="producto-perfil-header-bar-mobile my-3">
            <div class="producto-header-nav-mobile">
                <a href="/comprar">
                    <svg class="product-header-icon" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.41425 9L9.54597 17.1317L8.83887 17.8388L3.25739e-05 9L8.83887 0.161163L9.54597 0.86827L1.41425 9Z" fill="black"/>
                    </svg>
                </a>                    
                <h2 class="producto-perfil-title-mobile principal-font">
                {{$producto->vehicle->brand->brand}} 
                {{$producto->vehicle->version->vehicle_type}}
                {{$producto->vehicle->model->model}}</h2>
            </div>
            <p class="producto-perfil-price-mobile principal-font">
                @if($producto->currency->symbol_currency == "USD")
                    US$
                @else
                    AR$
                @endif
                {{$producto->price}}</p>
        </div>
    
        <!-- SLIDER Mobile por finalizar -->
    <div class="slider-main-mobile-container">
        <div class="slider-main-mobile mb-4">
            @foreach($producto->car_photos as $photos)
                <img class="slider-imagen-mobile" src="{{asset('storage/'.$photos->car_photo)}}" alt="" class="slider-main-img">
            @endforeach
        </div>
        {{-- <div class="galeria-mobile">
            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.84615 1.36364C4.84615 0.610521 5.45667 0 6.20979 0H11.7902C12.5433 0 13.1538 0.610521 13.1538 1.36364H16.6154C17.3801 1.36364 18 1.98355 18 2.74825V13.6154C18 14.3801 17.3801 15 16.6154 15H1.38462C0.619913 15 0 14.3801 0 13.6154V2.74825C0 1.98355 0.619913 1.36364 1.38462 1.36364H4.84615ZM13.1538 8.18182C13.1538 10.4412 11.2941 12.2727 9 12.2727C6.70589 12.2727 4.84615 10.4412 4.84615 8.18182C4.84615 5.92247 6.70589 4.09091 9 4.09091C11.2941 4.09091 13.1538 5.92247 13.1538 8.18182ZM4 5C4 5.55228 3.55228 6 3 6C2.44772 6 2 5.55228 2 5C2 4.44772 2.44772 4 3 4C3.55228 4 4 4.44772 4 5Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9 10.2273C10.1471 10.2273 11.0769 9.31149 11.0769 8.18181C11.0769 7.05214 10.1471 6.13636 9 6.13636C7.85295 6.13636 6.92308 7.05214 6.92308 8.18181C6.92308 9.31149 7.85295 10.2273 9 10.2273Z" fill="white"/>
            </svg>
            <p class="galeria-publicacion-title-mobile principal-font">Galeria <span>(32)</span></p>
        </div> --}}
    </div>
        <!-- <div class="slider-main-mobile mb-4">
            @foreach($producto->car_photos->take(1) as $photos)
                <img src="{{asset('storage/'.$photos->car_photo)}}" alt="" class="slider-main-img">
            @endforeach	
            <div class="galeria-mobile">
                <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.84615 1.36364C4.84615 0.610521 5.45667 0 6.20979 0H11.7902C12.5433 0 13.1538 0.610521 13.1538 1.36364H16.6154C17.3801 1.36364 18 1.98355 18 2.74825V13.6154C18 14.3801 17.3801 15 16.6154 15H1.38462C0.619913 15 0 14.3801 0 13.6154V2.74825C0 1.98355 0.619913 1.36364 1.38462 1.36364H4.84615ZM13.1538 8.18182C13.1538 10.4412 11.2941 12.2727 9 12.2727C6.70589 12.2727 4.84615 10.4412 4.84615 8.18182C4.84615 5.92247 6.70589 4.09091 9 4.09091C11.2941 4.09091 13.1538 5.92247 13.1538 8.18182ZM4 5C4 5.55228 3.55228 6 3 6C2.44772 6 2 5.55228 2 5C2 4.44772 2.44772 4 3 4C3.55228 4 4 4.44772 4 5Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 10.2273C10.1471 10.2273 11.0769 9.31149 11.0769 8.18181C11.0769 7.05214 10.1471 6.13636 9 6.13636C7.85295 6.13636 6.92308 7.05214 6.92308 8.18181C6.92308 9.31149 7.85295 10.2273 9 10.2273Z" fill="white"/>
                </svg>
                <p class="galeria-publicacion-title-mobile principal-font">Galeria <span>(32)</span></p>
            </div>
        </div> -->
        
        <div class="producto-especifico-info-mobile">
            <section class="producto-descripción-mobile mb-5">
                <h2 class="producto-descripcion-title-mobile pb-3 mb-3 principal-font">Descripción</h2>
                <p class="producto-descripción-text-mobile principal-font">
                    {{$producto->description}}
                </p>
                <a href="#" class="btn btn-mobile-enviar btn-lg principal-font py-2">Enviar</a>
            </section>
    
            <section class="producto-caracteristicas mb-4">
                <h2 class="producto-descripcion-title-mobile pb-3 mb-4 principal-font">Caracteristicas</h2>
                <ul class="producto-especifico-categorias-mobile">
                    <li class="producto-categoria-list-mobile principal-font">Año <span>{{$producto->vehicle->version->year}}</span></li>
                    <li class="producto-categoria-list-mobile principal-font">Kilometros <span>{{$producto->kilometres}} km</span></li>
                    <li class="producto-categoria-list-mobile principal-font">Tipo de Auto <span>{{$producto->vehicle->version->vehicle_type}}</span></li>
                    <li class="producto-categoria-list-mobile principal-font">Combustible <span>{{$producto->Fuel->fuel}}</span></li>
                    <li class="producto-categoria-list-mobile principal-font">Caja <span>{{$producto->transmission->transmission}}</span></li>
                    <li class="producto-categoria-list-mobile principal-font">Color <span>{{$producto->color->color}}</span></li>
                </ul>
            </section>
    
            <section class="producto-vendedor mb-5">
                <h2 class="producto-descripcion-title-mobile pb-3 mb-4 principal-font">Vendedor</h2>
                <div class="producto-vendedor-info-mobile">
                    <div>
                        @if(substr($producto->user->imagen_logo, 0, 4) === 'http')
                            <img class="vendedor-img-mobile" src="{{ $producto->user->imagen_logo }}" class="logo_perfil" alt="">
                        @elseif($producto->user->imagen_logo)
                             <img class="vendedor-img-mobile" src="{{ asset('perfil_logos/'. $producto->user->imagen_logo) }}" class="logo_perfil" alt="">
                        @else
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13 12C13 15.866 16.134 19 20 19C23.866 19 27 15.866 27 12C27 8.13401 23.866 5 20 5C16.134 5 13 8.13401 13 12ZM25 12C25 14.7614 22.7614 17 20 17C17.2386 17 15 14.7614 15 12C15 9.23858 17.2386 7 20 7C22.7614 7 25 9.23858 25 12ZM32 34H30C30 28.4772 25.5228 24 20 24C14.4772 24 10 28.4772 10 34H8C8 27.3726 13.3726 22 20 22C26.6274 22 32 27.3726 32 34Z" fill="black"/>
                            </svg>
                        @endif
                    </div>
                    <div class="vendedor-descripcion-main-mobile">
                        <div class="vendedor-descripcion-mobile">
                            <h2 class="producto-descripcion-title-mobile vendedor-name-mobile principal-font">{{$producto->user->name}}</h2>
                            <div class="distancia-body">
                                <p class="vendedor-distancia-mobile principal-font">
                                    a 4,6 km                               
                                </p>
                                <img class="icono-pin-mobile"  src="{{ asset('img/iconos/pin.png') }}" alt="">
                            </div>
                        </div>
                        <p class="vendedor-calle-mobile  principal-font">{{$producto->user->ubication->ubication?? 'Sin ubicación'}}</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
    <div class="producto-botones-acciones-mobile">
        <a class="boton-accion-mobile principal-font" href="#">Ofertar</a>
        <a class="boton-accion-mobile principal-font" href="#">Reservar</a>
    </div>



