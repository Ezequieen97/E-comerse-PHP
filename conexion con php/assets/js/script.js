document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);



//Variables 
var contenedor_login_register = document.querySelector('.contenedor_login-register');
var formulario_login = document.querySelector('.formulario_login');
var formulario_register = document.querySelector('.formulario_register');
var Caja_de_atras_login = document.querySelector('.Caja_de_atras-login');
var Caja_de_atras_register = document.querySelector('.Caja_de_atras-register');


//FUNCIONES 
function anchoPage(){

    if (window.innerWidth > 850){
        Caja_de_atras_register.style.display = "block";
        Caja_de_atras_login.style.display = "block";
    }else{
        Caja_de_atras_register.style.display = "block";
        Caja_de_atras_register.style.opacity = "1";
        Caja_de_atras_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";   
    }
}

function register()
{
    if (window.innerWidth > 850){
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "25rem";
        formulario_login.style.display = "none";
        Caja_de_atras_register.style.opacity = "0";
        Caja_de_atras_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0rem";
        formulario_login.style.display = "none";
        Caja_de_atras_register.style.display = "none";
        Caja_de_atras_login.style.display = "block";
        Caja_de_atras_login.style.opacity = "1";
    }
}
function iniciarSesion(){
    if (window.innerWidth > 850){
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0.6rem";
        formulario_register.style.display = "none";
        Caja_de_atras_register.style.opacity = "1";
        Caja_de_atras_login.style.opacity = "0";
    }else{
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";
        Caja_de_atras_register.style.display = "block";
        Caja_de_atras_login.style.display = "none";
    }
}


//VALIDAR REGISTRO

