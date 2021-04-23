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
                    <div class="col-auto ml-auto p-2">
                        <a href="{{route('ayuda.create')}}" class="btn btn-primary px-4">Agregar +</a>
                    </div>

                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col" colspan="1">#</th>
                            <th scope="col" colspan="1">TOPICO</th>
                            <th scope="col" colspan="1">TITULO</th>
                            <th scope="col" colspan="1">ACCIONES</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach ($titulos as $key => $item)
                            <tr >
                                <th colspan="1" >{{$key+1}}</th>
                                <td colspan="1">{{$item->help_topic->topic}}</td>
                                <td colspan="1">{{$item->help_title}}</td>
                                <td colspan="1">
                                    <div class="row d-flex ">
                                        <div class="col-auto mr-auto">
                                        </div>
                                        <div class="col-auto mr-auto d-flex">
                                            <a href="{{route('ayuda.edit', $item->id )}}" class="btn btn-primary px-2">Editar</a>
                                            <form class="px-2" action="{{route('ayuda.destroy', $item->id )}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                           @endforeach 
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