//Solo animaciones de la pagina
//se parar las animaciónes por -- 

//---------Animaciones pagina de registro--------//
function Login(){
    x.style.left="50px";
    y.style.left="450px";
    z.style.left="0px";
}

function Registrarme(){
    x.style.left="-450px";
    y.style.left="50px";
    z.style.left="120px";
}
var x = document.getElementById('Login');
var y = document.getElementById('Registrarme');
var z = document.getElementById('elegir');

function elemntoDinamico(url, elemento) {
    var request = new XMLHttpRequest();
    request.open("GET", url, false);
    request.send(null);
    elemento.innerHTML = request.responseText;
}

function IngresosUsuario() {
    elementoDinamico("igresoUsuario.jsp", document.getElementById("control1"));
}

function LoginUsuario(){
    elementoDinamico("login.jsp", document.getElementById("control2"));
}