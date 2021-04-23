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
                <form action="@isset($titulo_ayuda)
                    {{route('ayuda.update', $titulo_ayuda->id)}}
                @else
                    {{route('ayuda.store')}}
                @endisset" method="POST" >
                    @csrf
                    @isset($titulo_ayuda)
                        @method('PUT')
                    @else
                        @method('POST')
                    @endisset
                <div class="row m-3">
                    <div class="col-auto ml-auto">
                        <a  href="/cms/ayuda" class="btn btn-primary px-5" disabled="disabled">Atrás</a>
                    </div>
                        <div class="form-group col-12">
                            <label for="topico">Topicos</label>
                            <select class="custom-select" name="topico" id="topico">
                                @foreach ($topicos as $topico)
                                <option value="{{$topico->id}}" @isset($titulo_ayuda)
                                    @if ($topico->id== $titulo_ayuda->topic_id)
                                        selected
                                    @endif
                                @endisset>{{$topico->topic}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="titulo">Titulo de Ayuda</label>
                            <input class="form-control" id="titulo" name="titulo" type="text" placeholder="Escribe un titulo" @isset($titulo_ayuda)
                                value = '{{$titulo_ayuda->help_title}}'
                            @endisset >
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="contenido">Contenido de Ayuda</label>
                                <textarea class="form-control" id="contenido" name="contenido">@isset($titulo_ayuda)
                                    {{$titulo_ayuda->help_html}}
                                @endisset</textarea>
                                <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                                <script>
                                    CKEDITOR.replace( 'contenido', {
                                        filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
                                        filebrowserUploadMethod: 'form'
                                    });
                                    </script>
                            </div>
                        </div>
                        <div class="col-auto ml-auto">
                            @if (isset($titulo_ayuda))
                                <button type="submit" class="btn btn-primary px-5" >Editar</button>
                            @else
                                <button type="submit" class="btn btn-primary px-5" >Crear</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('common.footer_scripts')
    @include('common.footer_scripts_publicidad')
</body>
</html>