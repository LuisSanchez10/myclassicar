<style>

/* preguntas select datos mobile version */


/* Plan seccion */

.plan-opciones{
    justify-content: start;
}


.en-curso-plan{
    margin-left: 2rem;
}

.plan-container-main{
    display: grid;
    width: 100%;
    grid-template-columns: 45% 1fr;
    grid-gap: 1rem;

}

.plan-tipo{
    margin-left: .8rem;
    border: 1px solid #333;
    text-align: center;
    border-radius: 4px;
    padding-bottom: .3rem;
}


.plan-tipo-icons{
    margin: .5rem .5rem 0;
    display: flex;
    justify-content: flex-end;
}

.plan-tipo-name{
    position: relative;
    font-size: 1.5rem;
    top: 16%;
}

.plan-info-main{
    width: 96%;
    display: flex;
}
.plan-info-title{
    font-size: .9rem;
}

.plan-tipo-icon{
    position: relative;
    top: -6px;
    cursor: pointer;
    width: 21px;
    height: 21px;
    margin-left: auto;

}

.plan-caracteristica-title {
    font-weight: 300;
    font-size: 1rem;
    margin-bottom: .3rem;
}

.plan-caracteristica-subtitle {
    font-weight: 300;
    font-size: .7rem;
    margin: 0;
    padding: 0;
    color: rgba(0, 0, 0, 0.5);
} 


.plan-pago{
    grid-column: 1 / 4;
}


.plan-pago-acciones{
    width: 46%;
    display: flex;
    justify-content: space-between;
    margin: 0 auto;
}

.plan-acciones-title{
    position: relative;
    font-weight: normal;
    font-size: 1rem;
}

.plan-title-1::after{
    position: absolute; 
    content: '';
    width: 1.7px;
    height: 21px;
    background-color: #979797;
    right: -2.2rem;
    top: 1px;
}


.plan-pago-acciones span:nth-child(2){
    margin-left: auto;
}


.plan-pago-modo{
    
    padding: 0 1.6rem;

}

.plan-pago-modo-main{
    position: relative;
}

.plan-pago-modo-main::after{
    position: absolute; 
    content: '';
    width: 1.7px;
    height: 38px;
    background-color: #979797;
    top: 25%;
    left: calc(50% + 1px);
}

.plan-pago-title{
    margin-bottom: .3rem;
    font-weight: 300;
    color: #666666;
    font-size: .8rem;
}

.pago-modo-icons svg{
    margin-right: .8rem;
}

@media (min-width: 768px){
    /* preguntas select datos tablet version */

    .filtros-busqueda{
        display: flex;
        justify-content: space-around;
    }

    .select-main{
        padding: .2rem .6rem;
        display: flex;
       
        border-radius: 3px;
        border: 1px solid #B3B3B3;
        cursor: pointer;
        margin-bottom: 1rem;
    }

    .select-preguntas{
        align-items: center;
        justify-content: space-between;
    }

    .select-name{
        font-family: 'Roboto Condensed', sans-serif;
        font-size: .8rem;
    }

    .select-icon{
        transform: translateY(-15%);
    }

    .preguntas-title{
        padding: 0;
        font-size: 1rem;
    }

    .pregunta-subtitle{
        font-size: .9rem;
    }


    .plan-title-1::after{
        right: -3.9rem;
    }

    .plan-pago-modo{
        
        padding: 0 2.6rem;

    }

}


@media (min-width: 1000px){

    .plan-container-main{
        grid-template-columns: repeat(5, 20%);
        grid-gap: .6rem;
    }


    .plan-pago {
        grid-column: 4 / 6;
    }

    .plan-title-1::after{
        width: 1px;
        right: -1.9rem;
    }

    .plan-pago-modo-main::after{
        width: 1px;
        left: calc(50% + 2px);
    }

    .plan-pago-modo{
        margin-bottom: .6rem;
        padding: 0 0.6rem;
    }
    .plan-pago-modo:nth-child(2){
        margin-bottom: 0;
    }

    .en-curso-plan{
        margin-left: 4rem;
        padding: 0px 2.6rem;
    }

    .plan-title.option-active::before{
        width: 8rem;
    }
}

