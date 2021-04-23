
<!-- Selectores Scripts -->
<script>
    const select_main = document.querySelectorAll('.select-main');
    


document.addEventListener('DOMContentLoaded', loadEvents)


function loadEvents(){


    select_main.forEach( (e) => {
        e.addEventListener('click', (e) => {
            verification(e)
        })
    })
}



if(document.querySelectorAll('.publicacion-selects')){
    const publicacion_opciones_marca = document.querySelectorAll('.marca-selects')
    const publicacion_opciones_model = document.querySelectorAll('.model-selects')

    publicacion_opciones_marca.forEach( selects => {
        selects.addEventListener('click', (e) =>{
            publicacionSelectChange(e.target)
            getFilterBrand(e.target.id)
        });
    });

    publicacion_opciones_model.forEach( selects =>{
        selects.addEventListener('click', (e) =>{
            publicacionSelectChange(e.target)
            getFilterModel(e.target.id)
        });
    });


}   


function publicacionSelectChange(opcion){
    let padre = opcion.parentNode.parentNode.parentNode;
    padre.firstElementChild.children[0].textContent = opcion.innerText;
}






function verification(e){

    if(e.target.classList.contains('select-name')){
        let options_container = e.target.parentNode.parentNode.children[1]
        return show_select_options(options_container)

    } if (e.target.parentNode.classList.contains('select-icon')) {

        let options_container = e.target.parentNode.parentNode.parentNode.children[1]
        return show_select_options(options_container)


    } if (e.target.classList.contains('select-main')) {
        let options_container = e.target.children[1]
        return show_select_options(options_container)

    } else {
        let options_container = e.target.parentNode.children[1]
        return show_select_options(options_container)
    }
}

function show_select_options(options) {
    cleaning_option_class(options)
    options.classList.toggle('active')
    
    
}


function cleaning_option_class(target){
    const options = document.querySelectorAll('.select-main-option')

    options.forEach( e => {
        if(e != target){
            e.classList.remove('active')
        }

    })
}

//Resetear nombre de selectores a default
function resetNameSelect(){
    const nameModel = document.getElementById('modelo_name')
    const nameMarca = document.getElementById('marca_name')

    nameMarca.textContent = "Marca";
    nameModel.textContent = "Modelo";
    
}

</script>