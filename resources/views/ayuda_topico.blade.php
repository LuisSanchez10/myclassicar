@extends('layouts.main')

@section('head')
    <title>{{$topico->topic}}</title>
<style>

.contenido-body{
    background: #F2F2F2; 
    padding-bottom: 74px;  
    min-height: 90vh;
}
.contenido-ayuda{
padding: 0px 100px 43px 100px;
}
.texto-ayuda{
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
margin-right: 10px;
margin-left: -10px;
display: inline;
align-items: center;

color: #000000;
}
.texto-comprando{
    margin-left: 10px;
    font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */

display: inline;
align-items: center;

color: #666666;
}
.icono-comprando{
position: absolute;
top: 25px;
left: 0px;
}
.ayuda-al-comprador{
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
padding-left: 50px;
font-size: 32px;
line-height: 40px;
/* identical to box height, or 125% */
color: #000000;

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
padding-left: 0px;
/* identical to box height, or 150% */
color: #1A1A1A;    
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
@media (min-width: 420px) and (max-width:767px) { 

.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}
@media (min-width: 376px) and (max-width:420px) { 
.ayuda-al-comprador{
font-size: 25px;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}
@media (min-width: 351px) and (max-width:376px) { 
.ayuda-al-comprador{
font-size: 20px;
}
.texto-item-ayuda {
font-size: 15px;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}
@media (min-width: 1px) and (max-width:351px) { 
.ayuda-al-comprador{

font-size: 16px;
}
.texto-item-ayuda {
font-size: 12px;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}

.box-naranja{
    background: #DE5214;
    border-radius: 8px;
    width: 40px !important;
    height: 40px !important;
    text-align: center;
}
</style>
@endsection
@section('content')
<div class="contenido-body">
    <div class="container px-5 py-4">
        <div class="contenido-ayuda" style="min-height: 70vh">
            <div class="row mx-0">
                <div class= "col-12 py-2">
                <label><span class="texto-ayuda" onclick="window.location='/ayuda'" style="cursor: pointer">Ayuda</span><svg class="arco" width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.8877 3.49512L0.861328 1.44434V0.576172L5.72168 3.16016V3.83691L0.861328 6.42773V5.56641L4.8877 3.49512Z" fill="#666666"/>
                    </svg><span class="texto-comprando">{{$topico->topic}}</span>
                    </label>        
                </div>
                <div class= "col-12 py-4 mb-3">
                    <div class="row">
                        <div class="box-naranja p-2">
                            <img src="{{asset('img/iconos/'.$topico->icon_topic)}}" alt="">
                        </div>
                        <h4 class="ayuda-al-comprador pl-3">Ayuda al comprador</h4>
                    </div>
                </div>
                @if (count($topico->help_titles)>0)
                    @foreach ( $topico->help_titles as $item)
                    <div class=" col-12 tema-item">
                        <a href="/ayuda/titulo/{{$item->help_title}}" class="evento-flecha">
                        <h5 class="texto-item-ayuda">{{$item->help_title}}</h5>
                        <svg class="flecha-item" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.1893 7.92899L7.54289 14.5754L8.25 15.2825L15.6036 7.92899L8.25 0.575439L7.54289 1.28255L14.1893 7.92899Z" fill="black"/>
                        </svg>
    
                        </a>
                    </div>
                    @endforeach
                @endif
                
                
            </div>
        </div> 
    </div>
</div>
<script>

</script>
  {{-- modal_login --}}
  @include('modales.modal_login_registro')
@endsection