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

    .slider-main-mobile-container{
        position: relative;
        width: 100vw;
        /* height: 30vh; */
        overflow: hidden;
    }
    .slider-main-mobile{
        position: relative;
        height: 30vh;
    }

    /* .slider-main-mobile .slider-imagen-mobile {
        height: 300px;
    } */

    .slider-main-mobile img {
    width: 100%;
    height: auto;
    }
@supports(object-fit: cover){
    .slider-main-mobile img{
      height: 100%;
      object-fit: cover;
      object-position: center center;
    }
}
    

    .galeria-mobile{
        position: absolute;
        color: #fff;
        cursor: pointer;
        align-items: center;
        padding: .2rem .7rem;
        border-radius: 3px;
        background-color: rgba(0,0,0,0.7);
        display: flex;
        justify-content: space-between;
        position: absolute;
        bottom: 0;
        left: 35%;
        z-index: 
        transform: translateX(-50%);
    }

    .galeria-publicacion-title-mobile{
        font-size: .8rem;
        margin-left: .8rem;
    }

    .slider-click-mobile {
        display: flex;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        position: absolute;
        z-index: 100;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background-color: #fff;
    }

    .right-mobile{
        display: flex;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        position: absolute;
        z-index: 100;
        top: 50%;
        transform: translateY(-50%);
        right: 0;
        width: 40px;
        height: 40px;
        background-color: #fff;
    }

    .right-mobile img{
        width: 25px;
        height: 25px;
        transform: rotate(180deg);
    }

    .slider-click-mobile img{
        width: 25px;
        height: 25px;
    }

    @media (min-width: 768px){
        .slider-main-mobile{
            position: relative;
            height: 400px;
        }

        .slider-main-mobile .slider-imagen-mobile {
            height: 400px;
        }

        .galeria-mobile{
            left: 45%;
        }

        .slider-click-mobile{
            width: 50px;
            height: 50px;
        }

        .slider-click-mobile img{
            width: 35px;
            height: 35px;
         }

        .right-mobile{
            width: 50px;
            height: 50px;
        }

        .slider-click-mobile img{
            width: 35px;
            height: 35px;
        }
    }

    /* PRODUCTO HEADER NAVBAR */

    .producto-perfil-header-bar-mobile{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 1.2rem;
    }

    .producto-header-nav-mobile{
        display: flex;
    }


    .producto-perfil-title-mobile{
        font-size: .9rem;
        line-height: 16px;
        margin: 0;
    }
    .producto-perfil-price-mobile{
        padding: 0;
        margin: 0;
        font-weight: bold;
        font-size: .9rem;
    }


    /*PRODUCTO INFO MAIN CONTAINER*/

    .producto-especifico-info-mobile{
        width: 95%;
        margin: 0 auto;
    }


    /* PRODUCTO DESCRIPCIÓN */


    .producto-descripcion-title-mobile{
        font-weight: bold;
        border-bottom: 1px solid #DBDBDB;
    }

    .producto-descripción-text-mobile{
        font-size: 1rem;
        font-weight: 300;
        margin-bottom: 1rem;
    }
    .btn-mobile-enviar{
        display: block;
        border-radius: 0;
        background-color: #F0F0F0;
        font-weight: bold;
    }

    /* PRODUCTO CATEGORIAS */

    .producto-categoria-list-mobile{
        list-style: none;
        font-weight: bold;
        padding: .4rem 2rem .4rem 1rem;
        display: flex;
        justify-content: space-between;
    }

    .producto-categoria-list-mobile span{
        font-weight: 300;
        color: #666666;
    }

    .producto-categoria-list-mobile:nth-child(even){
        padding: 1.8rem 2rem 1.8rem 1rem;
    }

    .producto-categoria-list-mobile:nth-child(2n+1){
        background-color: #F0F0F0;
    }

    /* PRODUCTO VENDEDOR DESCRIPCIÓN */

    .producto-vendedor-info-mobile{
        display: flex;
        align-items: center;
    }

    .vendedor-img-mobile{
        width: 50px;
        height: 50px;
        border-radius: 100px;
    }

    .vendedor-name-mobile{
        border: none;
    }

    .vendedor-calle-mobile{
        color: #666666;
    }

    .vendedor-descripcion-main-mobile{
        flex:1;
        padding-left: 1rem;
    }

    .vendedor-descripcion-mobile{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .distancia-body-mobile{
        display: flex;
    }

    .vendedor-distancia-mobile{
        font-weight: 300;
        margin: 0;
        color: #666666;
        padding: 0;
        padding-right: .8rem;
    }

    .icono-pin-mobile{
        transform: translateY(calc(-50% + .3rem));
        width: 20px;
        margin-right: 1.2rem;

    }

    .vendedor-calle-mobile{
        font-weight: 300;
    }

    /* PRODUCTO BOTONES ACCIONES */ 

    .producto-botones-acciones-mobile{
        display: flex;
    }

    .boton-accion-mobile{
        text-align: center;
        flex:1;
        color: #666666;
        padding: 1rem 0;
        border-top: 1px solid #D8D8D8;

    }

    .boton-accion-mobile:nth-child(2){
        color: #fff;
        font-weight: bold;
        background-color: #DE5214;
    }

    .boton-accion-mobile:nth-child(1):hover{
        text-decoration: none;
        color: #666666;
    }
    .boton-accion-mobile:nth-child(2):hover{
        text-decoration: none;
        color: #ffff;
    }


    @media (min-width: 1000px){
        
        /* botones acciones */
        
        .producto-botones-acciones-mobile{
            display: none;
        }

        
    }
</style>