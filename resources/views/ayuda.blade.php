@extends('layouts.main')

@section('head')
    <title>Ayuda</title>
<style>
.encabezado-imagen{
    box-sizing: border-box;
    width: 100%;
    height: 200px;
    padding: 0;
    background-blend-mode: luminosity, normal;
}
.contenido-body{
    background: #F2F2F2;  
    min-height: 90vh; 
}
.titulo-principal-ayuda {
    position: absolute;
    height: 40px;
    left: 0%;
    right: 0%;
    top: 30px;
    font-family: Roboto Condensed;
    font-style: normal;
    font-weight: bold;
    font-size: 32px;
    line-height: 40px;
    /* identical to box height, or 125% */
    color: #FFFFFF;
}
.busqueda-ayuda{
    position: relative;
height: 46px;
left: 0%;
right: 0%;
top: 90px;
font-family: Roboto Condensed;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 16px;
color: #999999;
text-align: center;
}
.input-buscar-ayuda{
position: absolute;
top:1.2em;
transform: translateX(-176px);
width: 400px;
height: 48px;
padding: 0 0px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
border-left:1px solid #ffff; 
outline:none;

}
.boton-buscar-ayuda, .boton-buscar-ayuda:hover, .boton-buscar-ayuda:focus{
position: absolute;
top:1.2em;
transform: translateX(-223px);
width: 48px;
height: 48px;
background: #FFFFFF;
border: 1px solid #DBDBDB; 
border-right:none;
text-decoration-line: none;
outline:none;
text-decoration: none;
}
.contenido-ayuda{
padding: 0px 100px 43px 100px;
}
.temas-de-ayuda{
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
color: #000000;
padding-bottom:10px;
margin-left:0px;
}
.tema-item{
    position:relative;
width:100%;
height:50px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
.tema-item:hover{
position:relative;
width:100%;
height:50px;
background: #FAFAFA;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
.tema-item a{
text-decoration:none;
}
.texto-item-ayuda {
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 16px;
line-height: 24px;
padding-top:14px;
padding-left: 58px;
/* identical to box height, or 150% */
color: #1A1A1A;    
}
.icono-ayuda{
position:absolute;
top:15px;
left:18px;
}
.linea-horizontal{
position:absolute;
top:10px;
left:55px; 
}
.flecha-item{
position: absolute;
right:30px;
top:17px;
color:#ffff;
display: none;
}
.evento-flecha:hover > .flecha-item {
display: inline;
}
@media (min-width: 465px) and (max-width:767px) { 

.input-buscar-ayuda{
position: absolute;
top:1.2em;
transform: translateX(-126px);
width: 300px;
height: 48px;
padding: 0 0px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
border-left:1px solid #ffff; 
outline:none;

}
.boton-buscar-ayuda, .boton-buscar-ayuda:hover, .boton-buscar-ayuda:focus{
position: absolute;
top:1.2em;
transform: translateX(-173px);
width: 48px;
height: 48px;
background: #FFFFFF;
border: 1px solid #DBDBDB; 
border-right:none;
text-decoration-line: none;
outline:none;
text-decoration: none;
}
.tema-item{
position:relative;
width:100%;
height:50px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}
@media (min-width: 367px) and (max-width:465px) { 

.input-buscar-ayuda{
position: absolute;
top:3.2em;
transform: translateX(-126px);
width: 300px;
height: 48px;
padding: 0 0px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
border-left:1px solid #ffff; 
outline:none;

}
.boton-buscar-ayuda, .boton-buscar-ayuda:hover, .boton-buscar-ayuda:focus{
position: absolute;
top:3.2em;
transform: translateX(-173px);
width: 48px;
height: 48px;
background: #FFFFFF;
border: 1px solid #DBDBDB; 
border-right:none;
text-decoration-line: none;
outline:none;
text-decoration: none;
}
.tema-item{
position:relative;
width:100%;
height:50px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}
@media (min-width: 1px) and (max-width:367px) { 

.input-buscar-ayuda{
position: absolute;
top:3.2em;
transform: translateX(-76px);
width: 200px;
height: 48px;
padding: 0 0px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
border-left:1px solid #ffff; 
outline:none;

}
.boton-buscar-ayuda, .boton-buscar-ayuda:hover, .boton-buscar-ayuda:focus{
position: absolute;
top:3.2em;
transform: translateX(-123px);
width: 48px;
height: 48px;
background: #FFFFFF;
border: 1px solid #DBDBDB; 
border-right:none;
text-decoration-line: none;
outline:none;
text-decoration: none;
}
.tema-item{
position:relative;
width:100%;
height:50px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}

</style>
@endsection
@section('content')
<div class ="encabezado-imagen" style="background: url({{asset( 'img/autos/a1.jpg') }}), #0C2849;">
    <div class ="row mx-0 justify-content-center">
        <div class="col-12">
            <div class="titulo-principal-ayuda">
                <h1 class="text-center">¿Con qué podemos ayudarte?</h1>
            </div>
        </div>
    </div>
    <div class ="row mx-0 justify-content-center">
        <div class="col-12">
            <div class="busqueda-ayuda text-center">
                <div>
                <button class="boton-buscar-ayuda"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0627 13.4769C9.71954 15.1468 6.44545 14.9307 4.34323 12.8284C2.00008 10.4853 2.00008 6.68629 4.34323 4.34314C6.68637 2 10.4854 2 12.8285 4.34314C15.1717 6.68629 15.1717 10.4853 12.8285 12.8284L16.364 16.364L15.6569 17.0711L12.0627 13.4769ZM12.1214 12.1213C14.074 10.1687 14.074 7.00287 12.1214 5.05025C10.1688 3.09763 7.00295 3.09763 5.05033 5.05025C3.09771 7.00287 3.09771 10.1687 5.05033 12.1213C7.00295 14.0739 10.1688 14.0739 12.1214 12.1213Z" fill="black"/>
                    </svg>
                </button><input type="text" class="input-buscar-ayuda" placeholder="Buscar...">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contenido-body">
    <div class="container px-5 py-4">
        <div class="contenido-ayuda" style="min-height: 50vh">
            <div class="row mx-0">
                <div class= "col-12">
                    <h4 class="temas-de-ayuda">Temas de ayuda</h4>
                </div>
                @foreach ($topicos as $topico)
                    <div class=" col-12 tema-item" style= " border-bottom: none;">
                        <a href="{{ route('ayuda.topicos', $topico->id )}}" class="evento-flecha">
                            <img class="icono-ayuda" width="20" height="20" src="{{asset('img/iconos/'.$topico->icon_topic)}}" alt="">
                           
                        <svg class="linea-horizontal" width="1" height="48" viewBox="0 0 1 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.25" y="0.25" width="0.5" height="30" stroke="#DBDBDB" stroke-width="0.5"/>
                        </svg>
                        <h5 class="texto-item-ayuda">{{$topico->topic}}</h5>
                        <svg class="flecha-item" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.1893 7.92899L7.54289 14.5754L8.25 15.2825L15.6036 7.92899L8.25 0.575439L7.54289 1.28255L14.1893 7.92899Z" fill="black"/>
                        </svg>
                        </a>
                    </div>
                @endforeach

            </div>
        </div> 
    </div>
</div>
<script>

</script>
  {{-- modal_login --}}
  @include('modales.modal_login_registro')
@endsection