</style>






<div class="edit-preguntas-usuario plan-usuario mt-4 col-10 col-md-7 mt-3" id="plan-vista">
    <div class="row mb-4">
        <div class="publicaciones-opciones plan-opciones py-3 col-12">
            <div class="en-curso-plan">
                <h2 class="publicaciones-title plan-title principal-font option-active">En Curso</h2>
            </div>
        </div>
    </div>
    

    <!--  preguntas Datos -->
    <div class="row">
        @if($plan)
            <div class="plan-container-main mb-4">
                <div class="plan-tipo">
                    <div class="plan-tipo-icons">
                     @if($plan->plan == "Gratuito")
                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.50045 0.829102L5.71875 5.43453L0.552734 6.70031L3.99881 10.8133L3.58901 16.1984L8.50045 14.1372L13.4119 16.1984L13.0021 10.8133L16.4482 6.70031L11.2821 5.43453L8.50045 0.829102Z" fill="#FCAF17"/>
                             </svg>
                        </span>
                     @elseif($plan->plan === "Inicial")
                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.50045 0.829102L5.71875 5.43453L0.552734 6.70031L3.99881 10.8133L3.58901 16.1984L8.50045 14.1372L13.4119 16.1984L13.0021 10.8133L16.4482 6.70031L11.2821 5.43453L8.50045 0.829102Z" fill="#FCAF17"/>
                             </svg>
                        </span>

                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.50045 0.829102L5.71875 5.43453L0.552734 6.70031L3.99881 10.8133L3.58901 16.1984L8.50045 14.1372L13.4119 16.1984L13.0021 10.8133L16.4482 6.70031L11.2821 5.43453L8.50045 0.829102Z" fill="#FCAF17"/>
                             </svg>
                        </span>
                     @elseif($plan->plan === "Profesional")
                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.50045 0.829102L5.71875 5.43453L0.552734 6.70031L3.99881 10.8133L3.58901 16.1984L8.50045 14.1372L13.4119 16.1984L13.0021 10.8133L16.4482 6.70031L11.2821 5.43453L8.50045 0.829102Z" fill="#FCAF17"/>
                             </svg>
                        </span>

                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.50045 0.829102L5.71875 5.43453L0.552734 6.70031L3.99881 10.8133L3.58901 16.1984L8.50045 14.1372L13.4119 16.1984L13.0021 10.8133L16.4482 6.70031L11.2821 5.43453L8.50045 0.829102Z" fill="#FCAF17"/>
                             </svg>
                        </span>

                        <span>
                            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.50045 0.829102L5.71875 5.43453L0.552734 6.70031L3.99881 10.8133L3.58901 16.1984L8.50045 14.1372L13.4119 16.1984L13.0021 10.8133L16.4482 6.70031L11.2821 5.43453L8.50045 0.829102Z" fill="#FCAF17"/>
                             </svg>
                        </span>
                     @endif
                    </div>
                    <h3 class=" plan-tipo-name principal-font">{{$plan->plan}}</h3>
                </div>
                <div class="plan-tipo-info">
                    <div class="plan-info-main">
                        <h3 class="plan-info-title principal-font">
                            {{$plan->plan}}
                        </h3> 
                        <img class="plan-tipo-icon" src="{{ asset('img/iconos/basurero.png') }}">
                    </div>
                    <div class="plan-info-caracteristicas">
                        <p class="plan-caracteristica-title principal-font">$ {{$plan->plan_per_month}} / Mensuales</p>
                        @if($plan->plan == "Gratuito")
                            <p class="plan-caracteristica-subtitle principal-font">({{$plan->quetions_per_month}}) Limites de Pregunta.</p>
                            <p class="plan-caracteristica-subtitle principal-font">({{$plan->publications_per_month}}) Limites de Publicaciones.</p>
                            <p class="plan-caracteristica-subtitle principal-font">({{$plan->featured_posts_per_month}}) Publicacion Destacada</p>
                        @elseif($plan->plan === "Inicial")
                            <p class="plan-caracteristica-subtitle principal-font">Sin Limites de Pregunta.</p>
                            <p class="plan-caracteristica-subtitle principal-font">Sin Limites de Publicaciones.</p>
                            <p class="plan-caracteristica-subtitle principal-font">({{$plan->featured_posts_per_month}}) Publicacion Destacada</p>
                        @elseif($plan->plan === "Profesional")
                            <p class="plan-caracteristica-subtitle principal-font">Sin Limites de Pregunta.</p>
                            <p class="plan-caracteristica-subtitle principal-font">Sin Limites de Publicaciones.</p>
                            <p class="plan-caracteristica-subtitle principal-font">({{$plan->featured_posts_per_month}}) Publicacion Destacada</p>
                        @endif
                        
                        
                    </div>
                </div>
                <div class="plan-pago">
                    <div class="plan-pago-acciones">
                        <h4 class="plan-acciones-title plan-title-1 principal-font">Pago:</h4>
                        <span onclick="window.location='/planes'" style="cursor: pointer"  class="plan-acciones-title principal-font">Editar</span>
                    </div>

                    <div class="plan-pago-modo-main">
                        <div class="plan-pago-modo">
                            <p class="plan-pago-title principal-font">Con tarjetas</p>
                            <div class="pago-modo-icons">
                                <svg width="30" height="22" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="32" rx="4.24421" fill="#224DBA"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6179 20.8227H13.9809L12.0034 13.1427C11.9096 12.7894 11.7103 12.4771 11.4171 12.3299C10.6856 11.96 9.87943 11.6656 9 11.5171V11.2214H13.248C13.8343 11.2214 14.274 11.6656 14.3473 12.1814L15.3733 17.7213L18.009 11.2214H20.5727L16.6179 20.8227ZM22.0384 20.8227H19.548L21.5987 11.2214H24.0891L22.0384 20.8227ZM27.3111 13.8813C27.3844 13.3642 27.8241 13.0685 28.3371 13.0685C29.1433 12.9942 30.0214 13.1427 30.7543 13.5114L31.194 11.4442C30.4611 11.1485 29.655 11 28.9234 11C26.5063 11 24.7474 12.3299 24.7474 14.1757C24.7474 15.5798 25.9933 16.3171 26.8727 16.7613C27.8241 17.2042 28.1906 17.4998 28.1173 17.9427C28.1173 18.607 27.3844 18.9027 26.6529 18.9027C25.7734 18.9027 24.894 18.6813 24.0891 18.3114L23.6494 20.3798C24.5289 20.7485 25.4803 20.897 26.3597 20.897C29.07 20.9699 30.7543 19.6413 30.7543 17.647C30.7543 15.1357 27.3111 14.9885 27.3111 13.8813ZM39.4701 20.8227L37.4927 11.2214H35.3687C34.929 11.2214 34.4893 11.5171 34.3427 11.96L30.681 20.8227H33.2447L33.7564 19.4198H36.9064L37.1996 20.8227H39.4701ZM35.7351 13.807L36.4667 17.4256H34.416L35.7351 13.807Z" fill="white"/>
                                </svg>

                                <svg width="30" height="22" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="32" rx="4.24421" fill="#007ECD"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M40.3868 21.2254H38.4113V20.2349H40.1355C40.1355 20.2349 40.7641 20.3077 40.7641 19.8942C40.7641 19.5068 39.8242 19.5369 39.8242 19.5369C39.8242 19.5369 38.2926 19.6681 38.2926 18.2558C38.2926 16.851 39.6763 16.9312 39.6763 16.9312H41.8012V17.9356H40.0909C40.0909 17.9356 39.4987 17.8183 39.4987 18.2419C39.4987 18.5969 40.3054 18.5464 40.3054 18.5464C40.3054 18.5464 41.9999 18.4231 41.9999 19.7186C41.9999 21.1072 40.9082 21.2309 40.5209 21.2309C40.4376 21.2309 40.3868 21.2254 40.3868 21.2254ZM30.5308 21.2323V16.9386H33.993V17.9356H31.6473V18.5969H33.9345V19.573H31.6473V20.3016H33.993V21.2323H30.5308ZM36.4727 21.2254H34.4967V20.2349H36.2285C36.2285 20.2349 36.8499 20.3077 36.8499 19.8942C36.8499 19.5068 35.9101 19.5369 35.9101 19.5369C35.9101 19.5369 34.3784 19.6681 34.3784 18.2558C34.3784 16.851 35.7621 16.9312 35.7621 16.9312H37.8942V17.9356H36.1772C36.1772 17.9356 35.5845 17.8183 35.5845 18.2419C35.5845 18.5969 36.3903 18.5464 36.3903 18.5464C36.3903 18.5464 38.0857 18.4231 38.0857 19.7186C38.0857 21.1072 36.9941 21.2309 36.6067 21.2309C36.5229 21.2309 36.4727 21.2254 36.4727 21.2254ZM21.5025 21.2328H20.5335L19.3566 19.9582L18.173 21.2328H17.4993H14.0438V16.9242H17.4993H18.0839L19.3566 18.2924L20.6369 16.9317H21.4882V16.9242H24.1814C24.1814 16.9242 25.5876 16.7713 25.5876 18.1895C25.5876 19.4562 25.1203 19.8497 23.6859 19.8497H22.598V21.2328H21.5025ZM20.1116 19.1156L21.4882 20.614V17.6227L20.1116 19.1156ZM15.1613 20.3012H17.4993L18.5948 19.1156L17.4993 17.936H15.1613V18.5974H17.4404V19.5735H15.1613V20.3012ZM22.598 18.7281H23.7448C24.078 18.7281 24.3519 18.5464 24.3519 18.3207C24.3519 18.0959 24.078 17.9133 23.7448 17.9133H22.598V18.7281ZM28.9028 21.2397V20.4027C28.9028 20.4027 28.8574 19.7478 28.1617 19.7478H27.0825V21.2397H25.9716V16.9386H28.6658C28.6658 16.9386 30.0716 16.7713 30.0716 18.1974C30.0716 18.9399 29.4501 19.2018 29.4501 19.2018C29.4501 19.2018 29.983 19.4493 29.983 20.1765V21.2397H28.9028ZM27.0825 18.736H28.2292C28.5624 18.736 28.8358 18.5543 28.8358 18.3286C28.8358 18.1029 28.5624 17.9212 28.2292 17.9212H27.0825V18.736ZM26.246 15.3521H27.3626V11.0371H26.246V15.3521ZM17.6473 15.3373V11.0366H21.1104V12.0405H18.7648V12.7028H21.0515V13.678H18.7648V14.4066H21.1104V15.3373H17.6473ZM15.9083 15.3377V12.3682L14.5173 15.3377H13.6072L12.2086 12.3826V15.3377H11.239H11.0911H10.0181L9.63312 14.4353H7.60589L7.21375 15.3377H6L7.84242 11.0362H9.40378L11.0911 14.9883V11.0362H12.8449L14.0658 13.7072L15.2791 11.0362H17.033V15.3377H15.9083ZM8.07942 13.336H9.15959L8.61951 12.0553L8.07942 13.336ZM37.7151 15.3377L35.9551 12.4628V15.3377H35.0003H34.8218H33.7794L33.3873 14.4353H31.3596L30.9741 15.3377H29.9529H29.768H29.2351C29.2351 15.3377 27.7413 15.1264 27.7413 13.3072C27.7413 10.9198 29.4358 11.0144 29.4942 11L30.8631 11.0362V12.0044L29.7393 12.0187C29.7393 12.0187 29.0063 12.0187 28.9167 12.9578C28.9072 13.0662 28.9019 13.1645 28.9028 13.2567C28.9072 14.7106 30.1856 14.2597 30.2277 14.2458L31.6038 11.0362H33.157L34.8218 14.9373V11.0362H36.3908L38.1298 13.8676V11.0362H39.2478V15.3377H37.7151ZM31.8331 13.336H32.9137L32.3808 12.0553L31.8331 13.336ZM24.6176 15.3377V14.5007C24.6176 14.5007 24.5736 13.8458 23.8779 13.8458H22.7977V15.3377H21.6874V11.0362H24.3811C24.3811 11.0362 25.7868 10.8688 25.7868 12.2954C25.7868 13.0379 25.1653 13.2998 25.1653 13.2998C25.1653 13.2998 25.7054 13.5473 25.7054 14.275V15.3377H24.6176ZM22.7977 12.834H23.9444C24.2777 12.834 24.5511 12.6519 24.5511 12.4261C24.5511 12.2009 24.2777 12.0187 23.9444 12.0187H22.7977V12.834Z" fill="white"/>
                                </svg>

                                <svg width="30" height="22" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="32" rx="4.24421" fill="#353A48"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.6842 22.7234C22.154 24.0396 20.169 24.8342 18 24.8342C13.1602 24.8342 9.23682 20.8782 9.23682 15.9984C9.23682 11.1185 13.1602 7.16254 18 7.16254C20.169 7.16254 22.154 7.9571 23.6842 9.2733C25.2144 7.9571 27.1994 7.16254 29.3684 7.16254C34.2082 7.16254 38.1316 11.1185 38.1316 15.9984C38.1316 20.8782 34.2082 24.8342 29.3684 24.8342C27.1994 24.8342 25.2144 24.0396 23.6842 22.7234Z" fill="#FF5E00"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.6842 22.7234C22.154 24.0396 20.169 24.8342 18 24.8342C13.1602 24.8342 9.23682 20.8782 9.23682 15.9984C9.23682 11.1185 13.1602 7.16254 18 7.16254C20.169 7.16254 22.154 7.9571 23.6842 9.2733C21.8 10.8939 20.6052 13.3055 20.6052 15.9984C20.6052 18.6912 21.8 21.1028 23.6842 22.7234Z" fill="#ED0006"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.6842 22.7234C25.2144 24.0396 27.1994 24.8342 29.3684 24.8342C34.2082 24.8342 38.1316 20.8782 38.1316 15.9984C38.1316 11.1185 34.2082 7.16254 29.3684 7.16254C27.1994 7.16254 25.2144 7.9571 23.6842 9.2733C25.5684 10.8939 26.7632 13.3055 26.7632 15.9984C26.7632 18.6912 25.5684 21.1028 23.6842 22.7234Z" fill="#F9A000"/>
                                </svg>


                            </div>
                        </div>


                        <div class="plan-pago-modo">
                            <p class="plan-pago-title principal-font">O con efectivo</p>
                            <div class="pago-modo-icons">
                                <svg width="30" height="22" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="48" height="32" rx="4.24421" fill="#FFE100"/>
                                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="12" y="4" width="24" height="24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24 28C30.6274 28 36 22.6274 36 16C36 9.37258 30.6274 4 24 4C17.3726 4 12 9.37258 12 16C12 22.6274 17.3726 28 24 28Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0)">
                                <rect x="9.59998" y="1.59998" width="28.8" height="28.8" fill="url(#pattern0)"/>
                                </g>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="scale(0.0172414)"/>
                                </pattern>
                                <image id="image0" width="58" height="58" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                </svg>

                                <svg width="30" height="22" viewBox="0 0 48 32" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="48" height="32" rx="4.24421" fill="#D0EDFB"/>
                                <rect x="8" width="32" height="32" fill="url(#pattern0)"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="scale(0.015625)"/>
                                </pattern>
                                <image id="image0" width="64" height="64" xlink:href="data:image/png;base64,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"/>
                                </defs>
                                </svg>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif  
    </div>
</div> 