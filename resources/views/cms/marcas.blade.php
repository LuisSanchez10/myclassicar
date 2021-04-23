<!DOCTYPE html>
<html lang="es">

<head>
    @include('common.head')
    <title>CMS</title>
    <style type="text/css">
        .circle_addon {
            height: 100px;
            width: 100px;
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

        .close_button_cms {
            cursor: pointer;
            width: 25px;
            padding: 4px;
            position: absolute;
            top: 2%;
            right: 3%;
            background-color: #fff;
            border-radius: 50%;
            -webkit-box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 4px 12px -5px rgba(0, 0, 0, 0.75);
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
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            @include('cms.common.navbar_cms')
            <div class="cms-container col-10 px-0">
                <div class="row mt-4">
                    <div class="col-auto ml-auto mr-5">
                        <button class="btn btn-primary px-4">Agregar +</button>
                    </div>
                </div>
                <div class="row mx-0">
                    <!-- Destacados 1 -->
                    <div class="container mt-3">
                        <div class="row justify-content-center">
                            @foreach ($marcas as $marca)
                            <div class="item my-2 ml-1">
                                @include('cms.marca_card')
                            </div>
                            @endforeach
                            <div class="col-auto centrar_div mt-4">
                                <div class="circle_addon centrar_div" onclick="openModal(this)">
                                    <svg width="50%" height="50%" viewBox="0 0 79 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M44.3998 0.609375H34.5998V32.5704H0.299805V41.7022H34.5998V73.6632H44.3998V41.7022H78.6998V32.5704H44.3998V0.609375Z" fill="black" />
                                    </svg>
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
    <!-- Edicion de Marca -->
    <form hidden action="" method="post" enctype="multipart/form-data" id="formEditarMarca">
        @csrf
        <input type="text" name="marca" hidden id="marcaEditarForm">
        <input type="hidden" name="_method" value="PUT">
    </form>
    <!-- Modal Agregar - Editar-->
    <div class="modal fade modal_add" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="" method="POST" enctype="multipart/form-data" id="formularioGuardarEditar">
                @csrf
                <div class="modal-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6 pt-4 px-5">
                                <div class="row mb-4">
                                    <span class="btn btn-outline-primary px-3" style="cursor:auto">Insertar Texto</span>
                                    <input name="marca" class="input_cms text-center ml-5" type="text" placeholder="*Click Aquí*" id="modalMarcaInput" required>
                                </div>
                                <div class="row">
                                    <span class="btn btn-outline-primary px-3" style="cursor:auto">Insertar Foto</span>
                                </div>
                                <div class="row input_cms pt-3 px-3 pb-5 my-3">
                                    <strong>*Inserte Imagen o Arrastre*</strong>
                                    <div class="col-auto ml-auto">
                                        <label class="btn btn-outline-primary px-3" for="imge_style">Examinar</label>
                                        <input name="fotoMarca" hidden type="file" id="imge_style" onchange="inputFile(this)" required>
                                    </div>
                                    <strong class="col-12" id="nameImage"></strong>
                                </div>
                            </div>
                            <div class="col-lg-6 pt-4 px-5 margen_modal_cms">
                                <div class="row">
                                    <span class="btn btn-outline-primary px-3 col-auto ml-auto" style="cursor:auto">Vista Previa</span>
                                </div>
                                <div class="row mt-3 justify-content-center">
                                    <div class="home_marcas_container" style="cursor:auto">
                                        <img class="home_marcas_imagen" src="" id="marca_modal_image">
                                    </div>
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
                        <h5 class="modal-title" id="marcaTitleModalDelete"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>¿Seguro que desea eliminar esta marca?</h6>
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
            var imageModal = document.getElementById("marca_modal_image")
            //obtengo las imagenes que se eligieron
            const imagenes = element.files;
            const primeraImagen = imagenes[0];
            const objectURL = URL.createObjectURL(primeraImagen);
            //cambio la imagen via atributo Style
            imageModal.src = objectURL
            //agregar nombre de la imagen al span
            document.getElementById("nameImage").innerHTML = primeraImagen.name
        }

        function openModal(element) {
            var form = document.getElementById("formularioGuardarEditar")
            var classDiv = element.className
            if (classDiv != "circle_addon centrar_div") {
                if (document.getElementById('inputEditarForm')) {
                    var inputPut = document.getElementById('inputEditarForm')
                    inputPut.parentNode.removeChild(inputPut)
                }
                //debo agregar un input de nombre _method type PUT. para pder editar
                var id = element.parentNode.firstElementChild.innerText
                form.setAttribute('action', '/editbrand/' + id)
                //obtengo el valor de el atributo Style, donde esta guardado el src de la imagen
                var srcImage = element.firstElementChild.firstElementChild.src
                //obtengo el elemento padre 
                var container_image = document.getElementById("marca_modal_image")
                container_image.src = srcImage
                //Ahora obtengo el texto del nombre del estilo
                var titleMarca = element.parentNode.lastElementChild.innerText
                //coloco el texto en el input
                document.getElementById("modalMarcaInput").setAttribute('value', titleMarca)
                //cambio el texto del boton de  Agregar a Actualizar
                document.getElementById("buttonSubmitModal").innerHTML = "Actualizar";
                //agrego el input necesario para editar
                var inputEditar = "<input type='hidden' name='_method' value='PUT' id='inputEditarForm'>"
                form.innerHTML += inputEditar
                //agregar el nombre de la imagen 
                //primero obtengo la ultima carpeta donde se encuentra la imagen
                var lastKey = srcImage.lastIndexOf("/")
                length = srcImage.length
                //obtengo el nombre de la imagen, incluyendo extension
                srcImage = srcImage.substr(lastKey + 1, length)
                document.getElementById("nameImage").innerHTML = srcImage
            } else {
                var container_image = document.getElementById("marca_modal_image")
                container_image.src = ""
                document.getElementById("modalMarcaInput").value = ""
                document.getElementById("nameImage").innerHTML = ""
                document.getElementById("buttonSubmitModal").innerHTML = "Agregar";
                form.setAttribute('action', '/savebrand')
            }
            document.getElementById("buttonModal").click()
        }
        //abrir modal Delete
        function openModalDelete(element) {

            var form = document.getElementById("formDelete")
            //obtengo el id de la marca
            var id = element.parentNode.firstElementChild.innerText
            //Vacio el atributo action del formulario
            form.setAttribute('action', '/deletebrand/' + id)
            var nameMarca = element.parentNode.lastElementChild.firstElementChild.innerText
            document.getElementById("marcaTitleModalDelete").innerHTML = nameMarca
            document.getElementById("buttonModalDelete").click()
        }
        function sendFormGuardarEditar(element){
            if(element.textContent=="Actualizar"){
                var form = document.getElementById("formularioGuardarEditar")
                var imagenFile=document.getElementById("imge_style")
                if(imagenFile.files.length==0){
                    imagenFile.parentNode.removeChild(imagenFile)
                }
                return true;
            }
        }

    </script>
    @include('common.footer_scripts')
</body>

</html>