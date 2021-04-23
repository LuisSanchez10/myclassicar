<!DOCTYPE html>
<html lang="es">

<head>
    @include('common.head')
    <title>CMS</title>
    <style type="text/css">
        .border_rigth {
            border-right: 4px solid #0C2849;
        }

        .titulo_publicidad {
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: bold;
            font-size: 32px;
            line-height: 40px;
            /* or 125% */

            text-align: center;

            color: #000000;
        }

        .subtitulo_publicidad {
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: 300;
            font-size: 16px;
            line-height: 24px;
            /* or 150% */

            text-align: center;

            color: #1A1A1A;

        }

        .textarea_publicidad {
            border: 0;
            overflow: hidden;
            resize: none;
            background-color: inherit;
            width: 70%;
        }
    </style>
    <link href="{{ asset('vendor/materialize/css/materialize.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('cms.common.navbar_cms')
            <div class="cms-container col-10 px-0">
                <div class="row mx-0 mt-5 pt-5">
                    <div class="col-6 border_rigth">
                        <div class="row px-5">
                            <button class="col-auto btn btn-primary px-3">Editar Texto 1</button>
                            <button class="col-auto ml-auto btn btn-primary px-3">Editar Foto 1</button>
                        </div>
                        <div class="row">
                            <div class="carousel" id="carousel-publicidad">
                                <div class="carousel-item-publicidad">
                                    <div class="border_destacados">
                                        <div class="imagen_tarjeta_car" style="background: url('{{ asset('img/autos/a1.jpg') }}'); background-size: cover;background-position: center;"></div>
                                        <div class="container-fluid description_destacados">
                                            <div class="ml-1">
                                                <strong>Mercades Benz</strong>
                                                <div style="display:inline-block;"><span class="d-none d-md-block">220 D Rural Full</span></div>
                                            </div>
                                            <div class="d-md-none ml-1">
                                                <span>220 D Rural Full</span>
                                            </div>
                                            <div class="row mt-4 pt-1 ml-1">
                                                <button class="buttonAnioCard" type="button">1985</button>
                                                <button class="buttonAnioCardDisabled d-none d-md-block" type="button" disabled>120.000 km</button>
                                                <strong class="ml-auto pr-3">$90.000</strong>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="carousel-item-publicidad">
                                    <div class="border_destacados">
                                        <div class="imagen_tarjeta_car" style="background: url('{{ asset('img/autos/a1.jpg') }}'); background-size: cover;background-position: center;"></div>
                                        <div class="container-fluid description_destacados">
                                            <div class="ml-1">
                                                <strong>Mercades Benz</strong>
                                                <div style="display:inline-block;"><span class="d-none d-md-block">220 D Rural Full</span></div>
                                            </div>
                                            <div class="d-md-none ml-1">
                                                <span>220 D Rural Full</span>
                                            </div>
                                            <div class="row mt-4 pt-1 ml-1">
                                                <button class="buttonAnioCard" type="button">1985</button>
                                                <button class="buttonAnioCardDisabled d-none d-md-block" type="button" disabled>120.000 km</button>
                                                <strong class="ml-auto pr-3">$90.000</strong>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="carousel-item-publicidad">
                                    <div class="border_destacados">
                                        <div class="imagen_tarjeta_car" style="background: url('{{ asset('img/autos/a1.jpg') }}'); background-size: cover;background-position: center;"></div>
                                        <div class="container-fluid description_destacados">
                                            <div class="ml-1">
                                                <strong>Mercades Benz</strong>
                                                <div style="display:inline-block;"><span class="d-none d-md-block">220 D Rural Full</span></div>
                                            </div>
                                            <div class="d-md-none ml-1">
                                                <span>220 D Rural Full</span>
                                            </div>
                                            <div class="row mt-4 pt-1 ml-1">
                                                <button class="buttonAnioCard" type="button">1985</button>
                                                <button class="buttonAnioCardDisabled d-none d-md-block" type="button" disabled>120.000 km</button>
                                                <strong class="ml-auto pr-3">$90.000</strong>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row px-5">
                            <button class="col-auto btn btn-primary px-3" onclick="editarTexto()">Editar Texto 1</button>
                            <button class="col-auto ml-auto btn btn-primary px-3">Editar Foto 2</button>
                        </div>
                        <form action="/publicidadUpdate" method="post">
                            @csrf
                            <div class="row justify-content-center my-5">
                                <textarea name="title" class="titulo_publicidad textarea_publicidad" rows="2" disabled onchange="textoChange()" id="tituloTexto">{{$publicidad[0]->title}}</textarea>
                                <textarea name="subtitle" class="subtitulo_publicidad textarea_publicidad mt-4" rows="2" disabled onchange="textoChange()" id="subtituloTexto">{{$publicidad[0]->subtitle}}</textarea>
                            </div>
                            <div class="row pr-5">
                                <button class="col-auto ml-auto btn btn-primary px-3" type="submit" disabled id="botonGuardar">Guardar</button>
                            </div>
                            <input type="hidden" name="id" value="{{$publicidad[0]->id}}">
                            <input type="hidden" name="_method" value="PUT">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //cambio texto
        function editarTexto() {
            var titulo = document.getElementById("tituloTexto")
            if (titulo.disabled) {
                titulo.disabled = false
                titulo.style.backgroundColor = "#ddd"
                var subtitulo = document.getElementById("subtituloTexto")
                subtitulo.disabled = false
                subtitulo.style.backgroundColor = "#ddd"
            } else {
                titulo.disabled = true
                titulo.style.backgroundColor = "inherit"
                var subtitulo = document.getElementById("subtituloTexto")
                subtitulo.disabled = true
                subtitulo.style.backgroundColor = "inherit"
            }
        }

        function textoChange() {
            document.getElementById("botonGuardar").disabled = false
        }
    </script>
    @include('common.footer_scripts')
    @include('common.footer_scripts_publicidad')
</body>

</html>