<style>
.carrousel_carro1{
    position: absolute;
    border: 8px solid #FFFFFF;
    box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
    z-index: 3;
    width:80%!important;
    top:10%;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
}
.carrousel_carro2{
    position: absolute;
    mix-blend-mode: normal;
    opacity: 0.9;
    border: 8px solid #FFFFFF;
    box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
    z-index:  2;
    width:77%!important;
    top:16%;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
}
.carrousel_carro3{
    position: absolute;
    mix-blend-mode: normal;
    opacity: 0.15;
    border: 6.84px solid #FFFFFF;
    box-sizing: border-box;
    transform: matrix(1, 0, 0, -1, 0, 0);
    z-index: 1;
    width:70%!important;
    top:25%;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
}
/* Si la pantalla es menor a 992px se aplicaran los estilos*/
@media only screen and (max-width: 992px){
  .carrousel_carro1{
      position: absolute;
      border: 8px solid #FFFFFF;
      box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
      z-index: 3;
      width:90%!important;
      top:10%;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
  }
  .carrousel_carro2{
      position: absolute;
      mix-blend-mode: normal;
      opacity: 0.9;
      border: 8px solid #FFFFFF;
      box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
      z-index:  2;
      width:77%!important;
      top:16%;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
  }
}
/* Si la pantalla es menor a 768px se aplicaran los estilos*/
@media only screen and (max-width: 768px){
  .carrousel_carro1{
      position: absolute;
      border: 8px solid #FFFFFF;
      box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
      z-index: 3;
      width:85%!important;
      top:10%;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
  }
  .carrousel_carro2{
      position: absolute;
      mix-blend-mode: normal;
      opacity: 0.9;
      border: 8px solid #FFFFFF;
      box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
      z-index:  2;
      width:80%!important;
      top:35%;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
  }
  .carrousel_carro3{
      position: absolute;
      mix-blend-mode: normal;
      opacity: 0.15;
      border: 6.84px solid #FFFFFF;
      box-sizing: border-box;
      transform: matrix(1, 0, 0, -1, 0, 0);
      z-index: 1;
      width:75%!important;
      top:60%;
      left: 0;
      right: 0;
      bottom: 0;
      margin: auto;
  }
}
  @media only screen and (max-width: 575px){
    .carrousel_carro1{
        position: absolute;
        border: 8px solid #FFFFFF;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
        z-index: 3;
        width:75%!important;
        top:10%;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
    .carrousel_carro2{
        position: absolute;
        mix-blend-mode: normal;
        opacity: 0.9;
        border: 8px solid #FFFFFF;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
        z-index:  2;
        width:70%!important;
        top:37%;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
    .carrousel_carro3{
        position: absolute;
        mix-blend-mode: normal;
        opacity: 0.15;
        border: 6.84px solid #FFFFFF;
        box-sizing: border-box;
        transform: matrix(1, 0, 0, -1, 0, 0);
        z-index: 1;
        width:65%!important;
        top:65%;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
  }
  @media only screen and (max-width: 400px){
    .carrousel_carro1{
        position: absolute;
        border: 8px solid #FFFFFF;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
        z-index: 3;
        width:75%!important;
        top:10%;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
    .carrousel_carro2{
        position: absolute;
        mix-blend-mode: normal;
        opacity: 0.9;
        border: 8px solid #FFFFFF;
        box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.32);
        z-index:  2;
        width:70%!important;
        top:35%;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
    .carrousel_carro3{
        position: absolute;
        mix-blend-mode: normal;
        opacity: 0.15;
        border: 6.84px solid #FFFFFF;
        box-sizing: border-box;
        transform: matrix(1, 0, 0, -1, 0, 0);
        z-index: 1;
        width:65%!important;
        top:60%;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }
  }
</style>
<div class="p-5 container_carros_banner">
  <img class="carrousel_carro1" src="/storage/{{$slider->photo_slide}}">
  <img class="carrousel_carro2" src="/storage/{{$slider->photo_slide}}">
  <img class="carrousel_carro3" src="/storage/{{$slider->photo_slide}}">
</div>
