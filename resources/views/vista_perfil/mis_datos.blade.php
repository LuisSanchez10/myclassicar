<style>
/***
Imagen de perfil y boton de subir imagen
***/




.icon-2{
    font-size: .8rem;
    width: 100px;
    height: 100px;
}

.container  .btn{
    margin-left: .6rem;
    padding: .6rem 2.5rem;
    font-size: 14px;
    
    font-weight: bold;
}

.boton-subir{
    cursor: pointer;
    align-self: center;

}

.mis-datos-subir{
    position: relative;
    color: #ffff;
    background-color: #eb5b11;
}

.mis-datos-subir:hover{
    color: #ffff;
    background-color: #eb5b11;
}

.form-file{
    cursor: pointer;
    position: absolute;
    opacity: 0;
    top: 15%;
    left: 6%;
    right: 0;
    bottom: 0;
}


.form-file input[type="file"] {
    cursor: pointer;
}

/** REDES **/

.redes{
    
    font-size: .9rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    background-color: #fff;
    color: #333;
    padding: .6rem 1.2rem;
    border-radius: 7px;
    border: 1px solid #d1c9c9;
}


.social-bar{
    position: relative;
    border-radius: 6px;
    color: inherit;
    display: flex;
}

.social-bar:hover {
    text-decoration: none;
}

.social-body{
    color: #212529;
    font-family: 'Roboto Condensed', sans-serif;
    font-weight: bold;
    margin-left: 1rem;
    border-left: 1px solid #9999;
    padding-left: 1rem;
}

.facebook{
    background-color: #3B5998;
    color: #ffff;
}

.facebook .social-body{
    color: #ffff;
}


.social-subtitle{
    display: block;
    font-weight: 300;
    color: #666666;
}



.edit-perfil{
    display: none;
}

.edit-perfil.vista-on{
    display: block;
}

.social-submit{
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    position: absolute;
}

.social-vinculado{
    background-color: rgba(45, 134, 238, 0.3);
    border: 1px solid #2D86EE;
    opacity: 1;
}

.social-vinculado-icon{
    position: absolute;
    top: 50%;
    right: 6%;
    transform: translateY(-60%);
}

.logo_perfil{
    border-radius: 100px;
    width: 100px;
    height: 100px;
}

.social-subtitle-vinculada{
    color: #2D86EE;
};


</style>



