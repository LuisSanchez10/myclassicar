<style>
	    html{
        box-sizing: border-box;
    }


    img{
        max-width: 100%;
    }

    ul,li{
        padding: 0;
        margin: 0;
    }

/* Slider principal */
    
    .principal-photo-gallery{
        object-fit: cover;
        width: 600px;
        height: 292px;
    }

    .slider-main-desktop{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: .05rem;
        cursor: pointer;

    }

    .slider-main-desktop.hidden {
        display: none;
    }


    .galeria-desktop{
        color: #fff;
        cursor: pointer;
        align-items: center;
        padding: .2rem .7rem;
        border-radius: 3px;
        background-color: rgba(0,0,0,0.7);
        display: flex;
        justify-content: space-between;
        position: absolute;
        top: -5rem;
        left: 1rem;
    }

    .galeria-desktop.hidden {
        display: none;
    }

    .galeria-publicacion-title{
        font-size: .8rem;
        margin-left: .8rem;
    }

    .container-main{
        position: relative;
    	max-width: 1000px;
    	margin: 0 auto;
        display: grid;
        grid-template-columns: 65% 35%;
        grid-gap: 4rem;
    }

/* Slider main dos */

.slider-main-dos-desktop{
    position: relative;
    width: 600px;
    display: none;
    height: 400px;
}

.slider-main-dos-desktop.active {
    display: block;
}

.slider-main-dos-desktop div{
    height: 400px;
    width: 600px;
}



.slider-main-dos-desktop img{
    width: 100%;
    height: 100%;
}


.slider-block{
    position: absolute;
    padding: 1.1rem;
    cursor: pointer;
    width: 53px;
    height: 53px;
    top: 50%;
    z-index: 100;
    background-color: #fff;
}

.slider-click img{
    width: 100%;
}

.slider-right{
    right: 0;
}

.slider-right img{
    transform: rotate(180deg);
}

