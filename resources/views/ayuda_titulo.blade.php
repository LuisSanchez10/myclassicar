@extends('layouts.main')

@section('head')
    <title>{{$titulo[0]->help_title}}</title>
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
.como-reservar-auto-titulo{
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
padding-left: 0px;
font-size: 32px;
line-height: 40px;
/* identical to box height, or 125% */
color: #000000;

}
.tema-item{
position:relative;
width:100%;
padding: 50px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
.content-header-puntos-ayuda{
font-family: Roboto Condensed;
font-style: normal;
font-weight: bold;
font-size: 18px;
line-height: 24px;
/* identical to box height, or 133% */
color: #000000;    
}
.contenido-informacion{
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 15px;
line-height: 24px;
/* or 150% */
color: #1A1A1A;
}
.util-informacion{
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 16px;
display: flex;
align-items: center;

color: #000000;

}
.boton-de-informacion-util{
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 4px;
font-family: Roboto Condensed;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
width: 65px;
height: 32px;
text-align: center;

color: #1A1A1A;
}
.gracias-por-su-opinion{
    font-family: Roboto Condensed;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 16px;
text-align: left;
color: #2D86EE;
}
.elegistes-no{
  font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 16px;
display: flex;
align-items: center;
color: #000000; 
}
.eligio-no-items{
width:300px;
padding-top: 13px;
padding-bottom: 5px;
padding-left: 50px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box; 
}
.texto-item-eligio-no{
position: relative;
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 14px;
line-height: 18px;
/* identical to box height, or 129% */
display: flex;
align-items: center;
color: #000000;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
/* Hide the browser's default radio button */
.texto-item-eligio-no input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}
/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: -2px;
  left: -35px;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}
