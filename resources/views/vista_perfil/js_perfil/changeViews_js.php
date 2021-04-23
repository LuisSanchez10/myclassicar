<script>
    const change = document.getElementById('datos-navbar')
    const mis_datos = document.getElementById('misDatos-vista');
    const cambios_contraseña = document.getElementById('contraseña-vista')
    const preguntas_vista = document.getElementById('preguntas-vista')
    const publicaciones = document.getElementById('publicaciones-vista')
    const plan_vista = document.getElementById('plan-vista')
    const changeMobile = document.getElementById('views-options-mobile')
    const changeOptionsMobile = document.querySelector('.views-mobile-body')





//cambios de vista en desktop
change.addEventListener('click', (e) => {
    if(e.target.innerText === 'Plan'){
        changeVistaMain(e.target)
    } else {
        if(e.target.classList.contains('datos-desktop-title')){
            changeVistaMain(e.target.parentNode)
        }else{
            changeVistaMain(e.target)
        }
    }
});


//Menu options mobile
 
if(changeMobile){
    
// cleaning menu options
    document.addEventListener('DOMContentLoaded', () => {
        removeOptionsMobile()
    });


//Opening menu
    changeMobile.addEventListener('click', (e) => {
        removeOptionsMobile()
        optionsMobileAction()
    });

    changeOptionsMobile.addEventListener('click', (e) => {
        
        // optimización del click en las opciones
        
        if(e.target.classList.contains('datos-title-perfil')){
            choosingOptionMobile(e.target.parentNode)
        } else {
             choosingOptionMobile(e.target)
        }
 
    });
}


 
 
 
 
 
                         //Change perfil views with the options navbar 


//Cambia el texto principal del navbar
function choosingOptionMobile(target){

   let text = target.children[0].innerText
   changeMobile.children[0].innerText = text;

   optionsMobileAction()
   removeOptionsMobile()
   changeVistaMainMobile(target)
}

//Add and Remove style to show the options nav
function optionsMobileAction (){
    
    let vistas_main = document.getElementById('desktop-main')
    let containerMain = document.querySelector('.form-datos-perfil')

    vistas_main.classList.toggle('down')
    changeOptionsMobile.classList.toggle('mobile-active')
    containerMain.classList.toggle('mobile-active')
}

//Oculta las opciones ya activas del navbar
function removeOptionsMobile(){
    let optionsMobile = document.querySelectorAll('.mobile-option')
    optionsMobile.forEach( elemento => {
        if(elemento.innerText === changeMobile.children[0].innerText){
            elemento.parentNode.style.display = 'none'
        }else {
            elemento.parentNode.style.display = 'block'
        }
    })
}



//cleaning all elements

function CleaningElements() {
        //removing class active of navbar option
        let active = document.querySelectorAll('.datos-desktop-title')
        let icon = document.querySelectorAll('.icono-option')
        
        active.forEach( (element) => {
            element.classList.remove('active')
        })

        if(icon){
            icon.forEach( (element) => {
                element.style.display = 'none'
            })
        }

    //Removing vista-on class of main views

    mis_datos.classList.remove('vista-on')
    cambios_contraseña.classList.remove('vista-on')
    preguntas_vista.classList.remove('vista-on')
    publicaciones.classList.remove('vista-on')
    plan_vista.classList.remove('vista-on')
}





// Funcion cambiante de la vista movil y desktop






function changeVistaMainMobile(target){
    CleaningElements()


    //adding styles to the option clicked
    switch (target.id) {
        case 'mis-datos-option':
            mis_datos.classList.add('vista-on')
            break;
         case 'mi-contraseña-option':
            cambios_contraseña.classList.add('vista-on')
            break;
         case 'mis-publicaciones-option':
            mostrarPublicaciones(); 
            publicaciones.classList.add('vista-on')
            break;
         case 'mis-preguntas-option':
            preguntas_vista.classList.add('vista-on')
            break;
         case 'mi-plan-option':
            plan_vista.classList.add('vista-on')
            break;
    
        default:
            console.log('funcionamiento aun no definido')
            break;
    }
}


                    // Version Desktop

function changeVistaMain(target){

    CleaningElements()


    //adding styles to the option clicked
    switch (target.id) {
        case 'mis-datos-option':
            document.getElementById('perfil-section').innerText = '/ Mis Datos'
            target.children[1].style.display = 'block'
            target.firstElementChild.classList.add('active')
            mis_datos.classList.add('vista-on')
            break;
         case 'mi-contraseña-option':
         document.getElementById('perfil-section').innerText = '/ Contraseña'
            target.children[1].style.display = 'block'
            target.firstElementChild.classList.add('active')
            cambios_contraseña.classList.add('vista-on')
            break;
         case 'mis-publicaciones-option':
            mostrarPublicaciones();
         document.getElementById('perfil-section').innerText = '/ Publicaciones'
            target.children[1].style.display = 'block'
            target.firstElementChild.classList.add('active') 
            publicaciones.classList.add('vista-on')
            break;
         case 'mis-preguntas-option':
            document.getElementById('perfil-section').innerText = '/ Mensajes'
            target.children[1].style.display = 'block'
            target.firstElementChild.classList.add('active')
            preguntas_vista.classList.add('vista-on')
            break;
        case 'mi-plan-option': 
            document.getElementById('perfil-section').innerText = '/ Plan'
            target.children[1].style.display = 'block'
            target.firstElementChild.classList.add('active')
            plan_vista.classList.add('vista-on')
            break
    
        default:
            console.log('funcionamiento aun no definido')
            break;
    }
}
</script>