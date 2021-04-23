 <style>
     .heigth_publicidad {
         height: auto;
     }

     /*768px*/
     @media only screen and (max-width: 768px) {
         .heigth_publicidad {
             height: 55vh;
         }
     }

     #carousel-publicidad {
         height: 100% !important;
     }
 </style>
 <!-- publicidad -->
 <div class="container py-5 mt-5">
     <div class="row d-md-none px-2 mb-0 pb-0">
         <div class="text-center" style="display:block;">
             <h1 class="publicidad_titulo text-center mb-0 pb-0">
                {{$publicidad[0]->title}}
             </h1>
         </div>
     </div>
     <div class="row mt-5">
         <div class="col-12 col-md-7 heigth_publicidad">
             <div class="carousel" id="carousel-publicidad">
                 <div class="carousel-item-publicidad">
                 @include('home.tarjeta_auto_publicidad')
                 </div>
                 <div class="carousel-item-publicidad">
                 @include('home.tarjeta_auto_publicidad')
                 </div>
                 <div class="carousel-item-publicidad">
                 @include('home.tarjeta_auto_publicidad')
                 </div>
             </div>
         </div>
         <div class="col-4 d-none d-md-block">
             <h1 class="publicidad_titulo">
                 {{$publicidad[0]->title}}
                </h1>
             <p class="publicidad_text mt-4">
                {{$publicidad[0]->subtitle}}
            </p>
             <a class="publicidad_a mt-2" href="">
                 Ver planes
            </a>
         </div>
         <div class="col-md-1 d-none d-md-block"></div>
     </div>
     <div class="row mt-2 pt-3 justify-content-center px-2 d-md-none">
         <p class="publicidad_text mt-4 text-center">
            {{$publicidad[0]->subtitle}}
         </p>
         <a class="publicidad_a mt-2" href="">Ver planes</a>
     </div>
 </div>

 </div>
 <!--------------------------------------------- Propoganda Descripcion ------------------------------>
 <div class="container-fluid py-5">
     <div class="row">
         <h1 id="ofrecemos_titulo" class="text-center col-12">¿Qué te ofrecemos?</h1>
     </div>
     <div class="row text-center" id="ofrecemos_linea">
         <div class="col-2 col-md-4 p-2"></div>
         <div class="col-4 col-md-2 on_ofrecemos p-2 ofrecemos_subtitulo" id="comprando_id" style="cursor:pointer">Comprando</div>
         <div class="col-4 col-md-2 off_ofrecemos p-2 ofrecemos_subtitulo" id="vendiendo_id" style="cursor:pointer">Vendiendo</div>
         <div class="col-2 col-md-4 p-2"></div>
     </div>
 </div>
 <!---Carousel Propoganda ----->