/* On mouse-over, add a grey background color */
.texto-item-eligio-no:hover input ~ .checkmark {
  background-color: #eee;
}
/* When the radio button is checked, add a blue background */
.texto-item-eligio-no input:checked ~ .checkmark {
  background-color: #2196F3;
}
/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
/* Show the indicator (dot/circle) when checked */
.texto-item-eligio-no input:checked ~ .checkmark:after {
  display: block;
}
/* Style the indicator (dot/circle) */
.texto-item-eligio-no .checkmark:after {
    top: 6px;
    left: 6px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
@media (min-width: 770px) and (max-width:999px) { 

.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
}
@media (min-width: 420px) and (max-width:770px) { 

.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
.tema-item{
position:relative;
width:100%;
padding: 20px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
.texto-ayuda{
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 12px;
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
font-size: 12px;
line-height: 18px;
/* identical to box height, or 129% */

display: inline;
align-items: center;

color: #666666;
}
}
@media (min-width: 376px) and (max-width:420px) {
.texto-ayuda{
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 12px;
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
font-size: 12px;
line-height: 18px;
/* identical to box height, or 129% */

display: inline;
align-items: center;

color: #666666;
}
.como-reservar-auto-titulo{
font-size: 25px;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
.tema-item{
position:relative;
width:100%;
padding: 20px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
}
@media (min-width: 351px) and (max-width:376px) {
.texto-ayuda{
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 12px;
line-height: 18px;
/* identical to box height, or 129% */
margin-right: 5px;
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
font-size: 12px;
line-height: 18px;
/* identical to box height, or 129% */
display: inline;
align-items: center;
color: #666666;
} 
.como-reservar-auto-titulo{
font-size: 20px;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
.tema-item{
position:relative;
width:100%;
padding: 20px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
}
@media (min-width: 1px) and (max-width:351px) { 
.texto-ayuda{
font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 11px;
line-height: 12px;
/* identical to box height, or 129% */
margin-right: 5px;
margin-left: -15px;
display: inline;
align-items: center;
color: #000000;
}
.texto-comprando{
    margin-left: 5px;
    font-family: Roboto Condensed;
font-style: normal;
font-weight: 300;
font-size: 11px;
line-height: 12px;
/* identical to box height, or 129% */
display: inline;
align-items: center;
color: #666666;
}
.como-reservar-auto-titulo{
font-size: 20px;
}
.texto-item-ayuda {
font-size: 12px;
}
.contenido-ayuda{
padding: 0px 0px 43px 0px;
}
.tema-item{
position:relative;
width:100%;
padding: 20px;
background: #FFFFFF;
border: 1px solid #DBDBDB;
box-sizing: border-box;
}
}
</style>
@endsection
@section('content')
<div class="contenido-body">
    <div class="container px-5 py-4">
        <div class="contenido-ayuda">
            <div class="row mx-0">
                <div class= "col-12 py-2">
                    <label><span class="texto-ayuda" onclick="window.location='/ayuda'" style="cursor: pointer" >Ayuda</span><svg class="arco" width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.8877 3.49512L0.861328 1.44434V0.576172L5.72168 3.16016V3.83691L0.861328 6.42773V5.56641L4.8877 3.49512Z" fill="#666666"/>
                    </svg> <span class="texto-ayuda ml-sm-2 ml-0" style='cursor: pointer' onclick="window.location='/ayuda/{{$titulo[0]->help_topic->id}}'">{{$titulo[0]->help_topic->topic}}</span><svg class="arco" width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.8877 3.49512L0.861328 1.44434V0.576172L5.72168 3.16016V3.83691L0.861328 6.42773V5.56641L4.8877 3.49512Z" fill="#666666"/>
                    </svg><span class="texto-comprando">{{$titulo[0]->help_title}}</span>
                    </label>        
                </div>
                <div class= "col-12 py-4 mb-3">
                    <h4 class="como-reservar-auto-titulo">{{$titulo[0]->help_title}}</h4>
                </div>
                <div class=" col-12 tema-item">
                  {{-- contenido --}}
                  @php
                      echo $titulo[0]->help_html;
                  @endphp
                </div>
                <div class= "col-12 pt-5 mb-3 pl-0" id="id-pregunta-informacion-util">
                    <h4 class="util-informacion" >¿Fue útil esta información?</h4>
                </div>
                <div class= "col-12 pt-5 mb-3 pl-0" id="id-de-gracias-opinion"  style="display: none;">
                    <p class="gracias-por-su-opinion">¡Gracias por tu opinión!</p>
                </div>
                <div class= "col-12 pt-5 mb-3 pl-0"  id="id-elegistes-no"  style="display: none;">
                    <p class="elegistes-no">Elegiste no: ¿qué sucedió?</p>
                </div>    
                 <div class= "col-12 pl-0 mb-3" id="id-botones-ayudo">
                    <button class="boton-de-informacion-util" onclick="boton_si()">Si</button>
                    <button class="boton-de-informacion-util ml-3" onclick="boton_no()">No</button>
                </div>
                <div class="col-12 pl-0" id="opcion_1" style="display: none;" >
                    <div class="eligio-no-items" style= " border-bottom: none;">
                        <label class="texto-item-eligio-no">No encontré lo que buscaba
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>    
                </div>
                <div class="col-12 pl-0" id="opcion_2" style="display: none;">
                    <div class="eligio-no-items">
                        <label class="texto-item-eligio-no">Es insuficiente la información
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>    
                    </div>    
                </div>
            </div>
        </div> 
    </div>
</div>
<script>
function boton_si(){
    document.getElementById('id-pregunta-informacion-util').style.display = 'none';
    document.getElementById('id-botones-ayudo').style.display = 'none';
    document.getElementById('id-de-gracias-opinion').style.display = 'inline';
}
function boton_no(){
    document.getElementById('id-pregunta-informacion-util').style.display = 'none';
    document.getElementById('id-botones-ayudo').style.display = 'none';
    document.getElementById('id-elegistes-no').style.display = 'inline';
    document.getElementById('opcion_1').style.display = 'inline';
    document.getElementById('opcion_2').style.display = 'inline';

}
</script>
  {{-- modal_login --}}
  @include('modales.modal_login_registro')
@endsection