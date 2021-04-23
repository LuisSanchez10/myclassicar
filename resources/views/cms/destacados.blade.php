<!DOCTYPE html>
<html lang="es">

<head>
    @include('common.head')
    <title>CMS</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('cms.common.navbar_cms')
            <div class="cms-container col-10 px-0">
                <div class="row m-3">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" colspan="1">#</th>
                            <th scope="col" colspan="1">FOTO</th>
                            <th scope="col" colspan="1">VEHICULO</th>
                            <th scope="col" colspan="1">PRECIO</th>
                            <th scope="col" colspan="1">FECHA</th>
                          </tr>
                        </thead>
                        <tbody>
                            @if (count($publicaciones)>0)
                                @foreach ($publicaciones as $key =>$item)
                                <tr >
                                    <th colspan="1" >{{$key+1}}</th>
                                    <td colspan="1">
                                        <img src="{{asset('storage/'.$item->car_photos[0]->car_photo)}}" alt="" width="50px">
                                    </td>
                                    <td>{{$item->vehicle->brand->brand}} {{$item->vehicle->model->model}} {{$item->vehicle->version->version}}</td>
                                    <td colspan="1">{{$item->price}} {{$item->currency->symbol_currency}}</td>
                                    <td colspan="1">{{$item->created_at}}</td>
                                </tr>
                                @endforeach
                            @else
                                <tr>Sin publicaciones</tr>
                            @endif
                          </tbody>
                      </table>
                      
                </div>
            </div>
        </div>
    </div>
    
    @include('common.footer_scripts')
    @include('common.footer_scripts_publicidad')
</body>

</html>