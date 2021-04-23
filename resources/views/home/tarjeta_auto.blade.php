<a href="{{route('publicacion', $item->id)}}" style="text-decoration: none">
    <div class="border_destacados" >
        <div class="imagen_tarjeta_car" style="background: url('{{asset('storage/'.$item->car_photos[0]->car_photo)}}'); background-size: cover;background-position: center;"></div>
        <div class="container-fluid description_destacados">
            <div class="ml-1">
                <strong>{{$item->vehicle->brand->brand}}</strong>
                <div style="display:inline-block;"><span class="d-none d-md-block">{{$item->vehicle->model->model}}</span></div>
            </div>
            <div class="d-md-none ml-1">
                <span>{{$item->vehicle->model->model}}</span>
            </div>
            <div class="row mt-4 pt-1 ml-1">
                <button class="buttonAnioCard" type="button">{{$item->vehicle->version->year}}</button>
                {{-- <button class="buttonAnioCardDisabled d-none d-md-block" type="button" disabled>{{$item->kilometres}} km</button> --}}
                <strong class="ml-auto pr-3">{{$item->currency->id == 1 ? 'AR$' : 'US$'}} {{number_format($item->price , 0, ',', '.')}}</strong>
            </div>
        </div>
    </div>
</a>