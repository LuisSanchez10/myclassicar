<!-- Carousel Pc-->
<div class="carousel_banner d-none d-md-block" style="padding:0 10%;background: linear-gradient({{$slider->color1}}, {{$slider->color2}});">
    @include('home.lineas_curvas')
    <div class="container">
        <div class="row">
            <button class="nav_carosuel_ppal_left">
                <img src="/img/arrow_left.svg" />
            </button>
            <button class="nav_carosuel_ppal_right">
                <img src="/img/arrow_right.svg" />
            </button>
            <div class="col-md-6 p-5">
                <div class="row py-2">
                    <textarea class="carousel_titulo_cms" rows="2" disabled>{{$slider->title}}</textarea>
                </div>
                <div class="row py-2">
                    <textarea class="carousel_subtitulo_cms" rows="3" disabled>{{$slider->subtitle}}</textarea>
                </div>
                <div class="row py-2">
                    <button type="button" class="carousel_button px-5 py-3 mr-5 mb-3" data-toggle="modal" data-target="#modal_login" data-whatever="@mdo">
                        Unite ahora
                    </button>
                    <span class="carousel_numero_autos">
                        <b>1400+</b> autos clásicos publicados
                    </span>
                </div>
                <button id="btn_id_editar_texto" type="button" class="editar_texto boton_carousel_cms px-4 py-2" onclick="editarTexto(this)">
                    Editar texto
                </button>
                <div class="d-inline">
                    <button class="editar_foto boton_carousel_cms px-4 py-2" onclick="clickFile(this)">Editar Foto</button>
                    <input type="file" accept="image/*" class='fotoCarInput' name="fotoCarInput" hidden onchange="cambioFoto(this)" />
                </div>
                <input id="btn_id_editar_foto" class="fotoCarInput2" accept="image/png, image/jpeg" type="file" hidden>
                <button type="button" class="editar_fondo boton_carousel_cms px-4 py-2" onclick="clickFondo(this)" data-toggle="modal" data-target=".Modalfondo">
                    Editar Fondo
                </button>
                <input id="btn_id_editar_fondo" type="file" hidden>
                <input type="text" class="id_slider" value="{{$slider->id}}" hidden>
                <input type="text" class="color1" hidden value="{{$slider->color1}}">
                <input type="text" class="color2" hidden value="{{$slider->color2}}">
                <button class="btn_guardar boton_carousel_cms px-5 py-2" onclick="guardarSlider(this)">
                    Guardar
                </button>
            </div>
            <div class="col-md-6">
                @include('home.carro')
            </div>
        </div>
    </div>
</div>

<!-- End Carousel -->