/*Lado Izquierdo infomracion del producto*/


    .product-name-title{
        font-weight: 300;
    	font-size: 1.5rem;
    }

    .product-price-subtitle{
    	font-weight: bold;
    }

    .producto-descripcion-title{
        font-weight: bold;
        border-bottom: 1px solid #DBDBDB;
    }

    .producto-descripción-text{
        font-size: 1rem;
        font-weight: 300;
        padding-right: 7rem;
        margin-bottom: 1rem;
    }

    /*Categorias Producto */

    .producto-especifico-categorias{
    	display: grid;
    	grid-template-columns: repeat(2, 1fr);
        grid-gap: 2rem;
    }

    .producto-categoria-list{
        list-style: none;
        font-weight: bold;
        padding: .4rem 2rem .4rem 1rem;
        display: flex;
        justify-content: space-between;
    }

    .producto-categoria-list span{
        font-weight: 300;
        color: #666666;
    }

    .producto-categoria-list:nth-child(even){
        padding: 1.8rem 2rem 1.8rem 1rem;
    }

    .producto-categoria-list:nth-child(2n+1){
        background-color: #F0F0F0;
    }

    /* Producto Vendedor Info */

    .producto-vendedor-info{
        display: flex;
        align-items: center;
    }

    .vendedor-img{
        width: 100px;
        height: 100px;
        border-radius: 100px;
    }

    .vendedor-name{
        border: none;
    }

    .vendedor-calle{
        color: #666666;
    }

    .vendedor-descripcion-main{
        flex:1;
        padding-left: 1.7rem;
    }

    .vendedor-descripcion{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .distancia-body{
        display: flex;
    }

    .vendedor-distancia{
        font-weight: 300;
        margin: 0;
        color: #666666;
        padding: 0;
        padding-right: .8rem;
    }

    .icono-pin{
        transform: translateY(calc(-50% + .3rem));
        width: 20px;

    }

    .vendedor-calle{
        font-weight: 300;
    }

    /* Preguntas Producto */

    .publicacion-producto-preguntas{
        border-bottom: 1px solid #DBDBDB;
        padding-bottom: 1rem;
    }

    .producto-preguntas-none{
        font-weight: 300;
    }
    .publicacion-preguntas-main{
        display: flex;
        max-width: 96%;
    }

    .publicacion-pregunta-content{
        font-family: 'Roboto Condensed', sans-serif;
        font-weight: 300;
        border-radius: 4px;
        padding: .6rem 1rem;
        border: 1px solid #d1c9c9;
        background-color: #fff;
    }

    /* desactivar evento click en input */
    .publicacion-pregunta-content.disabled{
        pointer-events: none;
    } 
    .preguntas-boton-desktop{
        background-color: #0C2849;
        text-decoration: none;
        color: #fff;
        border-radius: 4px;
        display: block;
        margin-left: 1.5rem;
        padding: .6rem 1.9rem;
        align-self: center;
    }

    .preguntas-boton-desktop:hover{
        text-decoration: none;
        color: #fff;
    }

    .preguntas-boton-desktop.disabled{
         pointer-events: none;
         cursor: default;
         background: grey;
    }


/* Lado derecho Acciones y información de pago */


.publicacion-acciones-main{
    max-width: 99%;
    margin-left: auto;
    margin-bottom: 2.8rem;
}

.publicacion-botones-accion{
    border: 1px solid #000000;
    border-radius: 4px;
    color: red;
    padding: .9rem 3.5rem;
    color: #000000;
}

.publicacion-botones-accion:hover{
    text-decoration: none;
    color: #000000;
}



.publicacion-botones-accion:last-child{
    background-color: #DE5214;
    color: #fff;
    border: none;
    font-weight: bold;
    margin-left: 1rem;
}


  /*Como comprar o reservar */

.publicacion-pasos-main{
    display: flex;
    justify-content: space-between;
}

.paso-main:nth-child(2){
    margin-bottom: 1rem;
}

.paso-circulo {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 30px;
    border: 1px solid #333;
    height: 30px;
    border-radius: 50%;
    margin-bottom: 1.5rem;
}
.paso-circulo::before{
    position: absolute;
    content: '';
    top: 100%;
    transform: translateY(45%);
    width: 1px;
    height: 1.7rem;
    background-color: #DBDBDB;
}

.paso-2::before{
    transform: translateY(25%);
    height: 2.4rem;
}

.paso-3::before{
    width: 0;
    height: 0;
}

.paso-3{
    border: none;
}

.paso-main > p{
    font-weight: 300;
    padding-right: 5rem;
    color: #666666;
    margin-left: 1rem;
}

/*Medios de Pago */

.publicacion-medios-main{
    display: grid;
    grid-template-columns: 65% 35%;
}


.medios-body{
    padding-right: 1rem; 
    border-right: 1px solid #DBDBDB;
}

.medios-title{
    font-weight: 300;
    color: #666666;
}

.medios-tarjetas svg {
    margin-right: 1rem;
}



.medios-saber-mas{
    display: flex;
    justify-content: center;
    align-items: center;
}


.medios-saber-mas a{
    color: #000000;
    border-bottom: 2px solid #000000;
    font-weight: bold;
}

.medios-saber-mas a:hover{
    color: #000000;
    text-decoration: none;
}

/* Te puede interesar */

.publicacion-productos-interesar{
    grid-column: 1 / 3;
    margin-bottom: 5rem;

}

.interesar-productos{
    display: flex;
}

.interesar-productos a {
    text-decoration: none;
    color: black;
}

.interesar-title-name{
    font-weight: bold;
    margin-bottom: 4rem;
    text-align: center;
}

.producto-interesar-card{
    width: 280px;
    margin-right: 6.5rem;
}

.producto-interesar-card:nth-child(3){
    margin-right: 0;
}

.interesar-img{
    width: 280px;
    height: 170px;
    object-fit: cover;
}

.interesar-body{
    padding: 1.3rem .7rem 1rem;
   border-left: 1px solid #DBDBDB;
   border-bottom: 1px solid #DBDBDB;
   border-right: 1px solid #DBDBDB;
}

.interesar-body-title{
    font-size: 14px;
    margin-bottom: 1.5rem;
}

.interesar-body-title span{
    font-weight: bold;
}

.interesar-caracteristicas{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 96%;
}


.interesar-caracteristicas p{
    font-size: .8rem;
    align-self: center;
    font-weight: bold;
}

.interesar-caracteristicas-body {
        font-size: .8rem;
        padding: .2rem .6rem;
}

.interesar-caracteristicas-body:nth-child(1){
    border: 1px solid #000000;
    color: #000000;
}
.interesar-caracteristicas-body:nth-child(2){
    border: 1px solid #999999;
    color: #999999;
}

.volver-listado{
    grid-column: 1 / 3;
    text-align: center;
    margin-bottom: 2.5rem;
}

.volver-listado a{
    color: #666666;
    text-decoration: none;
    border-bottom: 1px solid #666666;
}

.volver-listado a:hover{
    color: #666666;
    text-decoration: none;
}


.producto-vendedor-img-main{
    position: relative;
}

.producto-img-check{
    background-color: #0C2849;
    width: 27px;
    height: 27px;
    position: absolute;
    top:74%;
    left: 69%;
    border-radius: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px #fff solid;
}

.producto-img-check img{
    width: 13px;
}

.publicacion-desktop-slider-active{
    display: none;
    border-bottom: 1px solid #DBDBDB;
}

.publicacion-desktop-slider-active.on{
    display: block;
}

.publication-desktop-title-active{
    font-weight: bold;
    font-size: 1.6rem;
}

.publication-desktop-price-active{
    font-size: 1.3rem;
}

.opciones-intrucciones-desktop-active{
    display: grid;
    grid-template-columns: 55% 45%;
}

.opciones-preguntar-desktop{
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 1rem;
}

.opciones-preguntar-text{
    font-size: .8rem;
}

.preguntas-body-main{
    margin-bottom: .7rem; 
}

.preguntas-body-respuesta{
    padding-left: 1rem;
    font-weight: 300;
}
</style>