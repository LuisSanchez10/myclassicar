<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Listado</title>
    <!-- iconos feather-icons -->
     <script src="https://unpkg.com/feather-icons"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<style type="text/css">
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: rgb(233,233,233);

  }
  /*CARD*/
.card-text{
  font-size: 10px;

  }
  .buttonAnioCard{
  border-radius: 2px;
  border: solid 0.5px #000;
  background-color: #fff;
  padding: 0 0.5rem;
  color: #000;
  margin-left: 0rem;
  outline:none!important;
}
.buttonAnioCardDisabled{
  border-radius: 2px;
  border: solid 1px #888;
  background-color: #fff;
  padding: 0 0.5rem;
  color: #888;
  margin-left: 0.2rem;
  outline: none;
}
.text-font{
  font-size: 10px;
}
 .pointer {
cursor: pointer;
}


.publicaciones{
  color:rgb(155,155,155);

}
 .filtro {
  width: 100%;
  height: 35px;
  background-color: black;
  text-align: center;
     display: flex;
   justify-content: center;
   align-items: center
}
#icon-filtro{
/*  display: none;*/
}
header .icon-menu {
cursor: pointer;
}
/*header .menu-filtro {
  z-index: 1;
  position: absolute;
  top: 35px;
  left: 0;
  width: 100%;
  height: 100vh;
  background: rgba(51,51,51,0.9);
  transition: all 0.1s;
  transform: translateX(-100%);
}*/


.menu-filtro .nivel_1{
  display: block;
  margin-right: 0;
  margin-left: 0;
  color:#000;
  height: 47px;
  padding-top: 22px;
  text-decoration: none;
  border-bottom: 1px solid #000;
}
.menu-filtro .nivel_2{
  display: block;
  margin-right: 0;
  margin-left: 0;
  height: 20px;
  text-decoration: none;

}
/*header .menu-filtro a:hover, .menu-filtro li:hover{
 background: rgba(51,51,51,0.5);
}
*/
.lista-de-carros {
  padding: 0;
  margin: 0;
   font-size: 12px;
}

.contenedor{
  font-size: 12px;
  display: inline-block;
  position: relative;
  width: 20%;
  height: 20%;
  min-width: 20%
padding-right: 0;
}


</style>

  </head>
  <body >

 <!--          <div class="" style="background-color: white;">


              <div class="container text-font">
                <div class="navbar-header pt-1">
                    <ul class="nav navbar-nav flex-row">
                       <li class="nav-item mr-auto">
                          <label class="mt-2 icon-menu" href="#" onclick="filtros()" id="filtros-id" ><img class="pl-1" src="edit-filtro.ico"  width="16" heigth="16"> Filtros</label>
                       </li>

                        <li><a class="nav-link pointer"><i data-feather="x" width="14" heigth="14" ></i></a>
                        </li>
                    </ul>
                </div>

              <div class="navbar-header">
                <ul class="menu-filtro p-0 m-0">
                  <li class="nivel_1" data-toggle="collapse" href="#marcas" role="button" aria-expanded="false" aria-controls="marcas">
                    <strong>Marcas</strong></li>
                    <div class="collapse" id="marcas">

                      <ul class="p-0 m-0">
                        <li class="nivel_2"> <a><strong>Todas (1982)</strong></li>
                        <li class="nivel_2"> <a>Fiat (26)</li>
                        <li class="nivel_2"> <a>Ford (23)</li>
                        <li class="nivel_2"> <a>Chevrolet (21)</a></li>
                        <li class="nivel_2"> <a>Paugeot (20)</a></li>
                        <li class="nivel_2"> <a>Mercedes (18)</a></li>
                        <li class="nivel_2"> <a>BMW (14)</a></li>
                        <li class="nivel_2"> <a>Renault(12)</a></li>
                      </ul>
                      <div class="mt-2">
                        <a>Ver todas</a>
                      </div>
                    </div>
                  

                  
                  <li class="nivel_1"><strong>Tipo de Autos</strong></li>
                  <li class="nivel_1"><strong>Año</strong></li>
                  <li class="nivel_1"><strong>Precio</strong></li>
                  <li class="nivel_1"><strong>Kilometros</strong></li>
               </ul>
              </div>
        

          </div>
 -->
<div class="lista-de-carros">
<div class="contenedor">
      <div class="card card-list" > 
        <img src="https://cdn.pixabay.com/photo/2018/10/27/23/19/ford-3777615_960_720.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="row">
            <div class="col-12 px-2">
             <p class="card-text"><strong>clásico Ford </strong> 220 D Rural Full</p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-8 px-2">
              <button class="buttonAnioCard card-text" type="button">1985</button>
              <button class="buttonAnioCardDisabled card-text" type="button" disabled>120.000 km</button>
            </div>  
            <div class="col-4 px-2 text-right">
              <strong class="precio card-text">$90.000</strong>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="contenedor">
      <div class="card card-list" > 
        <img src="https://cdn.pixabay.com/photo/2018/10/27/23/19/ford-3777615_960_720.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="row">
            <div class="col-12 px-2">
             <p class="card-text"><strong>clásico Ford </strong> 220 D Rural Full</p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-8 px-2">
              <button class="buttonAnioCard card-text" type="button">1985</button>
              <button class="buttonAnioCardDisabled card-text" type="button" disabled>120.000 km</button>
            </div>  
            <div class="col-4 px-2 text-right">
              <strong class="precio card-text">$90.000</strong>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="contenedor">
      <div class="card card-list" > 
        <img src="https://cdn.pixabay.com/photo/2018/10/27/23/19/ford-3777615_960_720.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="row">
            <div class="col-12 px-2">
             <p class="card-text"><strong>clásico Ford </strong> 220 D Rural Full</p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-8 px-2">
              <button class="buttonAnioCard card-text" type="button">1985</button>
              <button class="buttonAnioCardDisabled card-text" type="button" disabled>120.000 km</button>
            </div>  
            <div class="col-4 px-2 text-right">
              <strong class="precio card-text">$90.000</strong>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="contenedor">
      <div class="card card-list" > 
        <img src="https://cdn.pixabay.com/photo/2018/10/27/23/19/ford-3777615_960_720.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <div class="row">
            <div class="col-12 px-2">
             <p class="card-text"><strong>clásico Ford </strong> 220 D Rural Full</p>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-8 px-2">
              <button class="buttonAnioCard card-text" type="button">1985</button>
              <button class="buttonAnioCardDisabled card-text" type="button" disabled>120.000 km</button>
            </div>  
            <div class="col-4 px-2 text-right">
              <strong class="precio card-text">$90.000</strong>
            </div>
          </div>
        </div>
      </div>
</div>
</div>    
<script type="text/javascript">
  function filtros(){
     var valor = document.getElementById("menu-filtro-id").style.transform
    if (valor == "translateX(0%)") {
    document.getElementById("menu-filtro-id").style.transform = "translateX(100%)";  
    } else {
     document.getElementById("menu-filtro-id").style.transform = "translateX(0%)"; 
    }
    
  } 
</script>

<!-- Iconos feather -->
     <script>
      feather.replace()
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
