
<style>
    /* Perfil contraseña section */



    .contraseña-info-title{
        font-size: .9rem;
    }

    .contraseña-info-subtitle{
        font-size: .8rem;
        font-weight: 300;
    }

    .boton-guardar{
        color: #ffff;
        background-color: #eb5b11;
    }

    .boton-guardar:hover{
        color: #ffff;
    }

    .edit-contraseña{
        display: none;
    }
    .edit-contraseña.vista-on{
        display: block;
    }

@media (min-width: 768px){
    .contraseña-info-title{
        font-size: 1rem;
    }

    .contraseña-info-subtitle{
        font-size: .9rem;
    }
}



</style>





<div class="edit-contraseña col-12 col-md-7 col-xl-8 mt-3" id="contraseña-vista">
    <form id="form-contraseña" action="/perfil/password/update" method="POST" class="col-12" style="padding: 0;">
        @csrf
        <div class="row">
            @if($user->password)
            <div class="form-group col-12 col-xl-6">
                <label><h5 class="principal-font">Contraseña Anterior</h5></label>
                <input type="password" id="actual_password" class="w-100 input-form-perfil" name="old_password" placeholder="Al menos 8 caracteres">
            </div>
            @endif
            <div class="form-group col-12 col-xl-6">
                <label><h5 class="principal-font">Nueva Contraseña</h5></label>
                <input type="password" id="nuevo_password" class="w-100 input-form-perfil" name="new_password" placeholder="Al menos 8 caracteres">
            </div>
        </div>
        <span id="info_password"></span>
    
        <div class="edit-contraseña-info mt-2">
            <h2 class="contraseña-info-title principal-font">Consejo de seguridad</h2>
            <p class="col-10 col-md-6 col-xl-4 p-0 mt-2 contraseña-info-subtitle principal-font">Para generar una contraseña segura  
                usa una combinación de caracteres 
                alfanuméricos (letras y números)
                además de símbolos </p>
        </div>

        <div class="row mt-4">
            <input type="button" value="Guardar" id="inputGuardarContraseña" class="btn boton-guardar"> 
        </div>
    </form>
</div>



<script type="text/javascript">

    function changingPerfilPassword(){

        if(document.getElementById('actual_password')){

            if(document.getElementById('actual_password').value  && document.getElementById('nuevo_password').value){
                document.getElementById('form-contraseña').submit();
            } else {
                document.getElementById('info_password').textContent = 'Rellene ambos campos';
                document.getElementById('modalContraseña').classList.remove('active');
            }

        } else {
            if(document.getElementById('nuevo_password').value){
                document.getElementById('form-contraseña').submit();
            } else {
               document.getElementById('info_password').textContent = 'Rellene el campo contraseña';
               
               document.getElementById('modalContraseña').classList.remove('active')
            }
        }
                
    }

    function cleanFormPassword() {
        formulario.reset();
    }

</script>