<!---------------------------------------------------- Comprando ----------------------------------------->
 <div class="owl-carousel owl-theme mb-5 pb-2" id="publicidad_comprando">
     <div class="item px-5">
         <div class="row justify-content-center align-items-center">
             <div class="col-auto col-md-4 text-center">
                 <div class="container_total_ofrecemos_img">
                     <div class="ofrecemos_img">
                         <img style="position:relative;" src="{{ asset('img/autos/c1.jpg')}}" alt="">
                     </div>
                     <svg class="ofrecemos_svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#DE5214" />
                         <path d="M8 12.2486L10.5152 15L16 9" stroke="white" />
                     </svg>
                 </div>
             </div>
             <div class="col-12 col-md-8 mt-4 text-center text-md-left">
                 <h2 class="ofrecemos_subtitulo">Publicaciones verificadas</h2>
                 <p class="ofrecemos_text px-5 px-md-0 pr-md-5">
                 Nuestros usuarios requieren una validación por datos y controlamos lo publicado
                 </p>
             </div>
         </div>
     </div>
     <div class="item px-5">
         <div class="row justify-content-center align-items-center">
             <div class="col-auto col-md-4 text-center">
                 <div class="container_total_ofrecemos_img">
                     <div class="ofrecemos_img">
                         <img style="position:relative;" src="{{ asset('img/autos/c2.jpg')}}" alt="">
                     </div>
                     <svg class="ofrecemos_svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#DE5214" />
                         <path d="M8 12.2486L10.5152 15L16 9" stroke="white" />
                     </svg>
                 </div>
             </div>
             <div class="col-12 col-md-8 mt-4 text-center text-md-left">
                 <h2 class="ofrecemos_subtitulo">Seña protegida</h2>
                 <p class="ofrecemos_text px-5 px-md-0 pr-md-5">
                 Podés señar el auto que quieras y si la compra no se efectiviza se te devuelve el importe al 100 %
                 </p>
             </div>
         </div>
     </div>
     <div class="item px-5">
         <div class="row justify-content-center align-items-center">
             <div class="col-auto col-md-4 text-center">
                 <div class="container_total_ofrecemos_img">
                     <div class="ofrecemos_img">
                         <img style="position:relative;" src="{{ asset('img/autos/c3.jpg')}}" alt="">
                     </div>
                     <svg class="ofrecemos_svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#DE5214" />
                         <path d="M8 12.2486L10.5152 15L16 9" stroke="white" />
                     </svg>
                 </div>
             </div>
             <div class="col-12 col-md-8 mt-4 text-center text-md-left">
                 <h2 class="ofrecemos_subtitulo">Transacciones seguras</h2>
                 <p class="ofrecemos_text px-5 px-md-0 pr-md-5">
                     Acompañamos el proceso asegurandonos de que todo salga correctamente
                 </p>
             </div>
         </div>
     </div>
 </div>
 <!--------------------------------------------------end: Comprando ----------------------------------------->
 <!---------------------------------------------------- Vendiedno ----------------------------------------->
 <div class="owl-carousel owl-theme mb-5 pb-2" id="publicidad_vendiendo">
     <div class="item px-5">
         <div class="row justify-content-center align-items-center">
             <div class="col-auto col-md-4 text-center">
                 <div class="container_total_ofrecemos_img">
                     <div class="ofrecemos_img">
                         <img style="position:relative;" src="{{ asset('img/autos/c1.jpg')}}" alt="">
                     </div>
                     <svg class="ofrecemos_svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#DE5214" />
                         <path d="M8 12.2486L10.5152 15L16 9" stroke="white" />
                     </svg>
                 </div>
             </div>
             <div class="col-12 col-md-8 mt-4 text-center text-md-left">
                 <h2 class="ofrecemos_subtitulo">Publicaciones verificadas</h2>
                 <p class="ofrecemos_text px-5 px-md-0 pr-md-5">
                 Nuestros usuarios requieren una validación por datos y controlamos lo publicado
                 </p>
             </div>
         </div>
     </div>
     <div class="item px-5">
         <div class="row justify-content-center align-items-center">
             <div class="col-auto col-md-4 text-center">
                 <div class="container_total_ofrecemos_img">
                     <div class="ofrecemos_img">
                         <img style="position:relative;" src="{{ asset('img/autos/c2.jpg')}}" alt="">
                     </div>
                     <svg class="ofrecemos_svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#DE5214" />
                         <path d="M8 12.2486L10.5152 15L16 9" stroke="white" />
                     </svg>
                 </div>
             </div>
             <div class="col-12 col-md-8 mt-4 text-center text-md-left">
                 <h2 class="ofrecemos_subtitulo">Seña protegida</h2>
                 <p class="ofrecemos_text px-5 px-md-0 pr-md-5">
                 Podés señar el auto que quieras y si la compra no se efectiviza se te devuelve el importe al 100 %
                 </p>
             </div>
         </div>
     </div>
     <div class="item px-5">
         <div class="row justify-content-center align-items-center">
             <div class="col-auto col-md-4 text-center">
                 <div class="container_total_ofrecemos_img">
                     <div class="ofrecemos_img">
                         <img style="position:relative;" src="{{ asset('img/autos/c3.jpg')}}" alt="">
                     </div>
                     <svg class="ofrecemos_svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#DE5214" />
                         <path d="M8 12.2486L10.5152 15L16 9" stroke="white" />
                     </svg>
                 </div>
             </div>
             <div class="col-12 col-md-8 mt-4 text-center text-md-left">
                 <h2 class="ofrecemos_subtitulo">Transacciones seguras</h2>
                 <p class="ofrecemos_text px-5 px-md-0 pr-md-5">
                     Acompañamos el proceso asegurandonos de que todo salga correctamente
                 </p>
             </div>
         </div>
     </div>
 </div>
 <!----------------------------------------------------end:vendiedno ----------------------------------------->
 <script>
    $("#publicidad_vendiendo").css("opacity", "0");

    $(function(){
     $("#publicidad_vendiendo").css("display", "none");
     $("#publicidad_vendiendo").css("opacity", "1");

    });
     	
    $("#comprando_id").click(function(){
    $("#comprando_id").removeClass("off_ofrecemos");
    $("#comprando_id").addClass("on_ofrecemos");
    $("#vendiendo_id").removeClass("on_ofrecemos");
    $("#vendiendo_id").addClass("off_ofrecemos");
    $("#publicidad_vendiendo").css("display", "none");
    $("#publicidad_comprando").css("display", "inline-block");
    });

    $("#vendiendo_id").click(function(){

    $("#vendiendo_id").removeClass("off_ofrecemos");
    $("#vendiendo_id").addClass("on_ofrecemos");
    $("#comprando_id").removeClass("on_ofrecemos");
    $("#comprando_id").addClass("off_ofrecemos");
    $("#publicidad_vendiendo").css("display", "inline-block");
    $("#publicidad_comprando").css("display", "none");
    });

     $('#publicidad_comprando').owlCarousel({
         loop: false,
         mouseDrag: false,
         nav: false,
         dots: true,
         responsive: {
             0: {
                 items: 1
             },
             768: {
                 items: 2
             },
             1200: {
                 items: 3
             }
         }
     })
     $('#publicidad_vendiendo').owlCarousel({
         loop: false,
         mouseDrag: false,
         nav: false,
         dots: true,
         responsive: {
             0: {
                 items: 1
             },
             768: {
                 items: 2
             },
             1200: {
                 items: 3
             }
         }
     })
 </script>
 @include('common.footer_scripts_publicidad')