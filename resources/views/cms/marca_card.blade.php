<div class="col-auto p-3 border_destacados">
    <span hidden>{{$marca->id}}</span>
    <div onclick="openModal(this)">
        @include('home.marca')
    </div>
    <img src="/img/close.svg" class="close_button_cms" onclick="openModalDelete(this)">
    <div class="my-4 pb-2">
        <strong>{{$marca->brand}}</strong>
    </div>
</div>