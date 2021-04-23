<!DOCTYPE html>
<html lang="es">

<head>
    @include('common.head')
    <title>CMS</title>
    <style type="text/css">
        .divisor_destacados_cms {
            height: 5px;
            width: 100%;
            background-color: rgb(12, 40, 73);
        }

        .title_estilos_cms {
            font-family: Roboto Condensed;
            font-style: normal;
            font-weight: bold;
            font-size: 32px;
            line-height: 24px;
        }

        .estilos_carousel {
            height: 20vh !important;
        }

        .estilos_carousel .item {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            border-radius: 10px;
            width: 90%;
            height: 16vh !important;
            background-position: center center;
            background-size: cover;
            opacity: 0.8;
            cursor: pointer;
            -webkit-box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
        }
        .estilos_carousel .owl-nav button {
            top: calc(8.5vh - 1.75rem) !important;
        }

        .circle_addon {
            height: 80px;
            width: 80px;
            border-radius: 50%;
            border: 4px #000000 solid;
            cursor: pointer;
        }

        .centrar_div {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .input_cms {
            background: #FFFFFF;
            border: 1px solid #0C2849;
            border-radius: 10px;
        }

        .margen_modal_cms {
            border-left: 2px solid #eb5b11;
        }

        /* Si la pantalla es menor a 992px se aplicaran los estilos*/
        @media only screen and (max-width: 992px) {
            .margen_modal_cms {
                border-left: 0px;
                border-top: 2px solid #eb5b11;
            }
        }

        .container_preview_estilos_cms {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            border-radius: 10px;
            width: 100%;
            height: 30vh !important;
            background-position: center center;
            background-size: cover;
            opacity: 0.8;
            border: 1px #222222 solid;
        }

        .imagen_estilo_cms_preview {
            height: 200px;
            max-width: 100% !important;
        }

        .close_button_cms {
            cursor: pointer;
            width: 25px !important;
            padding: 4px;
            position: absolute;
            top: -12.5px;
            right: 15px;
            background-color: #fff;
            border-radius: 50%;
            -webkit-box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
            z-index: 5;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('cms.common.navbar_cms')
            @php
            $cant=count($estilos);
            @endphp
            <div class="cms-container col-10 px-0">
                <div class="row mx-0 px-4">
                    <!-- Destacados 1 -->
                    <div class="container">
                        <div class="row justify-content-center py-4 mb-1">
                            <h1 class="title_estilos_cms">
                                Encontrá tu Propio Estilo
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="owl-carousel owl-theme estilos_carousel" id="estilos_1">
                                    @if($cant >= 5)
                                      @for($i=0;$i<=4;$i++) 
                                        @php $estilo=$estilos[$i]; @endphp 
                                        <div style="position: relative">
                                        <div onclick="openModal(this)">
                                            @include('cms.estilo_cms')
                                        </div>
                                        <img src="/img/close.svg" class="close_button_cms" onclick="openModalDelete(this)">
                                        </div>
                                      @endfor
                                    @else
                                      @for($i=0;$i<=($cant-1);$i++) @php $estilo=$estilos[$i]; @endphp 
                                        <div style="position: relative">
                                          <div onclick="openModal(this)">
                                          @include('cms.estilo_cms')
                                          </div>
                                          <img src="/img/close.svg" class="close_button_cms" onclick="openModalDelete(this)">
                                        </div>
                                      @endfor
                                      @for($i=0;$i<(5-$cant);$i++)
                                        <div class="item my-2" onclick="openModal(this)">
                                        @include('cms.common.addbutton')
                                        </div>
                                      @endfor
                                    @endif
                                    <div class="item my-2" onclick="openModal(this)">
                                @include('cms.common.addbutton')
                            </div>
                                </div>
                            </div>
                        </div>
                    <div class="divisor_destacados_cms my-5"></div>
                    <div class="row px-3">
                        <div class="owl-carousel owl-theme estilos_carousel" id="estilos_2">
                            @if($cant >= 10)
                                @for($i=4;$i<=9;$i++)
                                @php $estilo=$estilos[$i]; @endphp 
                                    <div style="position: relative">
                                        <div onclick="openModal(this)">
                                            @include('cms.estilo_cms')
                                        </div>
                                        <img src="/img/close.svg" class="close_button_cms" onclick="openModalDelete(this)">
                                    </div>
                                @endfor
                            @elseif( $cant > 5)
                                @for($i=5;$i<=($cant-1);$i++)
                                @php $estilo=$estilos[$i]; @endphp 
                                    <div style="position: relative">
                                        <div onclick="openModal(this)">
                                          @include('cms.estilo_cms')
                                        </div>
                                        <img src="/img/close.svg" class="close_button_cms" onclick="openModalDelete(this)">
                                    </div>
                                @endfor
                                @for($i=0;$i<(10-$cant);$i++)
                                    <div class="item my-2" onclick="openModal(this)">
                                       @include('cms.common.addbutton')
                                    </div>
                                @endfor
                            @else
                                @for($i=0;$i<=4;$i++)
                                    <div class="item my-2" onclick="openModal(this)">
                                       @include('cms.common.addbutton')
                                    </div>
                                @endfor
                            @endif
                            <div class="item my-2" onclick="openModal(this)">
                                @include('cms.common.addbutton')
                            </div>
                        </div>
                    </div>
            <div class="divisor_destacados_cms my-5"></div>
            <div class="row px-3">
                <div class="owl-carousel owl-theme estilos_carousel" id="estilos_3">
                            @if($cant >= 15)
                                @for($i=10;$i<=$cant;$i++)
                                @php $estilo=$estilos[$i]; @endphp 
                                    <div style="position: relative">
                                        <div onclick="openModal(this)">
                                            @include('cms.estilo_cms')
                                        </div>
                                        <img src="/img/close.svg" class="close_button_cms" onclick="openModalDelete(this)">
                                    </div>
                                @endfor
                            @elseif( $cant > 10)
                                @for($i=10;$i<=($cant-1);$i++)
                                @php $estilo=$estilos[$i]; @endphp 
                                    <div style="position: relative">
                                        <div onclick="openModal(this)">
                                          @include('cms.estilo_cms')
                                        </div>
                                        <img src="/img/close.svg" class="close_button_cms" onclick="openModalDelete(this)">
                                    </div>
                                @endfor
                                @for($i=0;$i<(15-$cant);$i++)
                                    <div class="item my-2" onclick="openModal(this)">
                                       @include('cms.common.addbutton')
                                    </div>
                                @endfor
                            @else
                                @for($i=0;$i<=4;$i++)
                                    <div class="item my-2" onclick="openModal(this)">
                                       @include('cms.common.addbutton')
                                    </div>
                                @endfor
                            @endif
                            <div class="item my-2" onclick="openModal(this)">
                                @include('cms.common.addbutton')
                            </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <button hidden data-toggle="modal" data-target=".modal_add" id="buttonModal"></button>
    <button hidden data-toggle="modal" data-target="#modalDelete" id="buttonModalDelete"></button>
    </div>

    <!-- Modal Guardar - Editar -->
    <div class="modal fade modal_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="" method="post" enctype="multipart/form-data" id="formSaveEdit">
                @csrf
                <div class="modal-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 pt-4 px-5">
                                <div class="row mb-4">
                                    <span class="btn btn-outline-primary px-3" style="cursor:auto">Insertar Texto</span>
                                    <input name="estilo" class="input_cms text-center ml-5" type="text" placeholder="*Click Aquí*" onchange="inputText(this)" id="modalEstiloInput" required>
                                </div>
                                <div class="row">
                                    <span class="btn btn-outline-primary px-3" style="cursor:auto">Insertar Foto</span>
                                </div>
                                <div class="row input_cms pt-3 px-3 pb-5 my-3">
                                    <strong>*Inserte Imagen o Arrastre*</strong>
                                    <div class="col-auto ml-auto">
                                        <label class="btn btn-outline-primary px-3" for="imge_style">Examinar</label>
                                        <input name="fotoEstilo" hidden type="file" id="imge_style" onchange="inputFile(this)" required>
                                    </div>
                                    <strong class="col-12" id="nameImage"></strong>
                                </div>
                            </div>
                            <div class="col-lg-6 pt-4 px-5 margen_modal_cms">
                                <div class="row">
                                    <span class="btn btn-outline-primary px-3 col-auto ml-auto" style="cursor:auto">Vista Previa</span>
                                </div>
                                <div class="row mt-3 container_preview_estilos_cms" id="container_modal_image">
                                    <h3 id="text_preview"></h3>
                                </div>
                                <div class="row my-3">
                                    <button class="btn btn-primary px-3 col-auto ml-auto" type="submit" id="buttonSubmitModal" onclick="sendFormGuardarEditar(this)"></button>
                                    <button class="btn btn-outline-secundary px-3" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Eliminar -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="" method="POST" id="formDelete">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="styleTitleModalDelete"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>¿Seguro que desea eliminar este estilo?</h6>
                        <input type="hidden" name="id" id="inputMarcaDeleteModal">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary px-3 col-auto ml-auto" type="submit" id="buttonSubmitModalDelete">Eliminar</button>
                        <button class="btn btn-outline-secundary px-3" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        //cambio de imagen en el modal
        function inputFile(element) {
            //obtengo el elemento padre 
            var container_image = document.getElementById("container_modal_image")
            //obtengo las imagenes que se eligieron
            const imagenes = element.files;
            const primeraImagen = imagenes[0];
            const objectURL = URL.createObjectURL(primeraImagen);
            //cambio la imagen via atributo Style
            container_image.style = "background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('" + objectURL + "')"
            //agregar nombre de la imagen al span
            document.getElementById("nameImage").innerHTML = primeraImagen.name
        }
        //cambio de texto en el modal
        function inputText(element) {
            //obtengo el elemento donde va el texto
            var container_image = document.getElementById("text_preview")
            //obtengo el texto
            var text = element.value
            //Cambio el texto
            container_image.innerHTML = text
        }
        //click para abrir modal
        function openModal(element) {
            var classDiv = element.firstElementChild.className
            var form = document.getElementById("formSaveEdit")
            if (classDiv != "circle_addon centrar_div") {
                if (document.getElementById('inputEditarForm')) {
                    var inputPut = document.getElementById('inputEditarForm')
                    inputPut.parentNode.removeChild(inputPut)
                }
                //debo agregar un input de nombre _method type PUT. para pder editar
                var id = element.lastElementChild.innerText
                form.setAttribute('action', '/editstyle/' + id)
                //obtengo el valor de el atributo Style, donde esta guardado el src de la imagen
                var styleImage = element.firstElementChild.attributes.style.textContent
                //obtengo la longitud de texto del atributo style
                var length = styleImage.length
                //obtengo la ubicacion de la url
                var aux = styleImage.indexOf("url")
                //obtengo la url
                var src = styleImage.substr(aux + 5, length - aux - 3 - 5)
                //obtengo el elemento padre 
                var container_image = document.getElementById("container_modal_image")
                container_image.style = "background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('" + src + "')"
                //Ahora obtengo el texto del nombre del estilo
                var titleText = element.firstElementChild.firstElementChild.textContent
                //coloco el nombre del estilo en el div de previsualizacion
                document.getElementById("text_preview").innerHTML = titleText
                //coloco el texto en el input del modal
                document.getElementById("modalEstiloInput").setAttribute('value', titleText)
                //cambio el texto del boton de  Agregar a Actualizar
                document.getElementById("buttonSubmitModal").innerHTML = "Actualizar";
                //agrego el input necesario para editar
                var inputEditar = "<input type='hidden' name='_method' value='PUT' id='inputEditarForm'>"
                form.innerHTML += inputEditar
                //agregar el nombre de la imagen 
                //primero obtengo la ultima carpeta donde se encuentra la imagen
                var lastKey = src.lastIndexOf("/")
                length = src.length
                //obtengo el nombre de la imagen, incluyendo extension
                src = src.substr(lastKey + 1, length)
                document.getElementById("nameImage").innerHTML = src
            } else {
                var container_image = document.getElementById("container_modal_image")
                container_image.style = ""
                document.getElementById("modalEstiloInput").value = ""
                document.getElementById("nameImage").innerHTML = ""
                document.getElementById("buttonSubmitModal").innerHTML = "Agregar";
                form.setAttribute('action', '/savestyle')
            }
            document.getElementById("buttonModal").click()
        }
        //eliminar estilo
        function openModalDelete(element) {
            var form = document.getElementById("formDelete")
            //obtengo el id de la marca
            var id = element.parentNode.firstElementChild.lastElementChild.innerText
            //Vacio el atributo action del formulario
            form.setAttribute('action', '/deletestyle/' + id)
            var nameStyle = element.parentNode.firstElementChild.firstElementChild.innerText
            document.getElementById("styleTitleModalDelete").innerHTML = nameStyle
            document.getElementById("buttonModalDelete").click()
        }

        function sendFormGuardarEditar(element) {
            if (element.textContent == "Actualizar") {
                var form = document.getElementById("formSaveEdit")
                var imagenFile = document.getElementById("imge_style")
                if (imagenFile.files.length == 0) {
                    imagenFile.parentNode.removeChild(imagenFile)
                }
                return true;
            }
        }
    </script>

    <!-- Carousel 1 -->
    <script>
        $('#estilos_1').owlCarousel({
            loop: false,
            mouseDrag: false,
            nav: true,
            margin: 5,
            dots: false,
            navText: ['<img src="/img/arrow_left.svg"/>', '<img src="/img/arrow_right.svg"/>'],
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
                    items: 5
                }
            }
        })
        $('#estilos_2').owlCarousel({
            loop: false,
            mouseDrag: false,
            nav: true,
            margin: 5,
            dots: false,
            navText: ['<img src="/img/arrow_left.svg"/>', '<img src="/img/arrow_right.svg"/>'],
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
                    items: 5
                }
            }
        })
        $('#estilos_3').owlCarousel({
            loop: false,
            mouseDrag: false,
            nav: true,
            margin: 5,
            dots: false,
            navText: ['<img src="/img/arrow_left.svg"/>', '<img src="/img/arrow_right.svg"/>'],
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
                    items: 5
                }
            }
        })
    </script>
    @include('common.footer_scripts')
</body>

</html>