<div class="edit-perfil main-datos vista-on col-12 col-md-7 col-xl-8" id="misDatos-vista">
                <div class=" name-perfil image-load mb-4">
                    <div class="icon-2 imagen-icono text-center">
                        <span>
                            @if(substr($user->imagen_logo, 0, 4) === 'http')
                                <img src="{{ $user->imagen_logo }}" class="logo_perfil" alt="">
                            @elseif($user->imagen_logo)
                                 <img src="{{ asset('perfil_logos/'. $user->imagen_logo) }}" class="logo_perfil" alt="">
                            @else
                                <svg width="64" height="64" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13 12C13 15.866 16.134 19 20 19C23.866 19 27 15.866 27 12C27 8.13401 23.866 5 20 5C16.134 5 13 8.13401 13 12ZM25 12C25 14.7614 22.7614 17 20 17C17.2386 17 15 14.7614 15 12C15 9.23858 17.2386 7 20 7C22.7614 7 25 9.23858 25 12ZM32 34H30C30 28.4772 25.5228 24 20 24C14.4772 24 10 28.4772 10 34H8C8 27.3726 13.3726 22 20 22C26.6274 22 32 27.3726 32 34Z" fill="black"/>
                                </svg>
                            @endif
                        </span>
                    </div>
                    <div class="boton-subir">
                        <button href="" class="btn mis-datos-subir">
                        Subir
                        <div>
                            <form action="/perfil/upload/img" method="POST" class="form-file" enctype="multipart/form-data">
                                <input type="file" name="perfil_image" onchange="this.form.submit();">
                                @csrf
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                            </form>
                        </div>
                        </button>
                    </div>
                </div>
                <form action="/perfil/update" method="POST" id="mis_datos_form" class="col-12" style="padding: 0;">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    <div class="row">
                        <div class="form-group col-12 col-xl-6">
                            <label><h5 class="principal-font">Nombre</h5></label>
                            <input type="text" name="name" class="w-100 input-form-perfil" value="{{ $user->name }}">
                        </div>
                        <div class="form-group col-12 col-xl-6">
                            <label><h5 class="principal-font">Email</h5></label>
                            <input type="email" name="email" class="w-100 input-form-perfil" placeholder="No incluido" value="{{ $user->email }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-xl-6">
                            <label><h5 class="principal-font">Telefono</h5></label>
                            @if($user->phone)
                                <input type="text" name="phone"  class="w-100 input-form-perfil" value="{{$user->phone}}">
                            @else
                            <input type="text" name="phone"  class="w-100 input-form-perfil" placeholder="No incluido">
                            @endif
                        </div>
                        <div class="form-group col-12 col-xl-6">
                            <label><h5 class="principal-font">Telefono Secundario</h5></label>
                            @if($user->phone)
                                <input type="text" name="phone_secondary"  class="w-100 input-form-perfil" value="{{$user->phone_secondary}}">
                            @else
                                <input type="text" name="phone_secondary"  class="w-100 input-form-perfil" placeholder="No incluido">
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label><h5 class="principal-font">Ubicación</h5></label>
                            <select name="ubicacion" id="" class="w-100 input-form-perfil">
                                @if($user->ubication)
                                    <option value=""> {{$user->ubication->ubication}} </option>
                                @else
                                    <option value=""> Seleccionar </option>
                                @endif
                                @foreach($ubicaciones as $ubicacion)
                                    <option value="{{$ubicacion->id}}"> {{$ubicacion->ubication}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Guardar" class="btn mis-datos-subir btn-guardar col-6 col-sm-4 col-xl-3 ml-auto" style="display: none;">
                    </div>
                </form>     


                    <!-- REDES SOCIALES -->
                  <div class="row">
                    <h4 class="my-3 col-12 principal-font">Redes</h4>
                    <form  action="/verification/google" method="POST" class="form-group col-12 col-xl-6">
                        @csrf
                        <label><h5 class="principal-font">Google</h5></label>
                        <div class="w-100 input-form-perfil social-bar ">
                            <div class="google-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask0)">
                                    <path d="M2.16284 17.3182V6.68182L9.27912 12L2.16284 17.3182Z" fill="#FBBC05"/>
                                    </g>
                                    <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask1)">
                                    <path d="M2.16284 6.68182L9.27912 12L12.2094 9.50455L22.2559 7.9091V2.18182H2.16284V6.68182Z" fill="#EA4335"/>
                                    </g>
                                    <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask2)">
                                    <path d="M2.16284 17.3182L14.721 7.9091L18.028 8.31819L22.2559 2.18182V21.8182H2.16284V17.3182Z" fill="#34A853"/>
                                    </g>
                                    <mask id="mask3" mask-type="alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="18" height="18">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7907 10.3636H12.2093V13.8409H17.1488C16.6884 16.05 14.7628 17.3182 12.2093 17.3182C9.19535 17.3182 6.76744 14.9455 6.76744 12C6.76744 9.05455 9.19535 6.68182 12.2093 6.68182C13.507 6.68182 14.6791 7.13182 15.6 7.86818L18.2791 5.25C16.6465 3.85909 14.5535 3 12.2093 3C7.10233 3 3 7.00909 3 12C3 16.9909 7.10233 21 12.2093 21C16.814 21 21 17.7273 21 12C21 11.4682 20.9163 10.8955 20.7907 10.3636Z" fill="white"/>
                                    </mask>
                                    <g mask="url(#mask3)">
                                    <path d="M22.2559 21.8182L9.27915 12L7.60474 10.7727L22.2559 6.68182V21.8182Z" fill="#4285F4"/>
                                    </g>
                                    </svg>
                                    
                            </div>
                            <div class="social-body">
                                Continuar con google
                            </div>
                            <input type="hidden" name="user_id" value={{ auth()->user()->id }}>
                            <input type="hidden" name="google_active" value="1">
                            
                            @if($user->google_sesion)
                                <div class="social-submit social-vinculado">
                                </div>
                                <div class="social-vinculado-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5 10C19.5 15.2467 15.2467 19.5 10 19.5C4.75329 19.5 0.5 15.2467 0.5 10C0.5 4.75329 4.75329 0.5 10 0.5C15.2467 0.5 19.5 4.75329 19.5 10Z" fill="#2D86EE" fill-opacity="0.3" stroke="#2D86EE"/>
                                    <path d="M5 11L8 14L15 7" stroke="#2D86EE"/>
                                    </svg>
                                </div>
                            @else
                                <input type="submit" class="social-submit" value="test">
                            @endif
                        </div>
                        @if(auth()->user()->google_sesion)
                            <a href="#" class="social-subtitle social-subtitle-vinculada principal-font my-3">Desvincular</a>
                        @else
                            <p class="social-subtitle principal-font my-3">Pulsa el boton para vincular</p>
                        @endif
                    </form>


                    <form action="/verification/facebook" method="POST" class="form-group col-12 col-xl-6">
                        @csrf
                        <label><h5 class="principal-font">Facebook</h5></label>
                        <div  class="w-100 input-form-perfil social-bar facebook">
                            <div class="google-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0053 3H3.99474C3.44536 3 3 3.44536 3 3.99474V20.0053C3 20.5546 3.44536 21 3.99474 21H12.6158V14.0526H10.2632V11.3147H12.6032V9.31579C12.6032 6.98842 14.0211 5.72211 16.0958 5.72211C16.8006 5.7242 17.5048 5.76426 18.2053 5.84211V8.27053H16.7716C15.6442 8.27053 15.4263 8.80421 15.4263 9.59053V11.3274H18.1263L17.7758 14.0526H15.4263V21H20.0053C20.5546 21 21 20.5546 21 20.0053V3.99474C21 3.44536 20.5546 3 20.0053 3Z" fill="white"/>
                                </svg>    
                            </div>
                            <div class="social-body">
                                Continuar con facebook
                            </div>
                            <input type="hidden" name="user_id" value={{ auth()->user()->id }}>
                            <input type="hidden" name="facebook_active" value="1">
                            
                            @if($user->facebook_sesion)
                                <div class="social-submit social-vinculado">
                                </div>
                                <div class="social-vinculado-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.5 10C19.5 15.2467 15.2467 19.5 10 19.5C4.75329 19.5 0.5 15.2467 0.5 10C0.5 4.75329 4.75329 0.5 10 0.5C15.2467 0.5 19.5 4.75329 19.5 10Z" fill="#2D86EE" fill-opacity="0.3" stroke="#2D86EE"/>
                                    <path d="M5 11L8 14L15 7" stroke="#2D86EE"/>
                                    </svg>
                                </div>
                            @else 
                                <input type="submit" class="social-submit">
                            @endif
                        </div>
                        @if(auth()->user()->facebook_sesion)
                            <a href="#" class="social-subtitle social-subtitle-vinculada principal-font my-3">Desvincular</a>
                        @else
                        <p class="social-subtitle principal-font my-3">Pulsa el boton para vincular</p>
                        @endif
                    </form>
                 </div>
                <script>
                    let mis_datos_perfil = document.getElementById('mis_datos_form');
                    const botton_subir = document.querySelector('.btn-guardar');
                    
                    mis_datos_perfil.addEventListener('input', () => {
                        console.log('leyendo input');
                        botton_subir.style.display = 'block';
                    });
                </script>
            </div>
