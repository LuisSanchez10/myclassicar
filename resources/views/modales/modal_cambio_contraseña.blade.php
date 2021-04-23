
<style type="text/css">
	/* ----------- MODAL CONTRASEÑA ------------*/

	.modal_contraseña_perfil{
	    position: fixed;
	    visibility: hidden;
	    top: 0;
	    left: 0;
	    right: 0;
	    bottom: 0;
	    background: rgba(0, 0, 0, .5);
	    z-index: 100;
	    display: flex;
	    align-items: center;
	}

	.modal_body_contraseña_perfil{
	    background-color: #fff;
	    width: 80%;
	    margin: 0 auto;
	    padding: 2rem;
	    padding-top: 1rem;
	    border-radius: 11px;
	}

	.modal_contraseña_acciones{
		display: flex;
		justify-content: center;
	}

	.modal_contraseña_acciones button{
		margin-right: 2rem;
		border: none;
		padding: .4rem 1.5rem;
		border-radius: 4px;
		color: #fff;
		background-color: #eb5b11;
	}

	.modal_contraseña_acciones button:last-child{
		border: 1px solid black;
		color: #000000;
		font-weight: 300;
		background: transparent;
		margin: 0;
	}

	.modal_body_contraseña_perfil h2{
		color: #eb5b11;
		font-size: 1.3rem;
		font-weight: normal;
		margin-bottom: 1em;
	}

	.modal_contraseña_perfil.active{
		visibility: visible;
	}

	@media (min-width: 768px){
		.modal_body_contraseña_perfil{
			width: 70%;
		}

		.modal_body_contraseña_perfil h2{
			font-size: 1.6rem;
		}

		.modal_contraseña_acciones button{
			padding: .7rem 2.5rem;
		}
	}

	@media  (min-width: 1000px){
		.modal_body_contraseña_perfil{
			width: 40%;
		}

		.modal_contraseña_acciones button{
			padding: .9rem 3.5rem;
		}

		
	}

</style>

<div class="modal_contraseña_perfil" id="modalContraseña">
    <div class="modal_body_contraseña_perfil">
        <h2 class="text-center principal-font">¿Seguro que desea cambiar su contraseña?</h2>
        <div class="modal_contraseña_acciones">
        	<button class="principal-font" id="modal_contraseña_continuar">Continuar</button>
        	<button class="principal-font" id="modal_contraseña_cancelar">Cancelar</button>
        </div>
    </div>
</div>

<script type="text/javascript">
	const continuarContraseña = document.getElementById('modal_contraseña_continuar');
	const cancelarContraseña = document.getElementById('modal_contraseña_cancelar');

	function modalOpen(){
	  let modal = document.getElementById('modalContraseña')
	  modal.classList.add('active')
	}

	continuarContraseña.addEventListener('click', () => {
		changingPerfilPassword();
	});

	cancelarContraseña.addEventListener('click', () =>{
		document.getElementById('modalContraseña').classList.remove('active');
		cleanFormPassword();
	});


</script>